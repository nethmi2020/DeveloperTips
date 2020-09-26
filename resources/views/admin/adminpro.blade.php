@include('partials._head')
<body>
<div class="container">
<div class="card"  style="width: 400px; margin:200px ; border: 1px solid grey; padding:5px;" >
  <img src="{{asset('uploads/images/b5.jpg')}}" style="margin:30px;  width:200px;  height:200px;" class="card-img-top rounded" alt="...">
  <div class="card-body" style="margin-left:50px;">
    <h5 class="card-title">USER PROFILE</h5>
    <p class="card-text">Your Details here.</p>
  </div>
  <ul class="list-group list-group-flush" style="margin-left:20px;">
    <li class="list-group-item"><strong> Name-</strong> {{$data->name}}</li>
    <li class="list-group-item"><strong> email</strong> {{$data->email}}</li>
    <li class="list-group-item"><strong> Password-</strong> {{$data->password}}</li>
    <li class="list-group-item"><strong> Id-</strong> {{$data->id}}</li>
  </ul>
  <div class="card-body" style="margin-left:10px;">
     &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp 
    <button class="btn-btn-default"><a href="/seepost/{{$data->id}}" class="card-link" style="text-decoration:none;">See My Post</a></button>
    
  </div>
</div>

</div>








</body>
</html>