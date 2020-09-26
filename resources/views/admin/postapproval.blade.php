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
           
            background-repeat: no-repeat;  
            background-size:cover;
            background-image: url({{ asset('assets/img/bg19.jpg') }}); 
           
        }
        </style>
    </head>
    @include('inc.dashbar')
<body style="font-size:15px;">

    <div class="container">
    <div id="users" >
    <h2 style="text-align:center;  color:black;">Post Approval</h2>
     <br><br><br><br>
    <table class="table " style="color:black; font-weight:bold; font-size:15px;">
  <thead>
  
    <tr>
    
      <th scope="col">Id</th>
      <th scope="col">Title</th>
      <th scope="col">Body</th>
      <th scope="col">Auth name </th> 
      <th scope="col">Auth id </th>
      
    </tr>
  </thead>
  <tbody>
  <ul>
  
 
    <tr>
     
      <td  scope="col">{{$data->id}}</td>
      <td  scope="col">{{$data->title}}</td>
      <td  scope="col">{{$data->body}}</td>
      <td  scope="col">{{$data->auth_name}}</td>
      <td  scope="col">{{$data->user_id}}</td>
      <td  scope="col"><button class="btn btn-danger"><a href="/admindeluser/{{$data->id}}">DELETE</a></button></td>
    </tr>
   
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

