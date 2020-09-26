<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="homepagecarousel.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5ed392901254a4001214b978&product=inline-share-buttons&cms=website' async='async'></script>
    <style>

.carousel-item{
	height:100vh;
	min-height: 300px;
	background: no-repeat center center scroll;
	-webkit-background-size:cover;
	background-size: cover;
}

.carousel-caption{
	bottom: 270px;
}

.carousel-caption h5{
	font-size: 45px;
	text-transform: uppercase;
	letter-spacing: 2px;
	margin-top: 25px;
}
.carousel-caption p{
	width: 75%;
	margin: auto;
	font-size: 10px;
	line-height: 1.9;

}
.navbar-light .navbar-brand{
	color:#fff;
	font-size: 25px;
	text-transform: uppercase;
	font-weight: bold;
	letter-spacing: 2px;
}
.navbar-light .navbar-nav .active> .nav-link, .navbar-light .navbar-nav .nav-link.active, .navbar-light  .navbar-nav .nav-link.show .navbar-light .navbar-nav .show> .nav-link{
	color: #fff;
}
.navbar-light .navbar-nav .nav-link{
	color: #fff;
}
.navbar-light .navbar-nav .nav-link:focus, .navbar-light .navbar-nav .nav-link:hover{
	color: #fff;
};
.fa {
  padding: 40px;
  font-size: 60px;
  width: 80px;
  text-align: center;
  text-decoration: none;
  margin: 15px ;
}
.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
  padding:5px;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
  padding:5px;
}

.fa-google {
  background: #dd4b39;
  color: white;
  padding:5px;
}

.fa-linkedin {
  background: #007bb5;
  color: white;
  padding:5px;
}

.fa-youtube {
  background: #bb0000;
  color: white;
  padding:5px;
}

.fa-instagram {
  background: #125688;
  color: white;
  padding:5px;
}

.fa-pinterest {
  background: #cb2027;
  color: white;
  padding:5px;
}
.dropdown-item:hover{
background-color:black;
}
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light fixed-top">
  <div class="container">
<a class="navbar-brand" href="" style="color:yellow; margin-left:-100px;">Developer Tips</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item ">
        <a class="nav-link" href="/gethome"  style="margin-left:400px;">Home </a>
      </li>
      &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp &nbsp  &nbsp 
      <li class="nav-item">
      <div class="dropdown">
  <a class="btn btn-secondary dropdown-toggle" style="background-color:black; border:none;" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   Login
  </a>

  <div class="dropdown-menu" style="background-color:black;"  aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" style="color:white;" href="/log">Login AS A user</a>
    <a class="dropdown-item" style="color:white;" href="/authlogin">Login AS An Author</a>
    <a class="dropdown-item" style="color:white;"   href="/adminlog">Login AS An Admin</a>
    
  </div>
</div>    
      </li>  
    </ul>   
  </div>
  </div>
</nav>


<div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
	<ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
        <img src="images/b4.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
         <div class="container" style="margin-top:200px">
        
                       <img  style="border-radius:80px; width:150px; margin-top:80px;" class="img-circle"src="img/dog.jpg" alt="doggy" >
                       <h4 style="color:yellow;">Developer Tips</h4>
                       <h9>Full Stack Developer</h9>
                       <hr>
                       <h15>Share this page:</h15> <br><br> 
                       <div class="sharethis-inline-share-buttons"></div>
                      
                       </ul>
                   
               </div>

      </div>
    </div>
    <div class="carousel-item">
      <img src="images/b10.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Front-end Developer Tips</h5>
        <p>For people who are keen on web and mobile development.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/b9.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Back-end Developer Tips</h5>
        <p>For people who are keen on Mobile and web development.</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>


  

</div>




<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>