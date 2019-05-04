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
        '019', '0343', 'I5', 'I22', 'I21', 'I118', 'I10', 'I11', 'I1', 'I31', 'I30', 'I29', 'I28', 'I2', 'I27'
    ];
     public $table = "errors";


}

