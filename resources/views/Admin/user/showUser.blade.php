@extends('layouts.master')
@extends('layouts.sidebar')
@section('content')
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Table</title> 
   <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>  
</head>
<body>
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
@endsection