<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\herramientas;


use WebSocket\Client;

class herramientascontroller extends Controller
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
    
    
        public function creartablas()
    {
        $herramientas = \DB::table('herramientas')->first();

        if ($herramientas != NULL){
   
        }
        else{
            for ($i=1; $i<=18; $i++){
                $h = new herramientas;
                $h->pocket = $i;
                $h->herramienta = $i;
                $h->longitud = 0;
                $h->diametro = 0;
                $h->enhusillo = 0;
                $h->listocambio = 0;
                $h->modoh = 0;
                $h->save();
            }

        }

    }


    public function getjson(){
        $herramientas = \DB::table('herramientas')->get();
        return $herramientas;


    }

    public function actualizartabla($h1, $l1, $d1,$h2, $l2, $d2,$h3, $l3, $d3,$h4, $l4, $d4,
    $h5, $l5, $d5, $h6, $l6, $d6, $h7, $l7, $d7,$h8, $l8, $d8, $h9, $l9, $d9,$h10, $l10, $d10,
    $h11, $l11, $d11, $h12, $l12, $d12, $h13, $l13, $d13, $h14, $l14, $d14, $h15, $l15, $d15,
    $h16, $l16, $d16, $h17, $l17, $d17, $h18, $l18, $d18, $modoh)
    {

        $modoh = ($modoh === 'true');
        $h = herramientas::find(1);
        $h->herramienta = $h1;
        $h->longitud = $l1;
        $h->diametro = $d1;
        $h->modoh = $modoh;
        $h->save();
        $h = herramientas::find(2);
        $h->herramienta = $h2;
        $h->longitud = $l2;
        $h->diametro = $d2;
        $h->save();
        $h = herramientas::find(3);
        $h->herramienta = $h3;
        $h->longitud = $l3;
        $h->diametro = $d3;
        $h->save();
        $h = herramientas::find(4);
        $h->herramienta = $h4;
        $h->longitud = $l4;
        $h->diametro = $d4;
        $h->save();
        $h = herramientas::find(5);
        $h->herramienta = $h5;
        $h->longitud = $l5;
        $h->diametro = $d5;
        $h->save();
        $h = herramientas::find(6);
        $h->herramienta = $h6;
        $h->longitud = $l6;
        $h->diametro = $d6;
        $h->save();
         $h = herramientas::find(7);
        $h->herramienta = $h7;
        $h->longitud = $l7;
        $h->diametro = $d7;
        $h->save();
        $h = herramientas::find(8);
        $h->herramienta = $h8;
        $h->longitud = $l8;
        $h->diametro = $d8;
        $h->save();
        $h = herramientas::find(9);
        $h->herramienta = $h9;
        $h->longitud = $l9;
        $h->diametro = $d9;
        $h->save();
        $h = herramientas::find(10);
        $h->herramienta = $h10;
        $h->longitud = $l10;
        $h->diametro = $d10;
        $h->save();
        $h = herramientas::find(11);
        $h->herramienta = $h11;
        $h->longitud = $l11;
        $h->diametro = $d11;
        $h->save();
        $h = herramientas::find(12);
        $h->herramienta = $h12;
        $h->longitud = $l12;
        $h->diametro = $d12;
        $h->save();
        $h = herramientas::find(13);
        $h->herramienta = $h13;
        $h->longitud = $l13;
        $h->diametro = $d13;
        $h->save();
        $h = herramientas::find(14);
        $h->herramienta = $h14;
        $h->longitud = $l14;
        $h->diametro = $d14;
        $h->save();
        $h = herramientas::find(15);
        $h->herramienta = $h15;
        $h->longitud = $l15;
        $h->diametro = $d15;
        $h->save();
        $h = herramientas::find(16);
        $h->herramienta = $h16;
        $h->longitud = $l16;
        $h->diametro = $d16;
        $h->save();
        $h = herramientas::find(17);
        $h->herramienta = $h17;
        $h->longitud = $l17;
        $h->diametro = $d17;
        $h->save();
        $h = herramientas::find(18);
        $h->herramienta = $h18;
        $h->longitud = $l18;
        $h->diametro = $d18;
        $h->save();

    }



        // CAMBIO EN EL MODO SEGUIR HERRAMIENTA
    public function cambioherramientabrazomodoH($herr){
    // CAMBIAR DATOS COMPLETOS DE POCKET DE LA HERRAMIENTA EN HUSILLO Y LA HERRAMIENTA listacambio. 
            $herramientalistocambio = \DB::table('herramientas')->where('pocket', $herr )->first();
            
            $herramientahusillo = \DB::table('herramientas')->where('enhusillo', 1 )->first();

            if ($herramientahusillo == NULL){
                $hlistocambio =  herramientas::find($herramientalistocambio->id);

                $hlistocambio->enhusillo = 1;
                $hlistocambio->listocambio = 1;
                $hlistocambio->save();
            }else{
            $hlistocambio =  herramientas::find($herramientalistocambio->id);
            $hhusillo = herramientas::find($herramientahusillo->id);
            
            $hlistocambio->herramienta = $herramientahusillo->herramienta;
            $hlistocambio->longitud = $herramientahusillo->longitud;
            $hlistocambio->diametro = $herramientahusillo->diametro;
          
            $hlistocambio->listocambio = 0;
            $hhusillo->herramienta = $herramientalistocambio->herramienta;
            $hhusillo->longitud = $herramientalistocambio->longitud;
            $hhusillo->diametro = $herramientalistocambio->diametro;
          
            $hhusillo->listocambio = 1;
            $hlistocambio->save();
            $hhusillo->save();
            }
        }

            // CAMBIO EN EL MODO POCKET
        public function cambioherramientabrazomodoP(){

            $herramientaenhusillo = \DB::table('herramientas')->where('enhusillo', 1 )->first();

            if ($herramientaenhusillo != NULL){
            $hlistocambio =  herramientas::find($herramientaenhusillo->id);
            $hlistocambio->enhusillo = 0;
            $hlistocambio->listocambio = 1;
            $hlistocambio->save();
            }
            else{
            $herramientalistocambio = \DB::table('herramientas')->where('listocambio', 1 )->first();
            $hlistocambio =  herramientas::find($herramientalistocambio->id);
            $hlistocambio->enhusillo = 1;
            $hlistocambio->listocambio = 1;
            $hlistocambio->save();
        }

        }
        public function cambioherramientarotacion($nuevatool){

            $herramientalistocambio = \DB::table('herramientas')->where('listocambio', 1 )->first();
            $hlistocambio =  herramientas::find($herramientalistocambio->id);
            $hlistocambio->listocambio = 0;
            $hlistocambio->save();


            $modo = herramientas::find(1);

         
                $herramientas = \DB::table('herramientas')->where('pocket', $nuevatool )->first();
    
            

            $hlistocambio =  herramientas::find($herramientas->id);
            $hlistocambio->listocambio = 1;
            $hlistocambio->save();


        }

        
   
   


    /* 
    - AL estar en modo pocket se debe de rastrear la herramienta 0 (vacia), ya que antes de hacer el cambio de herramienta pedido se debe de hacer un cambio de herramienta en la herramienta 0.
     



    */


    /*
    public function actualizarhusillo($item ,$enhusillo)
    {


        $modo = herramientas::find(1);

        if ($modo->modoh){
            $herramientas = \DB::table('herramientas')->where('herramienta', $item )->first();
        }
        else{
            $herramientas = \DB::table('herramientas')->where('pocket', $item )->first();

        }

        $h = herramientas::find($herramientas->id);
        $h->enhusillo = $enhusillo;
        $h->save();
    }


   
            //Codigo para mandar pause al tinyG.
 /*           
$client = new Client("ws://localhost:8989/ws");
$client->send("send /dev/ttyUSB0 !");   
var_dump($client->receive());
            */    

    
}
