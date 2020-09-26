<?php

namespace App\Http\Controllers;
use App\user1;
use App\post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;


class usercontroller extends Controller
{
    //
    public function store(Request $req){

      $this->validate($req,[

        'name'=>'required|min:3|max:10',
        'email'=>'required|unique:users,email',
        'password'=>'required|min:3|max:8'
      ]);


      $u=new user1;
     $u->id=$req->id;
     $u->name=$req->name;
     $u->email=$req->email;
    // $u->password=$req->password;
     if($req->cpassword==$req->password){
       $u->password=$req->password;
     }
       else{
        return redirect()->back()->with('status','please confirm correct password ');
       }
     

      
      if($req->hasFile('image')){
            
        $file=$req->file('image');

         $extension=$file->getClientOriginalExtension();
         $filename=time().".".$extension;
         $file->move('uploads/u/',$filename);
         $u->image=$filename;
        
     }
     else{
         
        // return $req;
     $u->image='';
     }
     $u->save();

     //return $u;
   // DB::insert('insert into users(id,name,email,password)values(?,?,?,?)',[null,$name,$email,$password]);
  $req->session()->flash('message','Register Successfully');
   return view('pages.index');

   $req->session()->flash('error','error');
   return view('pages.index');
         
    }

    public function log(Request $req){

    // $name=$req->name;
      $email=$req->email;
      $password=$req->password;

   $data= DB::select('select id,name,email,password,image from users where  email=? and password=?' ,[$email,$password]);
  // $p=DB::table('posts')->get();
    
  $p = post::all()->sortByDesc('title');
   //return view('postlog.allpost',compact('data','u','ab'));
   // return $p->title;
if(count($data)){
  
     return view('inc.navbarlogin',compact('data','p'));
}
else{
  echo "logged unsuccessfully";
}
    }



    
    public function author($user_id){

      $d=user1::find($user_id);
     
     
   return view('post.author')->with('data',$d);
     }
    

     public function show($id){
      $posts=user1::find($id);
      //echo "<pre>";
      //print_r($posts);
      return view('mypro')->with('data',$posts);
  }
  public function all(){
   // $u1=user1::all();
   // return $u1;
   $u1 = user1::all()->sortByDesc('created_at');
     return view('admin/usershow')->with('data',$u1);
  }



public function getid($id){
  $posts=user1::find($id);
  //echo "<pre>";
  //print_r($posts);
  //return $posts;
 return view('author/authrequest')->with('data',$posts);
}

public function newpw(Request  $req){
  $this->validate($req, [
    'email'=>'required',
    
]);
$u=new user1();
$email= $req->email;
  //$posts=user1::find($u->email);
      
 //$email=$req->email;
  $data= DB::select('select id,email,password from users where  email=? ' ,[$email]);

 
  return view('updatepw')->with('data',$data);


}
public function updatedpw(Request  $req ,$id){

  $this->validate($req, [
    'password'=>'required',
    
]);

  $u=user1::find($id);
 $u->password=$req->password;
 //return $u->password;
 $u->save();
 return view('login')->with('status','Password changed');
}

public function admindeluser($id)
    {
        $u= user1::find($id);
        $u->delete();  
        return redirect()->back();
    }



    public function searchuseradmin(Request $req){

      $search=$req->search;
     // return $search;
  if($search != ""){
      $data=user1::where('name','like', '%' .$search. '%')
      ->get();
  
      if(count($data)>0){
          return view('admin.usershow')->with('data',$data);
      }
  }
  return redirect()->back()->with('status','No user');
  
  
  }
  public function updateuserdetail($id){
    
    $u=user1::find($id);
   
   //return $u;
  
  return view('postlog.updateuserdetail')->with('data',$u);
  }
  
  public function updateduserpro(Request  $req ,$id){

  
  $u=user1::find($id);
   $u->name=$req->name;
   $u->email=$req->email;
   if($u->nwpassword== $u->rnwpassword){
   $u->password=$req->rnwpassword;}
   
    $u->password=$req->currentpassword;
   

   if($req->hasFile('image')){
        
    $file=$req->file('image');

     $extension=$file->getClientOriginalExtension();
     $filename=time().".".$extension;
     $file->move('uploads/u/',$filename);
     $u->image=$filename;
    
 }
 else{
     
  //  return $req;
$u->image='';
}

  $u->save();
  return redirect()->back()->with('status','details Updated');
//return $req;
  }

 
}
