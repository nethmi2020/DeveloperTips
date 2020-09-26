
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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style> 

.indexcontainer{
    
    text-align:center;
    background-color:lightgrey;
    padding:30px;
    margin-top:50px;
    width:600px;
    height:400px;
}
.indexcontainer span{
    padding:40px;
    margin-top:50px;
}

button{
    padding:15px;
    background-color:red;
    color:white;
    border-radius:10px;
}
.b1{
    background-color:blue
}

.b2{
    background-color:green
}
 .b1:hover{
    background-color:darkblue;
}

.b2:hover{
    background-color:darkgreen;
}

.fa {
  padding: 20px;
  font-size: 30px;
  width: 50px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
}
.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-google {
  background: #dd4b39;
  color: white;
}

.fa-linkedin {
  background: #007bb5;
  color: white;
}

.fa-youtube {
  background: #bb0000;
  color: white;
}

.fa-instagram {
  background: #125688;
  color: white;
}

.fa-pinterest {
  background: #cb2027;
  color: white;}

    .containera{
        background-color:darkgrey;
        box-sizing:border-box;
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
     <li><a href="/index">Home</a></li>
     
     <li><a href="/posts">BLOG</a></li>
     <li><a href="#">Tutorial</a></li>
    
     @foreach($data as $datas) <li><a href="/click/{{$datas->id}} ">Myaccount</a></li>@endforeach
     <li><a href="/index ">Logout</a></li>
    
     </ul>   
    
    </div>

<div class="row">
     <div class="col-md-6"  style="margin-top:150px; margin-left:150px;">
    
        
                       <img  class="img-circle"src="img/dog.jpg" alt="doggy" >
                       <h4>Developer Tips</h4>
                       <p>Software engineer at sss</p>
                       <hr>
                       <p>Share this page:</p>
                       <ul class="clearfix" style="padding:0px">
                        <a href="#" class="fa fa-facebook"></a>
                        <a href="#" class="fa fa-twitter"></a>
                        <a href="#" class="fa fa-google"></a>
                        <a href="#" class="fa fa-linkedin"></a>
                        <a href="#" class="fa fa-youtube"></a>
                        <a href="#" class="fa fa-instagram"></a>
                        <a href="#" class="fa fa-pinterest"></a>
                        </ul>
                  </div>         
          <div class="col-md-6">
            
               <h2>If You Like to create post</h2>

               <h1><a href="/create">Click Here.....</a></h1>
               </div>
              
    
               </div>
 
</body>
</html>