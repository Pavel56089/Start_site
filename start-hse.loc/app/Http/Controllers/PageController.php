<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Contact;

class PageController extends Controller
{
    //
    public function contactpage(){

        $contacts = Contact::select(['id', 'name', 'desc','vk'])->get();


        return view('welcome')->with(['contacts'=> $contacts]);
    }
}
