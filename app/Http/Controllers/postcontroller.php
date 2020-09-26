<?php

namespace App\Http\Controllers;
use App\post;
use App\like;
use App\user1;
use App\auth;
use App\admin;
use App\comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class postcontroller extends Controller
{
  
    public function index()
    {
       //$posts= post::orderBy('title','desc')->get();

      
      // echo "<pre>";
     // $p = post::all()->sortByDesc('created_at');
      // print_r($posts);
      $p=DB::table('posts')
      ->where('isapproved',1)
      ->get()->sortByDesc('created_at');
      
      return view('post.index')->with('data',$p);
    }

    

 
    public function create()
    {
        return view('post.create');
    }

   
    public function store(Request $request)
    {
        $this->validate($request, [
             'title'=>'required',
             'body'=>'required'
        ]);

        $posts=new post;
        $posts->title=$request->input('title');

        if($request->hasFile('image')){
            
            $file=$request->file('image');
    
             $extension=$file->getClientOriginalExtension();
             $filename=time().".".$extension;
             $file->move('uploads/u/',$filename);
             $posts->image=$filename;
            
         }
         else{
             
            // return $req;
         $posts->image='';
         }
        $posts->body=$request->input('body');
        $posts->user_name=$request->input('authname');
        $posts->user_id=$request->input('authid');
        $posts->save();

       // $request->session()->flash('message','Post Created');
        //return redirect('posts');
        return redirect()->back()->with('status','Post created');

        //$request->session()->flash('error','Post not Created');
        //return redirect('posts');


    }

  
    public function show($id)
    {
        $data= post::find($id);
        //dd($posts);
        $postid=$id;
        $c=DB::table('comments')
        ->where('postid',$postid)
        ->get();
       // return $c;
       $name=$data->user_name;
       $a=DB::table('authors')
       ->where('name',$name)
       ->get();
        return view('post.show',compact('c','data','a'));
    }

    public function showauthor($id,$name)
    {

        // $post = post::all()->sortByDesc('created_at');
     //  return $p;

     
        $post=DB::table('posts')
        ->where('isapproved',1)
        ->get()->sortByDesc('created_at');

      $aname=$name;
        $a=DB::table('authors')
        ->where('name',$aname)
        ->get();
        //return $a;
      
        $p=new post();
        $p->user_Id=$id;
        $p->isapproved='1';

        $data= DB::select('select id,title,image,created_at,user_Id  from posts where  user_Id=? and isapproved=?' ,[ $p->user_Id, $p->isapproved]);
       return view('author.index',compact('a','data','post'));
    }

    

    public function viewpost($id,$name)
    {

        $aname=$name;
        $aa=DB::table('authors')
        ->where('name',$aname)
        ->get();
//return $aa;
        $postid=$id;
        $c=DB::table('comments')
        ->where('postid',$postid)
        ->get();
        //return $id;
       $p=new post();
        $p->id=$id;
//return $p->id;
        $data= DB::select('select id,title,body,image,created_at from posts where  id=?' ,[ $p->id]);
    //return  $c;
      return view('author.show',compact('data','c','aa'));
    }

   

   
    public function edit($id,$name)
    {
        $data= post::find($id);
        $aname=$name;
        $c=DB::table('authors')
        ->where('name',$aname)
        ->get();
//print_r($posts);
      // return view('post.editlog')->with('post',$posts);
    
    return  view('postlog.editlog',compact('data','c'));}

    
    
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title'=>'required',
            'body'=>'required'
       ]);

       $p=post::find($id);
       //dd($p);
       $p->title=$request->input('title');
       $p->body=$request->input('body');
       if($request->hasFile('image')){
            
        $file=$request->file('image');

         $extension=$file->getClientOriginalExtension();
         $filename=time().".".$extension;
         $file->move('uploads/u/',$filename);
         $p->image=$filename;
        
     }
     else{
         
        return $request;
    $p->image='';
    }
       $p->save();

       return redirect('posts')->with('success','post updated');

      }

    
    public function destroy($id)
    {
        $post= post::find($id);
     //return $post;

       $post->delete();  
     return view('author.authorhome')->with('status', ' Post Delete!');
    }


    public function destroys($id)
    {
        $post= post::find($id);
        $post->delete();  

       
       // return view('admin.postshow')->with('status', ' Post Delete!');
       return redirect()->back()->with('status', ' Post Delete!');;

    }

    public function showlog(){
        $data=post::all();

        print_r($data);
        return view('comment/commentlog')->with('data',$data);
        
      }

      public function all(){
       // $p=post::all();
        $p = post::all()->sortByDesc('created_at');
       // return $p;
      
       //$req->session()->put('data',$req->input());
      // $p=post::orderBy('created_at','desc');
         return view('admin/postshow')->with('data',$p);
      }

      
      public function allauth($id){
        $userid=$id;
        $data=DB::table('posts')
        ->where('user_Id',$userid)
        ->get();

        $userid=$id;
        $np=DB::table('posts')
        ->where('user_Id',$userid)
        ->count();

        $userid=$id;
        $post=DB::table('posts')
        ->where('user_Id',$userid)
        ->get();
        
          return view('admin/postauthshow',compact('data','np','post'));
       }





      
      public function storeadmin(Request $request)
      {
          $this->validate($request, [
               'title'=>'required',
               'body'=>'required'
          ]);
 // return $request;
          $posts=new post;
          $posts->title=$request->input('title');
          $posts->body=$request->input('body');
          $posts->user_name=$request->input('username');
          $posts->user_Id=$request->input('userid');
          $posts->save();
  
          $request->session()->flash('message','Post Created');
          return redirect('posts');
  
          $request->session()->flash('error','Post not Created');
          return redirect('posts');
  
  
      }

      public function showadmin($id)
    {
        $data= post::find($id);
        $ad= admin::all();
        
        $cid=$id;
        $cs=DB::table('comments')
        ->where('postid',$cid)
        ->get();

        //dd($posts);
        //return $cs;
        return view('admin.show',compact('data','ad','cs'));
    }

    public function alluser($id){
       // $p=post::all();
     
      
       $u=user1::find($id);
       //return $id;
       
        //$data = post::all()->sortByDesc('created_at');

        $data=DB::table('posts')
        ->where('isapproved',1)
        ->get()->sortByDesc('created_at');
    //  return $data;

    $ab=DB::table('authors')->get();
    //return $ab;
    return view('postlog.allpost',compact('data','u','ab'));
      //return view('postlog/allpost',compact('data','u','ab'));
        
        
      }


      public function showuser(Request $req,$id)
    {
        //return $id;

        
        $postid=$id;
       $cs=DB::table('comments')
       ->where('postid',$postid)
       ->get();
      // return $cs;
       

       $postid=$id;
       $likes=DB::table('likes')
       ->where('post_id',$postid)
       ->count();


       $postid=$id;
       $comments=DB::table('comments')
       ->where('postid',$postid)
       ->count();

    
      // return $likes;
      $uid=$req->uid;
        $u1=user1::find($uid);

      
        // return $req;

       $data= post::find($id);

       $data1= post::find($id);
      
      
        $a=new auth();
        $a->name=$req->authorname;
          
      $aa= DB::select('select id,name,email,professionalbackground from authors where  name=?' ,[  $a->name]);
      // return $data;
      return view('postlog.showeditlog',compact('data','data1','u1','aa','likes','comments','cs'));
    }

    public function approve(Request $request){
        
        //return $req->id;
        $posts=new post;
        $posts->title=$request->input('title');
        $posts->body=$request->input('body');
        $posts->auth_name=$request->input('authname');
        $posts->user_id=$request->input('authid');
        
       // return $posts->auth_name;
        return view('admin.postapproval')->with('data',$posts);
    }

   public function searchu(Request $req){

    $search=$req->search;
if($search != ""){
    $data=post::where('title','like', '%' .$search. '%')
    ->get();

    if(count($data)>0){
        return view('post.index')->with('data',$data);
    }
}
return redirect()->back()->with('status','No post');


}

public function searcha(Request $req){

    $search=$req->search;
if($search != ""){
    $data=post::where('title','like', '%' .$search. '%')
    ->get();

    if(count($data)>0){
        return view('admin.postshow')->with('data',$data);
    }
}
return redirect()->back()->with('status','No post');

$table->bigInteger('user_Id');
$table->String('user_name');
$table->String('user_email');
$table->bigInteger('post_id');
}
public function addlike(Request $req){

    $user_id=$req->userid;
    $post_id=$req->postid;
    $data= DB::select('select id,user_name,user_email from likes where  user_Id=? and post_id=?' ,[$user_id,$post_id]);
    
    if(count($data)){
        echo 'You have already liked';
    }
else{
    $l=new like();
    $l->user_Id=$req->userid;
    $l->user_name=$req->name;
    $l->user_email=$req->email;
    $l->post_id=$req->postid;
   
    $l->save();
    return redirect()->back();
   
   }
}


public function deletecomment($id)
{
    $comment= comment::find($id);
return $comment;
    //$comment->delete();  
    //return redirect()->back();
   // return view('author.show');
}
 public function userhome($id){

    $user=user1::find($id);

    $p = post::all()->sortByDesc('title');
  //return $user;
    return view('inc.navhomebar',compact('user','p'));
 }

 public function updatepostasapproved($id){
     $post=post::find($id);
     $post->isapproved=1;
     $post->save();
     return redirect()-> back();
 }

 public function updatepostasnotapproved($id){
    $post=post::find($id);
    $post->isapproved=0;
    $post->save();
    return redirect()-> back();
}
}

