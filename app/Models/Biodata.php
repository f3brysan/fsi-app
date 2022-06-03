<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Biodata extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public function getRouteKeyName()
{
    return 'uuid';
}

    public function User()
    {
        return $this->hasOne(User::class, 'user_uuid', 'uuid');
    }
}
