<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\errors2;
use App\errorsbackup;

use WebSocket\Client;

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
        
        
        //var_dump($errorid. "= ".$estado);
        
        
        
// Procesos de emergencia
        
/*-- Plantilla para nuevos errores urgentes -- 

if($errorid == "" && $estado == ){
 $pg = file_get_contents('http://URL');
        
    }
    
 -------------------------------   */
        
        
        
        
        
        
// Guardar en la Base de datos
   
        $erroresactivos = errors2::find(1);

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
                $outputs[$i]= 0 ;       
                
            }
            
            for($i = 1; $i<=436; $i++)
            {        
                $inputs[$i]= 0  ;   
                
            }
            $errores = new errors2;
            
             switch ( $tipoerror){
                     
                 case "I":
                     
                     $inputs[$numerror] = $estado;
                $errores->I = $inputs;
                $errores->O = $outputs;
           
                     break;
                 case "O":
                     
                     $outputs[$numerror] = $estado; 
                     $errores->O =$outputs;
                     $errores->I = $inputs;
    
                     
                     break;
             }
            
                     $errores->dx1 = 0;
            $errores->dx2 = 0;
            $errores->sx1 = 0;
            $errores->sx2 = 0;
            $errores->x1 = 0;
            $errores->y1 = 0;
            $errores->x2 = 0;
            $errores->y2 = 0;
                $errores->x3 = 0;
            $errores->y3 = 0;
            $errores->x4 = 0;
            $errores->y4 = 0;
            $errores->x5 = 0;
            $errores->y5 = 0;
            $errores->x6 = 0;
            $errores->y6 = 0;
            $errores->z6 = 0;
                        $errores->z5 = 0;

                        $errores->z4 = 0;

                        $errores->z3 = 0;

                        $errores->z2 = 0;
 
                        $errores->z1 = 0;
            $errores->alarmatiny = 0;
            $errores->estadoerror = 0;
             $errores->encoder = 0;
var_dump($errores);            
$errores->save();
$this->backuperrores($errores);
return "Bien";
        }}
        
        public function backuperrores($errores){
            
            
        $backup =  new errorsbackup;
            $backup->I = $errores->I;
            $backup->O = $errores->O;
            $backup->alarmatiny = 0;
    $backup->dx1 = $errores->dx1;
                $backup->dx2 = $errores->dx2;
    $backup->sx1 = $errores->sx1;
    $backup->sx2 = $errores->sx2;
    $backup->x1 = $errores->x1;
    $backup->x2 = $errores->x2;
    $backup->x3 = $errores->x3;
    $backup->x4 = $errores->x4;
    $backup->x5 = $errores->x5;
    $backup->x6 = $errores->x6;
    $backup->y1 = $errores->y1;
    $backup->y2 = $errores->y2;
    $backup->y3 = $errores->y3;
    $backup->y4 = $errores->y4;
    $backup->y5 = $errores->y5;
    $backup->y6 = $errores->y6;
    $backup->z1 = $errores->z1;
    $backup->z2 = $errores->z2;
    $backup->z3 = $errores->z3;
    $backup->z4 = $errores->z4;
    $backup->z5 = $errores->z5;
    $backup->z6 = $errores->z6;
     $backup->estadoerror = 0;   
                 $backup->encoder = $errores->encoder;  
            $backup->save();



            
        }
        
        
    
    
    public function cambioestadoarduino2($O343,$O345,$O344,$I4,$I8,$I14,$O0,$O4,$O12,$I16,$I17,$I18,$I19,$I21,$I22,$I23,$I24,$I27,$I28,$I29,$I30,$I31,$O16,$O17,$O19,$O20,$O21,$O22,$O28,$O29,$O30,$O31,$I36,$I37,$I38,$I39,$I41,$O57,$O58,$O59,$O60,$O61,$O62,$I73,$I74,$I78,$I79,$I80,$I81,$I83,$I84,$I85,$I86,$I87)
    {
        
        
        
            $erroresactivos = errors2::find(1);
                     $inputs = $erroresactivos->I;
                     $inputs[14]=$I14;
                        $inputs[16]=$I16;
                        $inputs[17]=$I17;
                        $inputs[18]=$I18;
                        $inputs[19]=$I19;
                        $inputs[21]=$I21;
                        $inputs[22]=$I22;
                        $inputs[23]=$I23;
                        $inputs[24]=$I24;
                        $inputs[27]=$I27;
                        $inputs[28]=$I28;
                        $inputs[29]=$I29;
                        $inputs[30]=$I30;
                        $inputs[31]=$I31;
                        $inputs[36]=$I36;
                        $inputs[37]=$I37;
                        $inputs[38]=$I38;
                        $inputs[39]=$I39;
                        $inputs[4]=$I4;
                        $inputs[41]=$I41;
                        $inputs[73]=$I73;
                        $inputs[74]=$I74;
                        $inputs[78]=$I78;
                        $inputs[79]=$I79;
                        $inputs[8]=$I8;
                        $inputs[80]=$I80;
                        $inputs[81]=$I81;
                        $inputs[83]=$I83;
                        $inputs[84]=$I84;
                        $inputs[85]=$I85;
                        $inputs[86]=$I86;
                        $inputs[87]=$I87;

                    $erroresactivos->I = $inputs;
            $erroresactivos->save();     
                     
              
                    $outputs = $erroresactivos->O;
                   $outputs[0]=$O0;
                        $outputs[12]=$O12;
                        $outputs[16]=$O16;
                        $outputs[17]=$O17;
                        $outputs[19]=$O19;
                        $outputs[20]=$O20;
                        $outputs[21]=$O21;
                        $outputs[22]=$O22;
                        $outputs[28]=$O28;
                        $outputs[29]=$O29;
                        $outputs[30]=$O30;
                        $outputs[31]=$O31;
                        $outputs[343]=$O343;
                        $outputs[344]=$O344;
                        $outputs[345]=$O345;
                        $outputs[4]=$O4;
                        $outputs[57]=$O57;
                        $outputs[58]=$O58;
                        $outputs[59]=$O59;
                        $outputs[60]=$O60;
                        $outputs[61]=$O61;
                        $outputs[62]=$O62;
                         $erroresactivos->O = $outputs;
            $erroresactivos->save();  
        $this->backuperrores($erroresactivos);

        // Procesos de emergencia
        
/*-- Plantilla para nuevos errores urgentes -- 


    
 ------------DX1-------------------   */
        
if(intval($inputs[36]) >= 900){
    
    if (!($erroresactivos->dx1)){
 $pg = file_get_contents('http://192.168.0.83/arduino/digital/47/1');
    sleep(2);
     $pg = file_get_contents('http://192.168.0.83/arduino/digital/47/0');
        $erroresactivos->dx1 = 1;
        $erroresactivos->save();

    }
    else{
        
        $pg = file_get_contents('http://192.168.0.83/arduino/digital/48/1');
    sleep(2);
     $pg = file_get_contents('http://192.168.0.83/arduino/digital/48/0');
               $erroresactivos->dx1 = 0;
        $erroresactivos->save();
    }
}
        
/************-----------------DX2------------------***********/
  if(intval($inputs[37]) >= 900){
    
    if (!($erroresactivos->dx2)){
 $pg = file_get_contents('http://192.168.0.83/arduino/digital/12/1');
    sleep(2);
     $pg = file_get_contents('http://192.168.0.83/arduino/digital/12/0');
        $erroresactivos->dx2 = 1;
        $erroresactivos->save();

    }
    else{
        
        $pg = file_get_contents('http://192.168.0.83/arduino/digital/5/1');
    sleep(2);
     $pg = file_get_contents('http://192.168.0.83/arduino/digital/5/0');
               $erroresactivos->dx2 = 0;
        $erroresactivos->save();
    }
}      
        
        
        
        /************-----------------SX1------------------***********/
  if(intval($inputs[38]) >= 900){
    
    if (!($erroresactivos->sx1)){
 $pg = file_get_contents('http://192.168.0.82/arduino/digital/33/1');
    sleep(2);
     $pg = file_get_contents('http://192.168.0.82/arduino/digital/33/0');
        $erroresactivos->sx1 = 1;
        $erroresactivos->save();

    }
    else{
        
        $pg = file_get_contents('http://192.168.0.82/arduino/digital/32/1');
    sleep(2);
     $pg = file_get_contents('http://192.168.0.82/arduino/digital/32/0');
               $erroresactivos->sx1 = 0;
        $erroresactivos->save();
    }
}      
        
        
        
        /************-----------------SX2------------------***********/
  if(intval($inputs[39]) >= 900){
    
    if (!($erroresactivos->sx2)){
 $pg = file_get_contents('http://192.168.0.83/arduino/digital/44/1');
    sleep(2);
     $pg = file_get_contents('http://192.168.0.83/arduino/digital/44/0');
        $erroresactivos->sx2 = 1;
        $erroresactivos->save();

    }
    else{
        
        $pg = file_get_contents('http://192.168.0.83/arduino/digital/48/1');
    sleep(2);
     $pg = file_get_contents('http://192.168.0.83/arduino/digital/48/0');
               $erroresactivos->sx2 = 0;
        $erroresactivos->save();
    }
}      
      
        if(intval($inputs[39]) >= 900){
    
    if (!($erroresactivos->sx2)){
 $pg = file_get_contents('http://192.168.0.83/arduino/digital/44/1');
    sleep(2);
     $pg = file_get_contents('http://192.168.0.83/arduino/digital/44/0');
        $erroresactivos->sx2 = 1;
        $erroresactivos->save();

    }
    else{
        
        $pg = file_get_contents('http://192.168.0.83/arduino/digital/48/1');
    sleep(2);
     $pg = file_get_contents('http://192.168.0.83/arduino/digital/48/0');
               $erroresactivos->sx2 = 0;
        $erroresactivos->save();
    }
}   
        
        
   /*   ISRA REVISAR.

  if(intval($inputs[21]) == 0){
  $pg = file_get_contents('http://192.168.0.88/arduino/digital/11/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/22/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/19/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/29/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/27/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/22/0');
            $client = new Client("ws://localhost:8989/ws");
$client->send("send /dev/ttyUSB0 !");   
$client->receive();
}
        else{
             $pg = file_get_contents('http://192.168.0.88/arduino/digital/11/1');
            
        }*/
        
        
                if(intval($inputs[22]) == 0){
  $pg = file_get_contents('http://192.168.0.88/arduino/digital/11/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/22/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/19/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/29/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/27/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/22/0');
            $client = new Client("ws://localhost:8989/ws");
$client->send("send /dev/ttyUSB0 !");   
$client->receive();
}
   
        
        
        if(intval($inputs[18]) == 1){
  $pg = file_get_contents('http://192.168.0.88/arduino/digital/11/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/22/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/19/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/29/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/27/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/22/0');
            $client = new Client("ws://localhost:8989/ws");
$client->send("send /dev/ttyUSB0 !");   
$client->receive();
}


//AGREGAR A ALARMAS

 
    
        /*
               if(intval($inputs[31]) == 0){
  $pg = file_get_contents('http://192.168.0.88/arduino/digital/11/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/22/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/19/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/29/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/27/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/22/0');
            $client = new Client("ws://localhost:8989/ws");
$client->send("send /dev/ttyUSB0 !");   
               $client->receive();
}
     

               if(intval($inputs[30]) == 0){
  $pg = file_get_contents('http://192.168.0.88/arduino/digital/11/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/22/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/19/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/29/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/27/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/22/0');
            $client = new Client("ws://localhost:8989/ws");
$client->send("send /dev/ttyUSB0 !");   
$client->receive();
}

*/
        
        
          
               if(intval($inputs[29]) == 0){
  $pg = file_get_contents('http://192.168.0.88/arduino/digital/11/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/22/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/19/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/29/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/27/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/22/0');
            $client = new Client("ws://localhost:8989/ws");
$client->send("send /dev/ttyUSB0 !");   
$client->receive();
}
        
        
               if(intval($inputs[28]) == 0){
  $pg = file_get_contents('http://192.168.0.88/arduino/digital/11/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/22/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/19/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/29/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/27/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/22/0');
            $client = new Client("ws://localhost:8989/ws");
$client->send("send /dev/ttyUSB0 !");   
$client->receive();
}
        
        /*
               if(intval($inputs[27]) == 0){
  $pg = file_get_contents('http://192.168.0.88/arduino/digital/11/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/22/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/19/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/29/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/27/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/22/0');
            $client = new Client("ws://localhost:8989/ws");
$client->send("send /dev/ttyUSB0 !");   
$client->receive();
}*/
        
               if(intval($inputs[22]) == 0){
  $pg = file_get_contents('http://192.168.0.88/arduino/digital/11/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/22/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/19/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/29/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/27/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/22/0');
            $client = new Client("ws://localhost:8989/ws");
$client->send("send /dev/ttyUSB0 !");   
$client->receive();
}
        
               if(intval($inputs[8]) == 0){
  $pg = file_get_contents('http://192.168.0.88/arduino/digital/11/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/22/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/19/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/29/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/27/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/22/0');
            $client = new Client("ws://localhost:8989/ws");
$client->send("send /dev/ttyUSB0 !");   
$client->receive();
}
        // En caso de que no sea el primer error 
                     
                   
             }
    
    
    
    public function cambioc1($x,$y,$z){
        $erroresactivos = errors2::find(1);
        $erroresactivos->x1 = $x;
        $erroresactivos->y1 = $y;
        $erroresactivos->z1 = $z;

        $erroresactivos->save();
                $this->backuperrores($erroresactivos);


    }   
    
    
    public function cambioc2($x,$y,$z){
               $erroresactivos = errors2::find(1);
        $erroresactivos->x2 = $x;
        $erroresactivos->y2 = $y;
                $erroresactivos->z2 = $z;

                $erroresactivos->save();
                $this->backuperrores($erroresactivos);


    }       
    
    public function cambioc3($x,$y,$z){
                       $erroresactivos = errors2::find(1);
        $erroresactivos->x3 = $x;
        $erroresactivos->y3 = $y;
                $erroresactivos->z3 = $z;

                $erroresactivos->save();
                $this->backuperrores($erroresactivos);

        
    }    
    
    public function cambioc4($x,$y,$z){
                       $erroresactivos = errors2::find(1);
        $erroresactivos->x4 = $x;
        $erroresactivos->y4 = $y;
                $erroresactivos->z4 = $z;

                $erroresactivos->save();
                $this->backuperrores($erroresactivos);

        
    } 
    
    public function cambioc5($x,$y,$z){
                       $erroresactivos = errors2::find(1);
        $erroresactivos->x5 = $x;
        $erroresactivos->y5 = $y;
                $erroresactivos->z5 = $z;

                $erroresactivos->save();
                $this->backuperrores($erroresactivos);

        
    } 
    
    public function cambioc6($x,$y,$z){
                       $erroresactivos = errors2::find(1);
        $erroresactivos->x6 = $x;
        $erroresactivos->y6 = $y;
                $erroresactivos->z6 = $z;

                $erroresactivos->save();
                $this->backuperrores($erroresactivos);

        
    } 
    
    public function cambioestadoarduino3($I1,$I2,$I5,$I10,$I11,$I32,$I33,$I34,$I35,$I40,$I42,$I43,$O36,$O37,$O38,$O39,$O44,$O45,$O46,$I48,$I49,$I50,$I51,$I52,$I53,$I54,$I55,$I56,$I57,$I58,$I59,$I60,$I61,$I62,$I63,$O48,$O49,$O50,$O51,$O52,$O53,$O54,$O55,$O56,$I64,$I65,$I66,$I67,$I68,$I69,$I70,$I71,$I72,$I82,$O338)
    {
        
        
        
            $erroresactivos = errors2::find(1);
                     $inputs = $erroresactivos->I;
                    $inputs[1]=$I1;
$inputs[10]=$I10;
$inputs[11]=$I11;
$inputs[2]=$I2;
$inputs[32]=$I32;
$inputs[33]=$I33;
$inputs[34]=$I34;
$inputs[35]=$I35;
$inputs[40]=$I40;
$inputs[42]=$I42;
$inputs[43]=$I43;
$inputs[48]=$I48;
$inputs[49]=$I49;
$inputs[5]=$I5;
$inputs[50]=$I50;
$inputs[51]=$I51;
$inputs[52]=$I52;
$inputs[53]=$I53;
$inputs[54]=$I54;
$inputs[55]=$I55;
$inputs[56]=$I56;
$inputs[57]=$I57;
$inputs[58]=$I58;
$inputs[59]=$I59;
$inputs[60]=$I60;
$inputs[61]=$I61;
$inputs[62]=$I62;
$inputs[63]=$I63;
$inputs[64]=$I64;
$inputs[65]=$I65;
$inputs[66]=$I66;
$inputs[67]=$I67;
$inputs[68]=$I68;
$inputs[69]=$I69;
$inputs[70]=$I70;
$inputs[71]=$I71;
$inputs[72]=$I72;
$inputs[82]=$I82;


                    $erroresactivos->I = $inputs;
            $erroresactivos->save();     
                     
              
                    $outputs = $erroresactivos->O;
                     $outputs[338]=$O338;
$outputs[36]=$O36;
$outputs[37]=$O37;
$outputs[38]=$O38;
$outputs[39]=$O39;
$outputs[44]=$O44;
$outputs[45]=$O45;
$outputs[46]=$O46;
$outputs[48]=$O48;
$outputs[49]=$O49;
$outputs[50]=$O50;
$outputs[51]=$O51;
$outputs[52]=$O52;
$outputs[53]=$O53;
$outputs[54]=$O54;
$outputs[55]=$O55;
$outputs[56]=$O56;

  
                         $erroresactivos->O = $outputs;
            $erroresactivos->save(); 
                $this->backuperrores($erroresactivos);

        
        
        
        if(intval($inputs[5]) == 0){
  $pg = file_get_contents('http://192.168.0.88/arduino/digital/11/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/34/0'); $pg = file_get_contents('http://192.168.0.88/arduino/digital/22/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/19/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/29/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/27/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/22/0');
            $client = new Client("ws://localhost:8989/ws");
$client->send("send /dev/ttyUSB0 !");   
$client->receive();
}
        else{
                $pg = file_get_contents('http://192.168.0.88/arduino/digital/34/1');
             $pg = file_get_contents('http://192.168.0.88/arduino/digital/11/1');
            
        }
        
                if(intval($inputs[10]) == 0){
            $client = new Client("ws://localhost:8989/ws");
$client->send("send /dev/ttyUSB0 !");   
$client->receive();
}
                 if(intval($inputs[11]) == 0){
            $client = new Client("ws://localhost:8989/ws");
$client->send("send /dev/ttyUSB0 !");   
$client->receive();
}
                if(intval($inputs[1]) == 0){
           $pg = file_get_contents('http://192.168.0.88/arduino/digital/11/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/22/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/19/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/29/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/27/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/22/0');
            $client = new Client("ws://localhost:8989/ws");
$client->send("send /dev/ttyUSB0 !");   
$client->receive();
}
        
              if(intval($inputs[2]) == 0){
           $pg = file_get_contents('http://192.168.0.88/arduino/digital/11/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/22/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/19/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/29/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/27/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/22/0');
            $client = new Client("ws://localhost:8989/ws");
$client->send("send /dev/ttyUSB0 !");   
$client->receive();
}
        // Procesos de emergencia
        
/*-- Plantilla para nuevos errores urgentes -- 

if($errorid == "" && $estado == ){
 $pg = file_get_contents('http://URL');
        
    }
    
 -------------------------------   */
        
// Guardar en la Base de datos
   

        // En caso de que no sea el primer error 
                     
                   
             }
            
    
    
    
    public function cambioestadoarduino4($O281,$O280,$O279,$O278,$O277,$O276,$O275,$I274,$I273,$I272,$O270,$O269,$O268,$O267,$O266,$O265,$O264,$O263,$I262,$I261,$I260,$I259,$I258,$I257,$I256)
    {
        
        
        
            $erroresactivos = errors2::find(1);
                     $inputs = $erroresactivos->I;
                   $inputs[256]=$i256;
$inputs[257]=$i257;
$inputs[258]=$i258;
$inputs[259]=$i259;
$inputs[260]=$i260;
$inputs[261]=$i261;
$inputs[262]=$i262;
$inputs[272]=$i272;
$inputs[273]=$i273;
$inputs[274]=$i274;


                    $erroresactivos->I = $inputs;
            $erroresactivos->save();     
                     
              
                    $outputs = $erroresactivos->O;
       $outputs[263]=$O263;
$outputs[264]=$O264;
$outputs[265]=$O265;
$outputs[266]=$O266;
$outputs[267]=$O267;
$outputs[268]=$O268;
$outputs[269]=$O269;
$outputs[270]=$O270;
$outputs[275]=$O275;
$outputs[276]=$O276;
$outputs[277]=$O277;
$outputs[278]=$O278;
$outputs[279]=$O279;
$outputs[280]=$O280;
$outputs[281]=$O281;


  
                         $erroresactivos->O = $outputs;
            $erroresactivos->save();  
                $this->backuperrores($erroresactivos);

        // Procesos de emergencia
        
/*-- Plantilla para nuevos errores urgentes -- 

if($errorid == "" && $estado == ){
 $pg = file_get_contents('http://URL');
        
    }
    
 -------------------------------   */
        
// Guardar en la Base de datos
   

        // En caso de que no sea el primer error 
                     
                   
             }
            
    
    public function cambioestadoarduino5($I304,$I305,$I306,$I307,$I308,$I309,$I310,$O304,$O305,$O306,$O307,$O308,$O309,$O310,$O311,$O312,$O313,$O314,$O315,$O316,$O317,$O318,$I320,$I321,$I322,$I323,$I324,$I325,$O322,$O323,$O324,$O325,$O326,$O327,$O328,$O329,$O330,$O331)
    {
        
        
        
            $erroresactivos = errors2::find(1);
                     $inputs = $erroresactivos->I;
                  $inputs[304]=$I304;
$inputs[305]=$I305;
$inputs[306]=$I306;
$inputs[307]=$I307;
$inputs[308]=$I308;
$inputs[309]=$I309;
$inputs[310]=$I310;
$inputs[320]=$I320;
$inputs[321]=$I321;
$inputs[322]=$I322;
$inputs[323]=$I323;
$inputs[324]=$I324;
$inputs[325]=$I325;



                    $erroresactivos->I = $inputs;
            $erroresactivos->save();     
                     
              
                    $outputs = $erroresactivos->O;
      $outputs[304]=$O304;
$outputs[305]=$O305;
$outputs[306]=$O306;
$outputs[307]=$O307;
$outputs[308]=$O308;
$outputs[309]=$O309;
$outputs[310]=$O310;
$outputs[311]=$O311;
$outputs[312]=$O312;
$outputs[313]=$O313;
$outputs[314]=$O314;
$outputs[315]=$O315;
$outputs[316]=$O316;
$outputs[317]=$O317;
$outputs[318]=$O318;
$outputs[322]=$O322;
$outputs[323]=$O323;
$outputs[324]=$O324;
$outputs[325]=$O325;
$outputs[326]=$O326;
$outputs[327]=$O327;
$outputs[328]=$O328;
$outputs[329]=$O329;
$outputs[330]=$O330;
$outputs[331]=$O331;



  
                         $erroresactivos->O = $outputs;
            $erroresactivos->save();  
                $this->backuperrores($erroresactivos);

        // Procesos de emergencia
        
/*-- Plantilla para nuevos errores urgentes -- 

if($errorid == "" && $estado == ){
 $pg = file_get_contents('http://URL');
        
    }
    
 -------------------------------   */
        
// Guardar en la Base de datos
   

        // En caso de que no sea el primer error 
                     
                   
             }
        
    
    
        public function cambioestadoarduino6($I107,$O96,$O105,$O107,$O108,$O109,$O110,$O111,$I128,$I129,$O128,$O129,$O130,$O131,$O132,$O133,$O134,$O135,$O136,$O137,$O138,$O139,$O140,$O141,$O142,$O143)
    {
        
        
        
            $erroresactivos = errors2::find(1);
                     $inputs = $erroresactivos->I;
               $inputs[107]=$I107;
$inputs[128]=$I128;
$inputs[129]=$I129;


                    $erroresactivos->I = $inputs;
            $erroresactivos->save();     
                     
              
                    $outputs = $erroresactivos->O;
       $outputs[105]=$O105;
$outputs[107]=$O107;
$outputs[108]=$O108;
$outputs[109]=$O109;
$outputs[110]=$O110;
$outputs[111]=$O111;
$outputs[128]=$O128;
$outputs[129]=$O129;
$outputs[130]=$O130;
$outputs[131]=$O131;
$outputs[132]=$O132;
$outputs[133]=$O133;
$outputs[134]=$O134;
$outputs[135]=$O135;
$outputs[136]=$O136;
$outputs[137]=$O137;
$outputs[138]=$O138;
$outputs[139]=$O139;
$outputs[140]=$O140;
$outputs[141]=$O141;
$outputs[142]=$O142;
$outputs[143]=$O143;
$outputs[96]=$O96;



  
                         $erroresactivos->O = $outputs;
            $erroresactivos->save();  
                $this->backuperrores($erroresactivos);

        // Procesos de emergencia
        
/*-- Plantilla para nuevos errores urgentes -- 

if($errorid == "" && $estado == ){
 $pg = file_get_contents('http://URL');
        
    }
    
 -------------------------------   */
        
// Guardar en la Base de datos
   

        // En caso de que no sea el primer error 
                     
                   
             }
        
    
      public function cambioestadoarduino7($O32,$O33,$O40,$O41,$I98,$I99,$I100,$I101,$I102,$I103,$I104,$I105,$O97,$O98,$O99,$O100,$O101,$O102,$O106,$I160,$I161,$I164,$O160,$O161)
    {
        
        
        
            $erroresactivos = errors2::find(1);
                     $inputs = $erroresactivos->I;
              $inputs[100]=$I100;
$inputs[101]=$I101;
$inputs[102]=$I102;
$inputs[103]=$I103;
$inputs[104]=$I104;
$inputs[105]=$I105;
$inputs[160]=$I160;
$inputs[161]=$I161;
$inputs[164]=$I164;
$inputs[98]=$I98;
$inputs[99]=$I99;



                    $erroresactivos->I = $inputs;
            $erroresactivos->save();     
                     
              
                    $outputs = $erroresactivos->O;
      $outputs[100]=$O100;
$outputs[101]=$O101;
$outputs[102]=$O102;
$outputs[106]=$O106;
$outputs[160]=$O160;
$outputs[161]=$O161;
$outputs[32]=$O32;
$outputs[33]=$O33;
$outputs[40]=$O40;
$outputs[41]=$O41;
$outputs[97]=$O97;
$outputs[98]=$O98;
$outputs[99]=$O99;




  
                         $erroresactivos->O = $outputs;
            $erroresactivos->save();  
                $this->backuperrores($erroresactivos);

        // Procesos de emergencia
        
/*-- Plantilla para nuevos errores urgentes -- 

if($errorid == "" && $estado == ){
 $pg = file_get_contents('http://URL');
        
    }
    
 -------------------------------   */
        
// Guardar en la Base de datos
   

        // En caso de que no sea el primer error 
                     
                   
             }
        
    
    
      public function cambioestadoarduino8($I351,$I352,$I353,$I354,$I360,$I326,$I327,$I328,$I332,$I333,$I334,$I335,$I336,$I361,$I362,$I363,$I364,$I365,$I368,$I369,$I370,$O337,$I380,$I381,$I382,$I383,$I384,$I387,$I388,$I398,$I399,$I400,$I401,$I402,$I405,$I406,$I407,$O341,$I417,$I418,$I419,$I420,$I421,$I424,$I425,$I426)
    {
              $erroresactivos = errors2::find(1);
                     $inputs = $erroresactivos->I;
              $inputs[326]=$I326;
$inputs[327]=$I327;
$inputs[328]=$I328;
$inputs[332]=$I332;
$inputs[333]=$I333;
$inputs[334]=$I334;
$inputs[335]=$I335;
$inputs[336]=$I336;
$inputs[351]=$I351;
$inputs[352]=$I352;
$inputs[353]=$I353;
$inputs[354]=$I354;
$inputs[360]=$I360;
$inputs[361]=$I361;
$inputs[362]=$I362;
$inputs[363]=$I363;
$inputs[364]=$I364;
$inputs[365]=$I365;
$inputs[368]=$I368;
$inputs[369]=$I369;
$inputs[370]=$I370;
$inputs[380]=$I380;
$inputs[381]=$I381;
$inputs[382]=$I382;
$inputs[383]=$I383;
$inputs[384]=$I384;
$inputs[387]=$I387;
$inputs[388]=$I388;
$inputs[398]=$I398;
$inputs[399]=$I399;
$inputs[400]=$I400;
$inputs[401]=$I401;
$inputs[402]=$I402;
$inputs[405]=$I405;
$inputs[406]=$I406;
$inputs[407]=$I407;
$inputs[417]=$I417;
$inputs[418]=$I418;
$inputs[419]=$I419;
$inputs[420]=$I420;
$inputs[421]=$I421;
$inputs[424]=$I424;
$inputs[425]=$I425;
$inputs[426]=$I426;



                    $erroresactivos->I = $inputs;
            $erroresactivos->save();     
                     
              
                    $outputs = $erroresactivos->O;
      $outputs[337]=$O337;
$outputs[341]=$O341;



  
                         $erroresactivos->O = $outputs;
            $erroresactivos->save();  
                $this->backuperrores($erroresactivos);

          
          /*
               if(intval($inputs[354]) <= 10){
  $pg = file_get_contents('http://192.168.0.88/arduino/digital/11/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/22/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/19/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/29/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/27/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/22/0');
            $client = new Client("ws://localhost:8989/ws");
$client->send("send /dev/ttyUSB0 !");   
$client->receive();
}
              if(intval($inputs[326]) == 0){
  $pg = file_get_contents('http://192.168.0.88/arduino/digital/11/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/22/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/19/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/29/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/27/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/22/0');
            $client = new Client("ws://localhost:8989/ws");
$client->send("send /dev/ttyUSB0 !");   
$client->receive();
}
              if(intval($inputs[370]) == 0){
  $pg = file_get_contents('http://192.168.0.88/arduino/digital/11/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/22/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/19/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/29/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/27/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/22/0');
            $client = new Client("ws://localhost:8989/ws");
$client->send("send /dev/ttyUSB0 !");   
$client->receive();
}
              if(intval($inputs[407]) <= 10){
  $pg = file_get_contents('http://192.168.0.88/arduino/digital/11/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/22/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/19/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/29/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/27/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/22/0');
            $client = new Client("ws://localhost:8989/ws");
$client->send("send /dev/ttyUSB0 !");   
$client->receive();
}
              if(intval($inputs[426]) == 0){
  $pg = file_get_contents('http://192.168.0.88/arduino/digital/11/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/22/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/19/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/29/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/27/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/22/0');
            $client = new Client("ws://localhost:8989/ws");
$client->send("send /dev/ttyUSB0 !");   
$client->receive();
}
          
                      if(intval($inputs[353]) <= 10){
  $pg = file_get_contents('http://192.168.0.88/arduino/digital/11/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/22/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/19/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/29/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/27/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/22/0');
            $client = new Client("ws://localhost:8989/ws");
$client->send("send /dev/ttyUSB0 !");   
$client->receive();
}
                if(intval($inputs[328]) == 0){
  $pg = file_get_contents('http://192.168.0.88/arduino/digital/11/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/22/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/19/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/29/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/27/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/22/0');
            $client = new Client("ws://localhost:8989/ws");
$client->send("send /dev/ttyUSB0 !");   
$client->receive();
}
                  if(intval($inputs[368]) == 0){
  $pg = file_get_contents('http://192.168.0.88/arduino/digital/11/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/22/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/19/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/29/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/27/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/22/0');
            $client = new Client("ws://localhost:8989/ws");
$client->send("send /dev/ttyUSB0 !");   
$client->receive();
}
          
                          if(intval($inputs[387]) <= 10){
  $pg = file_get_contents('http://192.168.0.88/arduino/digital/11/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/22/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/19/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/29/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/27/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/22/0');
            $client = new Client("ws://localhost:8989/ws");
$client->send("send /dev/ttyUSB0 !");   
$client->receive();
}
                   if(intval($inputs[405]) <= 10){
  $pg = file_get_contents('http://192.168.0.88/arduino/digital/11/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/22/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/19/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/29/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/27/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/22/0');
            $client = new Client("ws://localhost:8989/ws");
$client->send("send /dev/ttyUSB0 !");   
$client->receive();
}
          
                   if(intval($inputs[424]) == 0){
  $pg = file_get_contents('http://192.168.0.88/arduino/digital/11/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/22/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/19/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/29/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/27/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/22/0');
            $client = new Client("ws://localhost:8989/ws");
$client->send("send /dev/ttyUSB0 !");   
$client->receive();
}
        // Procesos de emergencia
        
/*-- Plantilla para nuevos errores urgentes -- 

if($errorid == "" && $estado == ){
 $pg = file_get_contents('http://URL');
        
    }
    */
 
        
// Guardar en la Base de datos
   

        // En caso de que no sea el primer error 
                     
                   
             }
    
    
     public function cambioestadoarduino9($I338,$I341,$I345,$I357,$I358,$I359,$O333,$O332,$O335,$O336,$I372,$I373,$I374,$I375,$I378,$I379,$I389,$I390,$I391,$I392,$I393,$I396,$I397,$O339,$O340,$I408,$I409,$I410,$I411,$I412,$I415,$I416,$O342,$I427,$I428,$I429,$I430,$I431,$I434,$I435,$I436)
    {
              $erroresactivos = errors2::find(1);
                     $inputs = $erroresactivos->I;
              $inputs[338]=$I338;
$inputs[341]=$I341;
$inputs[345]=$I345;
$inputs[357]=$I357;
$inputs[358]=$I358;
$inputs[359]=$I359;
$inputs[372]=$I372;
$inputs[373]=$I373;
$inputs[374]=$I374;
$inputs[375]=$I375;
$inputs[378]=$I378;
$inputs[379]=$I379;
$inputs[389]=$I389;
$inputs[390]=$I390;
$inputs[391]=$I391;
$inputs[392]=$I392;
$inputs[393]=$I393;
$inputs[396]=$I396;
$inputs[397]=$I397;
$inputs[408]=$I408;
$inputs[409]=$I409;
$inputs[410]=$I410;
$inputs[411]=$I411;
$inputs[412]=$I412;
$inputs[415]=$I415;
$inputs[416]=$I416;
$inputs[427]=$I427;
$inputs[428]=$I428;
$inputs[429]=$I429;
$inputs[430]=$I430;
$inputs[431]=$I431;
$inputs[434]=$I434;
$inputs[435]=$I435;
$inputs[436]=$I436;




                    $erroresactivos->I = $inputs;
            $erroresactivos->save();     
                     
              
                    $outputs = $erroresactivos->O;
     $outputs[332]=$O332;
$outputs[333]=$O333;
$outputs[335]=$O335;
$outputs[336]=$O336;
$outputs[339]=$O339;
$outputs[340]=$O340;
$outputs[342]=$O342;



  
                         $erroresactivos->O = $outputs;
            $erroresactivos->save();  
                $this->backuperrores($erroresactivos);

         
                 /*           if(intval($inputs[379]) == 0){
  $pg = file_get_contents('http://192.168.0.88/arduino/digital/11/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/22/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/19/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/29/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/27/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/22/0');
            $client = new Client("ws://localhost:8989/ws");
$client->send("send /dev/ttyUSB0 !");   
$client->receive();
}*/

/*
         
                    if(intval($inputs[389]) <= 10){
  $pg = file_get_contents('http://192.168.0.88/arduino/digital/11/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/22/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/19/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/29/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/27/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/22/0');
            $client = new Client("ws://localhost:8989/ws");
$client->send("send /dev/ttyUSB0 !");   
$client->receive();
}
                 if(intval($inputs[397]) <= 10){
  $pg = file_get_contents('http://192.168.0.88/arduino/digital/11/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/22/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/19/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/29/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/27/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/22/0');
            $client = new Client("ws://localhost:8989/ws");
$client->send("send /dev/ttyUSB0 !");   
$client->receive();
}
         
                 if(intval($inputs[416]) <= 10){
  $pg = file_get_contents('http://192.168.0.88/arduino/digital/11/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/22/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/19/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/29/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/27/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/22/0');
            $client = new Client("ws://localhost:8989/ws");
$client->send("send /dev/ttyUSB0 !");   
$client->receive();
}
         
                 if(intval($inputs[436]) <= 10){
  $pg = file_get_contents('http://192.168.0.88/arduino/digital/11/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/22/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/19/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/29/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/27/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/22/0');
            $client = new Client("ws://localhost:8989/ws");
$client->send("send /dev/ttyUSB0 !");   
$client->receive();
}
         
                 if(intval($inputs[341]) <= 10){
  $pg = file_get_contents('http://192.168.0.88/arduino/digital/11/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/22/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/19/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/29/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/27/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/22/0');
            $client = new Client("ws://localhost:8989/ws");
$client->send("send /dev/ttyUSB0 !");   
$client->receive();
}
               if(intval($inputs[378]) == 0){
  $pg = file_get_contents('http://192.168.0.88/arduino/digital/11/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/22/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/19/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/29/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/27/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/22/0');
            $client = new Client("ws://localhost:8989/ws");
$client->send("send /dev/ttyUSB0 !");   
$client->receive();
}
         if(intval($inputs[434]) <= 10){
  $pg = file_get_contents('http://192.168.0.88/arduino/digital/11/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/22/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/19/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/29/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/27/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/22/0');
            $client = new Client("ws://localhost:8989/ws");
$client->send("send /dev/ttyUSB0 !");   
$client->receive();
}
         
              if(intval($inputs[396]) <= 10){
  $pg = file_get_contents('http://192.168.0.88/arduino/digital/11/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/22/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/19/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/29/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/27/0');  $pg = file_get_contents('http://192.168.0.88/arduino/digital/22/0');
            $client = new Client("ws://localhost:8989/ws");
$client->send("send /dev/ttyUSB0 !");   
$client->receive();
}
         */
         return "Bien";
        // Procesos de emergencia
        
/*-- Plantilla para nuevos errores urgentes -- 

if($errorid == "" && $estado == ){
 $pg = file_get_contents('http://URL');
        
    }
    
 -------------------------------   */
        
// Guardar en la Base de datos
   

        // En caso de que no sea el primer error 
                     
                   
             }
    
    
    
        public function mostrarestados()
    {
        $erroresactivos = errors2::find(1);
        $erroresactivos = $erroresactivos;
    return $erroresactivos;
      
            
            
            //Codigo para mandar pause al tinyG.
 /*           
$client = new Client("ws://localhost:8989/ws");
$client->send("send /dev/ttyUSB0 !");   
var_dump($client->receive());
            */
        
        
    }
    
}
