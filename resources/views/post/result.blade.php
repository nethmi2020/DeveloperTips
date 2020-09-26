@extends('layouts.app')
@section('content')
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

body{
  font-size:10px;
  color:black;
  background-repeat: no-repeat;
  background-size:cover;
  opacity:0.7;
  background-image: url({{ asset('assets/img/b1.jpg') }}); 
           
           
        }
ul li{
    list-style-type:none;
   
}
ul li a{
  color:black;
}
.br{
    background-color:lightgrey;
    font-size:20px;
    display:block;
    padding:10px;
    }
    h3{
        font-size:30px;
        text-align:center;
    }
</style>

         <h3>posts</h3>
         <form class="example" action="/searchu" method="post" style="margin:auto;max-width:600px">
                    <input type="text" placeholder="Search.." name="search"> 
                    <button type="submit"><i class="fa fa-search"></i></button>
         </form> <br><br>
         @if(session()->has('message'))
         <div class="alert alert-success" style=" margin-left:350px;; padding:15px; font-size:20px; text-align:center; width:300px;">{{session()->get('message')}}</div>
        @elseif(session()->has('error'))
        <div class="alert alert-danger" style=" margin-left:350px;; padding:15px; font-size:20px; text-align:center; width:300px;">{{session()->get('error')}}</div>
      
         @endif
         @if(count($data) > 1)
         <ul>
            @foreach($data as $datas)
             <div class="br">
             <li>
              <p>{{$datas->id}} -
                {{$datas->title}}
              
              <button class="btn btn-default " style="margin-left:700px; font-weight:bold;" value="view post"><a href="save/{{$datas->id}}" >View Post</a></button><br>
              <small style="font-size:15px;">Written on {{$datas->created_at}}- BY  {{$datas->user_name}}</small>
             
             
              </p>
              <hr>
              </li>
              </div>
            @endforeach
           
            </ul>
         @else
           <p>no post</p>
         @endif
@endsection