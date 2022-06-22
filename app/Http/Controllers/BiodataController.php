<?php

namespace App\Http\Controllers;

use App\Models\AnggotaKomunitas;
use App\Models\Motor;
use Ramsey\Uuid\Uuid;
use App\Models\Biodata;
use App\Models\Komunitas;
use App\Models\Province;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BiodataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->Biodata = new Biodata();
        $this->AnggotaKomunitas = new AnggotaKomunitas();
    }

    public function session()
    {

    }
    
     public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $prov = Province::all();
        $motor = Motor::all();
        return view('admin.biodata.create', compact('prov','motor'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'fullname' => 'required|string|max:100',
            'nickname' => 'string|max:50',
            'no_hp' => 'digits_between:9,14',
            'birth_place' => 'required|string|max:50',
            'birth_day' => 'required',
            'province_id' => 'required',
            'city_id' => 'required',
            'domisili' => 'required|max:250',
            'gender' => 'required',
            'blood' => 'required',
            'jenis_motor' => 'required',
            'no_rangka' => 'required|unique:biodatas,no_rangka',
            'no_mesin' => 'required|unique:biodatas,no_mesin',
            'no_sim' => 'required|unique:biodatas,no_sim',
            'picture' => 'image|file|max:1024'
        ]);

        $uuid = Uuid::uuid4();
        $uuid_user = Auth::user()->uuid;

        $biodata = Biodata::create([
            'uuid' => $uuid,
            'user_uuid' => $uuid_user,
            'fullname' => $request->fullname,
            'nickname' => $request->nickname,
            'no_hp' => $request->no_hp,
            'birth_place' => $request->birth_place,
            'birth_day' => $request->birth_day,
            'province_id' => $request->province_id,
            'city_id' => $request->city_id,
            'domisili' => $request->domisili,
            'gender' => $request->gender,
            'blood' => $request->blood,
            'jenis_motor' => $request->jenis_motor,
            'no_rangka' => $request->no_rangka,
            'no_mesin' => $request->no_mesin,
            'no_sim' => $request->no_sim,
            'picture' => $request->file('picture')->store('anggota-photos')
        ]);

        return redirect('home')->with('success', 'Registrasi Anda berhasil !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Biodata  $biodata
     * @return \Illuminate\Http\Response
     */
    public function show(Biodata $biodatum)
    {
        $parr = $biodatum->uuid;
        $biodata = $this->Biodata->getBiodataUser($parr)->first();
        $komunitas = $this->AnggotaKomunitas->getKomunitasUser($parr)->first();        

        // dd($komunitas);
         return view ('admin.biodata.show',compact('parr', 'biodata', 'komunitas'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Biodata  $biodata
     * @return \Illuminate\Http\Response
     */
    public function edit(Biodata $biodata)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Biodata  $biodata
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Biodata $biodata)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Biodata  $biodata
     * @return \Illuminate\Http\Response
     */
    public function destroy(Biodata $biodata)
    {
        //
    }
}
