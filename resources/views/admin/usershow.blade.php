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
           
            background-repeat: no-repeat;  
            background-size:cover;
           
           
        } background-image: url({{ asset('assets/img/bg19.jpg') }}); 
        </style>
    </head>
    @include('inc.dashbar')
<body style="font-size:15px;">


    <div class="container">
    
    <div id="users" >
    <h2 style="text-align:center;  color:black;">User Details-Total users{{count($data)}}</h2>
     <br><br><br><br>
     @if (session('status'))
    <div class="alert alert-success" style=" margin-left:350px; padding:15px; font-size:20px; text-align:center; width:300px;">
        {{ session('status') }}
    </div>
@endif
     <form class="example" action="/searchuseradmin" method="post" style="margin:auto;max-width:600px">
         @csrf
                    <input type="text" placeholder="Search.." name="search"> 
                    <button type="submit"><i class="fa fa-search"></i></button>
         </form> <br><br>
    <table class="table " style="color:black; font-weight:bold; font-size:15px;">
  <thead>
  
    <tr>
    
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Delete User</th>
      
    </tr>
  </thead>
  <tbody>
  <ul>
  
  @foreach($data as $datas)
    <tr>
     
      <td  scope="col">{{$datas->id}}</td>
      <td  scope="col">{{$datas->name}}</td>
      <td  scope="col">{{$datas->email}}</td>
      <td  scope="col"><button class="btn btn-danger"><a style="color:black;" href="/admindeluser/{{$datas->id}}">DELETE</a></button></td>
    </tr>
    @endforeach
</ul>
  </tbody>
</table>
 </div>
 

            </div>
</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</html>

