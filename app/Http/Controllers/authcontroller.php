<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class authcontroller extends Controller
{

    public function index()
    {
       //$posts= post::orderBy('title','desc')->get();

       $posts= auth::all();
       return view('post.index1')->with('data',$posts);
    }

 public  function store(Request $req){
      
      return $req;
      /*  $id=$req->id;
        $name=$req->name;
        $email=$req->email;
        $professionalbackground=$req->professionalbackground;
        $password=$req->password;

        //DB::insert('insert into users(id,name,email,password)values(?,?,?,?)',[null,$name,$email,$password]);

        DB::insert('insert into requests(id,name,email,professionalbackground,password)values(?,?,?,?,?)',[null,$name,$email,$professionalbackground,$password]);
        
        return redirect()->back()->with('status','Thanks for contacting us');*/
    }

    function log(Request $req){
        
      $email=$req->email;

        $datas=Db::select('select id from authors where email=?',[$email]);
//dd($data);
      if(count($datas)){
            return view('post.index1')->with('data',$datas);
        }
        else{
            echo "error";        }

    }

    public function show($id)
    {
        $posts= auth::find($id);
        //dd($posts);
        return view('post.show')->with('data',$posts);
    }
    

    function logpw(Request $req ){

        $p=auth::find($id);
      $p-> $password=$req->password;

        $data=Db::select('select id from authors where password=?',[$password]);

        if(count($data)){
            return view('post/edit');
        }
        else{
            echo "error";        }

    }
    public function author1(){
        $posts=DB::table('users')
        ->join('posts','posts.user_Id',"=",'users.id')
        ->get()
        ->toArray();
   
        $d=user1::find($posts->id);
       
      
     return view('post.author')->with('data',$d);
    }
       // $data=user1::find($id)
      /* echo "<pre>";
       print_r($d1);

       public function author($user_id){

        $d=user1::find($user_id);
       
       
     return view('post.author')->with('data',$d);
       }*/
      
}
