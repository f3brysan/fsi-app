<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Ramsey\Uuid\Uuid;
use App\Models\Biodata;
use App\Models\Komunitas;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


class PengpusEventController extends Controller
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
        $events = Event::with('komunitas')->orderBy('its_start')->get();
        // dd ($events);
        return view('admin.event.index', compact('events', 'biodata'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $biodata = $this->session();
        $komunitas = Komunitas::with('regional')->get();
        return view('admin.event.create', compact('komunitas', 'biodata'));
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
            'nama' => 'required|max:150',
            'its_start' => 'required',
            'its_end' => 'required',
            'created_by' => 'required',
            'picture' => 'image|file|max:2048'
        ]);

        $uuid = Uuid::uuid4();
        $event = Event::create([
            'uuid' => $uuid,
            'nama' => $request->nama,
            'slug' => Str::slug($request->nama),
            'its_start' => $request->its_start,
            'its_end' => $request->its_end,
            'created_by' => $request->created_by,
            'content' => $request->content,            
            'picture' => $request->file('picture')->store('event-image')
        ]);

        if ($event) {
            return redirect()
            ->route('event.index')
            ->with(['success' => 'Event baru berhasil ditambahkan.']);
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
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        $biodata = $this->session();
        $get = Event::findOrFail($event->id);
        $komunitas = Komunitas::with('regional')->get();

        return view('admin.event.edit', compact('biodata', 'get', 'komunitas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        $this->validate($request, [
            'nama' => 'required|max:150',
            'its_start' => 'required',
            'its_end' => 'required',
            'created_by' => 'required',
            'picture' => 'image|file|max:2048'           
        ]);

        $event = Event::findorfail($event->id);
        if($request->picture == NULL){
            $event->update([                
                'nama' => $request->nama,
                'slug' => Str::slug($request->nama),
                'its_start' => $request->its_start,
                'its_end' => $request->its_end,
                'created_by' => $request->created_by,
                'content' => $request->content                         
            ]);        
        }
        else{
            Storage::delete($request->oldPicture);
            $event->update([                
                'nama' => $request->nama,
                'slug' => Str::slug($request->nama),
                'its_start' => $request->its_start,
                'its_end' => $request->its_end,
                'created_by' => $request->created_by,
                'content' => $request->content,            
                'picture' => $request->file('picture')->store('event-image')
            ]);    
        }

        if ($event) {
            return redirect()
            ->route('event.index')
            ->with(['success' => 'Event '.$event->nama.' berhasil Diedit.']);
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
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {   
        Storage::delete($event->picture);
        Event::destroy($event->id);
            return redirect()
                ->route('event.index')
                ->with([
                    'success' => 'Event '.$event->nama.' berhasil dihapus.'
                ]); 
    }
}
