<?php

namespace App\Http\Controllers;
use App\post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class postlogcontroller extends Controller
{


/*public function index(){

    $post=post::all();
    return view('post.showlog')->with('data',$post);
}*/

    public function store(Request $request)
    {
        $this->validate($request, [
             'title'=>'required',
             'body'=>'required'
        ]);

        $posts=new post;
        $posts->title=$request->input('title');
        $posts->body=$request->input('body');
        $posts->user_name=$request->input('username');
        $posts->user_id=$request->input('user_id');
        $posts->save();

        return redirect()->back();
      // return view('post.index');
        //->with('post',$posts);

    }

    public function showlog($id)


    {
        
       $data=new post();
      $data->user_Id=$id;
     //dd( $data->user_Id);
      //$datas=post::all();

     

    $data= DB::select('select id,title,body,created_at from posts where user_Id=?  ' ,[$id]);
    

      if(count($data)){
        return view('postlog.showlog')->with('data',$data);
      }
      else{
        echo "no posts";
      }
    }

    public function showviewlog($id){
        $posts= post::find($id);
        //dd($posts);
        return view('postlog.showeditlog')->with('data',$posts);

    }

    public function editlog($id)
    {
        $posts= post::find($id);
//print_r($posts);
       return view('postlog.editlog')->with('post',$posts);
    }

    public function updatelog(Request $request, $id)
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
       $request->session()->flash('message','Post edited');
       return redirect()-> back();

       $request->session()->flash('error','Post not Created');
       return redirect()->back();}
      

      public function destroy($id)
    {
        $post= post::find($id);
        $post->delete();  
        return redirect('posts')->with('success','post deleted');
    }
    public function back(){
     // return view('mypro');
      return redirect()->back();
    }

    
}
