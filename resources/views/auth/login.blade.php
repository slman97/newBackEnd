@extends('layouts.app')
@section('content')
	<!--main area-->
	<main id="main" class="main-site left-sidebar">

		<div class="container">

			<div class="row">
				<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 col-md-offset-3">
					<div class=" main-content-area">
						<div class="wrap-login-item ">						
							<div class="login-form form-item form-stl">
								<form name="frm-login" method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <fieldset class="wrap-title">
										<h3 class="form-title">Log in to your account</h3>										
									</fieldset>
									<fieldset class="wrap-input">
										<label for="emailOrPhone">email or Phone:</label>
										<input type="text" id="frm-login-uname" name="emailOrPhone" placeholder="Type your email address or your phone number">
									</fieldset>
									<fieldset class="wrap-input">
										<label for="password">Password:</label>
										<input type="password" id="frm-login-pass" name="password" placeholder="************">
									</fieldset>
									
									<fieldset class="wrap-input">
										<label class="remember-field">
											<input class="frm-input " name="remember" id="rememberme" value="forever" type="checkbox"><span>Remember me</span>
										</label>
                                        @if (Route::has('password.request'))
										<a class="link-function left-position" href="{{ route('password.request') }}" title="Forgotten password?">Forgotten password?</a>
									    @endif
                                    </fieldset>
									<input type="submit" class="btn btn-submit" value="Login" name="submit">
								</form>
							</div>												
						</div>
					</div>
				</div>
			</div>

		</div>

	</main>
@endsection