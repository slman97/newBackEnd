
@extends('layouts.master')
@extends('layouts.sidebar')
@section('content')

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
                                                  <form method="POST" action="" id="adduser">
                                                    @csrf
                                                    <div class="box-body">
                                                       <div class="box-body">
                                                        <div class="form-group">
                                                          <label for="user_type">user type:</label>
                                                          <input name="user_type" type="text" class="form-control" id="exampleInputEmail1" placeholder="user type">
                                                          <small id="user_type_error" class="form-text text-danger"></small>
                                                         </div>
                                                       </div>
                                                        <div class="box-body">
                                                        <div class="form-group">
                                                          <label for="firstname">first name:</label>
                                                          <input name="firstname" type="text" class="form-control" id="exampleInputEmail1" placeholder="user first name">
                                                          <small id="firstname_error" class="form-text text-danger"></small>
                                                        </div>
                                                        </div>
                                                        <div class="box-body">
                                                        <div class="form-group">
                                                          <label for="lastname">last name:</label>
                                                          <input class="form-control" type="text" name="lastname" id="exampleInputEmail1" placeholder="user last name">
                                                        
                                                          <small id="lastname_error" class="form-text text-danger"></small>
                                                        </div>
                                                        </div>
                                                        <div class="box-body">
                                                        <div class="form-group">
                                                          <label for="phone"> phone number:</label>
                                                          <input class="form-control" type="number" name="phone" id="exampleInputEmail1" placeholder="user phone number">
                                                        
                                                          <small id="phone_error" class="form-text text-danger"></small>
                                                        </div>
                                                        </div>
                                                        <div class="box-body">
                                                        <div class="form-group">
                                                          <label for="email">email address:</label>
                                                          <input class="form-control" type="email" name="email" id="exampleInputEmail1" placeholder="user email address">
                                                        
                                                          <small id="email_error" class="form-text text-danger"></small>
                                                        </div>
                                                        </div>
                                                        <div class="box-body">
                                                            <div class="form-group">
                                                              <label for="password">password:</label>
                                                              <input class="form-control" type="password" name="password" id="exampleInputEmail1" placeholder="user password">
                                                            
                                                              <small id="password_error" class="form-text text-danger"></small>
                                                            </div>
                                                            </div>
                                                            
                                                    </div>
                                                    <div class="form-check">
                                                    <div class="box-footer">
                                                        <button id= "save" class="btn btn-submit">
                                                          Add user
                                                        </button>
                                                    </div>
                                                    </div>
                                                  </form>
                                                </div>
                                            </div> 
                                            </div>
                                          </section>
     
                
                
             
    @endsection
    @section('script')
    <script>
        //When you press the button
            $(document).on('click', '#save', function (e) {
                e.preventDefault();
        // Delete previous errors
                $('#user_type_error').text('');
                $('#firstname_error').text('');
                $('#lastname_error').text('');
                $('#email_error').text('');
                $('#phone_error').text('');
                $('#password_error').text('');
                
                var formData = new FormData($('#adduser')[0]);
        
                $.ajax({
                    type: 'post',
                    enctype: 'multipart/form-data',
                    url: "{{route('admin.storeUser')}}",
                    data: formData,
                    processData: false,
                    contentType: false,
                    cache: false,
                    success: function (data) {
                            window.location.href = "{{route('admin.showUser')}}";
                        
        
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
