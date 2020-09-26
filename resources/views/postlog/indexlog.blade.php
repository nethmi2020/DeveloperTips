@extends('layouts.app')
@section('content')

<style>
ul li{
    list-style-type:none;
   
}
ul li a{
  color:black;
}
.br{
    background-color:yellow;
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
         @if(count($data) > 1)
         <ul>
            @foreach($data as $datas)
             <div class="br">
             <li>
              <p>{{$datas->id}} -
                {{$datas->title}}
              
              <button class="btn btn-info " style="margin-left:700px; font-weight:bold;" value="view post"><a href="save/{{$datas->id}}" >View Post</a></button><br>
              <small style="font-size:10px;">Written on {{$datas->created_at}}- BY  {{$datas->user_name}}</small>
             
             
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