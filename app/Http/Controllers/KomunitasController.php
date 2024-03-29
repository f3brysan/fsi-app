<?php

namespace App\Http\Controllers;

use Ramsey\Uuid\Uuid;
use App\Models\Biodata;
use App\Models\Regional;
use App\Models\Komunitas;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\AnggotaKomunitas;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class KomunitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function session()
    {
        $session = Auth::user()->uuid;        
        $biodata = Biodata::where('user_uuid', $session)->first();
        return $biodata;
    }

    public function index()
    {
        $biodata = $this->session();
        $komunitas = Komunitas::with('regional')->orderBy('nama')->get();
        return view('master.komunitas.index', compact('komunitas', 'biodata'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $biodata = $this->session();
        $regionals = Regional::orderBy('nama')->get();
        return view('master.komunitas.create', compact('regionals', 'biodata'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required|string|max:100',
            'singkatan' => 'required|string|max:50',
            'tgl_berdiri' => 'required',
            'picture' => 'image|file|max:1024'            
        ]);

        $uuid = Uuid::uuid4();

        if($request->picture == NULL){
            $komunitas = Komunitas::create([
                'uuid' => $uuid,
                'nama' => $request->nama,
                'slug' => Str::slug($request->nama),
                'singkatan' => $request->singkatan,
                'tgl_berdiri' => $request->tgl_berdiri,
                'content' => $request->content,
                'regional_id' => $request->regional_id                
            ]);        
        }
        else{
            $komunitas = Komunitas::create([
                'uuid' => $uuid,
                'nama' => $request->nama,
                'slug' => Str::slug($request->nama),
                'singkatan' => $request->singkatan,
                'tgl_berdiri' => $request->tgl_berdiri,
                'content' => $request->content,
                'regional_id' => $request->regional_id,
                'picture' => $request->file('picture')->store('komunitas-logo')
            ]);    
        }
        

        if ($komunitas) {
            return redirect()
            ->route('komunitas.index')
            ->with(['success' => 'Data Komunitas '.$request->nama.' berhasil ditambahkan.']);
        }
        else {
            return redirect()
                ->back()
                ->withInput()
                ->with(['error' => 'Maaf ada kesalahan yang terjadi.']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Komunitas  $komunitas
     * @return \Illuminate\Http\Response
     */
    public function show(Komunitas $komunita)
    {
        $biodata = $this->session();
        $komunitas = Komunitas::where('uuid',$komunita->uuid)
                ->with('Regional')
                ->first();        
        $anggota = AnggotaKomunitas::where('komunitas_uuid',$komunita->uuid)
                ->with('Biodata','Biodata.User','Biodata.Motor')
                ->get();
                // dd($anggota);
        return view('master.komunitas.show',compact('biodata','komunitas','anggota'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Komunitas  $komunitas
     * @return \Illuminate\Http\Response
     */
    public function edit(Komunitas $komunita)
    {   
        $biodata = $this->session();
        $get = Komunitas::findOrFail($komunita->id);
        // $get = dd();
        $regionals = Regional::orderBy('nama')->get();
        return view('master.komunitas.edit', compact('get', 'regionals', 'biodata'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Komunitas  $komunitas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Komunitas $komunita)
    {
        $this->validate($request, [
            'nama' => 'required|string|max:100',
            'singkatan' => 'required|string|max:50',
            'tgl_berdiri' => 'required'
        ]);

        $komunitas = Komunitas::findorfail($komunita->id);

        if($request->picture){
            Storage::delete($request->oldPicture);
            $komunitas->update([                
                'nama' => $request->nama,
                'slug' => Str::slug($request->nama),
                'singkatan' => $request->singkatan,
                'tgl_berdiri' => $request->tgl_berdiri,
                'content' => $request->content,
                'regional_id' => $request->regional_id,
                'picture' => $request->file('picture')->store('komunitas-logo')
            ]);
        }
        else{
            $komunitas->update([                
                'nama' => $request->nama,
                'slug' => Str::slug($request->nama),
                'singkatan' => $request->singkatan,
                'tgl_berdiri' => $request->tgl_berdiri,
                'content' => $request->content,
                'regional_id' => $request->regional_id,                
            ]);
        }
        
        if ($komunitas) {
            return redirect()
            ->route('PPkomunitas.index')
            ->with(['success' => 'Data Komunitas '.$request->nama.' berhasil diubah.']);
        }
        else {
            return redirect()
                ->back()
                ->withInput()
                ->with(['error' => 'Maaf ada kesalahan yang terjadi.']);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Komunitas  $komunitas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Komunitas $komunita)
    {
        Komunitas::destroy($komunita->id);
            return redirect()
                ->route('komunitas.index')
                ->with([
                    'success' => 'Data Komunitas '.$komunita->nama.' berhasil dihapus.'
                ]);     
    }
    
}
