<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use Illuminate\Http\Request;
use App\Models\AnggotaKomunitas;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->Biodata = new Biodata();
        $this->AnggotaKomunitas = new AnggotaKomunitas();
    }

    public function index()
    {
        $session = Auth::user()->uuid;
        $biodata = Biodata::where('user_uuid', $session)->first();
        $parr = $biodata->uuid;
        $komunitas = $this->AnggotaKomunitas->getKomunitasUser($parr)->first(); 
        
        // dd($komunitas);
        

        if ($biodata){
            return view('admin.dashboard', compact('biodata', 'komunitas'));
        }
        else {
            return redirect()
            ->route('biodata.create')
            ->with(['error' => 'Harap isi biodata Anda terlebih dahulu']);
        }   
       
    }
}
