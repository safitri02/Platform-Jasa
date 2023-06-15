<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DetailUser extends Model
{
    // use HasFactory;
    use SoftDeletes;

    protected $table = 'detail_user';

    protected $date = [
        'updated_at',
        'created_at',
        'deleted_at'
    ];

    protected $fillable =[
        'user_id',
        'photo',
        'role',
        'contact_number',
        'biography'
    ];

}
