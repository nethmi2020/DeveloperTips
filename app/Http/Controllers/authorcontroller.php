<?php

namespace App\Http\Controllers;
use App\auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;


class authorcontroller extends Controller
{
    public  function stored(Request $req){
      
        //return $req;
         $id=$req->id;
          $name=$req->name;
          $email=$req->email;
          $professionalbackground=$req->skills;
          $password=$req->password;
          $catergory=$req->catergory;
         
  
          
          DB::insert('insert into authors(id,name,email,professionalbackground,password,catergory)values(?,?,?,?,?,?)',
          [null,$name,$email,$professionalbackground,$password,$catergory]);
          
          return redirect()->back()->with('status','Added Successfully');
      }

      public function log(Request $req)
{
  
    $email=$req->email;
    $password=$req->password;

 $data= DB::select('select id,name,email,professionalbackground,password,image from authors where  email=? and password=?' ,[$email,$password]);
//return $data;

if(count($data)){

   return view('author.authorhome')->with('data',$data);
}
else{
     echo "logged unsuccessfully";
     }
}

public function authhome($id)
{
  
    $aid=$id;
    $data=DB::table('authors')
    ->where('id',$id)
    ->get();

  return view('author.authorhomenav')->with('data1',$data);

}


public function show(){
    $a=auth::all();
    //echo "<pre>";
    //print_r($posts);
    return view('admin.authpro')->with('data',$a);
}

   public function check($id){
      $r=new makereq();
     $r->r_id=$id;
       
  //  $r1=makereq::find($r->r_id);
  //return $r->confirm;
   
    
 $data= DB::select('select id, name,email,password,confirm from requests where  r_id=? ' ,[$r->r_id]);

//return $r->confirm;

     if($data){
         return view('author.authlogin')->with('data',$data);
     }
     else{
         return view('author.authloginnot');
     }

   }

   public function authorshow(){

    $data= DB::select('select id, name,email,professionalbackground,password from requests where  confirm=? ' ,[1]);
//return $data;
return view('author.authorshow')->with('data',$data);
   }


   public function storeauth($id){

    $r=makereq::find($id);
   
    $id=$r->id;
    $name=$r->name;
    $email=$r->email;
    $professionalbackground=$r->professionalbackground;
    $password=$r->password;
    
   DB::insert('insert into authors(id,name,email,professionalbackground,password)values(?,?,?,?,?)',
    [null,$name,$email,$professionalbackground,$password]);
    
    return redirect()->back();
   }

   public function newauthpw(Request  $req){
    $this->validate($req, [
        'email'=>'required',
        
    ]);
    $u=new auth ();
    $email= $req->email;
      //$posts=user1::find($u->email);
          
     //$email=$req->email;
      $data= DB::select('select id,email,password from authors where  email=? ' ,[$email]);
    
     
      return view('author.updateauthpw')->with('data',$data);
    
    
    }
    public function updatedauthpw(Request  $req ,$id){
    
      $u=auth::find($id);
     $u->password=$req->password;
     //return $u->password;
     $u->save();
     return view('author.authlogin')->with('status','Password changed');
    }
    

    public function updateauthpro($id){
    
        $u=auth::find($id);
       
       //return $u->professionalbackground;
      
      return view('author.updatepro')->with('data',$u);
      }
      
      public function updatedpro(Request  $req ,$id){
    
        $u=auth::find($id);
       $u->name=$req->name;
       $u->email=$req->email;
       $u->professionalbackground=$req->professionalbackground;
       $u->password=$req->password;

       if($req->hasFile('image')){
            
        $file=$req->file('image');

         $extension=$file->getClientOriginalExtension();
         $filename=time().".".$extension;
         $file->move('uploads/u/',$filename);
         $u->image=$filename;
        
     }
     else{
         
        return $req;
    $u->image='';
    }
      // return $u;
      $u->save();
       return redirect()->back()->with('status','details Updated');
      }


      public function searchadmin(Request $req){

        $search=$req->search;
    if($search != ""){
        $data=auth::where('name','like', '%' .$search. '%')
        ->get();
    
        if(count($data)>0){
            return view('admin.authpro')->with('data',$data);
        }
    }
    return redirect()->back()->with('status','No author');
    
    
    }

   

}
