
    @extends('layouts.master')
    @extends('layouts.sidebar')
    @section('content')
    <div class="alert alert-success" id="success_msg" style="display: none;">
        password change successfly
    </div>

                                          <section class="content">
                                                <div class="row">
                                                  <!-- left column -->
                                                  <div class="col-md-6">
                                                    <!-- general form elements -->
                                                    <div class="box box-primary">
                                                      <div class="box-header">
                                                        <h3 class="box-title">Change password</h3>
                                                      </div><!-- /.box-header -->
                                                      <!-- form start -->
                                                      <form id="password" name="frm-login" method="POST" action="">
                                                        @csrf
                                                        <div class="box-body">
                                                          <div class="form-group">
                                                            <label for="current_password">Current Password:</label>
                                                            <input name="current_password" type="password" class="form-control" id="exampleInputEmail1" placeholder="Type your current password">
                                                            <small id="current_password_error" class="form-text text-danger"></small>
                                                        </div>
                                                          <div class="form-group">
                                                            <label for="new_password">New Password:</label>
                                                            <input name="new_password" type="password" class="form-control" id="exampleInputEmail1" placeholder="Type your New password">
                                                            <small id="new_password_error" class="form-text text-danger"></small>
                                                          </div>
                                                          <div class="form-group">
                                                            <label for="new_password_confirmation">Password</label>
                                                            <input name="new_password_confirmation" type="password" class="form-control" id="exampleInputPassword1" placeholder="Type your New password confirmation">
                                                            <small id="new_password_confirmation_error" class="form-text text-danger"></small>
                                                          </div>
                                                         
                                                        </div><!-- /.box-body -->
                                      
                                                        <div class="box-footer">
                                                            <button id= "save" class="btn btn-submit">
                                                                Change password
                                                            </button>
                                                        </div>
                                                      </form>
                                                    </div>
                                                </div> 
                                              </section>
                    
                    
                 
        @endsection
        @section('script')
        <script>
                    $(document).on('click', '#save', function (e) {
                        e.preventDefault();
             
                        $('#current_password_error').text('');
                        $('#new_password_error').text('');
                        $('#new_password_confirmation_error').text('');

                        
                        var formData = new FormData($('#password')[0]);
                
                        $.ajax({
                            type: 'post',
                            url: "{{ route('postChangePassword') }}",
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
    
