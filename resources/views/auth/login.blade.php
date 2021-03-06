<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>PO | Login</title>

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('font-awesome/css/font-awesome.css') }}" rel="stylesheet">

    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>
<body class="gray-bg">
	<div class="middle-box text-center loginscreen animated fadeInDown">
        <div>

			<div>

                <h2><b>Purchase Order</b></h2>
				<br>

            </div>
			<p>Login in. To see it in action.</p>
                <div class="card-body">
                    <form class="m-t"  method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group">

                                <input placeholder="Email" id="Email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group">

                                <input  placeholder="Password" id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                                <button type="submit" class="btn btn-primary block full-width m-b">
                                    {{ __('Login') }}
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                        </div>
						<p class="text-muted text-center"><small>Do not have an account?</small></p>
						<a class="btn btn-sm btn-white btn-block" href="{{ route('register') }}">Create an account</a>
                    </form>
					<p class="m-t"> <small>Inspinia we app framework base on Bootstrap 4 &copy; 2018</small> </p>
                </div>
			</div>
     <script src="{{ asset('js/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
 
	</body>
	
</html>
