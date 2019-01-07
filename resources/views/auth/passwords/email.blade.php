<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>PO | Login</title>

   
    <link href="../css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <link href="../font-awesome/css/font-awesome.css" type="text/css"rel="stylesheet">

    <link href="../css/animate.css" type="text/css"rel="stylesheet">
    <link href="../css/style.css" type="text/css" rel="stylesheet">

</head>
<body class="gray-bg">
    <div>

			<div>

                <h1 class="logo-name" align="center">PO</h1>

            </div>
     

                <div class="form-group ">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                <div class="middle-box text-center loginscreen animated fadeInDown">

                    <form class="m-t" method="POST" action="{{ route('password.email') }}">
                        @csrf
                <div class="form-group ">{{ __('Reset Password') }}</div>

                        <div class="form-group ">

                         
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group">
                                <button type="submit"  class="btn btn-primary block full-width m-b">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                        </div>
                    </form>
                </div>
         
    </div>
</div>
</body>
</html>
