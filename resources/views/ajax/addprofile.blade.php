@if (is_null(User::find($id)->profile)) 
<form id="addUserProfile" action ="" method="post">
    @csrf
          <button id="save" class="edit btn btn-success btn-sm">
          add profile
          </button>
   </form>   
@else  
    <a >user have profile</a>
@section('script')
 <script>

$(document).on('click', '#save', function (e) {
                e.preventDefault();
       
                var formData = new FormData($('#addUserProfile')[0]);
        
                $.ajax({
                    type: 'post',
                    url: '/admin/adduserprofile/'.{{$id}}.'',
                    data: formData,
                    processData: false,
                    contentType: false,
                    cache: false,
                    success: function (data) {
                    
                    }, error: function (reject) {
                      
                    }
                });
            });
 </script>  
@endsection