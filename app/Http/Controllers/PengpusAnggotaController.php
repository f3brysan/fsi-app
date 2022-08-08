<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PengpusAnggotaController extends Controller
{
    public function session()
    {
        $session = Auth::user()->uuid;        
        $biodata = Biodata::where('user_uuid', $session)->first();
        return $biodata;
    }

    public function index()
    {
        $biodata = $this->session();
        $anggotas = Biodata::with('user','AnggotaKomunitas.Komunitas')
                            ->get();
        // dd($anggotas);

        return view('master.anggota.index',compact('anggotas','biodata'));
    }
}
