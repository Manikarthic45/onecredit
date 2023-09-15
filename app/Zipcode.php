<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Zipcode extends Authenticatable
{
    use HasFactory, Notifiable;

   
    protected $table = 'zipcodelist';
}