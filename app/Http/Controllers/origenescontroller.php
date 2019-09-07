<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\origenes;
use App\origenesuto;

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
        $origenesuto = origenesuto::find(1);
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
            $origenesuto->x1=$x1;
            $origenesuto->y1=$y1;
            $origenesuto->a1=$a1;
            $origenesuto->z1=$z1;
            $origenesuto->x2=$x2;
            $origenesuto->y2=$y2;
            $origenesuto->a2=$a2;
            $origenesuto->z2=$z2;
            $origenesuto->x3=$x3;
            $origenesuto->y3=$y3;
            $origenesuto->a3=$a3;
            $origenesuto->z3=$z3;
            $origenesuto->x4=$x4;
            $origenesuto->y4=$y4;
            $origenesuto->a4=$a4;
            $origenesuto->z4=$z4;
            $origenesuto->x5=$x5;
            $origenesuto->y5=$y5;
            $origenesuto->a5=$a5;
            $origenesuto->z5=$z5;
            $origenesuto->x6=$x6;
            $origenesuto->y6=$y6;
            $origenesuto->a6=$a6;
            $origenesuto->z6=$z6;
            $origenesuto->x7=$x7;
            $origenesuto->y7=$y7;
            $origenesuto->a7=$a7;
            $origenesuto->z7=$z7;
            $origenesuto->x8=$x8;
            $origenesuto->y8=$y8;
            $origenesuto->a8=$a8;
            $origenesuto->z8=$z8;
            $origenesuto->x9=$x9;
            $origenesuto->y9=$y9;
            $origenesuto->a9=$a9;
            $origenesuto->z9=$z9;
            $origenesuto->x10=$x10;
            $origenesuto->y10=$y10;
            $origenesuto->a10=$a10;
            $origenesuto->z10=$z10;
            $origenesuto->x11=$x11;
            $origenesuto->y11=$y11;
            $origenesuto->a11=$a11;
            $origenesuto->z11=$z11;
            $origenesuto->x12=$x12;
            $origenesuto->y12=$y12;
            $origenesuto->a12=$a12;
            $origenesuto->z12=$z12;
            $origenesuto->x13=$x13;
            $origenesuto->y13=$y13;
            $origenesuto->a13=$a13;
            $origenesuto->z13=$z13;
            $origenesuto->x14=$x14;
            $origenesuto->y14=$y14;
            $origenesuto->a14=$a14;
            $origenesuto->z14=$z14;
            $origenesuto->x15=$x15;
            $origenesuto->y15=$y15;
            $origenesuto->a15=$a15;
            $origenesuto->z15=$z15;
            $origenesuto->x16=$x16;
            $origenesuto->y16=$y16;
            $origenesuto->a16=$a16;
            $origenesuto->z16=$z16;

                    
            
            $origenes->save();
            $origenesuto->save();
        }
        else{
            
            $origenes = new origenes;
            $origenesuto = new origenesuto;

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
            $origenesuto->x1=$x1;
            $origenesuto->y1=$y1;
            $origenesuto->a1=$a1;
            $origenesuto->z1=$z1;
            $origenesuto->x2=$x2;
            $origenesuto->y2=$y2;
            $origenesuto->a2=$a2;
            $origenesuto->z2=$z2;
            $origenesuto->x3=$x3;
            $origenesuto->y3=$y3;
            $origenesuto->a3=$a3;
            $origenesuto->z3=$z3;
            $origenesuto->x4=$x4;
            $origenesuto->y4=$y4;
            $origenesuto->a4=$a4;
            $origenesuto->z4=$z4;
            $origenesuto->x5=$x5;
            $origenesuto->y5=$y5;
            $origenesuto->a5=$a5;
            $origenesuto->z5=$z5;
            $origenesuto->x6=$x6;
            $origenesuto->y6=$y6;
            $origenesuto->a6=$a6;
            $origenesuto->z6=$z6;
            $origenesuto->x7=$x7;
            $origenesuto->y7=$y7;
            $origenesuto->a7=$a7;
            $origenesuto->z7=$z7;
            $origenesuto->x8=$x8;
            $origenesuto->y8=$y8;
            $origenesuto->a8=$a8;
            $origenesuto->z8=$z8;
            $origenesuto->x9=$x9;
            $origenesuto->y9=$y9;
            $origenesuto->a9=$a9;
            $origenesuto->z9=$z9;
            $origenesuto->x10=$x10;
            $origenesuto->y10=$y10;
            $origenesuto->a10=$a10;
            $origenesuto->z10=$z10;
            $origenesuto->x11=$x11;
            $origenesuto->y11=$y11;
            $origenesuto->a11=$a11;
            $origenesuto->z11=$z11;
            $origenesuto->x12=$x12;
            $origenesuto->y12=$y12;
            $origenesuto->a12=$a12;
            $origenesuto->z12=$z12;
            $origenesuto->x13=$x13;
            $origenesuto->y13=$y13;
            $origenesuto->a13=$a13;
            $origenesuto->z13=$z13;
            $origenesuto->x14=$x14;
            $origenesuto->y14=$y14;
            $origenesuto->a14=$a14;
            $origenesuto->z14=$z14;
            $origenesuto->x15=$x15;
            $origenesuto->y15=$y15;
            $origenesuto->a15=$a15;
            $origenesuto->z15=$z15;
            $origenesuto->x16=$x16;
            $origenesuto->y16=$y16;
            $origenesuto->a16=$a16;
            $origenesuto->z16=$z16;
            $origenesuto->save();
                $origenes->save();
            

        }

    }



    public function getjson()
    {
        $origenes = origenes::find(1);
        return $origenes;

    }

    public function getUTOjson()
    {
        $origenes = origenesuto::find(1);
        return $origenes;

    }



    public function resetUTO(){
        $origenes = origenes::find(1);
        $origenesuto = origenesuto::find(1);
        $origenesuto->x1 = $origenes->x1;
        $origenesuto->y1 = $origenes->y1;
        $origenesuto->z1 = $origenes->z1;
        $origenesuto->a1 = $origenes->a1;
        $origenesuto->x2 = $origenes->x2;
        $origenesuto->y2 = $origenes->y2;
        $origenesuto->z2 = $origenes->z2;
        $origenesuto->a2 = $origenes->a2;
        $origenesuto->x3 = $origenes->x3;
        $origenesuto->y3 = $origenes->y3;
        $origenesuto->z3 = $origenes->z3;
        $origenesuto->a3 = $origenes->a3;
        $origenesuto->x4 = $origenes->x4;
        $origenesuto->y4 = $origenes->y4;
        $origenesuto->z4 = $origenes->z4;
        $origenesuto->a4 = $origenes->a4;
        $origenesuto->x5 = $origenes->x5;
        $origenesuto->y5 = $origenes->y5;
        $origenesuto->z5 = $origenes->z5;
        $origenesuto->a5 = $origenes->a5;
        $origenesuto->x6 = $origenes->x6;
        $origenesuto->y6 = $origenes->y6;
        $origenesuto->z6 = $origenes->z6;
        $origenesuto->a6 = $origenes->a6;
        $origenesuto->x7 = $origenes->x7;
        $origenesuto->y7 = $origenes->y7;
        $origenesuto->z7 = $origenes->z7;
        $origenesuto->a7 = $origenes->a7;
        $origenesuto->x8 = $origenes->x8;
        $origenesuto->y8 = $origenes->y8;
        $origenesuto->z8 = $origenes->z8;
        $origenesuto->a8 = $origenes->a8;
        $origenesuto->x9 = $origenes->x9;
        $origenesuto->y9 = $origenes->y9;
        $origenesuto->z9 = $origenes->z9;
        $origenesuto->a9 = $origenes->a9;
        $origenesuto->x10 = $origenes->x10;
        $origenesuto->y10 = $origenes->y10;
        $origenesuto->z10 = $origenes->z10;
        $origenesuto->a10 = $origenes->a10;
        $origenesuto->x11 = $origenes->x11;
        $origenesuto->y11 = $origenes->y11;
        $origenesuto->z11 = $origenes->z11;
        $origenesuto->a11 = $origenes->a11;
        $origenesuto->x12 = $origenes->x12;
        $origenesuto->y12 = $origenes->y12;
        $origenesuto->z12 = $origenes->z12;
        $origenesuto->a12 = $origenes->a12;
        $origenesuto->x13 = $origenes->x13;
        $origenesuto->y13 = $origenes->y13;
        $origenesuto->z13 = $origenes->z13;
        $origenesuto->a13 = $origenes->a13;
        $origenesuto->x14 = $origenes->x14;
        $origenesuto->y14 = $origenes->y14;
        $origenesuto->z14 = $origenes->z14;
        $origenesuto->a14 = $origenes->a14;
        $origenesuto->x15 = $origenes->x15;
        $origenesuto->y15 = $origenes->y15;
        $origenesuto->z15 = $origenes->z15;
        $origenesuto->a15 = $origenes->a15;
        $origenesuto->x16 = $origenes->x16;
        $origenesuto->y16 = $origenes->y16;
        $origenesuto->z16 = $origenes->z16;
        $origenesuto->a16 = $origenes->a16;
        $origenesuto->save();
    }
    public function UTO($coord,$x1,$y1,$a1,$z1)
    {
        $origenes = origenes::find(1);
        $origenesuto = origenesuto::find(1);


        switch ($coord){

            case "1":
            $xactivo = $origenes->x1;
            $yactivo = $origenes->y1;
            $zactivo = $origenes->z1;
            $aactivo = $origenes->a1;
   

            $xactivo = floatval($xactivo) + floatval($x1);
            $yactivo = floatval($yactivo) + floatval($y1);
            $aactivo = floatval($aactivo) + floatval($a1);
            $zactivo = floatval($zactivo) + floatval($z1);
            $origenesuto->x1 = $xactivo;
            $origenesuto->y1 = $yactivo;
            $origenesuto->a1 = $aactivo;
            $origenesuto->z1 = $zactivo;
            $origenesuto->save();

            break;
            
            
            case "2":
            $xactivo = $origenes->x2;
            $yactivo = $origenes->y2;
            $zactivo = $origenes->z2;
            $aactivo = $origenes->a2;
            $xactivo = floatval($xactivo) + floatval($x1);
            $yactivo = floatval($yactivo) + floatval($y1);
            $aactivo = floatval($aactivo) + floatval($a1);
            $zactivo = floatval($zactivo) + floatval($z1);
            $origenesuto->x2 = $xactivo;
            $origenesuto->y2 = $yactivo;
            $origenesuto->a2 = $aactivo;
            $origenesuto->z2 = $zactivo;
            $origenesuto->save();

            
            break;
            
            case "3":
            
            $xactivo = $origenes->x3;
            $yactivo = $origenes->y3;
            $zactivo = $origenes->z3;
            $aactivo = $origenes->a3;
            $xactivo = floatval($xactivo) + floatval($x1);
            $yactivo = floatval($yactivo) + floatval($y1);
            $aactivo = floatval($aactivo) + floatval($a1);
            $zactivo = floatval($zactivo) + floatval($z1);
            $origenesuto->x3 = $xactivo;
            $origenesuto->y3 = $yactivo;
            $origenesuto->a3 = $aactivo;
            $origenesuto->z3 = $zactivo;
            $origenesuto->save();


            break;
            
            case "4":
            $xactivo = $origenes->x4;
            $yactivo = $origenes->y4;
            $zactivo = $origenes->z4;
            $aactivo = $origenes->a4;
   
            $xactivo = floatval($xactivo) + floatval($x1);
            $yactivo = floatval($yactivo) + floatval($y1);
            $aactivo = floatval($aactivo) + floatval($a1);
            $zactivo = floatval($zactivo) + floatval($z1);
            $origenesuto->x4 = $xactivo;
            $origenesuto->y4 = $yactivo;
            $origenesuto->a4 = $aactivo;
            $origenesuto->z4 = $zactivo;
            $origenesuto->save();


            break;
            
            case "5":
            $xactivo = $origenes->x5;
            $yactivo = $origenes->y5;
            $zactivo = $origenes->z5;
            $aactivo = $origenes->a5;
            $xactivo = floatval($xactivo) + floatval($x1);
            $yactivo = floatval($yactivo) + floatval($y1);
            $aactivo = floatval($aactivo) + floatval($a1);
            $zactivo = floatval($zactivo) + floatval($z1);
            $origenesuto->x5 = $xactivo;
            $origenesuto->y5 = $yactivo;
            $origenesuto->a5 = $aactivo;
            $origenesuto->z5 = $zactivo;
            $origenesuto->save();


            
            break;
            
            case "6":
            
            $xactivo = $origenes->x6;
            $yactivo = $origenes->y6;
            $zactivo = $origenes->z6;
            $aactivo = $origenes->a6;
            $xactivo = floatval($xactivo) + floatval($x1);
            $yactivo = floatval($yactivo) + floatval($y1);
            $aactivo = floatval($aactivo) + floatval($a1);
            $zactivo = floatval($zactivo) + floatval($z1);
            $origenesuto->x6 = $xactivo;
            $origenesuto->y6 = $yactivo;
            $origenesuto->a6 = $aactivo;
            $origenesuto->z6 = $zactivo;
            $origenesuto->save();


            break;
            
            case "7":
            
            $xactivo = $origenes->x7;
            $yactivo = $origenes->y7;
            $zactivo = $origenes->z7;
            $aactivo = $origenes->a7;
            $xactivo = floatval($xactivo) + floatval($x1);
            $yactivo = floatval($yactivo) + floatval($y1);
            $aactivo = floatval($aactivo) + floatval($a1);
            $zactivo = floatval($zactivo) + floatval($z1);
            $origenesuto->x7 = $xactivo;
            $origenesuto->y7 = $yactivo;
            $origenesuto->a7 = $aactivo;
            $origenesuto->z7 = $zactivo;
            $origenesuto->save();


            break;
            
            case "8":
            $xactivo = $origenes->x8;
            $yactivo = $origenes->y8;
            $zactivo = $origenes->z8;
            $aactivo = $origenes->a8;
        
            $xactivo = floatval($xactivo) + floatval($x1);
            $yactivo = floatval($yactivo) + floatval($y1);
            $aactivo = floatval($aactivo) + floatval($a1);
            $zactivo = floatval($zactivo) + floatval($z1);
            $origenesuto->x8 = $xactivo;
            $origenesuto->y8 = $yactivo;
            $origenesuto->a8 = $aactivo;
            $origenesuto->z8 = $zactivo;
            $origenesuto->save();


            break;
            
            case "9":
            
            $xactivo = $origenes->x9;
            $yactivo = $origenes->y9;
            $zactivo = $origenes->z9;
            $aactivo = $origenes->a9;
            $xactivo = floatval($xactivo) + floatval($x1);
            $yactivo = floatval($yactivo) + floatval($y1);
            $aactivo = floatval($aactivo) + floatval($a1);
            $zactivo = floatval($zactivo) + floatval($z1);
            $origenesuto->x9 = $xactivo;
            $origenesuto->y9 = $yactivo;
            $origenesuto->a9 = $aactivo;
            $origenesuto->z9 = $zactivo;
            $origenesuto->save();


            
            break;
            
            case "10":
            $xactivo = $origenes->x10;
            $yactivo = $origenes->y10;
            $zactivo = $origenes->z10;
            $aactivo = $origenes->a10;
            $xactivo = floatval($xactivo) + floatval($x1);
            $yactivo = floatval($yactivo) + floatval($y1);
            $aactivo = floatval($aactivo) + floatval($a1);
            $zactivo = floatval($zactivo) + floatval($z1);
            $origenesuto->x10 = $xactivo;
            $origenesuto->y10 = $yactivo;
            $origenesuto->a10 = $aactivo;
            $origenesuto->z10 = $zactivo;
            $origenesuto->save();

            
            break;
            
            case "11":
            $xactivo = $origenes->x11;
            $yactivo = $origenes->y11;
            $zactivo = $origenes->z11;
            $aactivo = $origenes->a11;
            $xactivo = floatval($xactivo) + floatval($x1);
            $yactivo = floatval($yactivo) + floatval($y1);
            $aactivo = floatval($aactivo) + floatval($a1);
            $zactivo = floatval($zactivo) + floatval($z1);
            $origenesuto->x11 = $xactivo;
            $origenesuto->y11 = $yactivo;
            $origenesuto->a11 = $aactivo;
            $origenesuto->z11 = $zactivo;
            $origenesuto->save();


            
            break;
            
            case "12":
            $xactivo = $origenes->x12;
            $yactivo = $origenes->y12;
            $zactivo = $origenes->z12;
            $aactivo = $origenes->a12;
            $xactivo = floatval($xactivo) + floatval($x1);
            $yactivo = floatval($yactivo) + floatval($y1);
            $aactivo = floatval($aactivo) + floatval($a1);
            $zactivo = floatval($zactivo) + floatval($z1);
            $origenesuto->x12 = $xactivo;
            $origenesuto->y12 = $yactivo;
            $origenesuto->a12 = $aactivo;
            $origenesuto->z12 = $zactivo;
            $origenesuto->save();


            
            break;
            
            case "13":
            
            $xactivo = $origenes->x13;
            $yactivo = $origenes->y13;
            $zactivo = $origenes->z13;
            $aactivo = $origenes->a13;
            $xactivo = floatval($xactivo) + floatval($x1);
            $yactivo = floatval($yactivo) + floatval($y1);
            $aactivo = floatval($aactivo) + floatval($a1);
            $zactivo = floatval($zactivo) + floatval($z1);
            $origenesuto->x13 = $xactivo;
            $origenesuto->y13 = $yactivo;
            $origenesuto->a13 = $aactivo;
            $origenesuto->z13 = $zactivo;
            $origenesuto->save();

            break;
            
            case "14":
            $xactivo = $origenes->x14;
            $yactivo = $origenes->y14;
            $zactivo = $origenes->z14;
            $aactivo = $origenes->a14;

            $xactivo = floatval($xactivo) + floatval($x1);
            $yactivo = floatval($yactivo) + floatval($y1);
            $aactivo = floatval($aactivo) + floatval($a1);
            $zactivo = floatval($zactivo) + floatval($z1);
            $origenesuto->x14 = $xactivo;
            $origenesuto->y14 = $yactivo;
            $origenesuto->a14 = $aactivo;
            $origenesuto->z14 = $zactivo;
            $origenesuto->save();


            break;
            
            case "15":
            $xactivo = $origenes->x15;
            $yactivo = $origenes->y15;
            $zactivo = $origenes->z15;
            $aactivo = $origenes->a15;
            $xactivo = floatval($xactivo) + floatval($x1);
            $yactivo = floatval($yactivo) + floatval($y1);
            $aactivo = floatval($aactivo) + floatval($a1);
            $zactivo = floatval($zactivo) + floatval($z1);
            $origenesuto->x15 = $xactivo;
            $origenesuto->y15 = $yactivo;
            $origenesuto->a15 = $aactivo;
            $origenesuto->z15 = $zactivo;
            $origenesuto->save();

            
            break;
            
            case "16":
            
            $xactivo = $origenes->x16;
            $yactivo = $origenes->y16;
            $zactivo = $origenes->z16;
            $aactivo = $origenes->a16;
            $xactivo = floatval($xactivo) + floatval($x1);
            $yactivo = floatval($yactivo) + floatval($y1);
            $aactivo = floatval($aactivo) + floatval($a1);
            $zactivo = floatval($zactivo) + floatval($z1);
            $origenesuto->x16 = $xactivo;
            $origenesuto->y16 = $yactivo;
            $origenesuto->a16 = $aactivo;
            $origenesuto->z16 = $zactivo;
            $origenesuto->save();

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
