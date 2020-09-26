<?php

namespace App\Http\Controllers;
use App\auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class userlogcontroller extends Controller
{
   public function showlog(Request  $req)
    {

     $id= $req->id;
        //dd($id);
       $posts= user1::find()->mypost();
       echo "<pre>";
        print_r($posts);
       // return $posts;
    }

    public function create($id){
      
   
      $u= auth::find($id);

     // return $u;
     return view('postlog.createlog')->with('data',$u);
   }
}