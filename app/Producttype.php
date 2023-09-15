<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use DB;
use Session;

class Producttype extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'empid', 'plant','unit', 'zone','fromdt', 'todt'
    ];
    protected $table = 'producttype';

    
}
