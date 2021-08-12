<!DOCTYPE html>
<html lang="en-us">
	<head>
		<meta charset="utf-8">
		<title> SWM Contract Management System</title>
		<meta name="description" content="">
		<meta name="author" content="">

		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<link id="vendorsbundle" rel="stylesheet" media="screen, print" href="{{url('css/vendors.bundle.css')}}">
    <link id="appbundle" rel="stylesheet" media="screen, print" href="{{url('css/app.bundle.css')}}">
    <link id="mytheme" rel="stylesheet" media="screen, print" href="#">
    <link id="myskin" rel="stylesheet" media="screen, print" href="{{url('css/skins/skin-master.css')}}">
    <!-- Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{url('img/favicon/swm-logo.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{url('img/favicon/swm-logo.png')}}">
    <link rel="mask-icon" href="{{url('img/favicon/safari-pinned-tab.svg')}}" color="#5bbad5">

    @yield('css')

	</head>

  @yield('body')

	<script src="{{url('js/vendors.bundle.js')}}"></script>
	<script src="{{url('js/app.bundle.js')}}"></script>

  @yield('js')
</body>
</html>
