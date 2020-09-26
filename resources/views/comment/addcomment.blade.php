<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</head>
@include('inc.navbarlog')
<body>

        <div class="container " style="margin-top:150px; margin-left:250px;">
        
        <h2 style="margin-left:30%;">Add comment here</h2>
 @if (session('status'))
    <div class="alert alert-success" style=" margin-left:350px; padding:15px; font-size:20px; text-align:center; width:300px;">
        {{ session('status') }}
    </div>
@endif


<form  action="/commentstore" method="POST">
 @csrf
 <div class="row">
 

<div class="row">



<div class="form-group" style="list-style-type:none;">
@csrf
<input type="hidden" name="email" value="{{session('data')['email']}}">
<input type="hidden" name="name" value="{{session('data')['name']}}"> 
<input type="hidden" name="postid" value="{{session('data')['postid']}}"> 
        
        
</div>



        
        
       
        <textarea name="comments" cols="130" rows="10"></textarea>
        </div>
     </div>

       
<br><br>
 
<button type="submit" class="btn btn-success">SUBMIT</button>  
 </form>
        
        </div>
</body>
</html>