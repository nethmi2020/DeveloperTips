@include('partials._head')
<head>
<style> 
    .containera{
        background-image:linear-gradient(to right,#999900,#404040,#CCCC00	,#484848,#505050);
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
     <li><a href="/index"  data-toggle="tooltip"  data-placement="bottom" title="Please Log Out" >Home</a></li>
    
     
     <li><a href="#">Tutorial</a></li>
    <li><a href="posts">BLOG</a></li>
     <li><a href="/ ">Logout</a></li>
    
     </ul>
     
    
      
    
    </div>
</body>
</html>