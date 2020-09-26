<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5ed392901254a4001214b978&product=inline-share-buttons&cms=website' async='async'></script>
<link rel="stylesheet" type="text/css" href="{{asset('css/demo.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style> 
    body{
           
           background-repeat: no-repeat;  
           background-size:cover;
         
           background-color:white;
           
         
        
       }
      
       .containera{
        background-color:black;
        box-sizing:border-box;
        color:black;
    }
    ul {
        
       
    }
    ul li {
        list-style-type:none;
        display:inline-block;
        padding:25px;
        font-size:25px;
        
    }
    ul li a{
        text-decoration:none;
        color:white;
      
    }
  .containera li a:active, a:hover{
        color:red;
        background-color:maroon;
      
    }
    
     </style>
</head>
<body>
<div class="containera ">
     <ul>
     <li style="color:yellow">Developer Tips</li>
   @foreach($a as $as)
   <li><a href="/authhome/{{$as->id}}" data-toggle="tooltip" style="margin-left:600px;" data-placement="bottom" title="Please Log Out" >Home</a></li>
    <li><a href="/seemypost/{{$as->id}}/{{$as->name}}" style="margin-left:50px;">Blog</a></li>  
    <li><a href="/seeauthorvedios/{{$as->name}}" style="margin-left:50px;">Tutorial</a></li>
    <li><a href="/authlogout "  style="margin-left:50px;">Logout</a></li>
   
     </ul>
    </div>
    
<div class="container">
<div class="row" style=" ">
<div class="col md-4" style="">
<img src="/images/blog7.jpg" style="height:55%; width:900px; margin-top:200px; margin-left:-150px; opacity:0.8;" alt="">
</div>
<div class="col md-8" style="background-color:white; margin-bottom:50px; margin-left:-100px; margin-right:-190px; margin-top:5px;" >
<h4 style="font-size:25px;  margin-left:130px; ">Recently added posts</h4> <br><br>
@foreach($post as $posts)
<ul>
<li style="width:100%; color:black; border:0.5px solid black;">
<img src="{{asset('uploads/u/'.$posts->image)}}" style="  width:100px; padding:0px;  height:50px;" class="card-img-top rounded" alt="..."> -
 &nbsp&nbsp&nbsp <span style="text-transform:capitalize;">{{$posts->title}} </span> &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp 
 <button class="btn btn-success " style=" font-weight:bold;  margin-left:75%; " value="view post"><a style=" color:black;" href="/save/{{$posts->id}}" >View Post</a></button>
           
 </li>

</ul> 
  @endforeach             
</div>
</div>
<br><br><br><br>
         @if(session()->has('message'))
         <div class="alert alert-success" style=" margin-left:350px;; padding:15px; font-size:20px; text-align:center; width:300px;">{{session()->get('message')}}</div>
        @elseif(session()->has('error'))
        <div class="alert alert-danger" style=" margin-left:350px;; padding:15px; font-size:20px; text-align:center; width:300px;">{{session()->get('error')}}</div>
      
         @endif

         @if(count($data) > 0)
         <ul>
         <h3 style="color:red; margin-left:100px; font-size:30px;">Your &nbsp&nbsp  Posts  

         <br><br>
        
         @foreach($data as $datas) 
              <div class="row" style="border-bottom:1px solid black;">
            
            <div class="col md-5">
             <div class="br">
             <li>
               <br>
                <img src="{{asset('uploads/u/'.$datas->image)}}" style="  width:200px; padding:0px;  height:150px;" class="card-img-top rounded" alt="...">
                </div></div>
                <div class="col md-7" style=" padding:10px; margin-top:0px; margin-left:-350px;">
                <p> <h4 style="color:black; padding:5px; margin-left:0px;"> {{$datas->title}}</h4> <br>
                <button class="btn btn-success " style=" font-weight:bold;" value="view post"><a style="color:black;" href="/viewpost/{{$datas->id}}/{{$as->name}}" >View Post</a></button>
            <br>   <br> <p style="background-color:none;  padding:10px; margin:0px;"><small style="font-size:15px;"><i class="fa fa-user-circle-o" aria-hidden="true"></i>&nbsp&nbsp Written on {{$datas->created_at}}</small></p> 
             
             
              </p>
              
              </li>
              </div>
            </div> <br><br>
        @endforeach
            </ul>
         @else
           <p>no post</p>
         @endif
         </div> 
    
         <footer style="background-color:darkgrey;">
    <div style="margin-left:50px;" >
<div class="row" style="padding:50px;">
    <div class="col-md-4"><p style="font-size:35px; color:black; margin-left:100px;">About Us</p><br>
    <h2 style="color:black;"><span style="color:yellow">Developer</span> Tips</h2>
    <span class="lead" style="color:black;">This is made for developers who have enthusiasmto learn new web technologies. This channel includes HTML,CSS,Javascript,Jquery,PHP, c#.net,back-end and front-end frameworks too.I mainly create this blog in order to give you both vedio and articles related tothem . Then you can find related things regarding to vedios through browsing this articles</span> <br><br>
                           
    </div>
    <div class="col-md-4"><p  style="font-size:28px; margin-left:170px; color:black;">Quick Links <br><br>
   <ul>
     <li><a href="/seeauthorvedios/{{$as->name}}" style="color:black; font-size:20px; margin-left:170px;  text-decoration:none;">Tutorial</a></li><br><br>
    
     <li><a href="/seemypost/{{$as->id}}/{{$as->name}}" style="color:black; font-size:20px;  margin-left:170px; text-decoration:none;">BLOG</a></li>
   </ul> </p>
    </div>
    <div class="col-md-4"><p  style="font-size:30px; color:black;  margin-left:170px;" >Contact Us</p><br><br><br>
    <p class="lead"  style="  margin-left:170px;"><i class="fa fa-phone" aria-hidden="true" style="font-size:20px;  color:black;">&nbsp&nbsp&nbsp +9416897175</i> <br><br><br>
    <i class="fa fa-envelope" style="font-size:20px; color:black;"  aria-hidden="true">&nbsp&nbsp&nbsp rumesh@gmail.com</i><br><br><br>
   
   <i class="fa fa-facebook" ></i>&nbsp&nbsp&nbsp
    <i class="fa fa-instagram" ></i>&nbsp&nbsp&nbsp
    <i class="fa fa-twitter" ></i>&nbsp&nbsp&nbsp
    <i class="fa fa-youtube" ></i>
    </p>
    </div>
</div></div>
    <div class="row">
        <div class="container">
            <div class="col-md-12">
            <h4 style="margin-left:200px; color:black">Share this page</h4>
    <div class="sharethis-inline-share-buttons"></div>
    </div></div>
    </div> <br><br><br>
</footer>     @endforeach
</body> 
</html>