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
           opacity:0.8;
           background-color:darkgrey;
       }
       .containera{
        background-color:#696969;
        box-sizing:border-box;
        color:black;
    }

    ul li {
        list-style-type:none;
        display:inline-block;
        padding:30px;
        font-size:25px;
        
    }
    ul li a{
        text-decoration:none;
        color:white;
        margin-left:120px;
    }
  .containera li a:active, a:hover{
        color:red;
        background-color:none;
      
    }
     </style>
</head>
<body>
<div class="containera" style="background-color:black;">
     <ul>
     
     <li style="color:yellow;">Developer Tips</li>
     <li><a href="/userhome/{{$u1->id}}" style="margin-left:550px; color:white;">Home</a></li>
     
     <li><a href="/seeallposts/{{$u1->id}}" style="color:white;margin-left:50px;">Blog</a></li>
    
     <li><a href="/index " style="margin-left:50px;">Logout</a></li>
     <img src="{{asset('uploads/u/'.$u1->image)}}" style="margin-left:10px;  width:35px;  height:35px; border-radius:100px;" class="card-img-top rounded" alt="...">
     </ul>
</div>
<div class="container">
<div class="row">

<div class="col-md-8" style="border-right:1px solid black; ">


 <h1>{{$data->title}}</h1>
 <br><br>
 <img src="{{asset('uploads/u/'.$data->image)}}" style="margin-left:50px;  width:200px; height:150px;  border-radius:100px;" class="card-img-top rounded" alt="...">
 <br><br><br>

 {{$data->body}}
 <img class="card-img-top" src="{{asset('storage/uploads/')}}" style="width:150px; height:150px; " alt="Card image cap">
 <br>  <br>  <br>  <br>
 <div style="border-bottom:1px solid black;"></div>
 <!--<a href="/editpost/{{$data->id}}" class="btn btn-edit">EDIT</a>
 <a href="/deletepost/{{$data->id}}" class="btn btn-edit">DELETE</a>-->
 
 <small style="font-size:10px;">Written on {{$data->created_at}}
 
 </small>
 <p>{{$data->user_name}}</p>
 </div>
<div class="col-md-4" >
 <div style="margin-top:100px; margin-left:100px;">
 <h4 >About Author</h4>
 
 <strong>Name:</strong>
<p style="color:blue;">{{$data->user_name}}</p>

 
 @foreach($aa as $as)
 <strong>Email:</strong>
 <p style="color:blue;">{{$as->email}}</p>
 <strong>Fields interested in:</strong>
 <p style="color:blue;">{{$as->professionalbackground}}</p>


 @endforeach
 <a href="/auth" style="color:white;"><button class="btn btn-success">Become Author</a>
 </button><br><br>
 <div style="border-bottom:1px solid black;"></div><br><br>
        <p>Share this Post:</p>
            <div class="sharethis-inline-share-buttons"></div>
 </div>
 </div>
 </div>
 <div class="row">
 
 <button class="btn btn-primary">{{$likes}} Likes</button>
 &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp
 <button class="btn btn-primary">{{$comments}} Comments</button>
 &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp
 <form action="/addlike" method="post">
@csrf

     <input type="hidden" value="{{$data->id}}" name="postid"> 
     <input type="hidden" value="{{$u1->id}}" name="userid">
     <input type="hidden"  class="form-control" value="{{$u1->name}}" name="name">
     <input type="hidden" class="form-control" value="{{$u1->email}}" name="email">
    <input type="submit" class="btn btn-primary"  value="Add Like" name="like">
    </form>
    </div>
 <br><br>
 


 <h3 style="color:black;">comments</h3>
        
        
           @foreach($cs as $datas)
            <div class="br">
           
             <p style="font-size:13px;"> 
               {{$datas->comments}}
             
          Written on {{$datas->created_at}}- BY  {{$datas->name}}
             </p>
            
             
             </div>
           @endforeach
          
           
           <br>
 <div style="border-bottom:1px solid black;"></div><br><br>
 <form action="/commentstore"  method="post">
@csrf  

<br><br>

   
    <input type="hidden" value="{{$data->id}}" name="postid">

    <div class="form-group">
   
    <input type="hidden"  class="form-control" value="{{$u1->name}}" name="name">
    </div>

<div class="form-group">
  
    <input type="hidden" class="form-control" value="{{$u1->email}}" name="email">
</div>

<div class="form-group">
    <label >ADD  Comments</label>
    <textarea name="comments" cols="2" rows="5" class="form-control"></textarea>
</div>


<div class="form-group">
   
    <input type="submit" class="btn btn-info"  value="Post Comment" name="send">
    

     </form> <br> <br><br>


 <hr>
 </div>

<footer style="background-color:darkgrey;">
    <div >
<div class="row" style="padding:50px;">
    <div class="col-md-4"><p style="font-size:30px; color:black; margin-left:100px;">About Us</p><br>
    <h2><span style="color:yellow">Developer</span> Tips</h2>
    <span class="lead">This is made for developers who have enthusiasmto learn new web technologies. This channel includes HTML,CSS,Javascript,Jquery,PHP, c#.net,back-end and front-end frameworks too.I mainly create this blog in order to give you both vedio and articles related tothem . Then you can find related things regarding to vedios through browsing this articles</span> <br><br>
                           
    </div>
    <div class="col-md-4"><p  style="font-size:30px; margin-left:150px; color:black;">Quick Links <br><br>
   <ul>
      <li><a href="/seeallposts/{{$u1->id}}" style="color:black; font-size:20px;  text-decoration:none;">Blog</a></li>
    
     
   </ul> </p>
    </div>
    <div class="col-md-4"><p  style="font-size:30px; color:black;  margin-left:170px;" >Contact Us</p><br><br><br>
    <p class="lead"  style="  margin-left:170px;"><i class="fa fa-phone" aria-hidden="true" style="font-size:20px;">&nbsp&nbsp&nbsp +9416897175</i> <br><br><br>
    <i class="fa fa-envelope" style="font-size:20px;"  aria-hidden="true">&nbsp&nbsp&nbsp rumesh@gmail.com</i><br><br><br>
   
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
            <h4 style="margin-left:200px;">Share this page</h4>
    <div class="sharethis-inline-share-buttons"></div>
    </div></div>
    </div> <br><br><br>
</footer>
</body>
</html>