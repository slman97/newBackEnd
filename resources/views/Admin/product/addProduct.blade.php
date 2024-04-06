
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
                                                  <form method="POST" action="" enctype="multipart/form-data" id="product">
                                                    @csrf
                                                    <div class="box-body">
                                                      <div class="form-group">
                                                        <label for="user_id">user name:</label>
                                                        <select id="user_id" name="user_id" class="form-control">
                                                            @foreach ($users as $user)
                                                                <option value="{{$user->id }}">{{$user->firstname }}</option>
                                                            
                                                            @endforeach
                                                          </select>
                                                        <small id="user_id_error" class="form-text text-danger"></small>
                                                       </div>
                                                       <div class="box-body">
                                                        <div class="form-group">
                                                          <label for="caption">caption:</label>
                                                          <input name="caption" type="text" class="form-control" id="exampleInputEmail1" placeholder="Type your current password">
                                                          <small id="caption_error" class="form-text text-danger"></small>
                                                         </div>
                                                       </div>
                                                        <div class="box-body">
                                                        <div class="form-group">
                                                          <label for="discription">discription:</label>
                                                          <input name="discription" type="text" class="form-control" id="exampleInputEmail1" placeholder="Type your current password">
                                                          <small id="discription_error" class="form-text text-danger"></small>
                                                        </div>
                                                        </div>
                                                        <div class="box-body">
                                                        <div class="form-group">
                                                          <label for="image">add Image:</label>
                                                          <input class="form-control" type="file" name="image" id="exampleInputEmail1">
                                                        
                                                          <small id="image_error" class="form-text text-danger"></small>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-check">
                                                    <div class="box-footer">
                                                        <button id= "save" class="btn btn-submit">
                                                          Add product
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
                $('#user_id_error').text('');
                $('#caption_error').text('');
                $('#discription_error').text('');
                $('#image_error').text('');
                
                var formData = new FormData($('#product')[0]);
        
                $.ajax({
                    type: 'post',
                    enctype: 'multipart/form-data',
                    url: "{{route('admin.storeProduct')}}",
                    data: formData,
                    processData: false,
                    contentType: false,
                    cache: false,
                    success: function (data) {
                            window.location.href = "{{route('admin.showProduct')}}";
                        
        
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

