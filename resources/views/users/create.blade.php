@extends('layouts.dashboard')
@extends('layouts.header')
@extends('layouts.sidebar')

@section('section')


<div id="main" role="main">

			<!-- RIBBON -->
			<div id="ribbon">

				<span class="ribbon-button-alignment">
					<span id="refresh" class="btn btn-ribbon" data-action="resetWidgets" data-title="refresh"  rel="tooltip" data-placement="bottom" data-original-title="<i class='text-warning fa fa-warning'></i> Warning! This will reset all your widget settings." data-html="true">
						<i class="fa fa-refresh"></i>
					</span>
				</span>

				<!-- breadcrumb -->
				<ol class="breadcrumb">
					<li>Utama</li><li>Pengguna</li><li>Baru</li>
				</ol>


			</div>
			<!-- END RIBBON -->



			<!-- MAIN CONTENT -->
			<div id="content">

				<!-- row -->
				<div class="row">

					<!-- col -->
					<div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
						<h1 class="page-title txt-color-blueDark">

							<!-- PAGE HEADER -->
							<i class="fa-fw fa fa-home"></i>
								Pengguna
							<span>
								Baru
							</span>
						</h1>
					</div>
					<!-- end col -->



				</div>
				<!-- end row -->


				<!-- widget grid -->
			<section id="widget-grid" class="">

				<!-- START ROW -->
				<div class="row">

					<!-- NEW COL START -->
					<article class="col-sm-12 col-md-12 col-lg-12">
						<!-- Widget ID (each widget will need unique ID)-->
						<div class="jarviswidget" id="wid-id-0" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-custombutton="false">

							<header>
								<span class="widget-icon"> <i class="fa fa-plus"></i> </span>
								<h2>Tambah Pengguna Baru  </h2>
							</header>

							<!-- widget div-->
							<div>

								<!-- widget edit box -->
								<div class="jarviswidget-editbox">
									<!-- This area used as dropdown edit box -->

								</div>
								<!-- end widget edit box -->

								<!-- widget content -->
								<div class="widget-body no-padding">


                  {{ Form::open(array('url' => 'users' ,'method' => 'post','enctype'=>'multipart/form-data','class' =>'smart-form')) }}
                    <header>


                    </header>

                    <fieldset>


                      <div class="row">
                        @if (Session::has('message'))
                            <div class="alert adjusted alert-info fade in">
                              <button class="close" data-dismiss="alert">×</button>
                              {{ Session::get('message') }}
                            </div>
                        @endif
                        @if ($errors->all() )
                        <div class="alert adjusted alert-warning fade in">
                          <button class="close" data-dismiss="alert">
                            ×
                          </button>
                          {{ Html::ul( $errors->all()) }}
                        </div>
                        @endif

                        <section class="col col-6">
                          <label class="label">Nama Penuh</label>
                          <label class="input">
                            <input id="name" required type="text"  name="name" required>
                          </label>
                        </section>


                        <section class="col col-6">
                          <label class="label">No Pekerja</label>
                          <label class="input">
                            <input id="staff_id" name="staff_id" required type="text" />
                          </label>
                        </section>


                        <section class="col col-6">
                          <label class="label">Alamat emel</label>
                          <label class="input">
                            <input type="text" id="email" name="email" required />
                          </label>
                        </section>

												<section class="col col-6">
													<label class="label">No Telefon</label>
													<label class="input">
														<input required id="hp_no" name="hp_no" type="text" />
													</label>
												</section>

                        <section class="col col-6">
                          <label class="label">Kata Laluan</label>
                          <label class="input"> <i class="icon-append fa fa-lock"></i>
                            <input id="password" required type="password" name="password" placeholder="Password" id="password">
                            <b class="tooltip tooltip-bottom-right">Don't forget your password</b> </label>
                        </section>




                        <section class="col col-6">
                            <label class="label">Sahkan Kata Laluan</label>
                          <label class="input"> <i class="icon-append fa fa-lock"></i>
                            <input id="password-confirm"  required type="password" name="password_confirmation" >
                            <b class="tooltip tooltip-bottom-right">Don't forget your password</b> </label>
                        </section>


                        <section class="col col-6">
                            <label class="label">Peranan</label>
														@if($isAdmin)
                            <label class="toggle">
                              <input type="checkbox" name="isAdmin" >
                              <i data-swchon-text="ON" data-swchoff-text="OFF"></i> Super Administrator</label>

                              <label class="toggle">
                                <input type="checkbox" name="isSwcorp">
                                <i data-swchon-text="ON" data-swchoff-text="OFF"></i> SWCorp Administrator
														  </label>

                              <label class="toggle">
                                  <input type="checkbox" name="isAdminSwm">
                                  <i data-swchon-text="ON" data-swchoff-text="OFF"></i>Admin SWM
															</label>
                              <label class="toggle">
                                      <input type="checkbox" name="isAdminAf">
                                      <i data-swchon-text="ON" data-swchoff-text="OFF"></i>Admin Alam Flora
															</label>

                              <label class="toggle">
		                              		<input type="checkbox" name="isAdminIdaman">
                                      <i data-swchon-text="ON" data-swchoff-text="OFF"></i>Admin Idaman
															</label>
															<label class="toggle">
																			<input type="checkbox" name="isOpuSwm">
																			<i data-swchon-text="ON" data-swchoff-text="OFF"></i>Operation SWM
															</label>
															<label class="toggle">
																			<input type="checkbox" name="isOpuAf">
																			<i data-swchon-text="ON" data-swchoff-text="OFF"></i>Operation Alam Flora
															</label>
															<label class="toggle">
																			<input type="checkbox" name="isOpuIdaman">
																			<i data-swchon-text="ON" data-swchoff-text="OFF"></i>Operation Idaman
															</label>
															@endif
															@if($isSwcorp)
											        <label class="toggle">
											          <input type="checkbox" name="isSwcorp">
											          <i data-swchon-text="ON" data-swchoff-text="OFF"></i> SWCorp Administrator</label>
											        @endif
											        @if($isAdminSwm)
											        <label class="toggle">
											          <input type="checkbox" name="isAdminSwm">
											          <i data-swchon-text="ON" data-swchoff-text="OFF"></i> Admin SWM</label>
											          <label class="toggle">
											            <input type="checkbox" name="isOpuSwm">
											            <i data-swchon-text="ON" data-swchoff-text="OFF"></i>Operation SWM</label>
											        @endif
											        @if($isAdminAf)
											        <label class="toggle">
											          <input type="checkbox" name="isAdminAf">
											          <i data-swchon-text="ON" data-swchoff-text="OFF"></i>Admin Alam Flora</label>
											          <label class="toggle">
											            <input type="checkbox" name="isOpuAf">
											            <i data-swchon-text="ON" data-swchoff-text="OFF"></i>Operation  Alam Flora</label>
											        @endif
											        @if($isAdminIdaman)
											        <label class="toggle">
											          <input type="checkbox" name="isAdminIdaman">
											          <i data-swchon-text="ON" data-swchoff-text="OFF"></i>Admin Idaman</label>
											          <label class="toggle">
											            <input type="checkbox" name="isOpuIdaman">
											            <i data-swchon-text="ON" data-swchoff-text="OFF"></i>Operation Idaman</label>
											        @endif

                        </section>

                        <section class="col col-6">
                          <label class="label"> Pengesahan (Sahkan Pengguna) </label>
                          <label class="select">
                            <select id="verified" name="verified">
                              <option value="0" selected="" disabled="">Pengesahan</option>
                              <option value="1">Approve</option>
                              <option value="0">Pending</option>
                            </select> <i></i> </label>

                        </section>



                      </div>


                    </fieldset>

                    <footer>
                      <button type="submit" class="btn btn-primary">
                        Submit
                      </button>
                      <button type="button" class="btn btn-default" onclick="window.history.back();">
                        Back
                      </button>
                    </footer>
                  <!-- </form> -->

                  {{ Form::close() }}




								</div>
								<!-- end widget content -->

							</div>
							<!-- end widget div -->

						</div>
						<!-- end widget -->

					</article>
					<!-- END COL -->

				</div>


			</section>
			<!-- end widget grid -->



			</div>
			<!-- END MAIN CONTENT -->


</div>


@stop
