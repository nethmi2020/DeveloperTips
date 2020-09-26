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
       a{
                 color: blue;
                 text-decoration :none;
                     }

     a:visited {
                 color: red;
                 text-decoration :none;
                     }
        </style>
    </head>
    @include('inc.dashbar')
<body style="font-size:15px;">

    <div class="container">
    <div id="users" >
    <h2 style="text-align:center;">Author Details</h2>
     
    <table class="table table-dark">
  <thead>
  
    <tr>
    
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Pb</th>
      <th scope="col">Password</th>
      <th scope="col"><strong>SAVE</strong></th>
      

      
    </tr>
  </thead>
  <tbody>
  <ul>
  
  @foreach($data as $datas)
    <tr>
     
      <td  scope="col">{{$datas->id}}</td>
      <td  scope="col">{{$datas->name}}</td>
      <td  scope="col">{{$datas->email}}</td>
      <td  scope="col">{{$datas->professionalbackground}}</td>
      <td  scope="col">{{$datas->password}}123</td>
      <td  scope="col"><a class="link" href="/addauthors/{{$datas->id}}" >ADD</a></td>
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

