<!DOCTYPE html>
<html lang="en-us" id="extr-page">
	<head>
		<meta charset="utf-8">
		<title>SWCORP: SISTEM PENJADUALAN KONSESI</title>
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
                  <div class="alert alert-danger">
                      <strong>{{ $errors->first('email') }}</strong>
                  </div>
              @endif

              <form method="POST" action="{{ route('password.email') }}" id="login-form" class="smart-form client-form">
                  {{ csrf_field() }}

                	<header>
  									Forgot Password
  								</header>

  								<fieldset>

  									<section>
  										<label class="label">Enter your email address</label>
  										<label class="input {{ $errors->has('email') ? ' alert alert-danger' : '' }}">
                        <i class="icon-append fa fa-envelope"></i>
  											<input type="email" name="email" value="{{ old('email') }}" class="{{ $errors->has('email') ? 'alert alert-danger' : '' }}">
  											<b class="tooltip tooltip-top-right"><i class="fa fa-envelope txt-color-teal"></i> Please enter email address for password reset</b></label>
  									</section>


  								</fieldset>
  								<footer>
  									<button type="submit" class="btn btn-primary">
  										<i class="fa fa-refresh"></i> Send reset link
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
            <div class="col-md-8">
                <div class="card-group mb-0">
                    <div class="card p-4">
                        <div class="card-block">
                            <h1>Reset password</h1>
                            <p class="text-muted">Recover your password</p>
                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif
                            @if ($errors->has('email'))
                                <div class="alert alert-danger">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </div>
                            @endif
                            <form class="form-horizontal" role="form" method="POST" action="{{ route('password.email') }}">
                              {{ csrf_field() }}
                              <div class="input-group mb-3 {{ $errors->has('email') ? ' alert alert-danger' : '' }}">
                                  <span class="input-group-addon"><i class="icon-user"></i>
                                  </span>
                                  <input id="email" name="email" type="email" value="{{ old('email') }}" class="form-control {{ $errors->has('email') ? 'alert alert-danger' : '' }}" placeholder="Email" required autofocus>
                              </div>
                              <div class="row">
                                  <div class="col-6">
                                      <button type="submit" class="btn btn-primary px-4">Send reset link</button>
                                  </div>
                              </div>
                          </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
