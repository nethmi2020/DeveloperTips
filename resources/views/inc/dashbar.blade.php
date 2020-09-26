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
    
    body {
    font-family: "Lato", sans-serif;
    font-size: 5px;
  }
  
  
  .main {
    margin-left: 160px; /* Same as the width of the sidenav */
    font-size: 28px; /* Increased text to enable scrolling */
    padding: 0px 10px;
  }
  
  @media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
  }
  
  .mainnav{
      margin-top: 0;
      margin-left: 160px;
  }
  .mainnav ul {
    list-style-type: none;
    margin-top: 0;
    padding: 0;
    overflow: hidden;
    background-color: black;
  }
  
  .mainnav ul li {
    float: left;
  }
  
  .mainnav ul li  {
    display: block;
    color: white;
    text-align: center;
    padding: 30px;
    text-decoration: none;
    margin-left: 300px;
    font-size: 20px;
  }
  .sidenav {
    height: 100%;
    width: 160px;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: black;
    overflow-x: hidden;
    padding-top: 20px;
    margin-top: 7px;
  }
  
  .sidenav a {
    padding: 6px 8px 6px 16px;
    text-decoration: none;
    font-size: 25px;
    color: white;
    display: block;
    margin-top: 20px;
  }
  
  .sidenav a:hover {
    color: red;
  }
  
  
  
     </style>
</head>
<body>
<div class="mainnav">
    <ul>
        <li>Adimn Dashboard</li>
        <li style="margin-left: 700px;"><a  style="color:white;" href="/adminlogout">Logout</a></li>
    </ul>
   
</div>

<div class="sidenav"  style="margin-top:0px;">
    <a href="/mypro">My Profile</a>
    <img src="/img/dog.jpg" alt="" style="width:100px; height:100px; border-radius:50px;">
 
  <a href="/usershow">Users</a>
  <a href="/postdetail"  >Post </a>
  <a href="/showrequest">Authors</a>
 
</div>

   </body>
</html>