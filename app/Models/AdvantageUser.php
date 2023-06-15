<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AdvantageUser extends Model
{
    use HasFactory;

    use SoftDeletes;
    protected $table = 'advantage_user';

    protected $fillable =[
        'service_id',
        'advantage',
    ];
}
