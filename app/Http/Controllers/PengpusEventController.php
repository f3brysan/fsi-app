<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Ramsey\Uuid\Uuid;
use App\Models\Komunitas;
use Illuminate\Support\Str;
use Illuminate\Http\Request;


class PengpusEventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::with('komunitas')->orderBy('its_start')->get();
        return view('admin.event.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $komunitas = Komunitas::with('regional')->get();
        return view('admin.event.create', compact('komunitas'));
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        //
    }
}
