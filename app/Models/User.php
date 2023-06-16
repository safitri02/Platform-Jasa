<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    use SoftDeletes;

    protected $date = [
        'updated_at',
        'created_at',
        'deleted_at'
    ];

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    public function detailuser(){
        return $this->hasOne('DetailUser::class', 'users_id');
    }

    public function service(){
        return $this->hasMany('Service::class', 'users_id');
    }

    public function order_buyer(){
        return $this->hasMany('Order::class', 'buyer_id');
    }

    public function order_freelance(){
        return $this->hasMany('Order::class', 'freelancer_id');
    }

    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret'
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
