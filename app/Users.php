<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use DB;
use Session;

class Users extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'empid', 'plant','unit', 'zone','fromdt', 'todt'
    ];
    protected $table = 'zdp_users';

    public static function  getAdmininfo($empcode,$pw)
    {
        $userdata= DB::table('admin')->where('username', $empcode)->where('password', $pw)->where('status', "")->count();
        if($userdata>0){$adminid= DB::table('admin')->where('password', $pw)->first()->id;
            session()->put('adminid', $adminid);
            $adminid = session()->get('adminid');}
        return $userdata;
    }
}
