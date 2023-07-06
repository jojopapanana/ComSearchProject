<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Registration;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function ongoing()
     {
         $events = Event::all();
         $registrations = Registration::all();
         return view('ongoing', ['events' => $events], ['registrations' => $registrations]);
     }

     public function upcoming()
     {
         $events = Event::all();
         return view('upcoming', ['events' => $events]);
     }

     public function preview($id)
     {
        $event = Event::find($id);
        return view('adminview.preview', ['event' => $event]);
     }

     public function verify()
     {
        return view('adminview.verify');
     }

     public function finish()
     {
        return view('adminview.finish');
     }

    public function index()
    {
        $events = Event::all();
        $registrations = Registration::all();
        return view('welcome', ['events' => $events], ['registrations' => $registrations]);

        // return view('adminview.home', ['events' => $events]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminview.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'event_name' => 'required|string',
            'organizer' => 'required|string',
            'event_start_date' => 'required|date',
            'event_end_date' => 'required|date',
            'registration_start_date' => 'required|date',
            'registration_end_date' => 'required|date',
            'event_ig1' => 'required|string',
            'event_ig2' => 'nullable|string',
            'event_ig3' => 'nullable|string',
            'event_description' => 'required',
            'group_link' => 'required|string',
            'line_cp' => 'nullable|string',
            'wa_cp' => 'nullable|string',
            'thumbnail' => 'image|required|max:1999|mimes:jpg,png,jpeg',
            'poster' => 'image|required|max:1999|mimes:jpg,png,jpeg'
        ]);

        if($request->hasFile('thumbnail')){
            $extension = $request->file('thumbnail')->getClientOriginalExtension();
            $file_name1 = $request->event_name.'.'.$extension;
            $path = $request->file('thumbnail')->storeAs('public/images/events', $file_name1);
        }

        if($request->hasFile('poster')){
            $extension = $request->file('poster')->getClientOriginalExtension();
            $file_name2 = $request->event_name.'.'.$extension;
            $path = $request->file('poster')->storeAs('public/images/', $file_name2);
        }

        Event::create([
            'event_name' => $request->event_name,
            'organizer' => $request->organizer,
            'event_start_date' => $request->event_start_date,
            'event_end_date' => $request->event_end_date,
            'registration_start_date' => $request->registration_start_date,
            'registration_end_date' => $request->registration_end_date,
            'event_ig1' => $request->event_ig1,
            'event_ig2' => $request->event_ig2,
            'event_ig3' => $request->event_ig2,
            'event_description' => $request->event_description,
            'group_link' => $request->group_link,
            'line_cp' => $request->line_cp,
            'wa_cp' => $request->wa_cp,
            'thumbnail' => $file_name1,
            'poster' => $file_name2
        ]);
        
        $event = Event::orderBy('id', 'DESC')->first();
        return view('adminview.verify', ['event' => $event]);
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
        return view('detail', ['event' => $event]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = Event::find($id);
        return view('adminview.edit', ['event' => $event]);
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
        $request->validate([
            'event_name' => 'required|string',
            'organizer' => 'required|string',
            'event_start_date' => 'required|date',
            'event_end_date' => 'required|date',
            'registration_start_date' => 'required|date',
            'registration_end_date' => 'required|date',
            'event_ig1' => 'required|string',
            'event_ig2' => 'nullable|string',
            'event_ig3' => 'nullable|string',
            'event_description' => 'required',
            'group_link' => 'required|string',
            'line_cp' => 'nullable|string',
            'wa_cp' => 'nullable|string',
            'thumbnail' => 'image|nullable|max:1999|mimes:jpg,png,jpeg',
            'poster' => 'image|nullable|max:1999|mimes:jpg,png,jpeg'
        ]);

        if($request->hasFile('thumbnail_new')){
            $extension = $request->file('thumbnail_new')->getClientOriginalExtension();
            $file_name1 = $request->movieName.'.'.$extension;
            $path = $request->file('thumbnail_new')->storeAs('public/images/events', $file_name1);
        } else {
            $file_name1 = request('thumbnail_old');
        }

        if($request->hasFile('poster_new')){
            $extension = $request->file('poster_new')->getClientOriginalExtension();
            $file_name2 = $request->movieName.'.'.$extension;
            $path = $request->file('poster_new')->storeAs('public/images/events', $file_name2);
        } else {
            $file_name2 = request('poster_old');
        }

        $event = Event::find($id);
        // dd($file_name1);

        $event->update([
            'event_name' => $request->event_name,
            'organizer' => $request->organizer,
            'event_start_date' => $request->event_start_date,
            'event_end_date' => $request->event_end_date,
            'registration_start_date' => $request->registration_start_date,
            'registration_end_date' => $request->registration_end_date,
            'event_ig1' => $request->event_ig1,
            'event_ig2' => $request->event_ig2,
            'event_ig3' => $request->event_ig2,
            'event_description' => $request->event_description,
            'group_link' => $request->group_link,
            'line_cp' => $request->line_cp,
            'wa_cp' => $request->wa_cp,
            'thumbnail' => $file_name1,
            'poster' => $file_name2
        ]);

        $events = Event::all();
        return redirect()->route('dashboard', ['events' => $events])->with('success', '');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Event::find($id);
        // dd($event);
        $event->delete();

        $events = Event::all();
        // dd($events);
        return redirect()->route('dashboard', ['events' => $events]);
    }
}
