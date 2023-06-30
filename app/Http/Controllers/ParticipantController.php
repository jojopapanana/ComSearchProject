<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Participant;
use App\Models\Registration;
use Illuminate\Support\Facades\DB;

class ParticipantController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __invoke()
    {  
        $events = Event::all();
        return view('welcome', ['events' => $events]);
    }

    public function index()
    {
        //
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
    public function store(Request $request, Event $event)
    {
        $request->validate([
            'participant_name' => 'required|string',
            'participant_nim' => 'required|integer',
            'binusian_email' => 'required|string|regex:/^\w+([.-]?\w+)*@\w+([.-]?\w+)*(\.\w{2,3})+$/',
            'instagram_account' => 'required|string|regex:/@\w+/',
            'following_proof1' => 'image|required|max:1999|mimes:jpg,png,jpeg',
            'following_proof2' => 'image|max:1999|mimes:jpg,png,jpeg',
            'following_proof3' => 'image|max:1999|mimes:jpg,png,jpeg'
        ]);

        if($request->hasFile('following_proof1')){
            $extension = $request->file('following_proof1')->getClientOriginalExtension();
            $file_name1 = $request->participant_name.'.'.$extension;
            $path = $request->file('following_proof1')->storeAs('public/images/participants', $file_name1);
        }

        if($request->hasFile('following_proof2')){
            $extension = $request->file('following_proof2')->getClientOriginalExtension();
            $file_name2 = $request->participant_name.'.'.$extension;
            $path = $request->file('following_proof2')->storeAs('public/images/participants', $file_name2);
        } else {
            $file_name2 = 'NULL';
        }

        if($request->hasFile('following_proof3')){
            $extension = $request->file('following_proof3')->getClientOriginalExtension();
            $file_name3 = $request->participant_name.'.'.$extension;
            $path = $request->file('following_proof3')->storeAs('public/images/participants', $file_name3);
        } else {
            $file_name3 = 'NULL';
        }

        $participant_id = Participant::insertGetId([
            'user_id' => 1,
            'participant_name' => $request->participant_name,
            'participant_nim' => $request->participant_nim,
            'binusian_email' => $request->binusian_email,
            'instagram_account' => $request->instagram_account,
            'following_proof1' => $file_name1,
            'following_proof2' => $file_name2,
            'following_proof3' => $file_name3
        ]);

        Registration::create([
            'participant_id' => $participant_id,
            'event_id' => $event->id,
            'user_id' => 1
        ]);
        // dd($event->group_link);

        return redirect()->route('myevent.index')->with('group_link', $event->group_link)->with('success', '');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event = Event::find($id);
        return view('register', ['event' => $event]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
