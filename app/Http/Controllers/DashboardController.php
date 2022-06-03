<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $session = Auth::user()->uuid;
        $biodata = Biodata::where('user_uuid', $session)->first();

        if ($biodata){
            return view('admin.dashboard', [
                'biodata' => $biodata
            ]);
        }
        else {
            return redirect()
            ->route('biodata.create')
            ->with(['error' => 'Harap isi biodata Anda terlebih dahulu']);
        }   
       
    }
}
