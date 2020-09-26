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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial;
}

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
<body style="font-size:25px;  ">

    <div class="container">
    
    <h3><a href="/seedetails" style="margin-left:400px; color:black;">See Post details</a></h3> <br><br>

        <form class="example" action="/searcha" method="post" style="margin:auto;max-width:600px">
         @csrf
                    <input type="text" placeholder="Search.." name="search"> 
                    <button type="submit"><i class="fa fa-search"></i></button>
         </form> <br><br>



    @if (session('status'))
    <div class="alert alert-success" style=" margin-left:350px; padding:15px; font-size:20px; text-align:center; width:300px;">
        {{ session('status') }}
    </div>
@endif
<ul class="list-group list-group-flush" style="margin-left:200px;">


            @foreach($data as $datas)
             <div class="br" style=>
             <li class="list-group-item">
              <p > 
                <span style="text-transform:capitalize;">{{$datas->title}}</span> <br><br>
                <img src="{{asset('uploads/u/'.$datas->image)}}" style="margin-left:50px;  width:200px; height:150px;  border-radius:100px;" class="card-img-top rounded" alt="...">
<br>
                <small style="font-size:9px; margin-top:-10px;">Written on {{$datas->created_at}}- BY  {{$datas->user_name}}</small>
                </p>

                <div style="margin-top:-220px;">
                <button class="btn btn-success " style=" ; font-weight:bold; color:black; margin-left:500px;" value="view post"><a style="color:black;" href="saveadmin/{{$datas->id}}" >View Post</a></button>
              <button class="btn btn-danger " style="font-weight:bold;   color:black; " value="Delete post"><a  style="color:black;" href="deleteposts/{{$datas->id}}" >Delete Post</a></button><br>
              
                </div>
              <br>
              <div >
              @if($datas->isapproved)
                <button class="btn btn-success " style="  font-weight:bold; color:black; margin-left:550px;" value="approved">Approved</button>
              @else
              <button class="btn btn-warning " style="  font-weight:bold; color:black; margin-left:550px; " value="Not approved">Not Approved</button>
             @endif
             
                    </div> 
                    
                    <br>
                    <div>
              @if(!$datas->isapproved)
               <a style="color:black; margin-left:535px;" class="btn btn-success" href="approved/{{$datas->id}}" >Mark AS  Approved</a>
              @else
              <a style="color:black; margin-left:535px;" class="btn btn-warning " href="notapproved/{{$datas->id}}" >Mark AS Not Approved</a>
             @endif
             
                    </div> 
                    
                    
                    
                    
                    
                    
                    <br>
              <div style="border-bottom:1px solid black;"></div>
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

