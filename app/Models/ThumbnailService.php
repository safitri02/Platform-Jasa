<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ThumbnailService extends Model
{
    use HasFactory;

    use SoftDeletes;
    protected $table = 'thumbnail_service';

    protected $fillable =[
        'service_id',
        'thumnail',
    ];

    public function service(){
        return $this->belongsTo('Service::class', 'service_id', 'id');
    }
}
