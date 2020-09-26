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
<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5ed392901254a4001214b978&product=inline-share-buttons&cms=website' async='async'></script>
<link rel="stylesheet" type="text/css" href="{{asset('css/demo.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style> 
    body{
           
           background-repeat: no-repeat;  
           background-size:cover;
           opacity:0.8;
           background-color:white;
           
         
        
       }
      
    .containera{
       
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
        color:black;
        margin-left:120px;
    }
  .containera li a:active, a:hover{
        color:red;
        background-color:darkgrey;
      
    }
  
.dropdown-item:hover{
background-color:black;
}
     </style>
</head>
<body>
    <div class="containera" style="background-color:black;">
    <ul style="border-bottom:1px solid black;">
     <li style="color:yellow;">Developer Tips</li>
      @foreach($data as $datas)
      <li><a href="/userhome/{{$datas->id}}" style="margin-left:550px; color:white;">Home</a></li> 
      <li><a href="/seeuserlogvedios/{{$datas->id}}" style="margin-left:50px; color:white;">Tutorial</a></li>
      <li><a href="/seeallposts/{{$datas->id}}" style="margin-left:50px; color:white;">Blog</a></li>
     <li><a href="/index " style="margin-left:50px; color:white;">Logout</a>
     <img src="{{asset('uploads/u/'.$datas->image)}}" style="margin-left:30px;  width:35px;  height:35px; border-radius:100px;" class="card-img-top rounded" alt="...">
 
     </li>
     </ul>   
    </div>

 <span ><h2 style="text-align:center;">Welcome</h2><h3 style="color:black;">Developer Tips <span>You Tube
 </span> Channel</h3></span> <br>
<img src="images/b20.jpg" style="height:115%; width:1800px; margin-left:2px; margin-right:-520px; " alt="">

    <div class="container" style="margin-top:100px; margin-left:200px; color:white;">
     <div class="row">
     
        <div class="col-md-6" style="color:black; margin-left:-100px; margin-right:100px;">
        <img  class="img-circle"src="img/dog.jpg" alt="doggy" >
                       <h4>Developer Tips</h4>
                       <p style="border-bottom:1px solid black;">Full Stack Developer</p>
                      
                       <p>Share this page:</p>
                     
                       <div class="sharethis-inline-share-buttons"></div>

                           
                       
        </div>
                  
        <div class="col-md-6" style="color:black; margin-top:-50px; margin-left:0px;">
        <br><br><br>
        <h4>FULL-STACK DEVELOPER
        <img src="images/blog14.jpg" style="height:100px; width:150px; margin-left:20px;">
</h4>
  
  <p>I am Malvin Cooper. I am a simple , creative, enthusiastic and fun-loving person. I always like to create something on my own which is helpful for others.</p>
<br>
<p> have vast experience in HTML5, CSS3, Javascript, JQuery, Node js and on. I have already completed over 500 projecs of different buyer throughout the world.</p>
<br>

        
        </div>
                   
               </div>
</div>
     </div>
<br><br><br><br> <br><br><br><br>
     <div class="container" style="font-size:15px; ">
     
     <div class="row" style="background-color:#696969; margin-left:-200px; margin-right:-200px;" >

      <div class="col-md-6" style=" height:40%; margin-left:-50px; margin-top:130px; padding:15px;"><br>
      <img src="{{asset('uploads/u/'.$datas->image)}}" style=" margin-left:200px; width:300px;  height:300px; border-radius:500px;" class="card-img-top rounded" alt="...">
     <br>  <br>   <br> <button class="btn btn-success"  style=" margin-left:300px;"><a  style="color:white;" href="/updateuserdetail/{{$datas->id}}">Edit Details</a></button>  <br><br>
      <div class="list-group list-group-flush" style="margin-left:300px;">
    <p  style="font-size:20px;"><strong> Name-</strong> {{$datas->name}}</p>   
    <p  style="font-size:20px;"><strong> email-</strong> {{$datas->email}}</p>
   <img src="images/blog8.jpg" style="height:200px; width:250px; border-radius:1000px; margin-left:200px;">
  
    
  </div></div>
  <div class="col-md-6" style=" margin-left:50px; padding:20px;">
  <p class="lead" style=" color:black;  margin-left:150px;">Most poular Topics 
  <img src="images/blog11.jpg" style="height:100px; width:150px; border-radius:900px; margin-left:40px;">  </p>
  
  @foreach($p as $ps)
  <ul>
  
  <li><p style="color:black; margin-left:50px;">{{$ps->title}}</p></li><hr>
  </ul>

  @endforeach <br><br>
  <div style="color:blue; margin-left:130px;">  <h4>Go To Blog Search your favourite
  <li style="list-style-type:none;"><a href="/seeallposts/{{$datas->id}}" style="color:black; margin-left:200px;"> <i class="fa fa-check-square-o" aria-hidden="true"></i></a></li>
  </h4> </div>
 </div>
      </div>
     </div>
     </div> <br><br><br>



         
                         &nbsp &nbsp
          
            
       </div>
       <br><br>
       <div class="container">
       <div style="background-color:lightblue; padding:10px;">
                            <h3 style="color:black">Frequently Asked Question &nbsp &nbsp<i class="fa fa-search-plus" aria-hidden="true"></i></h3>
         <div class="container"> <br><br><br>
         <div class="qs" style="border-bottom:1px solid black;">
         <p ><h2>Q1</h2><i class="fa fa-question-circle" aria-hidden="true"></i>  <span style="font-weight:bold; color:red;">How I write a blog to system</span>   </p>   
         <p><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp&nbsp <span style="color:blue;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus qui dolorum iusto cumque numquam tempora placeat fugiat illo omnis nulla!</span> </p>
         </div>
<br>
         <div class="qs" style="border-bottom:1px solid black;">
         <p><h2>Q2</h2><i class="fa fa-question-circle" aria-hidden="true"></i> <span style="font-weight:bold; color:red;">How I write a blog to system</span></p> 
         <p><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp&nbsp <span style="color:blue;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus qui dolorum iusto cumque numquam tempora placeat fugiat illo omnis nulla!</span> </p>
         </div>

         <div class="qs" style="border-bottom:1px solid black;">
         <p ><h2>Q3</h2><i class="fa fa-question-circle" aria-hidden="true"></i>  <span style="font-weight:bold; color:red;">How I write a blog to system</span>   </p>   
         <p><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp&nbsp <span style="color:blue;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus qui dolorum iusto cumque numquam tempora placeat fugiat illo omnis nulla!</span> </p>
         </div>
<br>

<div class="qs" style="border-bottom:1px solid grey;">
         <p ><h2>Q4</h2><i class="fa fa-question-circle" aria-hidden="true"></i>  <span style="font-weight:bold; color:red;">How I write a blog to system</span>   </p>   
         <p><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp&nbsp <span style="color:blue;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus qui dolorum iusto cumque numquam tempora placeat fugiat illo omnis nulla!</span> </p>
         </div>
<br>

<div class="qs" style="border-bottom:1px solid black;">
         <p ><h2>Q5</h2><i class="fa fa-question-circle" aria-hidden="true"></i>  <span style="font-weight:bold; color:red;">How I write a blog to system</span>   </p>   
         <p><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp&nbsp <span style="color:blue;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus qui dolorum iusto cumque numquam tempora placeat fugiat illo omnis nulla!</span> </p>
         </div>
<br>
             

         </div>
<br><br><br><br>
</div>
                                                <h3  style="margin-top:50px; color:black;">My Services</h3>
<div class="container" >
    <h3 class="text-center" style="margin-top:50px"></h3> <br><br><br>
        <div class="row">
            <div class="col-md-4 ">
                <div class="box21">
                    <img src="images/html.jfif" alt="" style=" height:300px; border-radius: 10px; ">
                    <div class="box-content">
                        <h4 class="title" style="font-weight:5px;">Html</h4>
                        <p class="description" style="font-weight:5px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed mattis augue in odio suscipit, at.</p>
                        <a class="read-more" href="#">read more</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="box21">
                    <img src="images/jquery.png" alt="" style=" height:300px; border-radius: 10px; border: none; opacity:1px;" >
                    <div class="box-content">
                        <h4 class="title" >Jquery</h4>
                        <p class="description" >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed mattis augue in odio suscipit, at.</p>
                        <a class="read-more" href="#" >read more</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ">
                <div class="box21">
                    <img src="images/boostrap.jpg" alt="">
                    <div class="box-content">
                        <h4 class="title">Boostrap</h4>
                        <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed mattis augue in odio suscipit, at.</p>
                        <a class="read-more" href="#">read more</a>
                    </div>
                </div>
            </div>
</div>
<div class="row">
            <div class="col-md-4">
                <div class="box21">
                    <img src="images/css3.jfif" alt="" style=" height:300px; border-radius: 10px; border: none; opacity:1px;" >
                    <div class="box-content">
                        <h4 class="title" >Jquery</h4>
                        <p class="description" >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed mattis augue in odio suscipit, at.</p>
                        <a class="read-more" href="#" >read more</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="box21">
                    <img src="images/c4.png" alt="" style=" height:300px; border-radius: 10px; border: none; opacity:1px;" >
                    <div class="box-content">
                        <h4 class="title" >Js</h4>
                        <p class="description" >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed mattis augue in odio suscipit, at.</p>
                        <a class="read-more" href="#" >read more</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="box21">
                    <img src="images/c5.png" alt="" style=" height:300px; border-radius: 10px; border: none; opacity:1px;" >
                    <div class="box-content">
                        <h4 class="title" >React Js</h4>
                        <p class="description" >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed mattis augue in odio suscipit, at.</p>
                        <a class="read-more" href="#" >read more</a>
                    </div>
                </div>
            </div>
            </div>
            <br><br><br>
   </div>


</div>
<br><br><br><br><br>
<footer style="background-color:darkgrey;">
    <div >
<div class="row" style="padding:50px;">
    <div class="col-md-4"><p style="font-size:35px; color:black; margin-left:100px;">About Us</p><br>
    <h2><span style="color:yellow">Developer</span> Tips</h2>
    <span class="lead">This is made for developers who have enthusiasmto learn new web technologies. This channel includes HTML,CSS,Javascript,Jquery,PHP, c#.net,back-end and front-end frameworks too.I mainly create this blog in order to give you both vedio and articles related tothem . Then you can find related things regarding to vedios through browsing this articles</span> <br><br>
                           
    </div>
    <div class="col-md-4"><p  style="font-size:35px; margin-left:170px; color:black;">Quick Links <br><br>
   <ul>
     <li><a href="/seeuserlogvedios/{{$datas->id}}" style="color:black; font-size:20px;  text-decoration:none;">Tutorial</a></li><br><br>
    
     <li><a href="/seeallposts/{{$datas->id}}" style="color:black; font-size:20px;  text-decoration:none;">BLOG</a></li>
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
</body>  @endforeach
</html>