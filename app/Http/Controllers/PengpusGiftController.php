<?php

namespace App\Http\Controllers;

use App\Models\Gift;
use Ramsey\Uuid\Uuid;
use App\Models\Biodata;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PengpusGiftController extends Controller
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
        $gifts = Gift::orderby('price','desc')->get();
        // dd($gifts);
        return view('master.gift.index',compact('gifts', 'biodata'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $biodata = $this->session();
        return view('master.gift.create',compact('biodata'));
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
            'price' => 'digits_between:1,10',            
            'picture' => 'image|file|max:1024'            
        ]);

        $uuid = Uuid::uuid4();

        if ($request->picture) {
            $gift = Gift::create([
                'uuid' => $uuid,
                'nama' => $request->nama,
                'slug' => Str::slug($request->nama),
                'price' => $request->price,
                'content' => $request->content,
                'picture' => $request->file('picture')->store('gifts-image')
            ]);
        } else {
            $gift = Gift::create([
                'uuid' => $uuid,
                'nama' => $request->nama,
                'slug' => Str::slug($request->nama),
                'price' => $request->price,
                'content' => $request->content
            ]);
        }

        if ($gift) {
            return redirect()
            ->route('PPgifts.index')
            ->with(['success' => 'Data Hadiah '.$request->nama.' berhasil ditambahkan.']);
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
     * @param  \App\Models\Gift  $gift
     * @return \Illuminate\Http\Response
     */
    public function show(Gift $gift)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gift  $gift
     * @return \Illuminate\Http\Response
     */
    public function edit(Gift $gift)
    {
        $biodata = $this->session();
        $get = Gift::findorfail($gift->id);
        return view('master.gift.edit', compact('biodata', 'get'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gift  $gift
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gift $gift)
    {
        $this->validate($request, [
            'nama' => 'required|string|max:100',
            'price' => 'digits_between:1,10',            
            'picture' => 'image|file|max:1024'            
        ]);

        $gift = Gift::findorfail($gift->id);
        if ($request->picture) {
            Storage::delete($request->oldPicture);
            $gift->update([
                'nama' => $request->nama,
                'slug' => Str::slug($request->nama),
                'price' => $request->price,
                'content' => $request->content,
                'picture' => $request->file('picture')->store('gifts-image')
            ]);
        } else {
            $gift->update([
                'nama' => $request->nama,
                'slug' => Str::slug($request->nama),
                'price' => $request->price,
                'content' => $request->content                
            ]);
        }
        
        if ($gift) {
            return redirect()
            ->route('PPgifts.index')
            ->with(['success' => 'Data Hadiah '.$request->nama.' berhasil diubah.']);
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
     * @param  \App\Models\Gift  $gift
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gift $gift)
    {
        Gift::destroy($gift->id);
        return redirect()
            ->route('PPgifts.index')
            ->with(['success' => 'Data Hadiah '.$gift->nama.' berhasil dihapus.']);
    }
}
