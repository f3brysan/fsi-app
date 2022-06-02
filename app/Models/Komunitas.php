<?php

namespace App\Models;

use App\Models\Regional;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Komunitas extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $fillable = [
        'uuid',
        'nama',
        'slug',
        'singkatan',
        'tgl_berdiri',
        'picture',
        'content',
        'regional_id',
        'accepted_at'
    ];
    
    public function getRouteKeyName()
{
    return 'uuid';
}

    public function getScoutKeyName()
    {
        return 'regional_id';
    }

    public function regional()
{
    return $this->belongsTo(Regional::class,'regional_id','uuid')->orderBy('nama', 'desc'); 
}

}
