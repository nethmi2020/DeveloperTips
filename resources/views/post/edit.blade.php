@extends('layouts.app')
@section('content')
<style>
form{
    width:75%;
    margin-left:50px;
}
</style>
 <h1>Edit posts</h1>

 
<form action='/update/{{$post->id}}' method='post' enctype="multipart/form-data">
@csrf
@if (session('status'))
<div class="alert alert-success" style=" margin-left:350px; padding:15px; font-size:20px; text-align:center; width:300px;">
    {{ session('status') }}
</div>
@endif
<br><br>
<div class="form-group">
 <label for="title">Title</label>
 <input type="text"   name="title" class="form-control" value="{{$post->title}}">
</div>

<div class="form-group">
<input type="file" class="form-controll"  name="image">
<label >Choose file</label>
      </div>


<div class="form-group">
 <label for="body">Body</label><br>
 <textarea name="body" class="form-conrol rounded -0" cols="130" rows="10">{{$post->body}}</textarea>
</div>

<button type="submit" class="btn btn-info">SUBMIT</button>
</form>
@endsection