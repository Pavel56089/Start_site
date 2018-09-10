<?php

namespace App\Http\Controllers;
use Mail;
use Illuminate\Http\Request;

class ContactMessageController extends Controller
{
    //Для видеоурока
    public function create(){
        return view('contact');
    }

    public function store(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        Mail::send('emails.contact-message',[
            'msg' => $request->message,
            'nm' => $request->name,
        ], function($mail) use($request){
            $mail->from($request->email, $request->name);
            $mail->to('pavel5609s@gmail.com')->subject('Contact Message');
        });
        return redirect()->back()->with('flash_message','Спасибо за ваше обращение!');
    }
}
