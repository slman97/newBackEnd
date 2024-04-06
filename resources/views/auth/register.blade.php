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
								<form id="register" name="frm-login" method="POST">
                                    @csrf
                                    <fieldset class="wrap-title">
										<h3 class="form-title">Register</h3>										
									</fieldset>
									<fieldset class="wrap-input">
										<label for="firstname">first name :</label>
										<input type="text" id="frm-login-uname" name="firstname" placeholder="Type your first name">
                                        <small id="firstname_error" class="form-text text-danger"></small>
									</fieldset>
									<fieldset class="wrap-input">
										<label for="lastname">last name:</label>
										<input type="text" id="frm-login-pass" name="lastname" placeholder="Type your last name ">
                                        <small id="lastname_error" class="form-text text-danger"></small>
									</fieldset>
                                    <fieldset class="wrap-input">
										<label for="email">Email :</label>
										<input type="email" id="frm-login-pass" name="email" placeholder="Type your email address">
                                        <small id="email_error" class="form-text text-danger"></small>
									</fieldset>
                                    <fieldset class="wrap-input">
										<label for="password">Password:</label>
										<input type="password" id="frm-login-pass" name="password" placeholder="Type your password">
                                        <small id="password_error" class="form-text text-danger"></small>
									</fieldset>
                                    <fieldset class="wrap-input">
										<label for="password_confirmation">Password:</label>
										<input type="password" id="frm-login-pass" name="password_confirmation" placeholder="Type your password confirmation">
                                        <small id="password_confirmation_error" class="form-text text-danger"></small>
                                    </fieldset>
									
									<fieldset class="wrap-input">
										<a class="link-function left-position" href="/registerbyphone" title="Forgotten password?">Forgotten password?</a> 
                                    </fieldset>
                                    <button id= "save" class="btn btn-submit">
                                        Change password
                                    </button>
								</form>
							</div>												
						</div>
					</div>
				</div>
			</div>

		</div>

	</main>

<script>
    //When you press the button
        $(document).on('click', '#save', function (e) {
            e.preventDefault();
    // Delete previous errors
            $('#firstname_error').text('');
            $('#lastname_error').text('');
            $('#email_error').text('');
            $('#email_error').text('');
            $('#password_error').text('');
            $('#password_confirmation_error').text('');

            
            var formData = new FormData($('#register')[0]);
    
            $.ajax({
                type: 'post',
                url: "{{ route('register') }}",
                data: formData,
                processData: false,
                contentType: false,
                cache: false,
                success: function (data) {
                    $('#success_msg').show();
                    
                }, error: function (reject) {
                    var response = $.parseJSON(reject.responseText);
                    $.each(response.errors, function (key, val) {
                        $("#" + key + "_error").text(val[0]);
                    });
                }
            });
        });
    
    
    </script>
    @endsection