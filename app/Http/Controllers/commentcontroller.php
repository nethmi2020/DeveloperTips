<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\comment;

class commentcontroller extends Controller
{
  
    public function index()
    {
       //$posts= post::orderBy('title','desc')->get();

       $posts= post::all();
      // echo "<pre>";
      // print_r($posts);
      return view('comment.commentshow')->with('data',$posts);
    }





    public function commentstore(Request $req)
    {
       
      //return $req;
        $name=$req->name;
        $email=$req->email;
        $comments=$req->comments;
        $postid=$req->postid;
  
    DB::insert('insert into comments(id,name,email,comments,postid)values(?,?,?,?,?)',[null,$name, $email,$comments,$postid]);

    return redirect()->back()->with('status','Comment add successfully');

    }




    public function commentstoreuser(Request $req)
    {
        $name=$req->name;
        $email=$req->email;
        $comments=$req->comments;
        $postid=$req->postid;

       // return $postid;
       // $comments->save();
  
    DB::insert('insert into comments(id,name,email,comments,postid)values(?,?,?,?,?)',[null,$name, $email,$comments,$postid]);

    return redirect()->back()->with('status','Comment add successfully');

    }

  

    public function showuser($id)
    {

        $comment=new comment();
        $comment->postid=$id;
       // dd( $comment->postid);

       $comment= DB::select('select id,name,comments,created_at,userid from comments where postid=?  ' ,[$id]);

       if(count($comment)){
        return view('comment.commentshow')->with('data',$comment);
      }
      else{
        echo "no comment";
      }
    }



    



    public function showuserlog($id)
    {

        $comment=new comment();
        $comment->postid=$id;
       // dd( $comment->postid);

       $comment= DB::select('select id,name,email,comments,created_at from comments where postid=?  ' ,[$id]);

       if(count($comment)){
        return view('comment.commentshowlog')->with('data',$comment);
      }
      else{
        echo "no comment";
      }

    }


    


  public function destroy($id)
    {
        $comment= comment::find($id);
//return $comment;
        $comment->delete();  
        return redirect()->back();
       // return view('author.show');
    }




    public function showlogin( $id){

      $c=new comment();
     $c->postid=$id;
//return $c;
      return view('comment/commentlog')->with('data',$c->postid);
    }





    
    public function loggedcomment(Request $req){

     //return $req->input();
     $email=$req->email;
      $password=$req->password;
      
  
      $data= DB::select('select id,name,email from users where email=?  and password=?' ,[$email,$password]);
   
   // $post->$data->input();
  
$req->session()->put('data',$req->input());

//return $req->session()->get('data');

if(count($data)){
  //print_r($c->data);
    return redirect('/addcomment');
    

}
else{
  echo "logged unsuccessfully";
}

}
/*public function adminshow($id)
    {

        $comment=new comment();
        $comment->postid=$id;
       // dd( $comment->postid);

       $data= DB::select('select id,name,comments,created_at,email from comments where postid=?  ' ,[$id]);

       if(count($data)){
        return view('admin.commentshow')->with('data',$data);
      }
      else{
        echo "no comment";
      }
    }*/

    public function admindelcomment($id)
    {
        $comment= comment::find($id);
        $comment->delete();  
        return redirect()->back();
    }

   
}
