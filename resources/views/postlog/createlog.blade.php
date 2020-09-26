@extends('layouts.applog')

@section('content')
<style>
form{
    width:75%;
    margin-left:50px;
}
</style>
 <h1>create posts</h1>
 @if (session('status'))
    <div class="alert alert-success" style=" margin-left:350px; padding:15px; font-size:20px; text-align:center; width:300px;">
        {{ session('status') }}
    </div>
@endif

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
 <label for="username">Author Name</label><br>
 <input type="text"  name="authname" value="{{$data->name}}" class="form-control">
</div>

<div class="form-group">
<input type="hidden" name="authid" value="{{$data->id}}" class="form-control"> 

</div>

<button type="submit"   class="btn btn-primary">SUBMIT</button>
</form>
@endsection
