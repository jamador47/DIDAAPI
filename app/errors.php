<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class errors extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'O', 'I','dx1','dx2','sx1','sx2','x1','paletasmesaa','presionsx1','presionsx2'
        ,'presiondx1','presiondx2',
        'x2','x3',
        'x4','x5','x6','y1',
        'y2','y3',
        'y4','y5','y6',
        'z1',
        'sacarmesaa',
        'sacarmesay',
        'z2','z3',
        'z4','z5','z6','alarmatiny','estadoerror','encoder','estadobotonmesaizq','estadobotonmesader'
    ];
    
   
     public $table = "errors";


}

