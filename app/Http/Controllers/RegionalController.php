<?php

namespace App\Http\Controllers;

use Ramsey\Uuid\Uuid;
use App\Models\Biodata;
use App\Models\Regional;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class RegionalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //  QUERY SESSION LOGIN
    public function session()
    {
        $session = Auth::user()->uuid;        
        $biodata = Biodata::where('user_uuid', $session)->first();
        return $biodata;
    }

    public function index()
    {           
        $regionals = Regional::orderBy('nama')->get();
        $biodata = $this->session();        
        return view('master.regional.index', compact('regionals', 'biodata'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $biodata = $this->session();  
        return view('master.regional.create', compact('biodata'));
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
            'nama' => 'required|string|max:50',                        
        ]);

        $uuid = Uuid::uuid4();
        $regional = Regional::create([
            'nama' => $request->nama,
            'content' => $request->content,
            'uuid' => $uuid,
            'slug' => Str::slug($request->nama),
        ]);
        
        if ($regional) {
            return redirect()
            ->route('PPregionals.index')
            ->with(['success' => 'Data Regional '.$request->nama.' berhasil ditambahkan.']);
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
     * @param  \App\Models\Regional  $regional
     * @return \Illuminate\Http\Response
     */
    public function show(Regional $uuid)
    {
        // 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Regional  $regional
     * @return \Illuminate\Http\Response
     */
    public function edit(Regional $regional)
    {
        $get = Regional::findOrFail($regional->id);
        $biodata = $this->session();
        return view('master.regional.edit', compact('get', 'biodata'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Regional  $regional
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Regional $regional)
    {
        $this->validate($request, [
            'nama' => 'required|string|max:50',                        
        ]);

        $regional = Regional::FindorFail($regional->id);
        $regional->update([
            'nama' => $request->nama,
            'content' => $request->content,        
            'slug' => Str::slug($request->nama)
        ]);
        
        if ($regional) {
            return redirect()
            ->route('PPregionals.index')
            ->with(['success' => 'Data Regional '.$regional->nama.' berhasil diubah.']);
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
     * @param  \App\Models\Regional  $regional
     * @return \Illuminate\Http\Response
     */
    public function destroy(Regional $regional)
    {
            Regional::destroy($regional->id);
            return redirect()
                ->route('PPregionals.index')
                ->with([
                    'success' => 'Data Regional '.$regional->nama.' berhasil dihapus.'
                ]);        
        
    }
}
