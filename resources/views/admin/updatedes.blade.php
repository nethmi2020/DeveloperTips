<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="{{asset('css/dashboard.css')}}">

    <style>
 body{
           color:black;
            background-repeat: no-repeat;  
            background-size:cover;
            background-image: url({{ asset('assets/img/bg23.jpg') }}); 
           
        }
</style>
</head>
<body>
<div class="mainnav">
    <ul>
        <li>Adimn Dashboard</li>
        
        <li style="margin-left: 700px;"><a href="/adminlogout">LogOut</a></li>
    </ul>
   
</div>
<div class="sidenav">
    <a href="/mypro">My Profile</a>
   <img src="img/dog.jpg" alt="" style="width:100px; height:100px; border-radius:50px;">
  <a href="#post">Create Post</a>
  <a href="/usershow">Users</a>
  <a href="/postdetail">Post </a> 
  <a href="/admintutorial">Tutorial</a>
  <a href="/showrequest">Authors</a>
</div>


<div class="container">
<button class="btn btn-secondary"><a href="/seevedios" style="color:white; padding:5px; font-size:25px;">See vedios </a></button>
 
<form action="/updatedes/{{$data->id}}"  method="post">
@csrf  
<h2>Edit Youtube vedios</h2>
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
    <label >Description</label>
    <textarea name="description" cols="10" rows="5" class="form-control">{{$data->description}}</textarea>
</div>

<div class="form-group">
<label >Enter URL</label>
    <input type="text" class="form-control" name="url" value="{{$data->url}}">
</div>

<div class="form-group">
<label >Enter catergory</label> <br>
<input type="text" class="form-control"   name="catergory" value="{{$data->catergory}}">
</div>



<div class="form-group">
    <input type="submit" class="btn btn-success"  value="Send" name="send">
</div>

     </form>
</div>



</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</html>