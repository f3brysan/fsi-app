<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AnggotaKomunitas extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public function getRouteKeyName()
{
    return 'uuid';
}

    public function Biodata()
{
    return $this->hasOne(AnggotaKomunitas::class, 'biodata_uuid', 'uuid');        
}

public function getKomunitasUser($parr)
    {
        return DB::table('anggota_komunitas')
                ->select('*')
                ->leftJoin('komunitas', 'komunitas.uuid', '=', 'anggota_komunitas.komunitas_uuid')                
                ->where('anggota_komunitas.biodata_uuid', '=', $parr)                
                ->get();
        
    }

}
