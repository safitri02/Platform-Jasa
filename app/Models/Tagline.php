<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tagline extends Model
{
    use HasFactory;

    use SoftDeletes;
    protected $table = 'tagline';

    protected $fillable =[
        'service_id',
        'tagline',
    ];

    public function service(){
        return $this->belongsTo('Service::class', 'service_id', 'id');
    }
}
