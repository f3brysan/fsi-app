<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Poin extends Model
{
    use HasFactory;

    public function getUserDebitPoin($parr)
    {
        return DB::table('attendants')->sum('attendants.point');
        
    }
}
