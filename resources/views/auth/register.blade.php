<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>PO| Register</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body class="gray-bg">
<div class="middle-box text-center loginscreen   animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name">PO</h1>

            </div>
			<h3>Register to PO</h3>
			<p>Create account to see it in action.</p>
                <div class="card-body">
                    <form class="m-t" role="form" method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" placeholder="Name" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
							</div>
                         <div class="form-group">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}"placeholder="Email" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
							</div>
                         <div class="form-group">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
							</div>
                        <div class="form-group">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation"placeholder="Password Confirmation" required>
                            </div>
							<div class="checkbox i-checks"><label> <input type="checkbox"><i></i>Agree the terms and policy</label></div>
						<div class="form-group">
                                <button type="submit" class="btn btn-primary block full-width m-b">
                                    {{ __('Register') }}
                                </button>
						</div>
						<p class="text-muted text-center"><small>Already have an account?</small></p>
						<a class="btn btn-sm btn-white btn-block" href="{{ route('login') }}">Login</a>
                    </form>
					<p class="m-t"> <small>Inspinia we app framework base on Bootstrap 4 &copy; 2018</small> </p>
                </div>
			</div>
            
        
    </div>
</div>
</body>
</html>

