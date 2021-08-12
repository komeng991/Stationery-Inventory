<!DOCTYPE html>
<html lang="en-us" id="extr-page">
	<head>
		<meta charset="utf-8">
		<title>Pendaftaran</title>
		<meta name="description" content="">
		<meta name="author" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<!-- #CSS Links -->
		<!-- Basic Styles -->
		<link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" media="screen" href="css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" media="screen" href="css/jquery.multiselect.css">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />

		<!-- <link href="http://cdn.rawgit.com/davidstutz/bootstrap-multiselect/master/dist/css/bootstrap-multiselect.css" rel="stylesheet" type="text/css" />
		<link href="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" type="text/css" /> -->

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

	<body id="login">

		<header id="header">
			<!--<span id="logo"></span>-->

			<div id="logo-group">
				<span id="logo"> <img src="img/logo-swcorp-horizontal.png" alt="swm_logo">
        </span>

				<!-- END AJAX-DROPDOWN -->
			</div>

		<!--	<span id="extr-page-header-space"> <span class="hidden-mobile hiddex-xs">Already registered?</span> <a href="{{ url('/login') }}" class="btn btn-danger">Sign In</a> </span>--->

		</header>

		<div id="main" role="main">

			<!-- MAIN CONTENT -->
			<div id="content" class="container">

				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-7 col-lg-12 hidden-xs hidden-sm">
						<h1 class="txt-color-red login-header-big text-center"> Sistem Penjadualan Konsesi (i-SPK)</h1>



								<!-- <h4 class="paragraph-header">Selamat Datang. Sila log masuk. </h4> -->
								<div class="login-app-icons">
									<!-- <a href="{{ url('/register') }}" class="btn btn-danger btn-sm">Register</a> -->
									<!-- <a href="{{ url('/login') }}" class="btn btn-danger btn-sm">Login Here</a> -->
								</div>

						<div class="row">
							<!--<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
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
							</div>--->
						</div>

					</div>
					<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 col-lg-offset-4 ">
						<div class="well no-padding">
              @if ($errors->has('name'))
                                        <div class="alert alert-danger">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </div>
              @endif
              @if ($errors->has('email'))
                                        <div class="alert alert-danger">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </div>
              @endif
              @if ($errors->has('password'))
                                        <div class="alert alert-danger">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </div>
              @endif

							 {{ Form::open(array('url' => 'register' ,'method' => 'post','enctype'=>'multipart/form-data','class' =>'smart-form')) }}
							<form action="{{ url('/register') }}" id="smart-form-register" class="smart-form client-form" style="box-sizing:border-box;"  method="post">
                {{ csrf_field() }}
								<header>
									Pendaftaran
								</header>

								<fieldset>

									<section>
										<label class="input"> <i class="icon-append fa fa-user"></i>
											<input id="name" class="{{ $errors->has('name') ? 'alert alert-danger' : '' }}" value="{{ old('name') }}" autofocus required type="text" name="name" placeholder="Nama Penuh">
									</section>

									<section>
										<label class="input"> <i class="icon-append fa fa-envelope"></i>
											<input id="email" required type="email" name="email" placeholder="Alamat Email" value="{{ old('email') }}">
											<b class="tooltip tooltip-bottom-right">Needed to verify your account</b> </label>
									</section>

									<section>
										<label class="input"> <i class="icon-append fa fa-user"></i>
											<input id="staff_id" class="{{ $errors->has('name') ? 'alert alert-danger' : '' }}" value="{{ old('staff_id') }}" autofocus required type="text" name="staff_id" placeholder="No Pekerja">

									</section>

									<section>
										<label class="input"> <i class="icon-append fa fa-lock"></i>
											<input id="password" required type="password" name="password" placeholder="Katalaluan" id="password">
											<b class="tooltip tooltip-bottom-right">Don't forget your password</b> </label>
									</section>

									<section>
										<label class="input"> <i class="icon-append fa fa-lock"></i>
											<input id="password-confirm"  required type="password" name="password_confirmation" placeholder="Isi semula katalaluan">
											<b class="tooltip tooltip-bottom-right">Don't forget your password</b> </label>
									</section>





                  </fieldset>

								<fieldset>

									<section>
										<label class="label" for="role" style="font-weight:bold;"></label>
												<label class="select">
														<select style="width:100%;padding-left:5px;" tabindex="-1" aria-hidden="true"  required id="role_id" name="role_id">
														<option value="" selected="selected" disabled="disabled">Sila pilih tugas</option>
														@foreach($rolesUsers as $rolesUser)
															@if($rolesUser->id !=1)
															<option value="{{$rolesUser->id}}">{{$rolesUser->description}}</option>
															@endif
															
														@endforeach

																</select>
														<i></i>
												</label>
												<div class="note note-error"></div>
									</section>

									<section>
										<label class="label" for="concession" style="font-weight:bold;"></label>
												<label class="select">
														<select style="width:100%;padding-left:5px;" tabindex="-1" aria-hidden="true"  required id="concession_id" name="concession_id">
														<option value="" selected="selected" disabled="disabled">Sila pilih organisasi anda</option>
														@foreach($concessions as $concession)
														<option value="{{$concession->id}}">{{$concession->concessionName}}</option>
														@endforeach

																</select>
														<i></i>
												</label>
												<div class="note note-error"></div>
									</section>

									<section>
										<label class="label" for="state" style="font-weight:bold;"></label>
												<label class="select">
														<select style="width:100%;padding-left:5px;" tabindex="-1" aria-hidden="true"  required id="state_id" name="state_id" class="stateId">
														<option value="" selected="selected" disabled="disabled">Sila pilih negeri</option>

																</select>
														<i></i>
												</label>
												<div class="note note-error"></div>
									</section>

									<section>
										<label class="label" for="scheme" style="font-weight:bold;"></label>
												<label class="select">

														<select style="width:100%;padding-left:5px;box-sizing:border-box;" tabindex="-1" aria-hidden="true" required id="pbt_id" name="pbt_id[]" class="pbtId" multiple="multiple">
														<option value="" selected="selected" disabled="disabled">Sila pilih PBT</option>

																</select>
														<i></i>
												</label>
												<div class="note note-error"></div>
									</section>

									<section>
										<label class="label" for="scheme" style="font-weight:bold;"></label>
												<label class="select">
													<select style="width:100%;padding-left:5px;" tabindex="-1" aria-hidden="true" required id="scheme_id" name="scheme_id[]" multiple="multiple">
													 <option value="" selected="selected" disabled="disabled">Pilih Skim</option>

													 </select>
													<i></i>
												</label>
												<div class="note note-error"></div>
									</section>

						</fieldset>

					  <fieldset>
						<section>

							<label class="checkbox">
								<input type="checkbox" name="terms" id="terms">
								<i></i>Saya setuju dengan  <a href="#" data-toggle="modal" data-target="#myModal"> Notis Privasi  </a></label>
						</section>
						<footer>
							<button type="submit" class="btn btn-primary">
								Daftar
							</button>
						</footer>
  					{{ Form::close() }}
								<div class="message">
									<i class="fa fa-check"></i>
									<p>
										Terima Kasih.Pendaftaran anda berjaya!
									</p>
								</div>

							</form>

						</div>



					</div>
				</div>


			</div>

		</div>

		<!-- Modal -->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
							&times;
						</button>
						<h4 class="modal-title" id="myModalLabel">Terms & Conditions</h4>
					</div>
					<div class="modal-body custom-scroll terms-body">

 <div id="left">



					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">
							Cancel
						</button>
						<button type="button" class="btn btn-primary" id="i-agree">
							<i class="fa fa-check"></i> I Agree
						</button>

						<button type="button" class="btn btn-danger pull-left" id="print">
							<i class="fa fa-print"></i> Print
						</button>
					</div>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->
	</body>
</html>
		<!--================================================== -->

	    <!-- Link to Google CDN's jQuery + jQueryUI; fall back to local -->





	    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
			<!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script> -->

		<script> if (!window.jQuery) { document.write('<script src="js/libs/jquery-3.2.1.min.js"><\/script>');} </script>

	    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
		<script> if (!window.jQuery.ui) { document.write('<script src="js/libs/jquery-ui.min.js"><\/script>');} </script>

		<!-- IMPORTANT: APP CONFIG -->
		<script src="js/app.config.js"></script>
		<script src="js/jquery.multiselect.js"></script>

		<!-- JS TOUCH : include this plugin for mobile drag / drop touch events
		<script src="js/plugin/jquery-touch/jquery.ui.touch-punch.min.js"></script> -->

		<!-- BOOTSTRAP JS -->
		<script src="js/bootstrap/bootstrap.min.js"></script>

		<!-- JQUERY VALIDATE -->
		<script src="js/plugin/jquery-validate/jquery.validate.min.js"></script>

		<!-- JQUERY MASKED INPUT -->
		<script src="js/plugin/masked-input/jquery.maskedinput.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>


		<!-- <script src="http://cdn.rawgit.com/davidstutz/bootstrap-multiselect/master/dist/js/bootstrap-multiselect.js" type="text/javascript"></script>
		<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.3/js/bootstrap.min.js"></script> -->




		<!--[if IE 8]>

			<h1>Your browser is out of date, please update your browser by going to www.microsoft.com/download</h1>

		<![endif]-->

		<!-- MAIN APP JS FILE -->
		<script type="text/javascript">


			// runAllForms();

			// Initialize select2

			// $("#pbt_id").select2();
			// $("#scheme_id").select2();

			// Model i agree button
			$("#i-agree").click(function(){
				$this=$("#terms");
				if($this.checked) {
					$('#myModal').modal('toggle');
				} else {
					$this.prop('checked', true);
					$('#myModal').modal('toggle');
				}
			});

			// Validation
			$(function() {
				// Validation
				$("#smart-form-register").validate({

					// Rules for form validation
					rules : {
						username : {
							required : true
						},
						email : {
							required : true,
							email : true
						},
						password : {
							required : true,
							minlength : 3,
							maxlength : 20
						},
						passwordConfirm : {
							required : true,
							minlength : 3,
							maxlength : 20,
							equalTo : '#password'
						},
						firstname : {
							required : true
						},
						lastname : {
							required : true
						},
						gender : {
							required : true
						},
						terms : {
							required : true
						}
					},

					// Messages for form validation
					messages : {
						login : {
							required : 'Please enter your login'
						},
						email : {
							required : 'Please enter your email address',
							email : 'Please enter a VALID email address'
						},
						password : {
							required : 'Please enter your password'
						},
						passwordConfirm : {
							required : 'Please enter your password one more time',
							equalTo : 'Please enter the same password as above'
						},
						firstname : {
							required : 'Please select your first name'
						},
						lastname : {
							required : 'Please select your last name'
						},
						gender : {
							required : 'Please select your gender'
						},
						terms : {
							required : 'You must agree with Terms and Conditions'
						}
					},



					// Ajax form submition
					submitHandler : function(form) {
						$(form).ajaxSubmit({
							success : function() {
								$("#smart-form-register").addClass('submited');
							}
						});
					},

					// Do not change code below
					errorPlacement : function(error, element) {
						error.insertAfter(element.parent());
					}
				});

			});

			$('#concession_id').change(function(){
					var concessionID = $(this).val();
					if(concessionID){

							$.ajax({
							type:"GET",
							url:"{{url('get-state-list')}}?concessionID="+concessionID,
							success:function(res){

									if(res){
											$("#state_id").empty();
											$("#state_id").append('<option>Pilih Negeri</option>');
											$.each(res,function(key,value){
													$("#state_id").append('<option value="'+key+'">'+value+'</option>');
											});

									}else{
									$("#state_id").empty();
									}
							}
							});
					}else{
							$("#state_id").empty();
					}
			});

			$(document).ready( function() {
				$('#state_id').on('change',function(){

						var stateID = $(this).val();
						if(stateID){
								$.ajax({
								type:"GET",
								url:"{{url('get-pbt-list-register')}}?stateID="+stateID,
								success:function(res){

										if(res){
											$("#pbt_id").empty();

												$("#pbt_id").append('<option>Pilih PBT</option>');
												$.each(res,function(key,value){

														$("#pbt_id").append('<option value="'+key+'">'+value+'</option>');
												});

												$('#pbt_id').multiselect({
													includeSelectAllOption: true
												});

												$('#pbt_id').multiselect('reload');


										}else{
										$("#pbt_id").empty();
										}
								}
								});
						}else{
								$("#pbt_id").empty();
						}
				});

				$('#pbt_id').on('change',function(){
					var selected = [];

						// var pbtID = $(this).val();

						// $("input:checkbox[name=pbt_id]:checked").each(function() {
						//  selected.push($(this).val());
						// 	});

						// var selected = null;
						// alert(streetId);
						// $('input[id="pbt_id"]:checked').map(function (idx, ele) {
						// 	selected.push($(this).val());
						// });

						// $('#pbt_id :checked').each(function() {
						//     selected.push($(this).val());
						// });

						var $selectedOptions = $(this).find('option:selected');
							$selectedOptions.each(function(){
									selected.push($(this).val());
							});

						var setarray = JSON.stringify(selected);

						if(selected){

							$("#scheme_id").empty();

								$.ajax({
								type:"GET",
								url:"{{url('get-pbt-scheme')}}?pbtID="+encodeURIComponent(setarray),
								success:function(res){

										if(res){


												//$("#scheme_id").append('<option></option>');
												$.each(res,function(key,entry){

														//$("#scheme_id").append($('<option></option>').attr('value', entry.id).text(entry.schemeName));
															$("#scheme_id").append('<option value="'+entry.id+'">'+entry.schemeName+'</option>');

												});

												$('#scheme_id').multiselect({
													columns: 1,
													placeholder: 'Select scheme',
													search: true,
													selectAll: true
												});

												$('#scheme_id').multiselect('reload');


										}else{
										$("#scheme_id").empty();
										}
								},
								error:function(res) {
									alert("no");

								}
								});
						}else{
								$("#scheme_id").empty();
						}
				});
				});



		</script>
