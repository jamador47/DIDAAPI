<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\origenes;


use WebSocket\Client;

class origenescontroller extends Controller
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
    
    
        public function update($x1,$y1,$a1,$z1,$x2,$y2,$a2,$z2,$x3,$y3,$a3,$z3,$x4,$y4,$a4,$z4,$x5,$y5,$a5,$z5,
        $x6,$y6,$a6,$z6,$x7,$y7,$a7,$z7,$x8,$y8,$a8,$z8,$x9,$y9,$a9,$z9,$x10,$y10,$a10,$z10,$x11,$y11,$a11,$z11,
        $x12,$y12,$a12,$z12,$x13,$y13,$a13,$z13,$x14,$y14,$a14,$z14,$x15,$y15,$a15,$z15,$x16,$y16,$a16,$z16)
    {
        $origenes = origenes::find(1);
        if ($origenes != NULL){
            $origenes->x1=$x1;
            $origenes->y1=$y1;
            $origenes->a1=$a1;
            $origenes->z1=$z1;
            $origenes->x2=$x2;
            $origenes->y2=$y2;
            $origenes->a2=$a2;
            $origenes->z2=$z2;
            $origenes->x3=$x3;
            $origenes->y3=$y3;
            $origenes->a3=$a3;
            $origenes->z3=$z3;
            $origenes->x4=$x4;
            $origenes->y4=$y4;
            $origenes->a4=$a4;
            $origenes->z4=$z4;
            $origenes->x5=$x5;
            $origenes->y5=$y5;
            $origenes->a5=$a5;
            $origenes->z5=$z5;
            $origenes->x6=$x6;
            $origenes->y6=$y6;
            $origenes->a6=$a6;
            $origenes->z6=$z6;
            $origenes->x7=$x7;
            $origenes->y7=$y7;
            $origenes->a7=$a7;
            $origenes->z7=$z7;
            $origenes->x8=$x8;
            $origenes->y8=$y8;
            $origenes->a8=$a8;
            $origenes->z8=$z8;
            $origenes->x9=$x9;
            $origenes->y9=$y9;
            $origenes->a9=$a9;
            $origenes->z9=$z9;
            $origenes->x10=$x10;
            $origenes->y10=$y10;
            $origenes->a10=$a10;
            $origenes->z10=$z10;
            $origenes->x11=$x11;
            $origenes->y11=$y11;
            $origenes->a11=$a11;
            $origenes->z11=$z11;
            $origenes->x12=$x12;
            $origenes->y12=$y12;
            $origenes->a12=$a12;
            $origenes->z12=$z12;
            $origenes->x13=$x13;
            $origenes->y13=$y13;
            $origenes->a13=$a13;
            $origenes->z13=$z13;
            $origenes->x14=$x14;
            $origenes->y14=$y14;
            $origenes->a14=$a14;
            $origenes->z14=$z14;
            $origenes->x15=$x15;
            $origenes->y15=$y15;
            $origenes->a15=$a15;
            $origenes->z15=$z15;
            $origenes->x16=$x16;
            $origenes->y16=$y16;
            $origenes->a16=$a16;
            $origenes->z16=$z16;

                    
            
            $origenes->save();
        }
        else{
            
            $origenes = new origenes;
            $origenes->x1=$x1;
            $origenes->y1=$y1;
            $origenes->a1=$a1;
            $origenes->z1=$z1;
            $origenes->x2=$x2;
            $origenes->y2=$y2;
            $origenes->a2=$a2;
            $origenes->z2=$z2;
            $origenes->x3=$x3;
            $origenes->y3=$y3;
            $origenes->a3=$a3;
            $origenes->z3=$z3;
            $origenes->x4=$x4;
            $origenes->y4=$y4;
            $origenes->a4=$a4;
            $origenes->z4=$z4;
            $origenes->x5=$x5;
            $origenes->y5=$y5;
            $origenes->a5=$a5;
            $origenes->z5=$z5;
            $origenes->x6=$x6;
            $origenes->y6=$y6;
            $origenes->a6=$a6;
            $origenes->z6=$z6;
            $origenes->x7=$x7;
            $origenes->y7=$y7;
            $origenes->a7=$a7;
            $origenes->z7=$z7;
            $origenes->x8=$x8;
            $origenes->y8=$y8;
            $origenes->a8=$a8;
            $origenes->z8=$z8;
            $origenes->x9=$x9;
            $origenes->y9=$y9;
            $origenes->a9=$a9;
            $origenes->z9=$z9;
            $origenes->x10=$x10;
            $origenes->y10=$y10;
            $origenes->a10=$a10;
            $origenes->z10=$z10;
            $origenes->x11=$x11;
            $origenes->y11=$y11;
            $origenes->a11=$a11;
            $origenes->z11=$z11;
            $origenes->x12=$x12;
            $origenes->y12=$y12;
            $origenes->a12=$a12;
            $origenes->z12=$z12;
            $origenes->x13=$x13;
            $origenes->y13=$y13;
            $origenes->a13=$a13;
            $origenes->z13=$z13;
            $origenes->x14=$x14;
            $origenes->y14=$y14;
            $origenes->a14=$a14;
            $origenes->z14=$z14;
            $origenes->x15=$x15;
            $origenes->y15=$y15;
            $origenes->a15=$a15;
            $origenes->z15=$z15;
            $origenes->x16=$x16;
            $origenes->y16=$y16;
            $origenes->a16=$a16;
            $origenes->z16=$z16;
            $origenes->xactivo=0;
            $origenes->yactivo=0;
            $origenes->aactivo=0;
            $origenes->zactivo=0;
            $origenes->coordactivas=0;
           
                $origenes->save();
            

        }

    }



    public function getjson()
    {
        $origenes = origenes::find(1);
        return $origenes;

    }


    public function UTO($coord,$x1,$y1,$a1,$z1)
    {
        $origenes = origenes::find(1);


        switch ($coord){

            case "1":
            $xactivo = $origenes->x1;
            $yactivo = $origenes->y1;
            $zactivo = $origenes->z1;
            $aactivo = $origenes->a1;
   

            $xactivo = intval($xactivo) + intval($x1);
            $yactivo = intval($yactivo) + intval($y1);
            $aactivo = intval($aactivo) + intval($a1);
            $zactivo = intval($zactivo) + intval($z1);
            $origenes->xactivo = $xactivo;
            $origenes->yactivo = $yactivo;
            $origenes->aactivo = $aactivo;
            $origenes->zactivo = $zactivo;
            $origenes->save();

            break;
            
            
            case "2":
            $xactivo = $origenes->x2;
            $yactivo = $origenes->y2;
            $zactivo = $origenes->z2;
            $aactivo = $origenes->a2;
            $xactivo = intval($xactivo) + intval($x1);
            $yactivo = intval($yactivo) + intval($y1);
            $aactivo = intval($aactivo) + intval($a1);
            $zactivo = intval($zactivo) + intval($z1);
            $origenes->xactivo = $xactivo;
            $origenes->yactivo = $yactivo;
            $origenes->aactivo = $aactivo;
            $origenes->zactivo = $zactivo;
            $origenes->save();

            
            break;
            
            case "3":
            
            $xactivo = $origenes->x3;
            $yactivo = $origenes->y3;
            $zactivo = $origenes->z3;
            $aactivo = $origenes->a3;
            $xactivo = intval($xactivo) + intval($x1);
            $yactivo = intval($yactivo) + intval($y1);
            $aactivo = intval($aactivo) + intval($a1);
            $zactivo = intval($zactivo) + intval($z1);
            $origenes->xactivo = $xactivo;
            $origenes->yactivo = $yactivo;
            $origenes->aactivo = $aactivo;
            $origenes->zactivo = $zactivo;
            $origenes->save();

            break;
            
            case "4":
            $xactivo = $origenes->x4;
            $yactivo = $origenes->y4;
            $zactivo = $origenes->z4;
            $aactivo = $origenes->a4;
   
            $xactivo = intval($xactivo) + intval($x1);
            $yactivo = intval($yactivo) + intval($y1);
            $aactivo = intval($aactivo) + intval($a1);
            $zactivo = intval($zactivo) + intval($z1);
            $origenes->xactivo = $xactivo;
            $origenes->yactivo = $yactivo;
            $origenes->aactivo = $aactivo;
            $origenes->zactivo = $zactivo;
            $origenes->save();

            break;
            
            case "5":
            $xactivo = $origenes->x5;
            $yactivo = $origenes->y5;
            $zactivo = $origenes->z5;
            $aactivo = $origenes->a5;
            $xactivo = intval($xactivo) + intval($x1);
            $yactivo = intval($yactivo) + intval($y1);
            $aactivo = intval($aactivo) + intval($a1);
            $zactivo = intval($zactivo) + intval($z1);
            $origenes->xactivo = $xactivo;
            $origenes->yactivo = $yactivo;
            $origenes->aactivo = $aactivo;
            $origenes->zactivo = $zactivo;
            $origenes->save();

            
            break;
            
            case "6":
            
            $xactivo = $origenes->x6;
            $yactivo = $origenes->y6;
            $zactivo = $origenes->z6;
            $aactivo = $origenes->a6;
            $xactivo = intval($xactivo) + intval($x1);
            $yactivo = intval($yactivo) + intval($y1);
            $aactivo = intval($aactivo) + intval($a1);
            $zactivo = intval($zactivo) + intval($z1);
            $origenes->xactivo = $xactivo;
            $origenes->yactivo = $yactivo;
            $origenes->aactivo = $aactivo;
            $origenes->zactivo = $zactivo;
            $origenes->save();

            break;
            
            case "7":
            
            $xactivo = $origenes->x7;
            $yactivo = $origenes->y7;
            $zactivo = $origenes->z7;
            $aactivo = $origenes->a7;
            $xactivo = intval($xactivo) + intval($x1);
            $yactivo = intval($yactivo) + intval($y1);
            $aactivo = intval($aactivo) + intval($a1);
            $zactivo = intval($zactivo) + intval($z1);
            $origenes->xactivo = $xactivo;
            $origenes->yactivo = $yactivo;
            $origenes->aactivo = $aactivo;
            $origenes->zactivo = $zactivo;
            $origenes->save();

            break;
            
            case "8":
            $xactivo = $origenes->x8;
            $yactivo = $origenes->y8;
            $zactivo = $origenes->z8;
            $aactivo = $origenes->a8;
        
            $xactivo = intval($xactivo) + intval($x1);
            $yactivo = intval($yactivo) + intval($y1);
            $aactivo = intval($aactivo) + intval($a1);
            $zactivo = intval($zactivo) + intval($z1);
            $origenes->xactivo = $xactivo;
            $origenes->yactivo = $yactivo;
            $origenes->aactivo = $aactivo;
            $origenes->zactivo = $zactivo;
            $origenes->save();

            break;
            
            case "9":
            
            $xactivo = $origenes->x9;
            $yactivo = $origenes->y9;
            $zactivo = $origenes->z9;
            $aactivo = $origenes->a9;
            $xactivo = intval($xactivo) + intval($x1);
            $yactivo = intval($yactivo) + intval($y1);
            $aactivo = intval($aactivo) + intval($a1);
            $zactivo = intval($zactivo) + intval($z1);
            $origenes->xactivo = $xactivo;
            $origenes->yactivo = $yactivo;
            $origenes->aactivo = $aactivo;
            $origenes->zactivo = $zactivo;
            $origenes->save();

            
            break;
            
            case "10":
            $xactivo = $origenes->x10;
            $yactivo = $origenes->y10;
            $zactivo = $origenes->z10;
            $aactivo = $origenes->a10;
            $xactivo = intval($xactivo) + intval($x1);
            $yactivo = intval($yactivo) + intval($y1);
            $aactivo = intval($aactivo) + intval($a1);
            $zactivo = intval($zactivo) + intval($z1);
            $origenes->xactivo = $xactivo;
            $origenes->yactivo = $yactivo;
            $origenes->aactivo = $aactivo;
            $origenes->zactivo = $zactivo;
            $origenes->save();

            
            break;
            
            case "11":
            $xactivo = $origenes->x11;
            $yactivo = $origenes->y11;
            $zactivo = $origenes->z11;
            $aactivo = $origenes->a11;
            $xactivo = intval($xactivo) + intval($x1);
            $yactivo = intval($yactivo) + intval($y1);
            $aactivo = intval($aactivo) + intval($a1);
            $zactivo = intval($zactivo) + intval($z1);
            $origenes->xactivo = $xactivo;
            $origenes->yactivo = $yactivo;
            $origenes->aactivo = $aactivo;
            $origenes->zactivo = $zactivo;
            $origenes->save();

            
            break;
            
            case "12":
            $xactivo = $origenes->x12;
            $yactivo = $origenes->y12;
            $zactivo = $origenes->z12;
            $aactivo = $origenes->a12;
            $xactivo = intval($xactivo) + intval($x1);
            $yactivo = intval($yactivo) + intval($y1);
            $aactivo = intval($aactivo) + intval($a1);
            $zactivo = intval($zactivo) + intval($z1);
            $origenes->xactivo = $xactivo;
            $origenes->yactivo = $yactivo;
            $origenes->aactivo = $aactivo;
            $origenes->zactivo = $zactivo;
            $origenes->save();

            
            break;
            
            case "13":
            
            $xactivo = $origenes->x13;
            $yactivo = $origenes->y13;
            $zactivo = $origenes->z13;
            $aactivo = $origenes->a13;
            $xactivo = intval($xactivo) + intval($x1);
            $yactivo = intval($yactivo) + intval($y1);
            $aactivo = intval($aactivo) + intval($a1);
            $zactivo = intval($zactivo) + intval($z1);
            $origenes->xactivo = $xactivo;
            $origenes->yactivo = $yactivo;
            $origenes->aactivo = $aactivo;
            $origenes->zactivo = $zactivo;
            $origenes->save();

            break;
            
            case "14":
            $xactivo = $origenes->x14;
            $yactivo = $origenes->y14;
            $zactivo = $origenes->z14;
            $aactivo = $origenes->a14;

            $xactivo = intval($xactivo) + intval($x1);
            $yactivo = intval($yactivo) + intval($y1);
            $aactivo = intval($aactivo) + intval($a1);
            $zactivo = intval($zactivo) + intval($z1);
            $origenes->xactivo = $xactivo;
            $origenes->yactivo = $yactivo;
            $origenes->aactivo = $aactivo;
            $origenes->zactivo = $zactivo;
            $origenes->save();

            break;
            
            case "15":
            $xactivo = $origenes->x15;
            $yactivo = $origenes->y15;
            $zactivo = $origenes->z15;
            $aactivo = $origenes->a15;
            $xactivo = intval($xactivo) + intval($x1);
            $yactivo = intval($yactivo) + intval($y1);
            $aactivo = intval($aactivo) + intval($a1);
            $zactivo = intval($zactivo) + intval($z1);
            $origenes->xactivo = $xactivo;
            $origenes->yactivo = $yactivo;
            $origenes->aactivo = $aactivo;
            $origenes->zactivo = $zactivo;
            $origenes->save();

            
            break;
            
            case "16":
            
            $xactivo = $origenes->x16;
            $yactivo = $origenes->y16;
            $zactivo = $origenes->z16;
            $aactivo = $origenes->a16;
            $xactivo = intval($xactivo) + intval($x1);
            $yactivo = intval($yactivo) + intval($y1);
            $aactivo = intval($aactivo) + intval($a1);
            $zactivo = intval($zactivo) + intval($z1);
            $origenes->xactivo = $xactivo;
            $origenes->yactivo = $yactivo;
            $origenes->aactivo = $aactivo;
            $origenes->zactivo = $zactivo;
            $origenes->save();

            break;
            
         }
    }

    public function UAO($coord)
    {
        $origenes = origenes::find(1);
    switch ($coord) {

case "1":
$origenes->xactivo = $origenes->x1;
$origenes->yactivo = $origenes->y1;
$origenes->zactivo = $origenes->z1;
$origenes->aactivo = $origenes->a1;
$origenes->coordactivas=1;
$origenes->save();
break;


case "2":
$origenes->xactivo = $origenes->x2;
$origenes->yactivo = $origenes->y2;
$origenes->zactivo = $origenes->z2;
$origenes->aactivo = $origenes->a2;
$origenes->coordactivas=2;
$origenes->save();

break;

case "3":

$origenes->xactivo = $origenes->x3;
$origenes->yactivo = $origenes->y3;
$origenes->zactivo = $origenes->z3;
$origenes->aactivo = $origenes->a3;
$origenes->coordactivas=3;
$origenes->save();
break;

case "4":
$origenes->xactivo = $origenes->x4;
$origenes->yactivo = $origenes->y4;
$origenes->zactivo = $origenes->z4;
$origenes->aactivo = $origenes->a4;
$origenes->coordactivas=4;
$origenes->save();

break;

case "5":
$origenes->xactivo = $origenes->x5;
$origenes->yactivo = $origenes->y5;
$origenes->zactivo = $origenes->z5;
$origenes->aactivo = $origenes->a5;
$origenes->coordactivas=5;
$origenes->save();

break;

case "6":

$origenes->xactivo = $origenes->x6;
$origenes->yactivo = $origenes->y6;
$origenes->zactivo = $origenes->z6;
$origenes->aactivo = $origenes->a6;
$origenes->coordactivas=6;
$origenes->save();
break;

case "7":

$origenes->xactivo = $origenes->x7;
$origenes->yactivo = $origenes->y7;
$origenes->zactivo = $origenes->z7;
$origenes->aactivo = $origenes->a7;
$origenes->coordactivas=7;
$origenes->save();
break;

case "8":
$origenes->xactivo = $origenes->x8;
$origenes->yactivo = $origenes->y8;
$origenes->zactivo = $origenes->z8;
$origenes->aactivo = $origenes->a8;
$origenes->coordactivas=8;
$origenes->save();

break;

case "9":

$origenes->xactivo = $origenes->x9;
$origenes->yactivo = $origenes->y9;
$origenes->zactivo = $origenes->z9;
$origenes->aactivo = $origenes->a9;
$origenes->coordactivas=9;
$origenes->save();

break;

case "10":
$origenes->xactivo = $origenes->x10;
$origenes->yactivo = $origenes->y10;
$origenes->zactivo = $origenes->z10;
$origenes->aactivo = $origenes->a10;
$origenes->coordactivas=10;
$origenes->save();

break;

case "11":
$origenes->xactivo = $origenes->x11;
$origenes->yactivo = $origenes->y11;
$origenes->zactivo = $origenes->z11;
$origenes->aactivo = $origenes->a11;
$origenes->coordactivas=11;
$origenes->save();

break;

case "12":
$origenes->xactivo = $origenes->x12;
$origenes->yactivo = $origenes->y12;
$origenes->zactivo = $origenes->z12;
$origenes->aactivo = $origenes->a12;
$origenes->coordactivas=12;
$origenes->save();

break;

case "13":

$origenes->xactivo = $origenes->x13;
$origenes->yactivo = $origenes->y13;
$origenes->zactivo = $origenes->z13;
$origenes->aactivo = $origenes->a13;
$origenes->coordactivas=13;
$origenes->save();
break;

case "14":
$origenes->xactivo = $origenes->x14;
$origenes->yactivo = $origenes->y14;
$origenes->zactivo = $origenes->z14;
$origenes->aactivo = $origenes->a14;
$origenes->coordactivas=14;
$origenes->save();

break;

case "15":
$origenes->xactivo = $origenes->x15;
$origenes->yactivo = $origenes->y15;
$origenes->zactivo = $origenes->z15;
$origenes->aactivo = $origenes->a15;
$origenes->coordactivas=15;
$origenes->save();

break;

case "16":

$origenes->xactivo = $origenes->x16;
$origenes->yactivo = $origenes->y16;
$origenes->zactivo = $origenes->z16;
$origenes->aactivo = $origenes->a16;
$origenes->coordactivas=16;
$origenes->save();
break;




    }

    }

  
            //Codigo para mandar pause al tinyG.
 /*           
$client = new Client("ws://localhost:8989/ws");
$client->send("send /dev/ttyUSB0 !");   
var_dump($client->receive());
            */    
  
    
}
