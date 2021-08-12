<!DOCTYPE html>
<html lang="en-us" id="extr-page">
	<head>
		<meta charset="utf-8">
		<title> SWCORP: SISTEM PENJADUALAN KONSESI </title>
		<meta name="description" content="">
		<meta name="author" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<!-- #CSS Links -->
		<!-- Basic Styles -->
		<link id="vendorsbundle" rel="stylesheet" media="screen, print" href="css/vendors.bundle.css">
    <link id="appbundle" rel="stylesheet" media="screen, print" href="css/app.bundle.css">
    <link id="mytheme" rel="stylesheet" media="screen, print" href="#">
    <link id="myskin" rel="stylesheet" media="screen, print" href="css/skins/skin-master.css">
    <!-- Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
    <link rel="mask-icon" href="img/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="stylesheet" media="screen, print" href="css/fa-brands.css">


	</head>

	<body class="animated fadeInDown">
		<script>
            /**
             *	This script should be placed right after the body tag for fast execution
             *	Note: the script is written in pure javascript and does not depend on thirdparty library
             **/
            'use strict';

            var classHolder = document.getElementsByTagName("BODY")[0],
                /**
                 * Load from localstorage
                 **/
                themeSettings = (localStorage.getItem('themeSettings')) ? JSON.parse(localStorage.getItem('themeSettings')) :
                {},
                themeURL = themeSettings.themeURL || '',
                themeOptions = themeSettings.themeOptions || '';
            /**
             * Load theme options
             **/
            if (themeSettings.themeOptions)
            {
                classHolder.className = themeSettings.themeOptions;
                console.log("%c✔ Theme settings loaded", "color: #148f32");
            }
            else
            {
                console.log("%c✔ Heads up! Theme settings is empty or does not exist, loading default settings...", "color: #ed1c24");
            }
            if (themeSettings.themeURL && !document.getElementById('mytheme'))
            {
                var cssfile = document.createElement('link');
                cssfile.id = 'mytheme';
                cssfile.rel = 'stylesheet';
                cssfile.href = themeURL;
                document.getElementsByTagName('head')[0].appendChild(cssfile);

            }
            else if (themeSettings.themeURL && document.getElementById('mytheme'))
            {
                document.getElementById('mytheme').href = themeSettings.themeURL;
            }
            /**
             * Save to localstorage
             **/
            var saveSettings = function()
            {
                themeSettings.themeOptions = String(classHolder.className).split(/[^\w-]+/).filter(function(item)
                {
                    return /^(nav|header|footer|mod|display)-/i.test(item);
                }).join(' ');
                if (document.getElementById('mytheme'))
                {
                    themeSettings.themeURL = document.getElementById('mytheme').getAttribute("href");
                };
                localStorage.setItem('themeSettings', JSON.stringify(themeSettings));
            }
            /**
             * Reset settings
             **/
            var resetSettings = function()
            {
                localStorage.setItem("themeSettings", "");
            }

        </script>
				<div class="page-wrapper auth">
		            <div class="page-inner">
		                <div class="page-content-wrapper bg-transparent m-0">
		                    <div class="height-10 w-100 shadow-lg px-4">
		                        <div class="d-flex align-items-left container p-0">
		                            <div class="page-logo width-mobile-auto m-0 align-items-center justify-content-center p-0 bg-transparent bg-img-none shadow-0 height-9 border-0">
		                                <a href="javascript:void(0)" class="page-logo-link press-scale-down d-flex align-items-center">
											<img class="w-50" src="img/swm-title.png" alt="SWM Envoriment">
		                                    <span class="page-logo-text mr-1">ICMS</span>
		                                </a>
		                            </div>
		                        </div>
		                    </div>
		                    <div style="background: url(img/svg/pattern-1.svg) no-repeat center bottom fixed; background-size: cover;">
		                        <div class="container py-4 py-lg-5 my-lg-5 px-10 px-sm-0">
		                            <div class="row">
		                                <div class="col">
											
		                                </div>

										<div class="col">
											<h1 class="text-white fw-300 mb-3 d-sm-block d-md-none">
		                                        Secure login
		                                    </h1>
		                                    <div class="card p-4 rounded-plus bg-faded">
		                                        <form id="js-login" novalidate="" action="{{ url('/login') }}" method="post">
													{{ csrf_field() }}
													@if (Session::has('message'))
															<div class="alert adjusted alert-info fade in">
																<button class="close" data-dismiss="alert">×</button>
																{{ Session::get('message') }}
															</div>
													@endif
													@if ($errors->all() )
													<div class="alert adjusted alert-danger fade in">
														<button class="close" data-dismiss="alert">
															×
														</button>
														{{ Html::ul( $errors->all()) }}
													</div>
													@endif
		                                            <div class="form-group">
		                                                <label class="form-label" for="username">Alamat Emel</label>
		                                                <input type="email" id="username" name="email" class="form-control form-control-lg" placeholder="your id or email"  required>
		                                                <div class="invalid-feedback">No, you missed this one.</div>
		                                                <div class="help-block">Your email address</div>
		                                            </div>
		                                            <div class="form-group">
		                                                <label class="form-label" for="password">Kata Laluan</label>
		                                                <input type="password" id="password" name="password" class="form-control form-control-lg" placeholder="password"  required>
		                                                <div class="invalid-feedback">Sorry, you missed this one.</div>
		                                                <div class="help-block">Your password</div>
		                                            </div>
		                                            <div class="form-group text-left">
		                                                <div class="custom-control custom-checkbox">
		                                                    <input type="checkbox" class="custom-control-input" id="rememberme">
		                                                    <label class="custom-control-label" for="rememberme"> Remember me for the next 30 days</label>
		                                                </div>
		                                            </div>
		                                            <div class="row no-gutters">
		                                                <div class="col-lg-6 pr-lg-1 my-2">
		                                                    <button type="submit" class="btn btn-info btn-block btn-lg">Sign in with <i class="fab fa-google"></i></button>
		                                                </div>
		                                                <div class="col-lg-6 pl-lg-1 my-2">
		                                                    <button id="js-login-btn" type="submit" class="btn btn-danger btn-block btn-lg">Secure login</button>
		                                                </div>
		                                            </div>
		                                        </form>
		                                    </div>
		                                </div>

										<div class="col">
											
		                                </div>
		                                <!-- <div class="col-sm-12 col-md-6 col-lg-5 col-xl-4 ml-auto">
		                                    
		                                </div> -->
		                            </div>
		                        </div>
		                    </div>
		                </div>
		            </div>
		        </div>
		        <!-- BEGIN Color profile -->
		        <!-- this area is hidden and will not be seen on screens or screen readers -->
		        <!-- we use this only for CSS color refernce for JS stuff -->
		        <p id="js-color-profile" class="d-none">
		            <span class="color-primary-50"></span>
		            <span class="color-primary-100"></span>
		            <span class="color-primary-200"></span>
		            <span class="color-primary-300"></span>
		            <span class="color-primary-400"></span>
		            <span class="color-primary-500"></span>
		            <span class="color-primary-600"></span>
		            <span class="color-primary-700"></span>
		            <span class="color-primary-800"></span>
		            <span class="color-primary-900"></span>
		            <span class="color-info-50"></span>
		            <span class="color-info-100"></span>
		            <span class="color-info-200"></span>
		            <span class="color-info-300"></span>
		            <span class="color-info-400"></span>
		            <span class="color-info-500"></span>
		            <span class="color-info-600"></span>
		            <span class="color-info-700"></span>
		            <span class="color-info-800"></span>
		            <span class="color-info-900"></span>
		            <span class="color-danger-50"></span>
		            <span class="color-danger-100"></span>
		            <span class="color-danger-200"></span>
		            <span class="color-danger-300"></span>
		            <span class="color-danger-400"></span>
		            <span class="color-danger-500"></span>
		            <span class="color-danger-600"></span>
		            <span class="color-danger-700"></span>
		            <span class="color-danger-800"></span>
		            <span class="color-danger-900"></span>
		            <span class="color-warning-50"></span>
		            <span class="color-warning-100"></span>
		            <span class="color-warning-200"></span>
		            <span class="color-warning-300"></span>
		            <span class="color-warning-400"></span>
		            <span class="color-warning-500"></span>
		            <span class="color-warning-600"></span>
		            <span class="color-warning-700"></span>
		            <span class="color-warning-800"></span>
		            <span class="color-warning-900"></span>
		            <span class="color-success-50"></span>
		            <span class="color-success-100"></span>
		            <span class="color-success-200"></span>
		            <span class="color-success-300"></span>
		            <span class="color-success-400"></span>
		            <span class="color-success-500"></span>
		            <span class="color-success-600"></span>
		            <span class="color-success-700"></span>
		            <span class="color-success-800"></span>
		            <span class="color-success-900"></span>
		            <span class="color-fusion-50"></span>
		            <span class="color-fusion-100"></span>
		            <span class="color-fusion-200"></span>
		            <span class="color-fusion-300"></span>
		            <span class="color-fusion-400"></span>
		            <span class="color-fusion-500"></span>
		            <span class="color-fusion-600"></span>
		            <span class="color-fusion-700"></span>
		            <span class="color-fusion-800"></span>
		            <span class="color-fusion-900"></span>
		        </p>



		<!--================================================== -->
		<script src="js/vendors.bundle.js"></script>
    <script src="js/app.bundle.js"></script>
    <script>
        $("#js-login-btn").click(function(event)
        {

            // Fetch form to apply custom Bootstrap validation
            var form = $("#js-login")

            if (form[0].checkValidity() === false)
            {
                event.preventDefault()
                event.stopPropagation()
            }

            form.addClass('was-validated');
            // Perform ajax submit here...
        });

    </script>

	</body>
</html>
