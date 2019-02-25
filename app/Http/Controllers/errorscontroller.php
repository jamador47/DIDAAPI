<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\errors;


class errorscontroller extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    
    
    public function cambioestado($errorid,$estado)
    {
        $erroresactivos = errors::find(1);
        
        if(!empty($erroresactivos)){
              $erroresactivos->$errorid = $estado;
            $erroresactivos->save();
            
        }
        else{
            
            $errores = new errors;
            $errores->$errorid = $estado;
            $errores->save();
            
        }
        
        
    }
    
        public function mostrarestados()
    {
        $erroresactivos = errors::find(1);
        $erroresactivos = json_encode($erroresactivos);
    return $erroresactivos;
        
        
    }
    
/*Crear Nuevo Usuario Especial*/
    protected function store(validarusuarioespecial $request)
    {

        $usuario = new User (array(

          'nombre_usuario' => $request->get('nombre_usuario'),
          'identidad_usuario' => $request->get('identidad_usuario'),
          'tipo_usuario' => $request->get('tipo_usuario'),
          'estadocivil_usuario' => "",
          'profesion_usuario' => "",
          'estadocivil_usuario' => "",
          'nacionalidad_usuario' => "",
          'colonia_direccion_usuario' => "",
          'avenida_direccion_usuario' => "",
          'calle_direccion_usuario' => "",
          'casa_direccion_usuario' => "",
          'referencia_direccion_usuario' => "",
          'ciudad_direccion_usuario' => "",
          'departamento_direccion_usuario' => "",
          'municipio_direccion_usuario' => "",
          'colegiacion_usuario' => "",
          'telefono_fijo_usuario' => "",
          'telefono_movil_usuario' => "",


          'email' => $request->get('email'),
          'password' => bcrypt($request->get('password')),
          'email_token' => base64_encode($request->get('email'))


         ));

                    $usuario->save();
        
        backupsController::backupuser($usuario);

    dispatch(new SendVerificationEmail($usuario));

    return view('admin.verificationue');


        }
/*Vista de Busqueda para Cambio de Tipo de Usuario*/
        public function crearmodifue()
        {
        return view('admin.bqcambiotipousuariomodif');
        }


/*Busqueda para Cambio de Tipo de Usuario*/
        public function busquedaxcorreousuario(busquedaxcorreousuariorequest $request)
            {

              $correo = $request->get('email');

              $tramitesrevisar = \DB::table('users')
                                    ->where('email','=',$correo)
                                    ->whereIn('tipo_usuario', array('comisionado', 'jefelegal', 'revisorlegal', 'revisorsac', 'jefesac', 'jefedm', 'revisordm', 'revisorventanilla'))
                                    ->orderBy('id', 'desc')->get();

              if (empty($tramitesrevisar[0])){

                return view('admin.tramitenoexistemodif');


              }
              else{
                return view('admin.cambiartipousuario', ['tramitesrevisar'=>$tramitesrevisar]);

              }

                            }

/*Guardar Cambio de Tipo de Usuario*/
          public function cambiartipoue(cambiartipouerequest $request)
          {

          $id = $request->get('id');
          $nuevo = $request->get('nuevo_tipousuario');


            $usuario = User::find($id);
                            $usuario->tipo_usuario= $nuevo;
                            $usuario->save();

                            $usuariobackup = new Userbackup;
                            $usuariobackup = $usuario;
                            $usuariobackup->save();

         return view('admin.tipousuariomodificado');


          }


/*Vista de Busqueda de Usuario a Eliminar*/
            public function deleteue()
            {
            return view('admin.bqeliminarusuario');
            }



/*Busqueda para buscar usuario a eliminar*/

          public function busquedaxcorreousuariodelete(busquedaxcorreousuariodeleterequest $request)
              {

                $correo = $request->get('email');

                /*Licencia*/

                $tramitesrevisar = \DB::table('users')
                                      ->where('email','=',$correo)
                                      ->whereIn('tipo_usuario', array('comisionado', 'jefelegal', 'revisorlegal', 'revisorsac', 'jefesac', 'jefedm', 'revisordm', 'revisorventanilla'))
                                      ->orderBy('id', 'desc')->get();

                if (empty($tramitesrevisar[0])){

                  return view('admin.tramitenoexistedelete');


                }
                else{
                  return view('admin.eliminarusuario', ['tramitesrevisar'=>$tramitesrevisar]);

                }


    }


/*Función eliminar usuario*/
                public function eliminarue(eliminarusuariorequest $request)
                {

                $id = $request->get('id');

                  $usuario = User::find($id);
                                  $usuario->delete();

                                  $usuariobackup = new Userbackup;
                                  $usuariobackup = $usuario;
                                  $usuariobackup->delete();


                  return view('admin.usuarioeliminado');


                }

}
