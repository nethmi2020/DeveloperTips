<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagecontroller extends Controller
{
    
    public function about(){
        $title="hi about users!!!";
        return view('pages.about')->with('title',$title);
    }


    public function index(){
        $title="Welcome to Devloper tips you tube channel";
       // return view('pages.index',compact('title'));
       return view('pages.index')->with('title',$title);
    }

    public function contactus(){
      //  $title="hi service users!!!";

      
        return view('pages.contactus');
    }
}
