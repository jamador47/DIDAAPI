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

  
            //Codigo para mandar pause al tinyG.
 /*           
$client = new Client("ws://localhost:8989/ws");
$client->send("send /dev/ttyUSB0 !");   
var_dump($client->receive());
            */    
  
    
}
