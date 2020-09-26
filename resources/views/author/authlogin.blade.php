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
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="{{asset('css/loginauthor.css')}}">
    <style>
     body{
        
        background-size:cover;
        background-repeat: no-repeat;
        opacity:0.87;
        background-image: url({{ asset('assets/img/b21.jpg') }});
        
    }
    </style>
</head>
<body>


<div class="container">
<br><br><br> <br><br><br>
    <div class="row d-flex justify-content-center mt-5">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
            <div class="card py-3 px-2">
              
               
                <div class="division">
                    <div class="row">
                        <div class="col-3">
                            <div class="line l"></div>
                        </div>
                        <div class="col-6"><span>Login For Authors</span></div>
                        <div class="col-3">
                            <div class="line r"></div>
                        </div>
                    </div>
                </div>
                <form class="myform" action="/authlogged" method="post">
                <script>
            $(document).ready(function(){
    $('#checkbox').on('change', function(){
        $('#password').attr('type',$('#checkbox').prop('checked')==true?"text":"password"); 
    });
});

    </script>
                @csrf
                      <div class="form-group"> <input type="email" name=email class="form-control" placeholder="Email"> </div>
                    <div class="form-group"> <input type="password" id="password" name="password" class="form-control" placeholder="Password"> </div>
                    <div class="form-group"><input type="checkbox" id="checkbox"> <span style="color:green">Show password</span> </div>
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="form-group form-check"> <input type="checkbox" class="form-check-input" id="exampleCheck1"> <label class="form-check-label" for="exampleCheck1">Remember me</label> </div>
                        </div>
                        <div class="col-md-6 col-12 bn"><a href="/forgetauthpw">Forget password</a></div>
                    </div>
                    <div class="form-group mt-3"> <button type="submit" class="btn btn-block btn-primary btn-lg">Login</small></button> </div>
                </form>
            </div>
        </div>
    </div>
</div>


</body>
</html>