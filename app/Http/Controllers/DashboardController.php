<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use Illuminate\Http\Request;
use App\Models\AnggotaKomunitas;
use App\Models\Event;
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
        $events = Event::with('komunitas')->where('its_end','>',date('Y-m-d'))->get();
        $parr = $biodata->uuid;
        $komunitas = $this->AnggotaKomunitas->getKomunitasUser($parr)->first(); 
        
        // dd($avaliableEvent);
        

        if ($biodata){
            return view('dashboard', compact('biodata', 'komunitas', 'events'));
        }
        else {
            return redirect()
            ->route('biodata.create')
            ->with(['error' => 'Harap isi biodata Anda terlebih dahulu']);
        }   
       
    }
}
