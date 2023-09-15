<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Tucas_product extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'plantid', 'unitcode', 'unitname'
    ];
    protected $table = 'tucas_product';
}
