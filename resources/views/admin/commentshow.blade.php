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
           opacity:0.6;
            background-repeat: no-repeat;  
            background-size:cover;
            background-image: url({{ asset('assets/img/bg21.jpg') }}); 
           
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
    </head>
    @include('inc.dashbar')
<body>

<div class="container">

<h3>comments</h3>

<ul>
   @foreach($data as $datas)
    <div class="br">
    <li>
     <p>{{$datas->id}} -
       {{$datas->comments}}
     <br>
  <small style="font-size:10px;">Written on {{$datas->created_at}}- BY  {{$datas->name}}</small> </p>
  <button class="btn btn-danger " style="margin-left:800px; font-weight:bold;" ><a href="/admindelcomment/{{$datas->id}}" >Delete Comment</a></button><br>
              
    
    
     <hr>
     </li>
     </div>
   @endforeach
  
   </ul>
</div>


</body>

</html>