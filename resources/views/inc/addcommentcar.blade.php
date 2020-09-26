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

    <style> 
         body{
               font-size:10px;
               color:black;
               background-repeat: no-repeat;
               background-size:cover;
               opacity:0.7;
               background-image: url({{ asset('assets/img/bg20.jpg') }}); 
           
           
        }


    .containera{
        box-sizing:border-box;
        color:white;
    }
    ul {
        
       
    }
    ul li {
        list-style-type:none;
        display:inline-block;
        padding:10px;
        font-size:25px;
        
    }
    ul li a{
        text-decoration:none;
        color:white;
        margin-left:120px;
    }
  .containera li a:active, a:hover{
        color:red;
        background-color:darkgrey;
      
    }
    
    ul {
        
       
    }
    ul li {
        list-style-type:none;
        display:inline-block;
        padding:20px;
        font-size:25px;
        
    }
    ul li a{
        text-decoration:none;
        color:white;
        margin-left:120px;
    }
  .containera li a:active, a:hover{
        color:red;
        background-color:darkgrey;
      
    }
    
    
     </style>
</head>
<body>
<div class="containera ">
     <ul>
     <li>Developer Tips</li>
     <li><a href="/index"  data-toggle="tooltip"  data-placement="bottom" title="Please Log Out" style="margin-left:450px;" >Home</a></li>
     <li><a href="#">Tutorial</a></li>
     <li><a href="/posts ">Logout</a></li>
    
</ul>
    </div>
    
    <div class="container " style="margin-top:100px; margin-left:250px;">
    
        <h2 style="margin-left:350px; color:white;">Add comment here</h2>
 @if (session('status'))
    <div class="alert alert-success" style=" margin-left:350px; padding:15px; font-size:20px; text-align:center; width:300px;">
        {{ session('status') }}
    </div>
@endif
<br> <br>  

<form  action="/commentstore" method="POST">
 @csrf
 <div class="row">
 

<div class="row">



<div class="form-group" style="list-style-type:none;">
@csrf
<input type="hidden" name="email" value="{{session('data')['email']}}">
<input type="hidden" name="name" value="{{session('data')['name']}}"> 
<input type="hidden" name="postid" value="{{session('data')['postid']}}"> 
        
        
</div >    
        <textarea style="margin-left:300px;" name="comments" cols="130" rows="10"></textarea>
        </div>
     </div>

       
<br><br>
 
<button type="submit" style=" margin-left:350px;"class="btn btn-success">SUBMIT</button>  
<button type="submit"  style=" margin-left:350px;" class="btn btn-success"><a href="/posts" style="color:white;">GO BACK</a></button> 
 </form>
        
        </div>
       
</body>
</html>