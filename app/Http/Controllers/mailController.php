<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Mail\sendMail;

class mailController extends Controller
{
    public function index(){
        return view('email.sendemail');
    }


    public function send(Request $request){
        $this->validate($request,[
            'name'  => 'required',
            'email' => 'required|email',
            'skills'=>'required'
        ]);
        $data=array(
            'name'   => $request->name,
            'email'   => $request->email,
            'skills'   => $request->skills,
        );

        Mail::to('nethmi96anuththara@gmail.com')->send(new sendMail($data));

        //Mail:to('nethmi96anuththara@gmail.com')->send(new sendMail($data));

        return back()->with('success','Thank for contacting us!');
    }
}


