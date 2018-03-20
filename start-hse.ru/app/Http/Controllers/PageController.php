<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Contact;
use App\Message;

class PageController extends Controller
{
    //
    public function contactpage(){

        $contacts = Contact::select(['id', 'name', 'desc','vk','img'])->get();


        return view('contacts-content')->with(['contacts'=> $contacts]);
    }

    public function eventspage(){

        //$events = Event::select(['id', 'title', 'desc','img','date','category'])->get();


        return view('events-content');//->with(['articles'=> $articles]);
    }

    public function store(Request $request){

        $this->validate($request,[
            'name'=> 'required|max:50',
            'email'=> 'required|email',
            'text'=> 'required',
        ]);
        $data = $request->all();
        $message = new Message();
        $message->fill($data);
        $message->save();
        return redirect('contacts');
    }
}
