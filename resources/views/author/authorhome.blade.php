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
<script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5ed392901254a4001214b978&product=inline-share-buttons&cms=website' async='async'></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style> 
    body{
        
        background-size:cover;
        background-repeat: no-repeat;
        
        background-image: url({{ asset('assets/img/bg23.jpg') }});
        
    }
    .containera{
        background-color:black;
        box-sizing:border-box;
        color:darkblack;
        font-weight:25px;
        padding:10px;
    }
    .col-md-4{
        font-weight:bold
        color:#000000;
    }
    ul {
        
       
    }
    ul li {
        list-style-type:none;
        display:inline-block;
        padding:10px;
        font-size:25px;
        
    }
    ul li a{
        text-decoration:none;
        color:white;
        margin-left:120px;
       
    }
  .containera li a:active, a:hover{
        color:red;
        background-color:maroon;
      
    }
 
form{
    width:75%;
    margin-left:50px;
    color:white;
}
.verticle{
    
            height: 200px; 
            position:absolute; 
            
}

    
     </style>
</head>
<body>
    <div class="containera ">
    <ul>
     <li style="color:yellow;">Developer Tips</li>
     
     @foreach($data as $datas) 
     
     <li><a href="/authhome/{{$datas->id}}" data-toggle="tooltip" style="margin-left:700px;" data-placement="bottom" title="Please Log Out" >Home</a></li>
     <li><a href="/seemypost/{{$datas->id}}/{{$datas->name}}" style="margin-left:50px;">Blog</a></li>
     <li><a href="/seeauthorvedios/{{$datas->name}}" style="margin-left:50px;">Tutorial</a></li>
     <li><a href="/authlogout "  style="margin-left:50px;">Logout</a></li>
     
     </li>
     </ul>    
    </div>

             <h2 style="text-align:center;"> Hi {{$datas->name}} 
               <br> Welcome To Developer Tips You Tube Blog</h2>
    
     <div class=" container container" style="margin-top:150px;">
        <div class="row">
             <div class="col-md-4">
                       <img  class="img-circle"src="img/dog.jpg" alt="doggy" >
                       <h4 style="font-weight:bold;">Developer Tips</h4>
                       <p>Software engineer at sss</p>
                       <hr>
                       <p>Share this page:</p>
                       <div class="sharethis-inline-share-buttons"></div>
   
              </div>
              <div class="verticle"></div>
              <div class="col-md-8" style="border-left:1px solid black; padding:10px;">
              <ul class="list-group list-group-flush" style="margin-left:20px; " enctype="multipart/form-data">
              <img class="card-img-top" src="{{asset('uploads/u/'.$datas->image)}}" style="width:150px; height:150px; border-radius:150px; 
              margin-left:200px; " alt="Card image cap">
   <br><br>
    <li class="list-group-item" style="font-size:15px; background-color:lightgrey;"><strong> Name-</strong> {{$datas->name}}</li>
    <li class="list-group-item" style="font-size:15px;  background-color:lightgrey;"><strong> email</strong> {{$datas->email}}</li>
    <li class="list-group-item" style="font-size:15px; background-color:lightgrey;"><strong> Password-</strong> {{$datas->password}}</li>
    <li class="list-group-item" style="font-size:15px; background-color:lightgrey;"><strong> Skills-</strong> {{$datas->professionalbackground}}</li>
  </ul> <br>
  <button class="btn btn-success" style="margin-left:200px;"><a href="/updateauthpro/{{$datas->id}}" style="color:white; text-decoration:none; ">Update Profile Details</a></button>
              </div>
        </div>
                      
     </div>
     

   
<br><br>
<div class="container">
 <h1>create posts</h1>
 @if (session('status'))
    <div class="alert alert-success" style=" margin-left:350px; padding:15px; font-size:20px; text-align:center; width:300px;">
        {{ session('status') }}
    </div>
@endif

 

<form action='/store' method='POST' enctype="multipart/form-data">
@csrf
<div class="form-group">
 <label for="title">Title</label>
 <input type="text"  name="title" class="form-control">
</div>


<div class="form-group">
 <label for="image">Featured image</label>
 <input type="file" style="background-color:white; color:black; padding:10px;"  name="image" class="form-control">
</div>


<div class="form-group">
 <label for="body">Body</label><br>
 <textarea name="body" id="summary-ckeditor" class="form-conrol rounded -0" cols="130" rows="10"></textarea>
</div>

<script src="{{asset('ckeditor/ckeditor.js')}}"></script>
<script>
    CKEDITOR.replace( 'summary-ckeditor', {
        filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });
</script>

<div class="form-group">
 <label for="username">Author Name</label><br>
 <input type="text"  name="authname" value="{{$datas->name}}" class="form-control">
</div>

<div class="form-group">
<input type="hidden" name="authid" value="{{$datas->id}}" class="form-control"> 

</div>

<button type="submit"   class="btn btn-primary">SUBMIT</button>
</form>


</div>
</div>
<footer>
    <div >
<div class="row" style="padding:50px;">
    <div class="col-md-4"><p style="font-size:35px; color:white; margin-left:100px;">About Us</p><br>
    <h2 style="color:white;"><span style="color:yellow">Developer</span> Tips</h2>
    <span class="lead" style="color:white;">This is made for developers who have enthusiasmto learn new web technologies. This channel includes HTML,CSS,Javascript,Jquery,PHP, c#.net,back-end and front-end frameworks too.I mainly create this blog in order to give you both vedio and articles related tothem . Then you can find related things regarding to vedios through browsing this articles</span> <br><br>
                           
    </div>
    <div class="col-md-4"><p  style="font-size:28px; margin-left:170px; color:white;">Quick Links <br><br>
   <ul>
     <li><a href="/seeauthorvedios/{{$datas->name}}" style="color:white; font-size:20px;  text-decoration:none;">Tutorial</a></li><br><br>
    
     <li><a href="/seemypost/{{$datas->id}}/{{$datas->name}}" style="color:white; font-size:20px;  text-decoration:none;">BLOG</a></li>
   </ul> </p>
    </div>
    <div class="col-md-4"><p  style="font-size:30px; color:white;  margin-left:170px;" >Contact Us</p><br><br><br>
    <p class="lead"  style="  margin-left:170px;"><i class="fa fa-phone" aria-hidden="true" style="font-size:20px;  color:white;">&nbsp&nbsp&nbsp +9416897175</i> <br><br><br>
    <i class="fa fa-envelope" style="font-size:20px; color:white;"  aria-hidden="true">&nbsp&nbsp&nbsp rumesh@gmail.com</i><br><br><br>
   
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
            <h4 style="margin-left:200px; color:white">Share this page</h4>
    <div class="sharethis-inline-share-buttons"></div>
    </div></div>
    </div> <br><br><br>
</footer>@endforeach
</body>
</html>z