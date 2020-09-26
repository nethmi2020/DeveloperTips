<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5ed392901254a4001214b978&product=inline-share-buttons&cms=website' async='async'></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('css/demo.css')}}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>


body{
           
            background-repeat: no-repeat;  
            background-size:100% 50%
            background-color: #E6E6FA
            background-image: url({{ asset('assets/img/b13.jpg') }})
        }
        #btnScrollToTop{
            position:fixed;
            right:10px;
            bottom:10px;
            width:50px;
            height:50px;
            border-radius:50%;
            background:#e62739;
            box-shadow:0 0 10px rgba(0,0,0,2.5);
            color:#ffffff;
            outline:none;
            cursor:pointer;

        }

        #btnScrollToTop:active{
            background:#cc2333;
        }
</style>
<button id="btnScrollToTop">
<i class="material-icons">arrow_upward</i></button>

<script>
const btnScrollToTop=document.querySelector('#btnScrollToTop');

btnScrollToTop.addEventListener("click",function(){
   // window.scrollTo(0,0);
   window.scrollTo({
       top:0,
       left:0,
       behaviour:"smooth"
   })
});
</script>
<span ><h2 style="text-align:center;">Welcome</h2><h3 style="color:black;">Developer Tips <span>You Tube
 </span> Channel</h3> <button class="btn btn-warning"><a href="/homepage" style="color:black; padding:10px;">See Homepage</a></button></span> <br>
 <br><img src="images/b11.jpg" style="height:115%; width:1800px; margin-left:-200px; margin-right:-360px; opacity:0.8;" alt="">

<div class="container"  style=" padding:100px;" >
<div class="row">
<div class="col-md-3">
<img src="images/blog1.jpg" style="height:300px; width:400px; margin-left:-200px; border-radius:5px;" alt="">

</div>

    <div class="col-md-9  ">

               <div class="indexcontainer ">
                                 <h3 style="color:black;">Developer Tips</h3>
                                 @if(session()->has('message'))
                                   <div class="alert alert-success" style=" margin-left:1450px;; padding:15px; font-size:20px; text-align:center; width:300px;">{{session()->get('message')}}</div>
                                       @elseif(session()->has('error'))
                                  <div class="alert alert-danger" style=" margin-left:350px;; padding:15px; font-size:20px; text-align:center; width:300px;">{{session()->get('error')}}</div>
                                 @endif
                                

                           <span class="lead" style="color:black;">This is made for developers who have enthusiasmto learn new web technologies. This channel includes HTML,CSS,Javascript,Jquery,PHP,
                                             c#.net,back-end and front-end frameworks too.I mainly create this blog in order to give you both vedio and articles related tothem . Then you can find related things regarding to vedios through browsing this articles</span> <br><br>
                            <a href="/reg"><button class="btn btn-success">Register</button></a>&nbsp &nbsp
            
            
                 </div>
        </div>
</div>
<div class="row" style="margin-top:10px; padding:80px;">
<div class="col-md-5" style="margin-left:-300px; margin-right:50px; border-right:1px solid black;">
<h2>Blogging</h2> is <h5>Really</h5> Enjoying
  <p>
  
  Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, cupiditate?
  Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, cupiditate?
  Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, cupiditate?
  Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, cupiditate?
  </p> <br><img src="images/blog3.jpg" style="height:200px; width:250px;  border-radius:5px;" alt="">

</div>
      <div class="col-md-7" style="margin-left:100px;">
      <div >
  <h1 >Being Author</h1>
  <p class="lead">Is really advantageous or not</p>
  <hr>
  <p> Reiciendis officiis, assumenda culpa obcaecati asperiores Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis officiis,
   assumenda culpa obcaecati asperiores Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis officiis, assumenda culpa obcaecati 
   </p>
   
</div>
         
                     
                     <img src="images/blog6.jpg" style="height:300px; width:350px; margin-left:350px;  border-radius:5px;" alt="">

                   
                  </div>
              
        </div>
</div>

<div class="row" style=" background-color:darkgrey; padding:50px; margin-right:-230px; margin-left:-200px;">
    <div class="container">
    <div class="col-md-6">
        <img src="images/b10.jpg" style="height:500px; width:450px; border-radius:20px;"alt="">
    </div>


<div class="col-md-6" style="margin-top:50px; color:whiblackte;">
    <h4>FULL-STACK DEVELOPER</h4>
  
  <p>I am Malvin Cooper. I am a simple , creative, enthusiastic and fun-loving person. I always like to create something on my own which is helpful for others.</p>
<br>
<p> have vast experience in HTML5, CSS3, Javascript, JQuery, Node js and on. I have already completed over 500 projecs of different buyer throughout the world.</p>
<br>
</div>
</div>
</div>
<br><br>


                                                     <h3 style="margin-top:50px; color:black;">My Services</h3>
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


</div >

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
<footer style="border-top:1px solid black; background-color:lightgrey;">
    <div >
<div class="row" style="padding:50px;">
    <div class="col-md-4"><p style="font-size:35px; color:black; margin-left:100px;">About Us</p><br>
    <h2><span style="color:yellow">Developer</span> Tips</h2>
    <span class="lead">This is made for developers who have enthusiasmto learn new web technologies. This channel includes HTML,CSS,Javascript,Jquery,PHP, c#.net,back-end and front-end frameworks too.I mainly create this blog in order to give you both vedio and articles related tothem . Then you can find related things regarding to vedios through browsing this articles</span> <br><br>
                           
    </div>
    <div class="col-md-4"><p  style="font-size:35px; margin-left:170px; color:black;">Quick Links <br><br>
   <ul>
      <li><a href="/posts" style="color:black; font-size:20px;  text-decoration:none;">Blogs</a></li> <br><br>
     <li><a href="/seeuservedios" style="color:black; font-size:20px;  text-decoration:none;">Tutorial</a></li><br><br>
     <li>  <a href="/reg" style="color:black; font-size:20px;  text-decoration:none;">Register</a>&nbsp &nbsp 
            </li><br>
     
   </ul> </p>
    </div>
    <div class="col-md-4"><p  style="font-size:35px; color:black;  margin-left:170px;" >Contact Us</p><br><br><br>
    <p class="lead"  style="  margin-left:170px;"><i class="fa fa-phone" aria-hidden="true">&nbsp&nbsp&nbsp +9416897175</i> <br><br><br>
    <i class="fa fa-envelope" aria-hidden="true">&nbsp&nbsp&nbsp rumesh@gmail.com</i><br><br><br>
   
   
    <i class="fa fa-facebook" ></i>&nbsp&nbsp&nbsp
    <i class="fa fa-instagram" ></i>&nbsp&nbsp&nbsp
    <i class="fa fa-twitter" ></i>&nbsp&nbsp&nbsp
    <i class="fa fa-youtube" ></i>
    </p>
    </div>
</div>
    <div class="row">
        <div class="container">
            <div class="col-md-12">
            <h4 style="margin-left:200px;">Share this page</h4>
    <div class="sharethis-inline-share-buttons"></div>
    </div></div>
   <br><br><br>
</footer>

@endsection    
