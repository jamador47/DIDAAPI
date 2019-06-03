<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\posicionadores;


use WebSocket\Client;

class posicionadorescontroller extends Controller
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
    
    
        public function update($a1f1,$a1f2,$a1l1,$a2f1,$a2f2,$a2l1,$a2l2,$y1f1,$y1f2,$y1l1,$y2f1,$y2f2,$y2l1,$y2l2)
    {
        $posicionadores = posicionadores::find(1);
        if ($posicionadores != NULL){
            $posicionadores->a1f1 = ($a1f1 === 'true');
            $posicionadores->a1f2 = ($a1f2 === 'true');
            $posicionadores->a1l1 = ($a1l1 === 'true');
            $posicionadores->a2f1 = ($a2f1 === 'true');
            $posicionadores->a2f2 = ($a2f2 === 'true');
            $posicionadores->a2l1 = ($a2l1 === 'true');
            $posicionadores->a2l2 = ($a2l2 === 'true');
            $posicionadores->y1f1 = ($y1f1 === 'true');
            $posicionadores->y1f2 = ($y1f2 === 'true');
            $posicionadores->y1l1 = ($y1l1 === 'true');
            $posicionadores->y2f1 = ($y2f1 === 'true');
            $posicionadores->y2f2 = ($y2f2 === 'true');
            $posicionadores->y2l1 = ($y2l1 === 'true');
            $posicionadores->y2l2 = ($y2l2 === 'true');
            $posicionadores->save();
        }
        else{
            
                $p = new posicionadores;
                $p->a1f1 = ($a1f1 === 'true');
                $p->a1f2 = ($a1f2 === 'true');
                $p->a1l1 = ($a1l1 === 'true');
                $p->a2f1 = ($a2f1 === 'true');
                $p->a2f2 = ($a2f2 === 'true');
                $p->a2l1 = ($a2l1 === 'true');
                $p->a2l2 = ($a2l2 === 'true');
                $p->y1f1 = ($y1f1 === 'true');
                $p->y1f2 = ($y1f2 === 'true');
                $p->y1l1 = ($y1l1 === 'true');
                $p->y2f1 = ($y2f1 === 'true');
                $p->y2f2 = ($y2f2 === 'true');
                $p->y2l1 = ($y2l1 === 'true');
                $p->y2l2 = ($y2l2 === 'true');
                $p->save();
            

        }

    }



    public function getjson()
    {
        $posicionadores = posicionadores::find(1);
        return $posicionadores;

    }

  
            //Codigo para mandar pause al tinyG.
 /*           
$client = new Client("ws://localhost:8989/ws");
$client->send("send /dev/ttyUSB0 !");   
var_dump($client->receive());
            */    
  
    
}
