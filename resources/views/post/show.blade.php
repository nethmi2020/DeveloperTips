@extends('layouts.app')
<script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5ed392901254a4001214b978&product=inline-share-buttons&cms=website' async='async'></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

@section('content')
<hr>
<style>
    body{
  color:black;
  background-repeat: no-repeat;
  background-size:cover;
  opacity:0.7;
  background-color:darkgrey;
    }
    background-image: url({{ asset('assets/img/b13.jpg') }}); 
</style>
<div class="row">

<div class="col-md-8" style="border-right:1px solid black;">

<h2>{{$data->id}}</h2>

 <h1>{{$data->title}}</h1>
 
 <img src="{{asset('uploads/u/'.$data->image)}}" style="margin-left:30px;  width:50%; height:350px;  border-radius:100px;" class="card-img-top rounded" alt="...">
 
<br><br><br>
 {{$data->body}}
 <img class="card-img-top" src="{{asset('storage/uploads/')}}" style="width:150px; height:150px; " alt="Card image cap">
 <br>
 <!--<a href="/editpost/{{$data->id}}" class="btn btn-edit">EDIT</a>
 <a href="/deletepost/{{$data->id}}" class="btn btn-edit">DELETE</a>-->
 <hr>
 <small style="font-size:10px;">Written on {{$data->created_at}}
 
 </small>
 <p>{{$data->user_name}}</p>
 </div>

 <div class="col-md-4" >
 <div style="margin-top:100px; margin-left:100px;">
 <h4 >About Author</h4><br><br>
 @foreach($a as $as)
 <img src="{{asset('uploads/u/'.$as->image)}}" style="margin-left:30px;  width:50px;  height:50px; border-radius:100px;" class="card-img-top rounded" alt="...">
 <br><br>
 <p>{{$as->name}}</p> <br>
<p> Fields:
{{$as->professionalbackground}}</p> <br>
<p>Email:{{$as->email}}</p>
@endforeach
 
 <hr>
  </button>
        
 </div>
 </div>
 </div>

 <hr>
 
 <div class="container" >
 <div style="margin-left:100px;">
 <p style="color:green">All Comments</p>
 @foreach($c as $cc)

<p>{{$cc->comments}}- <small>{{$cc->name}}</small></p> 
 @endforeach
 </div>
 
 <br><br>
 <button class="btn btn-success"><a href="/logcomment/{{$data->id}}"  style="color:white; text-decoration:none;">Add Comment Here</a></button>
  <hr>
 
 
  </div>
  <button class="btn btn-warning"><a href="/posts" style="color:black;">GO BACK</a></button>

 <br><br><br>
    
 <footer style="border-top:1px solid black">
    <div >
<div class="row" style="padding:50px;">
    <div class="col-md-4"><p style="font-size:35px; color:black; margin-left:100px;">About Us</p><br>
    <h2><span style="color:yellow">Developer</span> Tips</h2>
    <span class="lead">This is made for developers who have enthusiasm to learn new web technologies. This channel includes HTML,CSS,Javascript,Jquery,PHP, c#.net,back-end and front-end frameworks too.I mainly create this blog in order to give you both vedio and articles related tothem . Then you can find related things regarding to vedios through browsing this articles</span> <br><br>
                           
    </div>
    <div class="col-md-4"><p  style="font-size:35px; margin-left:170px; color:black;">Quick Links <br><br>
   <ul>
      <li><a href="/posts" style="color:black; font-size:20px;  text-decoration:none;">Blogs</a></li> <br><br>
     <li><a href="/seeuservedios" style="color:black; font-size:20px;  text-decoration:none;">Tutorial</a></li><br><br>
     <li>  <a href="/reg" style="color:black; font-size:20px;  text-decoration:none;">Register</a>&nbsp &nbsp 
            </li><br>
     
   </ul> </p>
    </div>
    <div class="col-md-4"><p  style="font-size:35px; color:black;  margin-left:170px;" >Contact Us</p><br><br><br>
    <p class="lead"  style="  margin-left:170px;"><i class="fa fa-phone" aria-hidden="true">&nbsp&nbsp&nbsp +9416897175</i> <br><br><br>
    <i class="fa fa-envelope" aria-hidden="true">&nbsp&nbsp&nbsp rumesh@gmail.com</i><br><br><br>
   
   
    <i class="fa fa-facebook" ></i>&nbsp&nbsp&nbsp
    <i class="fa fa-instagram" ></i>&nbsp&nbsp&nbsp
    <i class="fa fa-twitter" ></i>&nbsp&nbsp&nbsp
    <i class="fa fa-youtube" ></i>
    </p>
    </div>
</div>
    <div class="row">
        <div class="container">
            <div class="col-md-12">
            <h4 style="margin-left:200px;">Share this page</h4>
    <div class="sharethis-inline-share-buttons"></div>
    </div></div>
   <br><br><br>
</footer>   
@endsection