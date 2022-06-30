<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendant extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public function getRouteKeyName()
{
    return 'uuid';
}

    public function event()
    {
        return $this->belongsTo(Event::class,'event_uuid', 'uuid');
        
    }

    public function biodata()
    {
        return $this->belongsTo(Biodata::class,'biodata_uuid', 'uuid');
        
    }

}