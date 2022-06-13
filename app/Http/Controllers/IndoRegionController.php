<?php

namespace App\Http\Controllers;

use App\Models\Regency;
use Illuminate\Http\Request;

class IndoRegionController extends Controller
{
    public function getKabupaten(Request $request){
        $kabupaten = Regency::where("province_id",$request->province_id)->pluck('id','name');
        return response()->json($kabupaten);
    }
}
