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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <title>{{ config('app.name','LSAPP')}}</title>

        <style>
        body{
          font-family: Arial;
        background-size:cover;
        background-repeat: no-repeat;
      
       
    }    background-image: url({{ asset('assets/img/b13.jpg') }});
     

* {
  box-sizing: border-box;
}

form.example input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 80%;
  background: white;
}

form.example button {
  float: left;
  width: 20%;
  padding: 10px;
  background: darkblue;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none;
  cursor: pointer;
}

form.example button:hover {
  background: #0b7dda;
}

form.example::after {
  content: "";
  clear: both;
  display: table;
}

  
        </style>
    </head>
    @include('inc.dashbar')
<body style="font-size:15px;">
<div class="container">
   <h2 style="margin-left:380px; color:black;">SEE AUTHOR DETAILS</h2>
<br>
   <form class="example" action="/searchadmin" method="post" style="margin:auto;max-width:600px">
         @csrf
                    <input type="text" placeholder="Search.." name="search"> 
                    <button type="submit"><i class="fa fa-search"></i></button>
         </form> 
         <br><br>
 
         </form> <br><br>
         @if (session('status'))
    <div class="alert alert-success" style=" margin-left:350px; padding:15px; font-size:20px; text-align:center; width:300px;">
        {{ session('status') }}
    </div>
@endif

  <button class="btn btn-warning"><a href="/addauth" style="color:black; padding:5px; font-size:25px;">Add Authors <strong>+</strong></a></button>
 
  <br><br> <br><br> 

  <ul style="list-style-type:none;">
 @foreach($data as $datas)
 <li>
  <div class="row">
  <div class="col-md-4">
  <img class="card-img-top" src="{{asset('uploads/u/'.$datas->image)}}" style="width:300px; height:250px; " alt="Card image cap">
  </div>
  <div class="col-md-8">
  <ul class="list-group list-group-flush" style="margin-left:20px;">
    <li class="list-group-item"><strong> Name-</strong> {{$datas->name}}</li>
    <li class="list-group-item"><strong> email-</strong> {{$datas->email}}</li>
    <li class="list-group-item"><strong> Password-</strong> {{$datas->password}}</li>
    <li class="list-group-item"><strong> Skills-</strong> {{$datas->professionalbackground}}</li>
    <li class="list-group-item"><strong> <a href="/postdetailauth/{{$datas->id}}">See All Posts</a> </li>
  
  </ul>
</div>      
</div><br>
</li> <div style="border-bottom:1px solid black;"></div>
<br><br><br><br>
@endforeach
</ul>


</div>





</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</html>

