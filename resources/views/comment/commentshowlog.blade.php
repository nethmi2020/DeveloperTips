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
         <h3>comments</h3>
        
         <ul>
            @foreach($data as $datas)
             <div class="br">
             <li>
              <p>{{$datas->id}} -
                {{$datas->comments}}
              
           <small style="font-size:10px;">Written on {{$datas->created_at}}- BY  {{$datas->name}}</small>
             
             <h6>
            
             <a href="/deletecomment/{{$datas->id}}" class="btn btn-edit">DELETE</a>
             </h6>
             
              </p>
              <hr>
              </li>
              </div>
            @endforeach
           
            </ul>
        
@endsection