@section('body_bkp')
<body class="app flex-row align-items-center">
  <div class="container">
     <div class="row justify-content-center">
         <div class="col-md-8">
             <div class="card-group mb-0">
                 <div class="card p-4">
                     <div class="card-block">
                         <h1>Login</h1>
                         <p class="text-muted">Sign In to your account</p>
                         <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                           {{ csrf_field() }}
                           @if ($errors->has('email'))
                               <div class="alert alert-danger">
                                   <strong>{{ $errors->first('email') }}</strong>
                               </div>
                           @endif
                           <div class="input-group mb-3">
                               <span class="input-group-addon"><i class="icon-user"></i>
                               </span>
                               <input id="email" name="email" type="email" value="{{ old('email') }}" class="form-control {{ $errors->has('email') ? 'alert alert-danger' : '' }}" placeholder="Email" required autofocus>
                           </div>
                           <div class="input-group mb-4">
                               <span class="input-group-addon"><i class="icon-lock"></i>
                               </span>
                               <input id="password" name="password" type="password" class="form-control {{ $errors->has('password') ? 'alert alert-danger' : '' }}" placeholder="Password">
                           </div>
                           <div class="row">
                               <div class="col-6">
                                   <button type="submit" class="btn btn-primary px-4">Login</button>
                               </div>
                               <div class="col-6 text-right">
                                   <a href="{{ url('/password/reset') }}" class="btn btn-link px-0">Forgot password?</a>
                               </div>
                           </div>
                           <div class="checkbox">
                               <label>
                                   <input type="checkbox" name="remember"> Remember Me
                               </label>
                           </div>
                       </form>
                     </div>
                 </div>
                 <div class="card card-inverse card-primary py-5 d-md-down-none bg-primary" style="width:44%">
                     <div class="card-block text-center">
                         <div>
                             <h2>Sign up</h2>
                             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                             <a href="{{ url('/register') }}" class="btn btn-primary active mt-3">Register now!</a>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
@stop
<!DOCTYPE html>
<html lang="en-us" id="extr-page">
	<head>
		<meta charset="utf-8">
		<title> Radix Lextrus Portal</title>
		<meta name="description" content="">
		<meta name="author" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<!-- #CSS Links -->
		<!-- Basic Styles -->
		<link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" media="screen" href="css/font-awesome.min.css">

		<!-- SmartAdmin Styles : Caution! DO NOT change the order -->
		<link rel="stylesheet" type="text/css" media="screen" href="css/smartadmin-production-plugins.min.css">
		<link rel="stylesheet" type="text/css" media="screen" href="css/smartadmin-production.min.css">
		<link rel="stylesheet" type="text/css" media="screen" href="css/smartadmin-skins.min.css">

		<!-- SmartAdmin RTL Support -->
		<link rel="stylesheet" type="text/css" media="screen" href="css/smartadmin-rtl.min.css">

		<!-- We recommend you use "your_style.css" to override SmartAdmin
		     specific styles this will also ensure you retrain your customization with each SmartAdmin update.
		<link rel="stylesheet" type="text/css" media="screen" href="css/your_style.css"> -->

		<!-- Demo purpose only: goes with demo.js, you can delete this css when designing your own WebApp -->
		<link rel="stylesheet" type="text/css" media="screen" href="css/demo.min.css">

		<!-- #FAVICONS -->
		<link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon">
		<link rel="icon" href="img/favicon/favicon.ico" type="image/x-icon">

		<!-- #GOOGLE FONT -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,300,400,700">


	</head>

	<body class="animated fadeInDown">

		<header id="header">

			<div id="logo-group">
        <span id="logo">  Radix Lextrus Portal
          <!-- <img src="img/logo.png" alt="Radix Lextrus">  -->
        </span>
			</div>

			<span id="extr-page-header-space"> <span class="hidden-mobile hiddex-xs">Need an account?</span> <a href="{{ url('/register') }}" class="btn btn-danger">Create account</a> </span>

		</header>

		<div id="main" role="main">

			<!-- MAIN CONTENT -->
			<div id="content" class="container">

				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-7 col-lg-8 hidden-xs hidden-sm">
						<h1 class="txt-color-red login-header-big">Radix Lextrus</h1>
						<div class="hero">

              <div class="pull-left login-desc-box-l">
                <h4 class="paragraph-header">Loan and Sales &amp Purchase Agreement (SPA) Documents </h4>
                <div class="login-app-icons">
                  <a href="{{ url('/register') }}" class="btn btn-danger btn-sm">Register</a>
                  <a href="{{ url('/login') }}" class="btn btn-danger btn-sm">Login Here</a>
                </div>
              </div>

							<img src="img/sales-purchase-agreement.png" class="pull-right display-image" alt="" style="width:210px">

						</div>

            <div class="row">
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
								<h5 class="about-heading">About Radix Lextrus - Are you up to date?</h5>
								<p>
									Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa.
								</p>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
								<h5 class="about-heading">About Radix Lextrus!</h5>
								<p>
									Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi voluptatem accusantium!
								</p>
							</div>
						</div>

					</div>
					<div class="col-xs-12 col-sm-12 col-md-5 col-lg-4">
						<div class="well no-padding">
							<form action="{{ url('/login') }}" id="login-form" class="smart-form client-form" method="post">
                {{ csrf_field() }}

              	<header>
									Sign In
								</header>

								<fieldset>
                  @if ($errors->has('email'))
                      <div class="alert alert-danger">
                          <strong>{{ $errors->first('email') }}</strong>
                      </div>
                  @endif
									<section>
										<label class="label">E-mail</label>
										<label class="input"> <i class="icon-append fa fa-user"></i>
											<input type="email" name="email">
											<b class="tooltip tooltip-top-right"><i class="fa fa-user txt-color-teal"></i> Please enter email address/username</b></label>
									</section>

									<section>
										<label class="label">Password</label>
										<label class="input"> <i class="icon-append fa fa-lock"></i>
											<input type="password" name="password">
											<b class="tooltip tooltip-top-right"><i class="fa fa-lock txt-color-teal"></i> Enter your password</b> </label>
										<div class="note">
											<a href="{{ url('/password/reset') }}">Forgot password?</a>
										</div>
									</section>

									<section>
										<label class="checkbox">
											<input type="checkbox" name="remember" checked="">
											<i></i>Stay signed in</label>
									</section>
								</fieldset>
								<footer>
									<button type="submit" class="btn btn-primary">
										Sign in
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
		<script src="js/plugin/pace/pace.min.js"></script>

	    <!-- Link to Google CDN's jQuery + jQueryUI; fall back to local -->
	    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script> if (!window.jQuery) { document.write('<script src="js/libs/jquery-3.2.1.min.js"><\/script>');} </script>

	    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
		<script> if (!window.jQuery.ui) { document.write('<script src="js/libs/jquery-ui.min.js"><\/script>');} </script>

		<!-- IMPORTANT: APP CONFIG -->
		<script src="js/app.config.js"></script>

		<!-- JS TOUCH : include this plugin for mobile drag / drop touch events
		<script src="js/plugin/jquery-touch/jquery.ui.touch-punch.min.js"></script> -->

		<!-- BOOTSTRAP JS -->
		<script src="js/bootstrap/bootstrap.min.js"></script>

		<!-- JQUERY VALIDATE -->
		<script src="js/plugin/jquery-validate/jquery.validate.min.js"></script>

		<!-- JQUERY MASKED INPUT -->
		<script src="js/plugin/masked-input/jquery.maskedinput.min.js"></script>

		<!--[if IE 8]>

			<h1>Your browser is out of date, please update your browser by going to www.microsoft.com/download</h1>

		<![endif]-->

		<!-- MAIN APP JS FILE -->
		<script src="js/app.min.js"></script>

		<script>
			runAllForms();

			$(function() {
				// Validation
				$("#login-form").validate({
					// Rules for form validation
					rules : {
						email : {
							required : true,
							email : true
						},
						password : {
							required : true,
							minlength : 3,
							maxlength : 20
						}
					},

					// Messages for form validation
					messages : {
						email : {
							required : 'Please enter your email address',
							email : 'Please enter a VALID email address'
						},
						password : {
							required : 'Please enter your password'
						}
					},

					// Do not change code below
					errorPlacement : function(error, element) {
						error.insertAfter(element.parent());
					}
				});
			});
		</script>

	</body>
</html>
