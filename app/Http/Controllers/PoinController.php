<?php

namespace App\Http\Controllers;

use App\Models\Poin;
use App\Models\Event;
use App\Models\Biodata;
use App\Models\Attendant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PoinController extends Controller
{
    public function __construct()
    {
        $this->Poin = new Poin();
    }

    public function session()
    {
        $session = Auth::user()->uuid;
        $biodata = Biodata::where('user_uuid', $session)->first();
        return $biodata;
    }
    
    public function index()
    {
        $biodata = $this->session();
        $parr = $biodata;
        $poin = $this->Poin->getUserDebitPoin($parr);
        $events = Attendant::with('event')
        ->where('biodata_uuid', $biodata->uuid)
        ->where('is_attendat', 1)
        ->orderby('updated_at', 'DESC')       
        ->get();
        // dd($events);
        return view ('poin', compact('biodata', 'poin', 'events'));
         
    }
}
