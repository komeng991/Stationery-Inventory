<!DOCTYPE html>
<html lang="en-us" id="extr-page">
	<head>
    <meta charset="utf-8">
		<title> SWCORP: SISTEM PENJADUALAN KONSESI</title>
		<meta name="description" content="">
		<meta name="author" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<!-- #CSS Links -->
		<!-- Basic Styles -->
		<link rel="stylesheet" type="text/css" media="screen" href="{{ asset("css/bootstrap.min.css") }}">
		<link rel="stylesheet" type="text/css" media="screen" href="{{ asset("css/font-awesome.min.css") }}">

		<!-- SmartAdmin Styles : Caution! DO NOT change the order -->
		<link rel="stylesheet" type="text/css" media="screen" href="{{ asset("css/smartadmin-production-plugins.min.css") }}">
		<link rel="stylesheet" type="text/css" media="screen" href="{{ asset("css/smartadmin-production.min.css") }}">
		<link rel="stylesheet" type="text/css" media="screen" href="{{ asset("css/smartadmin-skins.min.css") }}">

		<!-- SmartAdmin RTL Support -->
		<link rel="stylesheet" type="text/css" media="screen" href="{{ asset("css/smartadmin-rtl.min.css") }}">

		<!-- We recommend you use "your_style.css" to override SmartAdmin
		     specific styles this will also ensure you retrain your customization with each SmartAdmin update.
		<link rel="stylesheet" type="text/css" media="screen" href="css/your_style.css"> -->

		<!-- Demo purpose only: goes with demo.js, you can delete this css when designing your own WebApp -->
		<link rel="stylesheet" type="text/css" media="screen" href="{{ asset("css/demo.min.css") }}">

		<!-- #FAVICONS -->
		<link rel="shortcut icon" href="{{ asset("img/favicon/favicon.ico") }}" type="image/x-icon">
		<link rel="icon" href="{{ asset("img/favicon/favicon.ico") }}" type="image/x-icon">

		<!-- #GOOGLE FONT -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,300,400,700">


	</head>

	<body class="animated fadeInDown">

		<header id="header">

			<div id="logo-group">
				<span id="logo"> <img src="{{url("/img/logo-swcorp-horizontal.png")}}" alt="swm_logo">
				</span>
			</div>

			<span id="extr-page-header-space"> <span class="hidden-mobile hiddex-xs">Need an account?</span> <a href="{{ url('/register') }}" class="btn btn-danger">Create account</a> </span>

		</header>

		<div id="main" role="main">

			<!-- MAIN CONTENT -->
			<div id="content" class="container">

				<div class="row">
					<div class="col-xs-2 col-sm-2 col-md-2 col-lg-4"></div>
					<div class="col-xs-12 col-sm-12 col-md-5 col-lg-4">
						<div class="well no-padding">
              @if (session('status'))
                  <div class="alert alert-success">
                      {{ session('status') }}
                  </div>
              @endif
              @if ($errors->has('email'))
                  <div class="alert alert-succes">
                      <strong>{{ $errors->first('email') }}</strong>
                  </div>
              @endif
              @if ($errors->has('password'))
                  <div class="alert alert-succes">
                      <strong>{{ $errors->first('password') }}</strong>
                  </div>
              @endif
              @if ($errors->has('password_confirmation'))
                <div class="alert alert-succes">
                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                </div>
              @endif

              <form method="POST" action="{{ route('password.request') }}" id="login-form" class="smart-form client-form">
                  {{ csrf_field() }}
                  <input type="hidden" name="token" value="{{ $token }}">
                	<header>
  									Reset Password
  								</header>

  								<fieldset>

  									<section>
  										<label class="label">Enter your email address</label>
  										<label class="input {{ $errors->has('email') ? ' alert alert-danger' : '' }}">
                        <i class="icon-append fa fa-envelope"></i>
  											<input type="email" name="email" value="{{ $email or old('email') }}">
  											<b class="tooltip tooltip-top-right"><i class="fa fa-envelope txt-color-teal"></i> Please enter email address for password reset</b></label>
  									</section>

                    <section>
                      <label class="input"> <i class="icon-append fa fa-lock"></i>
                        <input id="password" required type="password" name="password" placeholder="Password" id="password">
                        <b class="tooltip tooltip-bottom-right">Don't forget your password</b> </label>
                    </section>

                    <section>
                      <label class="input"> <i class="icon-append fa fa-lock"></i>
                        <input id="password-confirm"  required type="password" name="password_confirmation" placeholder="Confirm password">
                        <b class="tooltip tooltip-bottom-right">Don't forget your password</b> </label>
                    </section>


  								</fieldset>
  								<footer>
  									<button type="submit" class="btn btn-primary">
  										<i class="fa fa-refresh"></i> Update Password
  									</button>
  								</footer>
  							</form>

						</div>




					</div>
				</div>
			</div>

		</div>

		<!--================================================== -->

    <!-- PACE LOADER - turn this on if you want ajax loading to show (caution: uses lots of memory on iDevices)-->
		<script src="{{ asset("js/plugin/pace/pace.min.js") }}"></script>

	    <!-- Link to Google CDN's jQuery + jQueryUI; fall back to local -->
	    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script> if (!window.jQuery) { document.write('<script src="{{ asset("js/libs/jquery-3.2.1.min.js") }}"><\/script>');} </script>

	    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
		<script> if (!window.jQuery.ui) { document.write('<script src="{{ asset("js/libs/jquery-ui.min.js") }}"><\/script>');} </script>

		<!-- IMPORTANT: APP CONFIG -->
		<script src="{{ asset("js/app.config.js") }}"></script>

		<!-- JS TOUCH : include this plugin for mobile drag / drop touch events
		<script src="js/plugin/jquery-touch/jquery.ui.touch-punch.min.js"></script> -->

		<!-- BOOTSTRAP JS -->
		<script src="{{ asset("js/bootstrap/bootstrap.min.js") }}"></script>

		<!-- JQUERY VALIDATE -->
		<script src="{{ asset("js/plugin/jquery-validate/jquery.validate.min.js") }}"></script>

		<!-- JQUERY MASKED INPUT -->
		<script src="{{ asset("js/plugin/masked-input/jquery.maskedinput.min.js") }}"></script>

		<!--[if IE 8]>

			<h1>Your browser is out of date, please update your browser by going to www.microsoft.com/download</h1>

		<![endif]-->

		<!-- MAIN APP JS FILE -->
		<script src="{{ asset("js/app.min.js") }}"></script>

	</body>
</html>

@section('body_bkp')
<body class="app flex-row align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mx-4">
                    <div class="card-block p-4">
                        <h1>Reset Password</h1>
                        <p class="text-muted">Change password</p>
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        @if ($errors->has('email'))
                            <div class="alert alert-succes">
                                <strong>{{ $errors->first('email') }}</strong>
                            </div>
                        @endif
                        @if ($errors->has('password'))
                            <div class="alert alert-succes">
                                <strong>{{ $errors->first('password') }}</strong>
                            </div>
                        @endif
                        @if ($errors->has('password_confirmation'))
                          <div class="alert alert-succes">
                              <strong>{{ $errors->first('password_confirmation') }}</strong>
                          </div>
                        @endif
                        <form class="form-horizontal" role="form" method="POST" action="{{ route('password.request') }}">
                          {{ csrf_field() }}
                          <input type="hidden" name="token" value="{{ $token }}">
                          <div class="input-group mb-3 {{ $errors->has('email') ? ' alert alert-danger' : '' }}">
                              <span class="input-group-addon">@</span>
                              <input id="email" type="email" class="form-control" name="email" value="{{ $email or old('email') }}" placeholder="Email" required autofocus>
                          </div>

                          <div class="input-group mb-3">
                              <span class="input-group-addon"><i class="icon-lock"></i>
                              </span>
                              <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>
                          </div>

                          <div class="input-group mb-4">
                              <span class="input-group-addon"><i class="icon-lock"></i>
                              </span>
                              <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Repeat password" required>
                          </div>

                          <button type="submit" class="btn btn-block btn-success">Update password</button>
                        </form>
                    </div>
                    <div class="card-footer p-4">
                        <div class="row">
                            <div class="col-6">
                                <button class="btn btn-block btn-facebook" type="button">
                                    <span>facebook</span>
                                </button>
                            </div>
                            <div class="col-6">
                                <button class="btn btn-block btn-twitter" type="button">
                                    <span>twitter</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
