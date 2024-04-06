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
								<form name="frm-login" method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <fieldset class="wrap-title">
										<h3 class="form-title">Register</h3>										
									</fieldset>
									<fieldset class="wrap-input">
										<label for="firstname">first name :</label>
										<input type="text" id="frm-login-uname" name="firstname" placeholder="Type your first name">
									</fieldset>
									<fieldset class="wrap-input">
										<label for="lastname">last name:</label>
										<input type="text" id="frm-login-pass" name="lastname" placeholder="Type your last name ">
									</fieldset>
                                    <fieldset class="wrap-input">
										<label for="phone">Phone Number :</label>
										<input type="text" id="frm-login-pass" name="email" placeholder="Type your Phone Number">
									</fieldset>
                                    <fieldset class="wrap-input">
										<label for="email">Email :</label>
										<input type="email" id="frm-login-pass" name="email" placeholder="Type your email address">
									</fieldset>
                                    <fieldset class="wrap-input">
										<label for="password">Password:</label>
										<input type="password" id="frm-login-pass" name="password" placeholder="Type your password">
									</fieldset>
                                    <fieldset class="wrap-input">
										<label for="password_confirmation">Password:</label>
										<input type="password" id="frm-login-pass" name="password_confirmation" placeholder="Type your password confirmation">
									</fieldset>
									
									<fieldset class="wrap-input">
										<a class="link-function left-position" href="/registerbyphone" title="Forgotten password?">Forgotten password?</a> 
                                    </fieldset>
									<input type="submit" class="btn btn-submit" value="Register" name="submit">
								</form>
							</div>												
						</div>
					</div>
				</div>
			</div>

		</div>

	</main>
@endsection
