<?php

namespace App\Http\Controllers;

use Ramsey\Uuid\Uuid;
use App\Models\Biodata;
use App\Models\Komunitas;
use App\Models\AnggotaKomunitas;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateAnggotaKomunitasRequest;

class AnggotaKomunitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        
    }

    public function session()
    {
        $session = Auth::user()->uuid;        
        $biodata = Biodata::where('user_uuid', $session)->first();
        return $biodata;
    }

    public function index()
    {
        return  'wkwkw';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $komunitas = Komunitas::all();
        $session = Auth::user()->uuid;        
        $biodata = Biodata::where('user_uuid', $session)->first();
       
        
        // dd($biodata);

        return view('biodata.join', compact('komunitas', 'biodata'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAnggotaKomunitasRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'join_komunitas' => 'required'            
        ]);

        $uuid = Uuid::uuid4();
        $uuid_biodata = $this->session()->uuid;        

        $join_komunitas = AnggotaKomunitas::create([
            'uuid' => $uuid,
            'komunitas_uuid' => $request->join_komunitas,
            'biodata_uuid' => $uuid_biodata                             
        ]);
        if ($join_komunitas) {
            return redirect()
            ->route('biodata.show', $uuid_biodata)
            ->with(['success' => 'Data Komunitas berhasil ditambahkan.']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AnggotaKomunitas  $anggotaKomunitas
     * @return \Illuminate\Http\Response
     */
    public function show(AnggotaKomunitas $anggotaKomunitas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AnggotaKomunitas  $anggotaKomunitas
     * @return \Illuminate\Http\Response
     */
    public function edit(AnggotaKomunitas $anggotaKomunitas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAnggotaKomunitasRequest  $request
     * @param  \App\Models\AnggotaKomunitas  $anggotaKomunitas
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAnggotaKomunitasRequest $request, AnggotaKomunitas $anggotaKomunitas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AnggotaKomunitas  $anggotaKomunitas
     * @return \Illuminate\Http\Response
     */
    public function destroy(AnggotaKomunitas $anggotaKomunitas)
    {
        //
    }
}
