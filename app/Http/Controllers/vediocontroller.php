<?php

namespace App\Http\Controllers;
use App\vedio;
use App\user1;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class vediocontroller extends Controller
{
   public function store(Request $req){

    $v=new vedio;
    $v->id=$req->id;
    $v->name=$req->name;
    $v->description=$req->description;
    $v->url=$req->url;
    $v->catergory=$req->catergory;

  //return $req->url;
  $v->save();
  return redirect()->back();
   }

   public function show(){
      //$data=vedio::all();
       $data = vedio::all()->sortByDesc('created_at');
     // return $data;

     return view('admin.showvedio')->with('data',$data);
   }


   
   public function showuser(){
      //$data=vedio::all();
     // return $data;
     $data = vedio::all()->sortByDesc('created_at');
     return view('post.showusertute')->with('data',$data);
   }

   public function showloguser($id){
    //$data=vedio::all();
   // return $data;
   
   $u=user1::find($id);
  $data = vedio::all()->sortByDesc('created_at');
 // return $u;
   return view('postlog.showlogusertute',compact('data','u'));
 }

   public function showauthor($name){
      //$data=vedio::all();
     // return $data;
     $aname=$name;
     $aaa=DB::table('authors')
     ->where('name',$aname)
     ->get();

     $data = vedio::all()->sortByDesc('created_at');
     return view('author.showauthertute',compact('data','aaa'));
   }

   public function edit($id){
    
    $u=vedio::find($id);
   
  //return $u;
  
 return view('admin.updatedes')->with('data',$u);
  }

  public function update(Request $req, $id){
    $v=vedio::find($id);
    //dd($p);
    
   //return $v;
    $v->name=$req->name;
    $v->description=$req->description;
    $v->url=$req->url;
    $v->catergory=$req->catergory;
    $v->save();
    return redirect()-> back()->with('success','post updated');
  }

  public function frontend($catergory){
    
    $v=new vedio();
   $v->catergory= $catergory;
    $data= DB::select('select id,name,description,url,created_at from vedios where  catergory=?' ,[ $v->catergory]);

    return view('admin.frontend')->with('data', $data);
 
 
  }

  public function backend($catergory){
    
    $v=new vedio();
   $v->catergory= $catergory;
    $data= DB::select('select id,name,description,url,created_at from vedios where  catergory=?' ,[ $v->catergory]);

    return view('admin.backend')->with('data', $data);
 
 
  }

  public function frontenduserlog($catergory,$id){
    
    $u1=user1::find($id);
   //return $u;
   $v=new vedio;
     $v->catergory=$catergory;
     //return $v->catergory;
     if($v->catergory='frontend'){
     $data= DB::select('select id,name,description,url,created_at from vedios where  catergory=?' ,[ $v->catergory]);

            return view('post.frontend',compact('data','u1'));
          }
  
 
 
  }

  public function backenduserlog($catergory,$id){
    $u1=user1::find($id);
    $v=new vedio();
   $v->catergory= $catergory;
   if($v->catergory='backend'){
    $data= DB::select('select id,name,description,url,created_at from vedios where  catergory=?' ,[ $v->catergory]);

           //return $data;
        
         return view('post.backend',compact('data','u1'));
        }
 


 }


 public function frontendauthor($catergory, $name){
    
  $aname=$name;
  $aa=DB::table('authors')
  ->where('name',$aname)
  ->get();

  //$v=vedio::all();
  $v=new vedio;
   $v->catergory=$catergory;
   //return $v->catergory;
   if($v->catergory='frontend'){
   $data= DB::select('select id,name,description,url,created_at from vedios where  catergory=?' ,[ $v->catergory]);

          return view('author.frontend',compact('data','aa'));

   }

}

public function backendauthor($catergory,$name){
      $aname=$name;
        $aa=DB::table('authors')
        ->where('name',$aname)
        ->get();

  $v=new vedio();
 $v->catergory= $catergory;
 if($v->catergory='backend'){
  $data= DB::select('select id,name,description,url,created_at from vedios where  catergory=?' ,[ $v->catergory]);

         //return $data;
       return    view('author.backend',compact('data','aa'));
 }



}

}
  

