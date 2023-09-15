<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Subcategorytype extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'sccode', 'scname', 'catcode', 'color'
    ];
    protected $table = 'zdp_subcat';
}
