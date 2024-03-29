<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gift extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public function getRouteKeyName()
{
    return 'uuid';
}

public function redeem()
    {
        return $this->hasOne(Redeem::class, 'uuid', 'gift_id');
    }

}
