<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="{{asset('css/dashboard.css')}}">

<style>
 body{
           color:black;
            background-repeat: no-repeat;  
            background-size:cover;
            background-image: url({{ asset('assets/img/bg23.jpg') }}); 
           
        }
</style>
</head>
<body>
   
<div class="mainnav">
    <ul>
        <li>Adimn Dashboard</li>
        
        <li style="margin-left: 700px;"><a href="/adminlogout">LogOut</a></li>
    </ul>
   
</div>
<div class="sidenav">
    <a href="/mypro">My Profile</a>
   <img src="img/dog.jpg" alt="" style="width:100px; height:100px; border-radius:50px;">
  <a href="#post">Create Post</a>
  <a href="/usershow">Users</a>
  <a href="/postdetail">Post </a> 
  <a href="/admintutorial">Tutorials</a>
  <a href="/showrequest">Authors</a>
 
</div>

<div class="main">
    <div class="container mt-40">
   
        <div class="row mt-30">
            <div class="col-md-4 ">
                <div class="box9">
                    <img src="images/css4.jfif">
                    <div class="box-content">
                        <h3 class="title">Total Likes</h3>
                        <ul class="icon">
                            <li><a href="#"><i class="fa fa-search"></i></a></li>
                            <li><a href="#"><i class="fa fa-link"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="box9">
                    <img src="images/html2.jfif">
                    <div class="box-content">
                        <h3 class="title">Total Comments</h3>
                        <ul class="icon">
                            <li><a href="#"><i class="fa fa-search"></i></a></li>
                            <li><a href="#"><i class="fa fa-link"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="box9">
                    <img src="images/css4.jfif">
                    <div class="box-content">
                        <h3 class="title">Total followers</h3>
                        <ul class="icon">
                            <li><a href="#"><i class="fa fa-search"></i></a></li>
                            <li><a href="#"><i class="fa fa-link"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br>
    <div class="container">
    
 <div id="post">
    <form action='/storeadmin' method='POST'>
    @csrf
                         <h2 style="text-align:center;">Create Post</h2>
                         @if(session()->has('message'))
         <div class="alert alert-success" style=" margin-left:350px;; padding:15px; font-size:20px; text-align:center; width:300px;">{{session()->get('message')}}</div>
        @elseif(session()->has('error'))
        <div class="alert alert-danger" style=" margin-left:350px;; padding:15px; font-size:20px; text-align:center; width:300px;">{{session()->get('error')}}</div>
      
         @endif
                         <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text"  name="title" class="form-control">
                        </div>
                        
                        <div class="form-group">
                            <label for="body">Body</label><br>
                            <textarea name="body" id="summary-ckeditor" class="form-conrol rounded -0" cols="130" rows="10"></textarea>
                        </div>

                        <script src="{{asset('ckeditor/ckeditor.js')}}"></script>
                                    <script>
                                           CKEDITOR.replace( 'summary-ckeditor', {
                                           filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
                                           filebrowserUploadMethod: 'form'
                                                        });
                                      </script>





                        
                        <div class="form-group">
                          <label for="username">User Name</label><br>
                          <input type="text" value="ADMIN"  name="username" class="form-control">
                        </div>

                        <div class="form-group">
                      
                          
                          <input type="hidden" value="1"  name="userid" class="form-control">
                         
                        </div>
        <br><br>
                        <button type="submit" style="margin-left:400px"  class="btn btn-primary">SUBMIT</button>  
      </form>
      <br><br>
 </div>

 
       
            
    <div id="author">
        <h2 style="text-align:center;">Authors</h2>
        <div class="card-deck">
            <div class="card">
              <img class="card-img-top" src="images/b5.jpg" style="width:300px; height:300px; padding:15px; margin-left:15px;" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
            <div class="card">
              <img class="card-img-top" src="images/b5.jpg"  style="width:300px; height:300px; padding:15px; margin-left:15px;" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
            <div class="card">
              <img class="card-img-top" src="images/b5.jpg" style="width:300px; height:300px; padding:15px; margin-left:15px;" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div> 
          </div>
<br><br>
          <div class="card-deck">
            <div class="card">
              <img class="card-img-top" src="images/b5.jpg" style="width:300px; height:300px; padding:15px; margin-left:15px;" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
            <div class="card">
              <img class="card-img-top" src="images/b5.jpg"  style="width:300px; height:300px; padding:15px; margin-left:15px;" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
            <div class="card">
              <img class="card-img-top" src="images/b5.jpg" style="width:300px; height:300px; padding:15px; margin-left:15px;" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div> 
          </div>
    </div><br><br><br>
 </div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html> 
