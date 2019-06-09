<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class posicionadores extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'a1f1', 'a1f2','a1l1','a2f1', 'a2f2','a2l1','a2l2',
        'y1f1', 'y1f2','y1l1','y2f1', 'y2f2','y2l1','y2l2','entregaon'
    ];
    
   
     public $table = "posicionadores";


}

