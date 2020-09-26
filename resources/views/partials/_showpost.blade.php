<ul>
            @foreach($data as $datas)
             <div class="br">
             <li>
              <p>{{$datas->id}} -
                {{$datas->title}}
              
              <button class="btn btn-default " style="margin-left:700px; font-weight:bold;" value="view post"><a href="save/{{$datas->id}}" >View Post</a></button><br>
              <small style="font-size:15px;">Written on {{$datas->created_at}}- BY  {{$datas->user_name}}</small>
             
             
              </p>
              <hr>
              </li>
              </div>
            @endforeach
           
            </ul>