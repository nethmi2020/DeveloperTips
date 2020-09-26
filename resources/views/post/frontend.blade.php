@include('partials._head')
    <style> 
     body{
        background-repeat: no-repeat;
        background-size:cover;
        opacity:0.5;
        background-image: url({{ asset('assets/img/b23.jpg') }}); 
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
        padding:20px;
        font-size:25px;
        
    }
    ul li a{
        text-decoration:none;
        font-weight:bold;
        margin-left:150px;
        color:white;
    }
  .containera li a:active, a:hover{
        color:red;
       
      
    }
    
    
    </style>
</head>
<body>
    <div class="containera ">
     <ul>
     <li style="color:yellow">Developer Tips</li>
    
     <li><a style="margin-left:700px;"  href="/seeuserlogvedios/{{$u1->id}}" >Tutorial</a></li> 
     <li><a href="/log">Logout</a></li>
     </ul>
    </div>

    <div class="container">
    <br><br><br> 

    <h2 style="color:white; margin-left:450px;"> Front End Vedio List</h2>
  <br><br>
       <ul class="list-group list-group-flush">


            @foreach($data as $datas)
             <div class="br" style=>
             <li class="list-group-item">
              <h2>
                {{$datas->name}} </h2><br>
                
                 <h4>{{$datas->description}}</h4>
                <iframe width="560" height="315" src="{{$datas->url}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                 allowfullscreen></iframe><br>
                 <small style="font-size:9px;">Created at {{$datas->created_at}}</small>
                
              
              
             
          
             
              <hr>
              </li>
              </div>
            @endforeach
           
            </ul>
       
       </div> 
    
</body>
</html>