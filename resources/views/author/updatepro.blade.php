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

    <style> 
    .containera{
        background-color:black;
        box-sizing:border-box;
    }
    
    ul li {
        list-style-type:none;
        display:inline-block;
        padding:15px;
        font-size:25px;
        
    }
    ul li a{
        text-decoration:none;
        color:white;
        margin-left:120px;
    }
  .containera li a:active, a:hover{
        color:red;
        background-color:darkgrey;
      
    }
 
    .box{
  margin-left:200px;
    
    padding:50px;
    font-size:15px;
    
}

.has-eror{
    border-color:#cc0000;
    background-color:#ffff99;
}
input[type="text"]{
    padding:10px;
}
    
     </style>
</head>
<body>
    <div class="containera ">
    <ul>
     <li style="color:yellow">Developer Tips</li>
     <li><a href="/authhome/{{$data->id}}" data-toggle="tooltip" style="margin-left:700px;" data-placement="bottom" title="Please Log Out" >Home</a></li>
     <li><a href="/seemypost/{{$data->id}}/{{$data->name}}" style="margin-left:50px;">Blog</a></li>
     <li><a href="/seeauthorvedios/{{$data->name}}" style="margin-left:50px;">Tutorial</a></li>
     <li><a href="/index " style="margin-left:50px;">Logout</a>
     
     </li>
     </ul>    
    </div>

    <div class="container box">

@if(count($errors) > 0)
<div class="alert alert-danger">
   <button type="button" class="close" data-dismiss="alert">*</button>
   <ul>
       @foreach($errors->all() as $error)
       <li>{{$error}}</li>
       @endforeach
   </ul>
</div>

@endif

@if($message =Session::get('success'))
<div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">*</button>
    <strong>{{$message}}</strong>
</div>

@endif

<form action="/updatedpro/{{$data->id}}"  method="post" enctype="multipart/form-data">
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
<input type="text" class="form-control" name="name" value="{{$data->name}}">
</div>

<div class="form-group">
<label >Enter email</label>
<input type="text" class="form-control" name="email" value="{{$data->email}}">
</div>

<div class="form-group">
<label >Skills</label>
<textarea name="professionalbackground" cols="10" rows="5" class="form-control">{{$data->professionalbackground}}</textarea>
</div>

<div class="form-group">
<label >Password</label>
<input type="text" class="form-control"  value="{{$data->password}}" name="password">
</div>

<div class="form-group">
<input type="file" class="form-controll"  name="image">
<label >Choose file</label>
      </div>


<div class="form-group">
<input type="submit" class="btn btn-success"  value="UPDATE" name="send">
</div>

 </form>
</div>
    
</body>
</html>