<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model
{
    use HasFactory;

    use SoftDeletes;
    protected $table = 'service';

    protected $fillable =[
        'user_id',
        'title',
        'description',
        'revision_limit',
        'price',
        'note'
    ];

    public function user(){
        return $this->belongsTo('User::class', 'users_id', 'id');
    }

    public function advantage_user() {
        return $this->hasMany('AdvantageUser::class', 'service_id');
    }

    public function advantage_service() {
        return $this->hasMany('AdvantageService::class', 'service_id');
    }

    public function thumnail_service() {
        return $this->hasMany('ThumbnailService::class', 'service_id');
    }

    public function tagline() {
        return $this->hasMany('Tagline::class', 'service_id');
    }

    public function order() {
        return $this->hasMany('Order::class', 'service_id');
    }

}
