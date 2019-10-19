<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\sigherramienta;
use App\origenesuto;

use WebSocket\Client;

class sigherramientacontroller extends Controller
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
    
    
        public function update($sigherr)
    {
        $linea = sigherramienta::find(1);
       
        if ($linea != NULL){
            $linea->sigherramienta = $sigherr;
            $linea->save();
        }
        else{
            
            $linea = new sigherramienta;
            
            $linea->sigherramienta = $sigherr;
            $linea->save();
           
            

        }

    }



    public function geteljson()
    {
        $linea = sigherramienta::find(1);
        return $linea;

    }

   
  
            //Codigo para mandar pause al tinyG.
 /*           
$client = new Client("ws://localhost:8989/ws");
$client->send("send /dev/ttyUSB0 !");   
var_dump($client->receive());
            */    
  
    
}
