@extends('layouts.applog')
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
        {{$u->id}}
         <ul>
            @foreach($data as $datas)
             <div class="br">
             <li>
              <p> {{$datas->id}}-
                {{$datas->title}}
              
              <button class="btn btn-info " style="margin-left:700px; font-weight:bold;" value="view post"><a href="/savelog/{{$datas->id}}" >View Post</a></button><br>
              <small style="font-size:10px;">Written on {{$datas->created_at}}-</small>
             
             
              </p>
              <hr>
              </li>
              </div>
            @endforeach
           
            </ul>
            <button type="submit" class="btn btn-default"><a href="/seeaccount">Go My Account</a></button>

        
@endsection