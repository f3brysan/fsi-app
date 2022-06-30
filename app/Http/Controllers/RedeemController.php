<?php

namespace App\Http\Controllers;

use App\Models\Gift;
use App\Models\Poin;
use App\Models\Biodata;
use App\Models\Redeem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedeemController extends Controller
{
    public function __construct()
    {
        $this->Poin = new Poin();
        $this->Redeem = new Redeem();
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
        $gifts = $this->Redeem->getGiftAvailable();
        // dd($gifts);
        return view('poin.gift',compact('gifts', 'biodata', 'poin'));
    }
}
