<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Biodata;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;
use App\Models\Attendant;

class EventController extends Controller
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
        $events = Event::with('komunitas')->orderby('its_start', 'DESC')->get();
        return view('event.index', compact('biodata', 'events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreEventRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEventRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $biodata = $this->session();
        $slug = $request->slug;
        $event = Event::with('komunitas')->where('slug', $slug)->first();
        $attendant = Attendant::with('event')
                            ->where('biodata_uuid', $biodata->uuid)
                            ->where('event_uuid', $event->uuid)
                            ->first();
        // dd($attendant);
        
        return view('event.show', compact('event', 'biodata', 'attendant'));
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
     * @param  \App\Http\Requests\UpdateEventRequest  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEventRequest $request, Event $event)
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
