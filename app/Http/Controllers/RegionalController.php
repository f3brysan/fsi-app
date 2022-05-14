<?php

namespace App\Http\Controllers;

use Ramsey\Uuid\Uuid;
use App\Models\Regional;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class RegionalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {        
        $regionals = Regional::orderBy('nama')->get();
        return view('admin.regional.index', compact('regionals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.regional.create');
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

        $uuid =  $uuid4 = Uuid::uuid4();
        $regional = Regional::create([
            'nama' => $request->nama,
            'content' => $request->content,
            'uuid' => $uuid,
            'slug' => Str::slug($request->nama),
        ]);
        
        if ($regional) {
            return redirect()
            ->route('regional.index')
            ->with(['success' => 'Data Regional berhasil ditambahkan.']);
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
        return view('admin.regional.edit', compact('get'));
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
            'slug' => Str::slug($request->title)
        ]);
        
        if ($regional) {
            return redirect()
            ->route('regional.index')
            ->with(['success' => 'Data Regional berhasil diubah.']);
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
                ->route('regional.index')
                ->with([
                    'success' => 'Data Regional berhasil dihapus.'
                ]);        
        
    }
}
