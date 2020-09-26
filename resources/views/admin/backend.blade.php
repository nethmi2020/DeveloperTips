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
            opacity:0.8;
            background-image: url({{ asset('assets/img/b13.jpg') }}); 
           
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

<
  <h2 style="color:white; margin-left:500px;"> Back end Vedio List</h2>
  <br><br>
<ul class="list-group list-group-flush">


@foreach($data as $datas)
             <div class="br" style=>
             <li class="list-group-item">
              <h2>
                {{$datas->name}} </h2><br>
                
                <div class="row">
                <div class="col-md-6">
                <iframe  src="{{$datas->url}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                 allowfullscreen></iframe>
                </div>
                <div class="col-md-6">
                <h6>{{$datas->description}}</h6>
                </div>
                </div> 
                <br>
                 <small style="font-size:9px;">Written on {{$datas->created_at}}</small>
                
                 <button class="btn btn-warning" style="margin-left:600px;">
                 <a href="/updatedescrip/{{$datas->id}}" style="color:black; text-decoration:none; ">Update  Description</a></button>
   
              
             
          
             
              <hr>
              </li>
              </div>
            @endforeach
           
            </ul>
 

</div>



</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</html>