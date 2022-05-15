<?php

namespace App\Models;

use App\Models\Komunitas;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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

    public function komunitas()
{
    return $this->hasMany(Komunitas::class);
}

}
