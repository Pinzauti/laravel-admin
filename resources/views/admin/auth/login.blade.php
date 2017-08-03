<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>eSportsCMS | Login</title>
    <link rel="stylesheet" href="{!! asset('css/vendor.css') !!}" />
    <link rel="stylesheet" href="{!! asset('css/app.css') !!}" />

</head>

<body class="gray-bg">

<div class="middle-box text-center loginscreen animated fadeInDown">
    <div>
        <div>

            <h4 class="logo-name">eSc</h4>

        </div>
        <h3>Welcome to eSportsCMS Administration</h3>

        <form class="m-t" role="form" method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                @if ($errors->has('email'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                @endif
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <input id="password" type="password" class="form-control" name="password" required>

                @if ($errors->has('password'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                @endif
            </div>

            <div class="form-group">
                <div class="col-md-6">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                        </label>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary block full-width m-b">Login</button>

            <a href="{{ route('password.request') }}"><small>Forgot password?</small></a>

        </form>
    </div>
</div>
<a href="{{ url('/login/facebook') }}"><img src="{{asset('images/login_with_facebook.png')}}" alt="Login With Facebook"/></a>
<a href="{{ url('/login/twitter') }}"><img src="{{asset('images/login_with_twitter.png')}}" alt="Login With Facebook"/></a>
<a href="{{ url('/login/steam') }}"><img src="{{asset('images/login_with_steam.png')}}" alt="Login With Facebook"/></a>
<a href="{{ url('/login/twitch') }}"><img src="{{asset('images/login_with_twitch.png')}}" alt="Login With Facebook"/></a>
<!-- Mainly scripts -->
<script src="{!! asset('js/app.js') !!}" type="text/javascript"></script>

</body>

</html>

