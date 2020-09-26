
@extends('layouts.applog')

@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
.indexcontainer{
    
    text-align:center;
    background-color:lightgrey;
    padding:30px;
    margin-top:50px;
    width:600px;
    height:400px;
}
.indexcontainer span{
    padding:40px;
    margin-top:50px;
}
button{
    padding:15px;
    background-color:red;
    color:white;
    border-radius:10px;
}
.b1{
    background-color:blue
}

.b2{
    background-color:green
}
 .b1:hover{
    background-color:darkblue;
}

.b2:hover{
    background-color:darkgreen;
}
.fa {
  padding: 20px;
  font-size: 30px;
  width: 50px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
}
.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-google {
  background: #dd4b39;
  color: white;
}

.fa-linkedin {
  background: #007bb5;
  color: white;
}

.fa-youtube {
  background: #bb0000;
  color: white;
}

.fa-instagram {
  background: #125688;
  color: white;
}

.fa-pinterest {
  background: #cb2027;
  color: white;
}

</style>


<div class="row">
     <div class="col-md-6">
     <div class="container" style="margin-top:150px; margin-left:10px;">
        
                       <img  class="img-circle"src="img/dog.jpg" alt="doggy" >
                       <h4>Developer Tips</h4>
                       <p>Software engineer at sss</p>
                       <hr>
                       <p>Share this page:</p>
                       <ul class="clearfix" style="padding:0px">
                        <a href="#" class="fa fa-facebook"></a>
                        <a href="#" class="fa fa-twitter"></a>
                        <a href="#" class="fa fa-google"></a>
                        <a href="#" class="fa fa-linkedin"></a>
                        <a href="#" class="fa fa-youtube"></a>
                        <a href="#" class="fa fa-instagram"></a>
                        <a href="#" class="fa fa-pinterest"></a>

                           
                       </ul>
                   
               </div>

     </div>

     <div class="col md-6">
<button  style="margin-top: 150px; font-size:25px; padding:20px;"  text-center="center" type="button" data-toggle="modal" data-target="#modal" class="btn btn-info">BEing An Author Is Advantageous Or NOt <br>
learn more.. Click here..</button>
<div class="modal" tabindex=-1 role="dialog" id="modal">
<div class="modal-dialog modal-dialog-center modal-sm" role="document">
 <div class="modal-content">
 <div class="modal-header">
     <h5 class="modal-title">Modal title</h5>
   
  
        <button class="close" type="button" data-dismiss="modal" area-label="Close"><span area-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
  <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
Reiciendis officiis, assumenda culpa obcaecati asperiores 
eum?</p>
 </div>
 <div class="modal-footer">
 <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
<button class="btn btn-primary" type="button">Save changes</button>
 </div>
 </div>
 
 </div>
</div>
</div>

<br><br>

<br><br><br> <br><br><br> <br><br><br> <br><br><br>

<div class="container mt-10">
       <div class="alert alert-success mt-10" role="alert">
       <h4 class="alert-heading">Do you like to be an author</h4>
       <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
           Fugiat voluptate cupiditate in quam maxime modi eos, nostrum similique repudiandae earum.</p>
           <hr>
           
           <a href="/auth"><button class="btn btn-primary">Click here to get authorship</button></a>
           &nbsp &nbsp
           <a href="/authed"><button class="btn btn-primary">Login For Authors</button></a>
       </div>
       </div>       
       </div>
@endsection    
