<?php

namespace App\Models;

use App\Models\User;
use App\Models\Motor;
use Illuminate\Support\Facades\DB;
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

    public function Motor()
    {
        return $this->belongsTo(Motor::class, 'jenis_motor', 'uuid');
    }

    public function getBiodataUser($par)
    {
        return DB::table('biodatas')
                ->leftJoin('users', 'users.uuid', '=', 'biodatas.user_uuid')
                ->leftJoin('motors', 'motors.uuid', '=', 'biodatas.jenis_motor')
                ->leftJoin('provinces', 'provinces.id', '=', 'biodatas.province_id')
                ->leftJoin('regencies', 'regencies.id', '=', 'biodatas.city_id')
                ->where('biodatas.uuid', '=', $par)
                ->get();
        
    }
}
