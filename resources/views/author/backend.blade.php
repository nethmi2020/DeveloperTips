@include('partials._head')
    <style> 
    body{
        
        background-size:cover;
        background-repeat: no-repeat;
        opacity:0.5;
        background-image: url({{ asset('assets/img/bg20.jpg') }});
        
    }
    .containera{
        
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
     
      
    }
    
    
    </style>
</head>
<body>
@foreach($aa as $aas)
    <div class="containera ">
     <ul>
     <li style="color:yellow;">Developer Tips</li>
     <li><a href="/seemypost/{{$aas->id}}/{{$aas->name}}" style="margin-left:700px;">Blog</a></li>
     <li><a href="/seeauthorvedios/{{$aas->name}}" style="margin-left:50px;">Tutorial</a></li>
     <li><a href="/authlogout "  style="margin-left:50px;">Logout</a></li>
     </ul>
      @endforeach
     
     <div class="container">


                        <h2 style="color:white; margin-left:40%;">Back end Tutorials</h2> <br><br>
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
        
         
 <br><br><br>
      
    
    </div>
</body>
</html>