@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5ed392901254a4001214b978&product=inline-share-buttons&cms=website' async='async'></script>

<style>

body{
  font-size:10px;
  color:black;
  background-repeat: no-repeat;
  background-size:cover;
  opacity:0.9;
  background-color:darkgrey;
           
           
        }
ul li{
    list-style-type:none;
   
}
ul li a{
  color:white;
}
.br{
   
    font-size:20px;
    display:block;
    padding:10px;
    }
    h3{
        font-size:30px;
        text-align:center;
    }
</style>


     <br><br>
           <div  style="  background-image: url({{ asset('assets/img/bg19.jpg') }}); background-size:cover; margin-top:-100px; height:500px; margin-left:-200px; margin-right:-250px;">       
       <h2 style="color:white; margin-left:40%;">New Tutorials</h2> <br><br>
       <img src="images/blog19.jpg" style="height:115%; width:1800px; margin-left:-200px; margin-right:-300px; opacity:0.8;" alt="">

</div>   
<br><br><br><br><br><br>
<div class="container">
       <ul class="list-group list-group-flush"style="background-color:darkgrey; padding:30px;">
       <br><br><br><br><br><br><br><br><br><br><br><br>

            @foreach($data as $datas)
             <div class="br" style=>
             <li class="list-group-item">
              <h2 style="background-color:darkred; padding:15px;">
                {{$datas->name}} </h2><br>
                
                 <h4>{{$datas->description}}</h4>
                <iframe width="560" height="315" src="{{$datas->url}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                 allowfullscreen></iframe><br>
                 <p style="font-size:15px;"><i class="fa fa-calendar" aria-hidden="true"></i> &nbsp&nbsp Created at {{$datas->created_at}}</p>

               <hr>
              </li>
              </div>
            @endforeach
           
            </ul>
       
       </div> 
        
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