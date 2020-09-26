@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5ed392901254a4001214b978&product=inline-share-buttons&cms=website' async='async'></script>

<style>

body {
  font-family: Arial;
  background-color:darkgrey;
}

* {
  box-sizing: border-box;
}

form.example input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 80%;
  background: white;
}

form.example button {
  float: left;
  width: 20%;
  padding: 10px;
  background: darkblue;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none;
  cursor: pointer;
}

form.example button:hover {
  background: #0b7dda;
}

form.example::after {
  content: "";
  clear: both;
  display: table;
}

body{
  font-size:10px;
  color:black;
  background-repeat: no-repeat;
  background-size:cover;
  opacity:0.7;}
  background-image: url({{ asset('assets/img/b1.jpg') }}); 
   
        
       
ul li{
    list-style-type:none;
   
}
ul li a{
  color:black;
}
.br{
    background-color:white;
    font-size:20px;
    display:block;
    padding:10px;
    }
    h3{
        font-size:50px;
    
    }
</style>
<br><br><br> <div style="background-color:#FFF0F5; margin-left:-250px; margin-top:-50px; padding:20px; margin-right:-250px;">
         <h3>  <span style="margin-top:200px; margin-left:580px; background-color:">Blog Posts</span> 
</h3> <br><br>
<div style="margin-left:600px;">
<h1 style="color:blue; font-weight:bold;"> Search Your</h1>
         <h3 style="margin-top:-80px; margin-left:50px;">things here.....
         <img src="images/blog17.jpg" style="height:200px; width:180px; margin-left:200px;  border-radius:500px;" alt=""></h3>

</div>
<div class="row" style="margin-top:-90px;">
<div class="col md-6">
<img src="images/blog10.jpg" style="height:300px; width:280px; margin-left:200px;  border-radius:500px;" alt="">

</div>

<div class="col md-6" style="margin-left:-1000px; margin-top:100px; ">
         <form class="example" action="/searchu" method="post" style="margin:auto;max-width:600px">
         @csrf
                    <input type="text" placeholder="Search.." name="search"> 
                    <button type="submit"><i class="fa fa-search"></i></button>
         </form> <br><br></div></div></div>
         @if (session('status'))
    <div class="alert alert-success" style=" margin-left:350px; padding:15px; font-size:20px; text-align:center; width:300px;">
        {{ session('status') }}
    </div>
@endif

         @if(session()->has('message'))
         <div class="alert alert-success" style=" margin-left:350px;; padding:15px; font-size:20px; text-align:center; width:300px;">{{session()->get('message')}}</div>
        @elseif(session()->has('error'))
        <div class="alert alert-danger" style=" margin-left:350px;; padding:15px; font-size:20px; text-align:center; width:300px;">{{session()->get('error')}}</div>
      
         @endif
         @if(count($data) > 1)
         <br><br><br>
       
      
            @foreach($data as $datas)
            <div class="row" style="  border-bottom:1px solid black; background-color:white; padding:10px;">
            <div class="col md-6">
             <div class="br">
             <li>
               <br>
                <img src="{{asset('uploads/u/'.$datas->image)}}" style="  width:200px; padding:0px;  height:150px;" class="card-img-top rounded" alt="...">
                </div></div>
                <div class="col md-6" style="margin-top:50px; margin-left:-350px;">
                <p> <h4 style="color:black; padding:5px; margin-left:0px;"> {{$datas->title}}</h4> <br>
              <button class="btn btn-success " style=" font-weight:bold; " value="view post"><a style="color:black;" href="save/{{$datas->id}}" >View Post</a></button>
           <br>  <p style="background-color:none;  padding:10px; margin:0px;"><small style="font-size:15px;">
           <i class="fa fa-user-circle-o" aria-hidden="true"></i>&nbsp&nbspWritten on {{$datas->created_at}}- BY  {{$datas->user_name}}</small></p> 
             
             
              </p>
              
              </li>
              </div>
            </div> <br><br>
            @endforeach
            
            </ul>
         @else
           <p>no post</p>
         @endif
         <img src="images/blog14.jpg" style="height:300px; width:280px; margin-left:850px;  border-radius:500px;" alt=""></h3>
        
         

         <footer style="border-top:1px solid black">
    <div >
<div class="row" style="padding:50px;">
    <div class="col-md-4"><p style="font-size:35px; color:black; margin-left:100px;">About Us</p><br>
    <h2><span style="color:yellow">Developer</span> Tips</h2>
    <span class="lead">This is made for developers who have enthusiasmto learn new web technologies. This channel includes HTML,CSS,Javascript,Jquery,PHP, c#.net,back-end and front-end frameworks too.I mainly create this blog in order to give you both vedio and articles related tothem . Then you can find related things regarding to vedios through browsing this articles</span> <br><br>
                           
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