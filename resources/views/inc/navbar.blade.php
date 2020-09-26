@include('partials._head')
    <style> 
    .containera{
       
        box-sizing:border-box;
        color:white;
    }
    ul {
        
       
    }
    ul li {
        list-style-type:none;
        display:inline-block;
        padding:5px;
        font-size:25px;
        
    }
    ul li a{
        text-decoration:none;
        
        margin-left:150px;
        color:white;
    }
  .containera li a:active, a:hover{
        color:red;
       
      
    }
    
    
    </style>
</head>
<body>
    

<nav  style="background-color:black; padding:15px;"class="mb-1 navbar navbar-expand-lg navbar-dark orange lighten-1">
  
  <div class="collapse navbar-collapse" id="navbarSupportedContent-555">
    
    <ul class="navbar-nav mr-auto">
      <li  style="color:yellow" class="nav-item active">
      Developer Tips
      </li>
      <li class="nav-item">
      <a href="/index" style="margin-left:350px; color:white;">Home</a>
      </li>
      <li class="nav-item">
      <a href="/seeuservedios" style="color:white;">Tutorials</a>
      </li>
      <li class="nav-item">
      <a href="/posts"  style="color:white;">Blog</a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto nav-flex-icons">
      <li class="nav-item avatar">
        <a  style="color:white;" class="nav-link p-0" href="/log"><span  style="color:white;" class="glyphicon glyphicon-user"></span> <span style="color:white;">Login</span>
         
        </a>
      </li>
    </ul>
  </div>
</nav>
</body>
</html>