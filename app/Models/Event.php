<?php

namespace App\Models;

use App\Models\Komunitas;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Event extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public function komunitas()
{
    return $this->belongsTo(Komunitas::class,'created_by','uuid'); 
}

public function attendant()
{
    return $this->hasMany(Attendant::class,'event_uuid','uuid'); 
}

    public function getRouteKeyName()
{
    return 'uuid';
}
}
