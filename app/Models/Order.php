<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory;

    use SoftDeletes;
    protected $table = 'order';

    protected $fillable =[
        'buyer_id',
        'freelance_id',
        'file',
        'note',
        'expired',
        'order_status_id'
    ];

    public function user_buyer(){
        return $this->belongsTo('User::class', 'buyer_id', 'id');
    }

    public function user_freelance(){
        return $this->belongsTo('User::class', 'freelance_id', 'id');
    }

    public function service(){
        return $this->belongsTo('Service::class', 'service_id', 'id');
    }

    public function order_status(){
        return $this->belongsTo('OrderStatus::class', 'order_status_id', 'id');
    }

}
