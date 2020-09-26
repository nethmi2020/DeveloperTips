
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
    
</head>
<body>
 
<div class="container" style="margin-top:100px; margin-left:600px;">
<button class="btn btn-warning"><a href="/posts">GO BACK</a></button> <br><br>
<div class="card" style="width: 400px; height:400px; padding:20px;">
<img src="{{asset('uploads/u/'.$a->image)}}" style="margin-left:150px; padding:30px; width:100px;  height:150px; border-radius:400px;" class="card-img-top rounded" alt="...">
     
  <div class="card-body">
    <h5 class="card-title">About Me</h5>
    <p class="card-text">I'm  <span>{{$a->name}}</span></p>
  </div> <br>
  <ul class="list-group list-group-flush">
  My working fields are
    <li class="list-group-item">{{$a->professionalbackground}}</li>
   
  </ul>
  <div class="card-body">
  <p>Follow me</p>
    <a href="#" class="card-link">Facebook</a>
    <a href="#" class="card-link">Instagram</a>
  </div>
</div>
</div>

</body>
</html>
