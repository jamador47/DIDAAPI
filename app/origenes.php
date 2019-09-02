<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class origenes extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'x1', 'y1','a1','z1',
        'x2', 'y2','a2','z2',
        'x3', 'y3','a3','z3',
        'x4', 'y4','a4','z4',
        'x5', 'y5','a5','z5',
        'x6', 'y6','a6','z6',
        'x7', 'y7','a7','z7',
        'x8', 'y8','a8','z8',
        'x9', 'y9','a9','z9',
        'x10', 'y10','a10','z10',
        'x11', 'y11','a11','z11',
        'x12', 'y12','a12','z12',
        'x13', 'y13','a13','z13',
        'x14', 'y14','a14','z14',
        'x15', 'y15','a15','z15',
        'x16', 'y16','a16','z16',
        'xactivo', 'yactivo','aactivo','zactivo',
        'coordactivas'

    ];
    
   
     public $table = "origenes";


}

