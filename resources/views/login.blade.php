<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="{{asset('css/loginuser.css')}}">
    <style>
     body{
        
        background-size:cover;
        background-repeat: no-repeat;
        background-image: url({{ asset('assets/img/b7.jpg') }});
        
    }
    </style>
</head>
<body>
  

<div class="row">
    <div class="col-md-6 mx-auto p-0">
        <div class="card">
            <div class="login-box">
                <div class="login-snip"> <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Login</label> <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
                    <div class="login-space">
                    @if(session('status'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">*</button>
        <strong>  {{ session('status') }}</strong>
    </div>

    @endif
                    <form action="/logins" method="post">
                    @csrf
      <script>
            $(document).ready(function(){
    $('#checkbox').on('change', function(){
        $('#password').attr('type',$('#checkbox').prop('checked')==true?"text":"password"); 
    });
});

    </script>
     

                        <div class="login">
                          <!-- <div class="group"> <label for="user" class="label">Username</label> 
                            <input name="name" type="text" class="input" placeholder="Enter your username"> </div>-->
                            <div class="group"> <label for="email" class="label">Email</label> <input name="email" type="email" class="input" data-type="email" placeholder="Enter your email"> </div>
                           
                            <div class="group"> <label for="pass" class="label">Password</label> <input id="password"   name="password" type="password" 
                            class="input"  placeholder="Enter your password"></div>
                            <div class="group"> <input type="checkbox" id="checkbox">Show Password </div>
                            
                        <div class="group"> <input id="check" type="checkbox" class="check" checked> <label for="check"><span class="icon"></span> Keep me Signed in</label> </div>
                            <div class="group"> <input type="submit" class="button" value="Sign In"> </div>
                            <div class="hr"></div>
                            <div class="foot"> <a href="/forgetpw">Forgot Password?</a> </div>
                        </div>
                        </form>
                        <form action="/registers"  method="post" enctype="multipart/form-data">
                                       @csrf
                          <div class="sign-up-form">
                            <div class="group"> <label for="user" class="label">Username</label> <input name="name" type="text" class="input" placeholder="Create your Username"> </div>
                            <div class="group"> <label for="email" class="label">Email Address</label> <input name="email" type="email" class="input" placeholder="Enter your email address"> </div>
                            <div class="group"> <label for="pass" class="label">Password</label> <input name="password" type="password" class="input" data-type="password" placeholder="Create your password"> </div>
                            <div class="group"> <label for="image" class="label">Upload image</label>
                             <input name="image" type="file" class="input" style="background-color:none;" placeholder="Select an image"> </div>
                            
                            <div class="group"> <input type="submit" class="button" value="Sign Up"> </div>
                            <div class="hr"></div>
                            <div class="foot"> <label for="tab-1">Already Member?</label> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>