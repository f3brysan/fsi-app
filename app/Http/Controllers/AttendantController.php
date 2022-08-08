<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Ramsey\Uuid\Uuid;
use App\Models\Biodata;
use App\Models\Attendant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AttendantController extends Controller
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $slug = $request->slug;
        $uuid = Uuid::uuid4();
        $attendant = Attendant::create([
            'uuid' => $uuid,
            'event_uuid' => $request->event_uuid,            
            'biodata_uuid' => $request->biodata_uuid,
            'point' => $request->point                                 
        ]);

        if ($attendant) {
            return redirect()
            ->route('event.show',$slug)
            ->with(['success' => 'Event baru berhasil ditambahkan.']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Attendant  $attendant
     * @return \Illuminate\Http\Response
     */
    public function show(Attendant $attendant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Attendant  $attendant
     * @return \Illuminate\Http\Response
     */
    public function edit(Attendant $attendant, Request $request)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Attendant  $attendant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Attendant $attendant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Attendant  $attendant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Attendant $attendant)
    {
        //
    }

    public function acc(Request $request)
    {               
        $attendant = Attendant::where('event_uuid',$request->event_uuid)
                            ->where('biodata_uuid',$request->result)
                            ->first();
        // dd($event);        

        if ($attendant) {
            $attendant->update([                
                'is_attendat' => TRUE
            ]); 
            return redirect()
            ->route('PPevents.show',$request->event_uuid)
            ->with(['success' => 'Peserta Berhasil diregistrasi ulang.']);
        }
        else {
            return redirect()
            ->route('PPevents.show',$request->event_uuid)
            ->with(['error' => 'Data Peserta Tidak Ada']);
        }
    }
}
