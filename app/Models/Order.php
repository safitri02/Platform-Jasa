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
}
