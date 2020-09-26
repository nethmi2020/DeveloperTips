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
           background-color:#DCDCDC;
           
         
        
       }
      
    .containera{
       
        box-sizing:border-box;
        color:black;
        background-color:black;
        padding:15px;
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
        color:black;
        margin-left:120px;
    }
  .containera li a:active, a:hover{
        color:red;
        background-color:darkgrey;
      
    }
  
.dropdown-item:hover{
background-color:black;
}
     </style>
</head>
<body>
    <div class="containera ">
    <ul style="border-bottom:1px solid black;">
     <li style="color:yellow;">Developer Tips</li>
     
     <li><a href="/userhome/{{$data->id}}" style="margin-left:600px; color:white;">Home</a></li>
      <li><a href="/seeuserlogvedios/{{$data->id}}" style="margin-left:50px; color:white;">Tutorial</a></li>
      <li><a href="/seeallposts/{{$data->id}}" style="margin-left:50px; color:white;">BLOG</a></li>
     <li><a href="/index " style="margin-left:50px; color:white;">Logout</a>
     <img src="{{asset('uploads/u/'.$data->image)}}" style="margin-left:30px;  width:35px;  height:35px; border-radius:100px;" class="card-img-top rounded" alt="...">
 
     </li>
     </ul>   
    </div>

    <div class="container" style="margin-top:100px; margin-left:200px; color:black;">
    <form action="/updateduserpro/{{$data->id}}"  method="post" enctype="multipart/form-data">
@csrf  
<h2>Update Profile details</h2>
@if (session('status'))
<div class="alert alert-success" style=" margin-left:350px; padding:15px; font-size:20px; text-align:center; width:300px;">
    {{ session('status') }}
</div>
@endif
<br><br>
<div class="form-group">
<label >Enter name</label>
<input type="text" style="padding:20px"  class="form-control" name="name" value="{{$data->name}}">
</div>

<div class="form-group">
<label >Enter email</label>
<input type="text" style="padding:20px" class="form-control" name="email" value="{{$data->email}}">
</div>

<div class="form-group">
<label >Current Password</label>
<input type="text" style="padding:20px" class="form-control" value="{{$data->password}}"  name="currentpassword">
</div>


<div class="form-group">
<label >New Password</label>
<input type="text" style="padding:20px" class="form-control"   name="nwpassword">
</div>

<div class="form-group">
<label >Retype New Password</label>
<input type="text" style="padding:20px" class="form-control"   name="rnwpassword">
</div>

<div class="form-group">
<label >Select Image</label>
<input type="file"  value="{{$data->image}}"  name="image">
     </div>

<br><br>
<div class="form-group">
<input type="submit"  class="btn btn-success"  value="UPDATE" name="send">
</div>

 </form>
     </div>
</body>
</html>