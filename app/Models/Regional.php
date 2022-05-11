<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Regional extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'uuid',
        'content',
        'slug',
        'picture',
    ];

    public function getRouteKeyName()
{
    return 'uuid';
}
}
