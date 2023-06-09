<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Registration;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{   
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    public function index()
    {      
        if(auth()->user()->role == 'Participant') {

            $events = Event::all();
            $registrations = Registration::all();                     
            
            return view('welcome', ['events' => $events], ['registrations' => $registrations]);

        } else {

            $events = Event::all(); 
            
            return view('adminview.home', ['events' => $events]);

        }
    }
}