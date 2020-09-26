<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

        <title>{{ config('app.name','LSAPP')}}</title>
        <style>
        body{
            color:black;
           
            background-repeat: no-repeat;  
            background-size:cover;
         
        }background-image: url({{ asset('assets/img/bg19.jpg') }}); 
        </style>
        
    </head>
    @include('inc.dashbar')
    <body style="font-size:15px;">
    <div class="container">

   
 <h1 style="text-transform:capitalize;">{{$data->title}}</h1> <br>
 <img src="{{asset('uploads/u/'.$data->image)}}" style="margin-left:50px;  width:500px; height:450px;  border-radius:100px;" class="card-img-top rounded" alt="...">
<br><br>
 <div>
 {{$data->body}}
 <br>
 <!--<a href="/editpost/{{$data->id}}" class="btn btn-edit">EDIT</a>
 <a href="/deletepost/{{$data->id}}" class="btn btn-edit">DELETE</a>-->
 <hr>
 <small style="font-size:10px;">Written on {{$data->created_at}}
 
 </small>
 <p>{{$data->user_name}}</p>

 <div style="border-bottom:1px solid black"></div>
 <br>
 <div class="container" >
         <div style="margin-left:150px;">   <h4 style="color:blue;">Comments</h4> <br><br>
  @foreach($cs as $cc)
<p style="text-transform:capitalize; color:marone; font-size:20px;">{{$cc->comments}}</p>
<button class="btn btn-warning " style="margin-left:200px; margin-top:-90px;" ><a href="/admindelcomment/{{$cc->id}}" style="color:black;" >Delete Comment</a></button><br>
  
@endforeach
</div> 
 
 <div style="border-bottom:1px solid black"></div>
 <br>
 <form action="/commentstore"  method="post">
@csrf  

<br><br>
@if (session('status'))
    <div class="alert alert-success" style=" margin-left:350px; padding:15px; font-size:20px; text-align:center; width:300px;">
        {{ session('status') }}
    </div>
@endif
    <input type="hidden" value="rumesh-ADMIN" name="name">
    <input type="hidden" value="{{$data->id}}" name="postid">


<div class="form-group">
   @foreach($ad as $ads)
    <input type="hidden" class="form-control" value="{{$ads->email}}" name="email">@endforeach
</div>

<div class="form-group">
    <label >ADD  Comments</label>
    <textarea name="comments" style="background-color:darkgrey;" cols="10" rows="5" class="form-control"></textarea>
</div>


<div class="form-group">
   
    <input type="submit" class="btn btn-info"  value="Send" name="send">
</div>

     </form>
 
 
  </div>
 <br><br><br>






             
    </div>
       
    </body>
</html>