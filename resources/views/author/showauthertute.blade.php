@include('partials._head')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5ed392901254a4001214b978&product=inline-share-buttons&cms=website' async='async'></script>
    <style> 
    body{
        
        background-size:cover;
        background-repeat: no-repeat;
        
        background-color:lightgrey;
        
    }
    background-image: url({{ asset('assets/img/bg20.jpg') }});
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
    <div class="containera ">
     <ul style="  background-color:black;">@foreach($aaa as $aaaa)
     <li style="color:yellow;">Developer Tips</li>
     <li><a href="/authhome/{{$aaaa->id}}" data-toggle="tooltip" style="margin-left:650px;" data-placement="bottom" title="Please Log Out" >Home</a></li>
     <li><a href="/seemypost/{{$aaaa->id}}/{{$aaaa->name}}" style="margin-left:50px;">Blog</a></li>
     <li><a href="/seeauthorvedios/{{$aaaa->name}}" style="margin-left:50px;">Tutorial</a></li>
     <li><a href="/authlogout "  style="margin-left:50px;">Logout</a></li>
    
     </ul>
     <br> <br>
  <div class="btn-group" style="margin-left:600px;">
  <button class="btn btn-danger btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  <h4 style="color:black; width:300px; padding:0px; ">Select Catergory </h4>
  </button>
  <div class="dropdown-menu" style="padding:0px; width:300px;">
      <ul>
          <li style="list-style-type:none;"> <a style=" color:black; font-size:15px; margin-left:0;"   @foreach($data as $datas) href="/frontendauthor/{{$datas->catergory}}/{{$aaaa->name}}" @endforeach >Front End Developer Tips</a></li> 
          <li style="list-style-type:none;"><a style=" color:black; font-size:15px; margin-left:0; " @foreach($data as $datas) href="/backendauthor/{{$datas->catergory}}/{{$aaaa->name}}"   @endforeach>Backend End Developer Tips</a></li>
          <li style="list-style-type:none; "><a style=" color:black; font-size:15px; margin-left:0; " href="/other">Others</a></li>
    </ul>  
  </div>
</div>@endforeach

<br><br><br> 
     
     <div class="container">


                        <h2 style="color:black; margin-left:30%;">New Tutorials &nbsp&nbsp&nbsp    <img src="/images/blog20.jpg" style="height:200px; width:250px;border-radius:700px; "></h3> 
</h2> <br><br>
       <ul class="list-group list-group-flush">


            @foreach($data as $datas)
             <div class="br" style=>
             <li class="list-group-item" style=" border:1px solid black;">
              <h2>
                {{$datas->name}} </h2><br>
                
                 <h4>{{$datas->description}}</h4>
                <iframe width="560" height="315" src="{{$datas->url}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                 allowfullscreen></iframe><br>
                 <small style="font-size:9px;">Created at {{$datas->created_at}}</small>
              </li> <br>
              </div>
            @endforeach
           
            </ul>
       
       </div> 
    </div>

    <footer style="background-color:darkgrey;">
    <div style="margin-left:50px;  border-top:1px solid black;" >
<div class="row" style="padding:50px;">
    <div class="col-md-4"><p style="font-size:35px; color:white; margin-left:100px;">About Us</p><br>
    <h2 style="color:white;"><span style="color:yellow">Developer</span> Tips</h2>
    <span class="lead" style="color:white;">This is made for developers who have enthusiasmto learn new web technologies. This channel includes HTML,CSS,Javascript,Jquery,PHP, c#.net,back-end and front-end frameworks too.I mainly create this blog in order to give you both vedio and articles related tothem . Then you can find related things regarding to vedios through browsing this articles</span> <br><br>
                           
    </div>
    <div class="col-md-4"><p  style="font-size:28px; margin-left:170px; color:white;">Quick Links <br><br>
   <ul>@foreach($aaa as $aaaa)
     <li><a href="/seeauthorvedios/{{$aaaa->name}}" style="color:white; font-size:20px; margin-left:170px;  text-decoration:none;">Tutorial</a></li><br><br>
    
     <li><a href="/seemypost/{{$aaaa->id}}/{{$aaaa->name}}" style="color:white; font-size:20px;  margin-left:170px; text-decoration:none;">BLOG</a></li>
   </ul> @endforeach </p>
    </div>
    <div class="col-md-4"><p  style="font-size:30px; color:white;  margin-left:170px;" >Contact Us</p><br><br><br>
    <p class="lead"  style="  margin-left:170px; color:white;"><i class="fa fa-phone" aria-hidden="true" style="font-size:20px;  color:white;">&nbsp&nbsp&nbsp +9416897175</i> <br><br><br>
    <i class="fa fa-envelope" style="font-size:20px; color:white;"  aria-hidden="true">&nbsp&nbsp&nbsp rumesh@gmail.com</i><br><br><br>
   
   <i class="fa fa-facebook" ></i>&nbsp&nbsp&nbsp
    <i class="fa fa-instagram" ></i>&nbsp&nbsp&nbsp
    <i class="fa fa-twitter" ></i>&nbsp&nbsp&nbsp
    <i class="fa fa-youtube" ></i>
    </p>
    </div>
</div></div>
    <div class="row">
        <div class="container">
            <div class="col-md-12">
            <h4 style="margin-left:200px; color:white">Share this page</h4>
    <div class="sharethis-inline-share-buttons"></div>
    </div></div>
    </div> <br><br><br>
</footer>   

</body>
</html>