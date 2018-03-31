<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Event;

class EventController extends Controller
{
    public function eventspage(){

        $events = Event::select(['id', 'title', 'desc','img','datetime','status'])->get();


        return view('events-content')->with(['events'=> $events]);
    }

    //
}
