@extends('base.app')

	<!-- Start Banner Area -->
	@section('content')

	</section>
	<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Register</h1>
					<nav class="d-flex align-items-center">
						<a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
						<a href="category.html">Register</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->

	<!--================Login Box Area =================-->
	<section class="login_box_area section_gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="login_form_inner">
						<h3>Registrasi</h3>
						<form class="row login_form" action="/register" method="post" id="contactForm" role="form">
							{{ csrf_field() }}
              {{ method_field('post') }}
							<div class="col-md-12 form-group{{ $errors->has('name') ? ' has-error' : '' }}">
								<input type="text" class="form-control" id="name" name="name" placeholder="Username" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'">
								@if ($errors->has('name'))
									<span class="help-block">
											<strong>{{ $errors->first('name') }}</strong>
									</span>
								@endif
							</div>
							<div class="col-md-12 form-group{{ $errors->has('email') ? ' has-error' : '' }}">
								<input type="text" class="form-control" id="email" name="email" placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'">
								@if ($errors->has('email'))
									<span class="help-block">
											<strong>{{ $errors->first('email') }}</strong>
									</span>
								@endif
							</div>
							<div class="col-md-12 form-group{{ $errors->has('password') ? ' has-error' : '' }}">
								<input type="password" class="form-control" id="password" name="password" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'">
								@if ($errors->has('password'))
									<span class="help-block">
											<strong>{{ $errors->first('password') }}</strong>
									</span>
								@endif
							</div>
							<div class="col-md-12 form-group">
								<div class="creat_account">
									<input type="checkbox" id="f-option2" name="selector">
									<label for="f-option2">Keep me logged in</label>
								</div>
							</div>
							<div class="col-md-12 form-group">
								<button type="submit" value="submit" class="primary-btn">Register</button>
								<a href="#">Forgot Password?</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	@endsection
