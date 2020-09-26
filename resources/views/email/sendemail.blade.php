<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<style>

    .box{
        width:600px;
        margin:50 auto;
        border:1px solid #ccc;
        padding:50px;
        
    }
    .has-eror{
        border-color:#cc0000;
        background-color:#ffff99;
    }
</style>
</head>
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
   <form action="{{url('sendemail/send')}}"  method="post">
@csrf  
<h2>Author request form</h2>
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
   
    <input type="submit" class="btn btn-info"  value="Send" name="send">
</div>

     </form>
    </div>

</body>
</html>