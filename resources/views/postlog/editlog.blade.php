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
           
        background-size:cover;
        background-repeat: no-repeat;
        background-color:none; 
       }
      
  .containera{
        background-color:black;
        
        color:black;
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
        background-color:darkgrey;
      
    }
    form{
    width:75%;
    margin-left:50px;
}
    
     </style>
</head>
<body>

<div class="containera ">
     <ul>
     <li style="color:yellow;">Developer Tips</li>
    
     @foreach($c as $cs)
    <li><a href="/seemypost/{{$cs->id}}/{{$cs->name}}" style="margin-left:700px;">Blog</a></li>
    <li><a href="/seeauthorvedios/{{$cs->name}}" style="margin-left:50px;">Tutorial</a></li>
     <li><a href="/index "  style="margin-left:50px;">Logout</a></li>@endforeach
   
     </ul>
    </div>

   
         <div class="container">

         <h1>Edit posts</h1>

 @if(session()->has('message'))
         <div class="alert alert-success" style=" margin-left:350px;; padding:15px; font-size:20px; text-align:center; width:300px;">{{session()->get('message')}}</div>
         @endif

<form action='/updatelog/{{$data->id}}' method='post' enctype="multipart/form-data">
@csrf
@if (session('status'))
<div class="alert alert-success" style=" margin-left:350px; padding:15px; font-size:20px; text-align:center; width:300px;">
    {{ session('status') }}
</div>
@endif
<br><br>

<div class="form-group">
 <label for="title">Title</label>
 <input type="text"   name="title" class="form-control" value="{{$data->title}}">
</div>

<div class="form-group">
<label for="title">Image</label>
<input type="file" style="padding:20px;" class="form-control"  name="image">
      </div>


<div class="form-group">
 <label for="body">Body</label>
 <textarea name="body" class="form-control rounded -0" cols="130" rows="10">{{$data->body}}</textarea>
</div>

<button type="submit" class="btn btn-info">SUBMIT</button>
</form>
  </div> 
</body>
</html>