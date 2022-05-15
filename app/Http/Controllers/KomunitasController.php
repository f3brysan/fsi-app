<?php

namespace App\Http\Controllers;

use Ramsey\Uuid\Uuid;
use App\Models\Regional;
use App\Models\Komunitas;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KomunitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $komunitas = Komunitas::orderBy('nama')->get();
        return view('admin.komunitas.index', compact('komunitas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $regionals = Regional::orderBy('nama')->get();
        return view('admin.komunitas.create', compact('regionals'));
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
        ]);

        $uuid = Uuid::uuid4();
        $komunitas = Komunitas::create([
            'uuid' => $uuid,
            'nama' => $request->nama,
            'slug' => Str::slug($request->nama),
            'singkatan' => $request->singkatan,
            'tgl_berdiri' => $request->tgl_berdiri,
            'content' => $request->content,
            'regional_id' => $request->regional_id
        ]);

        if ($komunitas) {
            return redirect()
            ->route('komunitas.index')
            ->with(['success' => 'Data Komunitas berhasil ditambahkan.']);
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
    public function show(Komunitas $komunitas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Komunitas  $komunitas
     * @return \Illuminate\Http\Response
     */
    public function edit(Komunitas $komunitas)
    {   
        
        $get = Komunitas::findOrFail($komunitas->id);
        // $get = dd();
        // $regionals = Regional::orderBy('nama')->get();
        return view('admin.komunitas.edit', compact('get'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Komunitas  $komunitas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Komunitas $komunitas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Komunitas  $komunitas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Komunitas $komunitas)
    {
        Komunitas::destroy($komunitas->id);
            return redirect()
                ->route('komunitas.index')
                ->with([
                    'success' => 'Data Regional berhasil dihapus.'
                ]);     
    }
    
}
