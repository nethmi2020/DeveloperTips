@include('partials._head')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5ed392901254a4001214b978&product=inline-share-buttons&cms=website' async='async'></script>


    <style> 
    body{
        background-repeat: no-repeat;
        background-size:cover;
  
        background-color:white; 
    }
    .containera{
        background-color:darkgrey;
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
        color:white;
        margin-left:120px;
    }
  .containera li a:active, a:hover{
        color:red;
        background-color:green;
      
    }
    
    
    </style>
</head>
<body>
    <div class="containera " style="background-color:black;">
     <ul>
     <li style="color:yellow;">Developer Tips</li>
     <li><a href="/userhome/{{$u->id}}" style="margin-left:500px; color:white;">Home</a></li>
     <li><a style="margin-left:50px;"    href="/seeuserlogvedios/{{$u->id}}">Tutorial</a></li>
     <li><a style="margin-left:50px;"  href="/seeallposts/{{$u->id}}" style="color:white;">Blog</a></li>
     <li><a style="margin-left:50px;" href="/index ">Logout</a></li> 
     <img src="{{asset('uploads/u/'.$u->image)}}" style="margin-left:20px;  width:35px;  height:35px; border-radius:100px;" class="card-img-top rounded" alt="...">
 
     </ul>
  </div>
<br> <br>
<img src="/images/b8.jpg" style="height:80%; width:1000px; margin-left:300px; margin-right:-2000px; " alt="">

  <div class="btn-group" style="margin-left:1400px; margin-top:-50px;">
  <button class="btn btn-danger btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  <h4 style="color:black;  width:300px; padding:0px; ">Select Catergory </h4>
  </button>
  <div class="dropdown-menu" style="padding:0px; width:300px;">
      <ul>
          <li style="list-style-type:none;">
           <a style=" color:black; font-size:15px; margin-left:0;"   @foreach($data as $datas) href="/frontenduserlog/{{$datas->catergory}}/{{$u->id}}" @endforeach >Front End Developer Tips</a></li> 
          <li style="list-style-type:none;"><a style=" color:black; font-size:15px; margin-left:0; " @foreach($data as $datas) href="/backenduserlog/{{$datas->catergory}}"   @endforeach>Backend End Developer Tips</a></li>
          <li style="list-style-type:none; "><a style=" color:black; font-size:15px; margin-left:0; " href="/other">Others</a></li>
    </ul>  
  </div>
</div>

<br><br><br> 

  <h2 style="color:white; margin-left:700px;">Vedio List</h2>
  <br><br>
  <div class="container" >
       <ul class="list-group list-group-flush">


            @foreach($data as $datas)
             <div class="br" style=>
             <pclass="list-group-item">
              <h2>
                {{$datas->name}} </h2><br>
                
                 <h4>{{$datas->description}}</h4>
                <iframe width="560" height="315" src="{{$datas->url}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                 allowfullscreen></iframe><br>
                 <small style="font-size:9px;">Created at {{$datas->created_at}}</small>
              
             
              </p>
              </div>
            @endforeach
           
            </ul>
       
       </div> 
        
  </div>
  <footer style="background-color:darkgrey;  border-top:1px solid black;">
    <div ><br><BR></BR>
<div class="row" style="padding:50px;">
    <div class="col-md-4"><p style="font-size:35px; color:black; margin-left:100px;">About Us</p><br>
    <h2><span style="color:yellow">Developer</span> Tips</h2>
    <span class="lead">This is made for developers who have enthusiasmto learn new web technologies. This channel includes HTML,CSS,Javascript,Jquery,PHP, c#.net,back-end and front-end frameworks too.I mainly create this blog in order to give you both vedio and articles related tothem . Then you can find related things regarding to vedios through browsing this articles</span> <br><br>
                           
    </div>
    <div class="col-md-4"><p  style="font-size:35px; margin-left:170px; color:black;">Quick Links <br><br>
   <ul>
     <li><a href="/seeuserlogvedios/{{$u->id}}" style="color:black; font-size:20px;  text-decoration:none;">Tutorial</a></li><br><br>
     <li><a href="/seeallposts/{{$u->id}}" style="color:black; font-size:20px;  text-decoration:none;">BLOG</a></li>
    
   </ul> </p>
    </div>
    <div class="col-md-4"><p  style="font-size:35px; color:black;  margin-left:170px;" >Contact Us</p><br><br><br>
    <p class="lead"  style="  margin-left:170px;"><i class="fa fa-phone" aria-hidden="true" style="font-size:20px;">&nbsp&nbsp&nbsp +9416897175</i> <br><br><br>
    <i class="fa fa-envelope" style="font-size:20px;"  aria-hidden="true">&nbsp&nbsp&nbsp rumesh@gmail.com</i><br><br><br>
   
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
            <h4 style="margin-left:200px;">Share this page</h4>
    <div class="sharethis-inline-share-buttons"></div>
    </div></div>
    </div> <br><br><br>
</footer>
</body>
</html>