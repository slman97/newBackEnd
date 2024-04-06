@extends('layouts.master')
@extends('layouts.sidebar')
@section('content')
@if (Auth::user()->user_type == 'admin')
<section class="content">
  <!-- Small boxes (Stat box) -->
  <div class="row">
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-aqua">
        <div class="inner">
          <h3>{{ $userCount }}</h3>
          <p>All User</p>
        </div>
        <div class="icon">
          <i class="ion ion-bag"></i>
        </div>
        <a href="{{route('admin.showUser')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div><!-- ./col -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-green">
        <div class="inner">
          <h3>{{$authuserCount}}</h3>
          <p>Auth user</p>
        </div>
        <div class="icon">
          <i class="ion ion-stats-bars"></i>
        </div>
    
      </div>
    </div><!-- ./col -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-yellow">
        <div class="inner">
          <h3>{{$productCount}}</h3>
          <p>Total product</p>
        </div>
        <div class="icon">
          <i class="ion ion-person-add"></i>
        </div>
        <a href="{{route('admin.showProduct')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div><!-- ./col -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-red">
        <div class="inner">
          <h3>{{$adminCount}}</h3>
          <p>Total admin</p>
        </div>
        <div class="icon">
          <i class="ion ion-pie-graph"></i>
        </div>
        
      </div>
    </div><!-- ./col -->
  </div><!-- /.row -->
  <!-- Main row -->


</section><!-- /.content -->
@endif

@endsection



