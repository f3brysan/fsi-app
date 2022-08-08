<?php

namespace App\Models;

use App\Models\User;
use App\Models\Motor;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Permission\Traits\HasRoles;

class Biodata extends Model
{
    use HasFactory, HasRoles;

    protected $guarded = [
        'id'
    ];

    protected $guard_name = 'web';

    public function getRouteKeyName()
{
    return 'uuid';
}

    public function User()
    {
        return $this->belongsTo(User::class, 'user_uuid', 'uuid');
    }

    public function Motor()
    {
        return $this->belongsTo(Motor::class, 'jenis_motor', 'uuid');
    }

    public function AnggotaKomunitas()
    {
        return $this->hasOne(AnggotaKomunitas::class, 'biodata_uuid', 'uuid' );
    }

    public function Attendant()
    {
        return $this->hasMany(Attendant::class, 'biodata_uuid', 'uuid' );
    }

    public function getBiodataUser($parr)
    {
        return DB::table('biodatas')
                ->select('*', 'provinces.name AS provinsi', 'regencies.name AS kota')
                ->leftJoin('users', 'users.uuid', '=', 'biodatas.user_uuid')
                ->leftJoin('motors', 'motors.uuid', '=', 'biodatas.jenis_motor')
                ->leftJoin('provinces', 'provinces.id', '=', 'biodatas.province_id')
                ->leftJoin('regencies', 'regencies.id', '=', 'biodatas.city_id')
                ->where('biodatas.uuid', '=', $parr)
                ->get();
        
    }
}
