<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--Bootsrap 4 CDN-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{url('style.css')}}">

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
    <a class="navbar-brand" href="#">
        <img src="dist/img/photos/tools.png" alt="logo" style="width:30px; margin: auto">
    </a>
    <a class="navbar-brand" href="login">Plumber</a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href=".">首頁<span class="sr-only">(current)</span></a>
            </li>
        </ul>
    </div>
</nav>

<div margin-top="100px"></div>
<div class="signup-form">
    <form action="{{url('post-login')}}" method="POST" id="logForm">
        {{ csrf_field() }}
        <h2>Login Account</h2>
        <p class="lead">Please login form too dashbord admin.</p>
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-paper-plane"></i></span>
                <input type="email" class="form-control" name="email" id="inputEmail" placeholder="Email Address"
                       required="required">
            </div>
            @if ($errors->has('email'))
                <span class="error">{{ $errors->first('email') }}</span>
            @endif
        </div>
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                <input type="password" minLength="8" class="form-control" name="password" id="inputPassword"
                       placeholder="Password" required="required">
            </div>
            @if ($errors->has('password'))
                <span class="error">{{ $errors->first('password') }}</span>
            @endif
        </div>
        <div class="form-group">
            <button type="submit" name="login" class="btn btn-primary btn-block btn-lg">Login</button>
        </div>
        <p class="small text-center">By clicking the Sign Up button, you agree to our <br><a href="#">Terms &amp;
                Conditions</a>, and <a href="#">Privacy Policy</a>.</p>
    </form>
    <div class="text-center">Still don't have an account? <a href="{{url('registration')}}">Sign Up here</a>.</div>
</div>
@if(session('failedLogin_message'))
    <div class="alert alert-danger">
        {{session('failedLogin_message')}}
    </div>
@endif
@include('sweetalert::alert')
</body>
</html>
