@extends('layouts.app')
@section('content')
<style>
form{
    width:75%;
    margin-left:50px;
}
</style>
 <h1>create posts</h1>

 @if(count($errors)>0)

@foreach($errors->all() as $error)
<div class="alert alert-danger">
          {{$error}}
</div>
@endforeach
@endif

<form action='/store' method='POST'>
@csrf
<div class="form-group">
 <label for="title">Title</label>
 <input type="text"  name="title" class="form-control">
</div>

<div class="form-group">
 <label for="body">Body</label><br>
 <textarea name="body" class="form-conrol rounded -0" cols="130" rows="10"></textarea>
</div>


<div class="form-group">
 <label for="username">User Name</label><br>
 <input type="text"  name="username" class="form-control">
</div>

<div class="form-group">
 <label for="title">USER_ID</label>
 <input type="text"  name="user_id" class="form-control">
</div>

<button type="submit"   class="btn btn-primary">SUBMIT</button>
</form>
@endsection
