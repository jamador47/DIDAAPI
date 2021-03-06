<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class errors2 extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'O', 'I','dx1','dx2','sx1','sx2','x1','paletasmesas',
        'x2','x3',
        'x4','x5','x6','y1',
        'y2','y3',
        'y4','y5','y6',
        'z1',
        'z2','z3',
        'z4','z5','z6','alarmatiny','estadoerror','encoder','estadobotonmesaizq','estadobotonmesader','presionbotonmesaizq','presionbotonmesader'
    ];
    
    protected $casts = [
        'O' => 'array',
        'I' => 'array',
        'dx1' => 'boolean',
                'dx2' => 'boolean',
                'paletasmesas' => 'boolean',
        'sx1' => 'boolean',
        'sx2' => 'boolean',
        'alarmatiny' => 'boolean',
                'estadoerror' => 'boolean', 'encoder' => 'boolean',

        'x1' => 'float',
                'x2' => 'float',

                'x3' => 'float',

                'x4' => 'float',

                'x5' => 'float',

                'x6' => 'float',

                'y1' => 'float',
                        'y2' => 'float',
                'y3' => 'float',
                'y4' => 'float',
                'y5' => 'float',
                'y6' => 'float',         
        'z1' => 'float',
                        'z2' => 'float',
                'z3' => 'float',
                'z4' => 'float',
                'z5' => 'float',
                'z6' => 'float',
                'estadobotonmesaizq'=>'integer',
                'estadobotonmesader'=>'integer',
                'presionbotonmesaizq'=>'boolean',
                'presionbotonmesader'=>'boolean'


        

        
    ];
     public $table = "errors";


}

