<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Fabric extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'plantcode', 'unitcode', 'zonecode', 'zonename'
    ];
    protected $table = 'fabric_type';
}