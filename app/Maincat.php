<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Maincat extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'catcode', 'cattname', 'color'
    ];
    protected $table = 'maincat';
}