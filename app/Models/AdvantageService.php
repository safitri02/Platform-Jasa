<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AdvantageService extends Model
{
    use HasFactory;

    use SoftDeletes;
    protected $table = 'advantage_service';

    protected $fillable =[
        'service_id',
        'advantage',
    ];

    public function service(){
        return $this->belongsTo('Service::class', 'service_id', 'id');
    }
}
