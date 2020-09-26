@include('partials._head')
    <style> 
    .containera{
        background-color:#696969;
        box-sizing:border-box;
        color:black;
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
        background-color:#808080;
      
    }
    
    
    </style>
</head>
<body>
    <div class="containera ">
     <ul>
     <li>Developer Tips</li>
    
     
     <li><a href="#" style="margin-left:400px;">Tutorial</a></li>
    <li><a href="/seeallposts" style="margin-left:300px;" >BLOG</a></li>
     <li><a href="/index " style="margin-left:200px;">Logout</a></li>
    
     </ul>
     
    
      
    
    </div>
</body>
</html>