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
        
        background-size:cover;
        background-repeat: no-repeat;
        background-image: url({{ asset('assets/img/bg19.jpg') }});
        
    }

.box{
  margin-left:200px;
    width:300px;
    padding:50px;
    font-size:15px;
    
}

.has-eror{
    border-color:#cc0000;
    background-color:#ffff99;
}
</style>
    </head>
    @include('inc.dashbar')
<body >
<br><br><br>
    <div class="container box">

    @if(count($errors) > 0)
   <div class="alert alert-danger">
       <button type="button" class="close" data-dismiss="alert">*</button>
       <ul>
           @foreach($errors->all() as $error)
           <li>{{$error}}</li>
           @endforeach
       </ul>
   </div>

    @endif

    @if($message =Session::get('success'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">*</button>
        <strong>{{$message}}</strong>
    </div>

    @endif

    <form action="/saveauthor"  method="post">
@csrf  
<h2>Author Add form</h2>
@if (session('status'))
    <div class="alert alert-success" style=" margin-left:350px; padding:15px; font-size:20px; text-align:center; width:300px;">
        {{ session('status') }}
    </div>
@endif
<br><br>
<div class="form-group">
    <label >Enter name</label>
    <input type="text" class="form-control" name="name">
</div>

<div class="form-group">
    <label >Enter email</label>
    <input type="text" class="form-control" name="email">
</div>

<div class="form-group">
    <label >Skills</label>
    <textarea name="skills" cols="10" rows="5" class="form-control"></textarea>
</div>

<div class="form-group">
    <label >Password</label>
    <input type="password" class="form-control" name="password">
</div>

<div class="form-group">
    <label >Catergory</label>
    <input type="text" class="form-control" name="catergory"  placeholder="admin or author">
</div>


<div class="form-group">
   
    <input type="submit" class="btn btn-success"  value="Send" name="send">
</div>

     </form>
    </div>

    
</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</html>

