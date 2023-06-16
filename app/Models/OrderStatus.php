<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderStatus extends Model
{
    use HasFactory;

    use SoftDeletes;
    protected $table = 'order_status';

    protected $fillable =[
        'name',
    ];

    function order() {
        return $this->hasMany('Order::class', 'order_status_id');
    }
}
