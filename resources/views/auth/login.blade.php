@extends('base.app')

	<!-- Start Banner Area -->
	@section('content')

	</section>
	<section class="banner-area organic-breadcrumb">
	</section>
	
	@if(session()->has('alert'))
		 <div class="alert alert-success">
			 {{session()->get('alert')}}
		 </div>
		 @endif
	<!-- End Banner Area -->

	<!--================Login Box Area =================-->
	<section class="login_box_area section_gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="login_form_inner">
						<h3>Log in to enter</h3>
								 @if(count( $errors ) > 0)
									@foreach ($errors->all() as $error)
									
									<div class="alert alert-success">
									{{ $error }}
								 </div>
									@endforeach
								@endif
						<form class="row login_form" action="{{ route('login') }}" method="post" id="contactForm" role="form">
							{{ csrf_field() }}
							<div class="col-md-12 form-group{{ $errors->has('email') ? ' has-error' : '' }}">
							@if(session()->has('email_account'))
								<input type="email" class="form-control" id="email" name="email" placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'" value="{{session()->get('email_account')}}" required>
							@else
							<input type="email" class="form-control" id="email" name="email" placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'" value="{{ old('email') }}" required>
							@endif
							</div>
							<div class="col-md-12 form-group{{ $errors->has('password') ? ' has-error' : '' }}">
								<input type="password" class="form-control" id="password" name="password" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'" required>
				
							</div>
							<div class="col-md-12 form-group">
								<div class="creat_account">
									<!-- <input type="checkbox" id="f-option2" name="selector"> -->
									<input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
									<!-- <label for="f-option2">Keep me logged in</label> -->
								</div>
							</div>
							<div class="col-md-12 form-group">
								<button type="submit" value="submit" class="primary-btn">Log In</button>
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
								</a>
								<a class="btn btn-link" href="{{ route('register') }}">
                                    Buat Akun
                                </a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	@endsection
