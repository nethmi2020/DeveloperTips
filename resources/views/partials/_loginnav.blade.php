<ul>
     <li>Developer Tips</li>
     
     @foreach($data as $datas) 
     <li><a href="/index" data-toggle="tooltip"  data-placement="bottom" title="Please Log Out" >Home</a></li>
     <li><a href="#">Tutorial</a></li>
     
    <li><a href="/click/{{$datas->id}} ">Myaccount</a></li>@endforeach
     <li><a href="/index ">Logout</a>
     <img src="{{asset('uploads/u/'.$datas->image)}}" style="margin-left:30px;  width:35px;  height:35px; border-radius:100px;" class="card-img-top rounded" alt="...">
 
     </li>
     </ul>    