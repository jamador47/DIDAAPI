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
                $h->save();
            }

        }

    }

    public function actualizartabla($pocket, $herramienta, $longitud, $diametro)
    {
        $herramientas = \DB::table('herramientas')->where('pocket', $pocket )->first();
        $h = herramientas::find($herramientas->id);
        $h->pocket = $pocket;
        $h->herramienta = $herramienta;
        $h->longitud = $longitud;
        $h->diametro = $diametro;
        $h->save();
    }



        // CAMBIO EN EL MODO SEGUIR HERRAMIENTA
    public function cambioherramientamodoH(){
    // CAMBIAR DATOS COMPLETOS DE POCKET DE LA HERRAMIENTA EN HUSILLO Y LA HERRAMIENTA listacambio. 
    $herramientalistocambio = \DB::table('herramientas')->where('listocambio', 1 )->first();
    $herramientahusillo = \DB::table('herramientas')->where('enhusillo', 1 )->first();
    
    $hlistocambio =  herramientas::find($herramientalistocambio->id);
    $hhusillo = herramientas::find($herramientahusillo->id);
    $hlistocambio->herramienta = $herramientahusillo->herramienta;
    $hlistocambio->longitud = $herramientahusillo->longitud;
    $hlistocambio->diametro = $herramientahusillo->diametro;
    $hlistocambio->enhusillo = 1;
    $hlistocambio->listocambio = 0;
    $hhusillo->herramienta = $herramientalistocambio->herramienta;
    $hhusillo->longitud = $herramientalistocambio->longitud;
    $hhusillo->diametro = $herramientalistocambio->diametro;
    $hhusillo->enhusillo = 0;
    $hhusillo->listocambio = 1;
    $hlistocambio->save();
    $hhusillo->save();
    }

        // CAMBIO EN EL MODO POCKET
    public function ponerherramientamodoP(){
        $herramientalistocambio = \DB::table('herramientas')->where('listocambio', 1 )->first();
        $hlistocambio =  herramientas::find($herramientalistocambio->id);
        $hlistocambio->enhusillo = 1;
        $hlistocambio->listocambio = 0;
        $hlistocambio->save();

    }
    public function quitarherramientamodoP(){
        $herramientalistocambio = \DB::table('herramientas')->where('enhusillo', 1 )->first();
        $hlistocambio =  herramientas::find($herramientalistocambio->id);
        $hlistocambio->enhusillo = 0;
        $hlistocambio->listocambio = 1;
        $hlistocambio->save();
    }

    /* 
    - AL estar en modo pocket se debe de rastrear la herramienta 0 (vacia), ya que antes de hacer el cambio de herramienta pedido se debe de hacer un cambio de herramienta en la herramienta 0.
     



    */
    public function actualizarhusillo($modo, $pocket, $herramienta,$enhusillo)
    {
        if ($modo = "P"){
        $herramientas = \DB::table('herramientas')->where('pocket', $pocket )->first();
        }
        else{
        $herramientas = \DB::table('herramientas')->where('herramienta', $herramienta )->first();
        }

        $h = herramientas::find($herramientas->id);
        $h->enhusillo = $enhusillo;
        $h->save();
    }


    public function actualizarlistocambio($modo, $pocket, $herramienta, $listocambio)
    {
        if ($modo = "P"){
        $herramientas = \DB::table('herramientas')->where('pocket', $pocket )->first();
        }
        else{
        $herramientas = \DB::table('herramientas')->where('herramienta', $herramienta )->first();
        }

        $h = herramientas::find($herramientas->id);
        $h->listocambio = $listocambio;
        $h->save();
    }
            //Codigo para mandar pause al tinyG.
 /*           
$client = new Client("ws://localhost:8989/ws");
$client->send("send /dev/ttyUSB0 !");   
var_dump($client->receive());
            */    
  
    
}
