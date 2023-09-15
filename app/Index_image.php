<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Index_image extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'index_image1','index_image2','index_image3','index_image4'
    ];
    protected $table = 'index_images';
}
