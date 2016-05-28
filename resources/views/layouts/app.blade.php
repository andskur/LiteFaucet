<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{config('faucet.name')}}</title>

    {{--    <link href="{{ elixir('css/app.css') }}" rel="stylesheet">--}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body id="app-layout">
<div class="top-bar">
    <div class="top-bar-left">
        <ul class="menu">
            <li class="menu-text">{{config('faucet.name')}} Faucet</li>
            <li><a href="{{url('/')}}">Home</a></li>
            <li><a href="{{url('/faucets')}}">Etherium faucets</a></li>
        </ul>
    </div>
    <div class="top-bar-right">
        <ul class="menu">
            @if (Auth::guest())
                <li><a data-open="signInModal">Sign in</a></li>
                <li><a data-open="signUpModal">Sign up</a></li>
            @else
                <li>Hello {{Auth::user()->name}}</li>
                <li>! Your balance is
                    @if (Auth::user()->wallet)
                        <span>{{Auth::user()->wallet->balance}}</span>
                    @else
                        <span>0</span>
                    @endif
                    etherium
                </li>
                <li><a href="{{ url('/logout') }}">Logout</a></li>
            @endif
        </ul>
    </div>
</div>
<div class="callout large primary title-block">
    <div class="row column text-center">
        @yield('title-block')
    </div>
</div>
@yield('content')
<br>
<br>
@if (Auth::guest())
    <div class="reveal" id="signInModal" data-reveal>
        <h3>Welcome back!</h3>
        <form role="form" method="POST" action="{{ url('/login') }}">
            {{ csrf_field() }}

            <label>E-Mail Address
                <input type="email" name="email" value="{{ old('email') }}">
            </label>
            @if ($errors->has('email'))
                <span><strong>{{ $errors->first('email') }}</strong></span>
            @endif

            <label>Password
                <input type="password" class="form-control" name="password">
            </label>
            @if ($errors->has('password'))
                <span><strong>{{ $errors->first('password') }}</strong></span>
            @endif

            <button type="submit" class="expanded button">Login</button>
        </form>
        <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
        <button class="close-button" data-close aria-label="Close modal" type="button">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="reveal" id="signUpModal" data-reveal>
        <h3>Join us and get a lot of etherium!</h3>
        <form role="form" method="POST" action="{{ url('/register') }}">
            {{ csrf_field() }}

            <label>Name
                <input type="text" name="name" value="{{ old('name') }}">
            </label>
            @if ($errors->has('name'))
                <span><strong>{{ $errors->first('name') }}</strong></span>
            @endif

            <label>E-Mail Address
                <input type="email" name="email" value="{{ old('email') }}">
            </label>
            @if ($errors->has('email'))
                <span><strong>{{ $errors->first('email') }}</strong></span>
            @endif

            <label>Etherium wallet
                <input type="text" name="address" value="{{ old('address') }}">
            </label>
            @if ($errors->has('address'))
                <span><strong>{{ $errors->first('address') }}</strong></span>
            @endif

            <label>Password
                <input type="password" class="form-control" name="password">
            </label>
            @if ($errors->has('password'))
                <span><strong>{{ $errors->first('password') }}</strong></span>
            @endif

            <label class="col-md-4 control-label">Confirm Password
                <input type="password" class="form-control" name="password_confirmation">
            </label>
            @if ($errors->has('password_confirmation'))
                <span><strong>{{ $errors->first('password_confirmation') }}</strong></span>
            @endif
            <button type="submit" class="expanded button">Register</button>
        </form>
        <button class="close-button" data-close aria-label="Close modal" type="button">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
<!-- JavaScripts -->
{{--<script src="{{ elixir('js/app.js') }}"></script>--}}
<script src="{{ asset('js/app.js') }}"></script>
{{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/what-input/2.1.0/what-input.min.js"></script>--}}
{{--<script src="https://cdn.jsdelivr.net/foundation/6.2.1/foundation.min.js"></script>--}}
<script>
    $(document).foundation();
</script>
<!-- App scripts -->
@stack('scripts')
</body>
</html>