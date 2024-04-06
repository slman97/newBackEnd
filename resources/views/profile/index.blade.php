@extends('layouts.app')
@section('content')
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Table</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
   <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
   <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
   <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
   
</head>
<body>
<div class="bg-white">
  <div class="container">
    <div class="text-center py-5">
  
      <div class="">
        <h4 class="" style="text-align: center">{{Auth::user()->firstname}} {{Auth::user()->lastname}}</h4>
      </div>
    </div>
  </div>
  <hr class="m-0">

  <ul class="nav nav-tabs tabs-alt justify-content-center">
    <li class="nav-item">
      <a class="nav-link py-4 active" href="#">products</a>
    </li>
    <li class="nav-item">
      <a class="nav-link py-4" href="{{route('changePassword')}}">update password</a>
    </li>
    <li class="nav-item">
      <a class="nav-link py-4 " href="{{ route('logout') }}" role="button" onclick="event.preventDefault();
        document.getElementById('logout-form').submit();"> Logout </a>
<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
@csrf
</form>
            
        </a></a>
    </li>
    @if (Auth::user()->user_type == 'admin')
    <li class="nav-item">
      <a class="nav-link py-4" href="/dashbord">dashbord</a>
    </li>
     @endif
  </ul>

</div>

<section style="padding-top: 60px">
<div class="container">
    <div class="row">
        <div class="col-md-12">
            {!! $dataTable->table() !!}

        </div>
    </div>
</div>
</section>

    {!! $dataTable->scripts() !!}

</body>
</html>  
</div>
@endsection
