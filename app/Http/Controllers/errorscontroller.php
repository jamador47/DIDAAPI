<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\errors;
use GuzzleHttp\Client;

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
        

        preg_match_all('!\d+!', $errorid, $matches);
        
        //
        $tipoerror = $errorid[0];
        
        $numerror = (int)$matches[0][0];
        
        
        var_dump($errorid. "= ".$estado);
        
        
        
// Procesos de emergencia
        
/*-- Plantilla para nuevos errores urgentes -- 

if($errorid == "" && $estado == ){
 $pg = file_get_contents('http://URL');
        
    }
    
 -------------------------------   */
        
        
        
        
        
        
// Guardar en la Base de datos
   
        $erroresactivos = errors::find(1);
        // En caso de que no sea el primer error 
        if(!empty($erroresactivos)){
            
            
            switch ( $tipoerror){
                     
                 case "I":
                     $inputs = $erroresactivos->I;
                     $inputs[$numerror] = $estado;
                    $erroresactivos->I = $inputs;
            $erroresactivos->save();     
                     
                     break;
                 case "O":
                    $outputs = $erroresactivos->O;
                     $outputs[$numerror] = $estado;  
                         $erroresactivos->O = $outputs;
            $erroresactivos->save();  
                     
                     break;
             }
            
            
            
        }
        
        //Si es el primer error
        else{   
            
        $inputs = [];
        $outputs = [];
            
            for($i = 0; $i<=345; $i++)
            {        
                $outputs[$i]= "-" ;       
                
            }
            
            for($i = 1; $i<=436; $i++)
            {        
                $inputs[$i]= "-"  ;   
                
            }
            $errores = new errors;
            
             switch ( $tipoerror){
                     
                 case "I":
                     
                     $inputs[$numerror] = $estado;
                $errores->I = $inputs;
                $errores->O = $outputs;
            $errores->save();     
                     
                     break;
                 case "O":
                     
                     $outputs[$numerror] = $estado; 
                     $errores->O =$outputs;
                     $errores->I = $inputs;
            $errores->save();  
                     
                     break;
             }
            

        }
        
        
        
        
    }
    
    
    
    
        public function mostrarestados()
    {
        $erroresactivos = errors::find(1);
        $erroresactivos = $erroresactivos;
    return $erroresactivos;
        
        
    }
    
}
