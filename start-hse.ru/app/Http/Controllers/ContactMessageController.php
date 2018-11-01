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
            $mail->from('noreply@start-hse.ru', 'Павел из СТАРТа');
            $mail->to($request->email)->subject('Ваше обращение');
        });
        Mail::send('emails.contact-new',[
            'msg' => $request->message,
            'nm' => $request->name,
            'mail' => $request->email,
        ], function($mail) use($request){
            $mail->from('noreply@start-hse.ru', 'Сайт');
            $mail->to('pbakharuev@start-hse.ru')->subject('Новое обращение');
        });
        Mail::send('emails.contact-new',[
            'msg' => $request->message,
            'nm' => $request->name,
            'mail' => $request->email,
        ], function($mail) use($request){
            $mail->from('noreply@start-hse.ru', 'Сайт');
            $mail->to('obogomolov@start-hse.ru')->subject('Новое обращение');
        });
        return redirect()->back()->with('flash_message','Спасибо за ваше обращение!');
    }
}
