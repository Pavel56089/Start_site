<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Event;

class EventController extends Controller
{
    public function eventspage(){

        $events = Event::select(['id', 'title', 'desc','img','datetime', 'content', 'status'])->get();


        return view('events-content')->with(['events'=> $events]);
    }

    public function show($id){

        $event = Event::select(['id', 'title', 'desc','img','content', 'datetime','status'])->where('id',$id)->first();

        return view('event-content')->with(['event' => $event]);
    }

    //
}
