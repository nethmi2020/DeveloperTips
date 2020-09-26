<?php

namespace App\Http\Controllers;
use App\admin;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class admincontroller extends Controller
{
    public function log(Request $req){

      //return $req;
       $email=$req->email;
        $catergory=$req->catergory;
        $password=$req->password;
        
    $data= DB::select('select id,name,email,professionalbackground from authors where  catergory=? and password=?' ,[$catergory,$password]);
     //return $data;
  
    
         
    if(count($data)){
     // $req->session()->flash('message','Successfully logged');
      return view('admin.dashboard');

        
   }
   else{
   return  view('admin.login');
     
   }
       }

   
       public function newadminpw(Request  $req){

        $this->validate($req, [
          'email'=>'required',
          
      ]);
        $u=new admin();
        $email= $req->email;
          //$posts=user1::find($u->email);
              
         //$email=$req->email;
          $data= DB::select('select id,email,password from admins where  email=? ' ,[$email]);
        
         
          return view('admin.updateadminpw')->with('data',$data);
        
        
        }
        public function updatedadminpw(Request  $req ,$id){
          $this->validate($req, [
            'password'=>'required',
            
        ]);
        
          $u=admin::find($id);
         $u->password=$req->password;
         //return $u->password;
         $u->save();
         return view('admin.login')->with('status','Password changed');
        }
        }
        

