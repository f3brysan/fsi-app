<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Redeem extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public function getRouteKeyName()
{
    return 'uuid';
}

    public function gift()
    {
        return $this->hasOne(Gift::class, 'gift_id', 'uuid');
    }

    public function getGiftAvailable()
    {
        return DB::table('gifts')
                ->select('*', DB::raw('COUNT(id) as total'))              
                ->whereNotIn('gifts.uuid', function($query){
                    $query->select('redeems.gifts_id')->from('redeems');
                })
                ->groupBy('nama')
                ->get();
        
    }

}
