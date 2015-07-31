<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <!-- All the files that are required -->
    <link rel="stylesheet" href="/bootstrap/css/font-awesome.min.css">
    <link href='/bootstrap/css/bootstrap.min.css' rel='stylesheet' type='text/css'>
    <link href='/login/css/login.css' rel='stylesheet' type='text/css'>

    <script src="/assets/js/jquery-1.11.3.min.js"></script>
    <script src="/assets/js/jquery.validate.min.js"></script>


    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <title>Login Office Letter</title>
</head>
<body>

@if($errors->has())
    @foreach ($errors->all() as $error)
        <div>{{ $error }}</div>
    @endforeach
@endif

<div class="text-center" style="padding:50px 0">
    <div class="logo">login</div>
    <!-- Main Form -->
    <div class="login-form-1">
        <form method="post" action="login" id="login-form" class="text-left">
            <div class="login-form-main-message"></div>
            <div class="main-login-form">
                <div class="login-group">
                    <div class="form-group">
                        <label for="lg_username" class="sr-only">Username</label>
                        <input type="text" class="form-control" id="lg_username" name="username" placeholder="username">
                    </div>
                    <div class="form-group">
                        <label for="lg_password" class="sr-only">Password</label>
                        <input type="password" class="form-control" id="lg_password" name="password" placeholder="password">
                    </div>
                    <div class="form-group login-group-checkbox">
                        <input type="checkbox" id="lg_remember" name="lg_remember">
                        <label for="lg_remember">remember</label>
                    </div>
                </div>
                <input id="csrf_token" type="hidden" name="_token" value="{{ csrf_token() }}">
                <button type="submit" class="login-button"><i class="fa fa-chevron-right"></i></button>
            </div>
            <div class="etc-login-form">
                <p>forgot your password? <a href="#">click here</a></p>
                {{--<p>new user? <a href="#">create new account</a></p>--}}
            </div>
        </form>
    </div>
    <!-- end:Main Form -->
</div>
<script src="/login/js/login.common.js"></script>
</body>
</html>