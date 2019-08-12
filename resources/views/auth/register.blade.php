@extends('base.app')

	<!-- Start Banner Area -->
	@section('content')

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
								<input type="text" class="form-control" id="name" name="name" placeholder="Username" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'" value="{{ old('name') }}"required>
								@if ($errors->has('name'))
									<span class="help-block">
											<strong>{{ $errors->first('name') }}</strong>
									</span>
								@endif
							</div>
							<div class="col-md-12 form-group{{ $errors->has('email') ? ' has-error' : '' }}">
								<input type="email" class="form-control" id="email" name="email" placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'"value="{{ old('email') }}" required>
								@if ($errors->has('email'))
									<span class="help-block">
											<strong>{{ $errors->first('email') }}</strong>
									</span>
								@endif
							</div>
							<div class="col-md-12 form-group{{ $errors->has('password') ? ' has-error' : '' }}">
								<input type="password" class="form-control" id="password" name="password" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'"required>
								@if ($errors->has('password'))
									<span class="help-block">
											<strong>{{ $errors->first('password') }}</strong>
									</span>
								@endif
							</div>
							<div class="col-md-12 form-group">
								<input type="password" class="form-control" id="password-confirm" name="password_confirmation" placeholder="Confirm Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Confirm Password'"required>
							</div>
							<div class="col-md-12 form-group">
								<div class="creat_account">
								<input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
									<!-- <input type="checkbox" id="f-option2" name="selector">
									<label for="f-option2">Keep me logged in</label> -->
								</div>
							</div>
							<div class="col-md-12 form-group">
								<button type="submit" value="submit" class="primary-btn">Register</button>
								<a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
								</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	@endsection
