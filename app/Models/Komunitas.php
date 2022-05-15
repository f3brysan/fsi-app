<?php

namespace App\Models;

use App\Models\Regional;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Komunitas extends Model
{
    use HasFactory;

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
    

    public function regional()
{
    return $this->belongsTo(Regional::class,'regional_id','uuid'); 
}

}