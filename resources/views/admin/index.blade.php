@extends('layouts.admin')

@section('content')





<div class="container">
<div id="page-wrapper">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">Dashboard</h1>
      </div>
      <!-- /.col-lg-12-->
    </div>
    <!-- /.row-->
    <div class="row">
      <div class="col-lg-3 col-md-6">
        <div class="panel panel-primary">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-3"><i class="fa fa-users fa-5x"></i></div>
              <div class="col-xs-9 text-right">
                
                <div class="huge">{{$user}}</div>
                
                <div>User</div>
              </div>
            </div>
          </div><a href="{{ route('admin.user') }}">
            <div class="panel-footer"><span class="pull-left">Lihat User</span><span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
              <div class="clearfix"></div>
            </div></a>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="panel panel-green">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-3"><i class="fa fa-cutlery fa-5x"></i></div>
              <div class="col-xs-9 text-right">
                
                <div class="huge">{{$recipe}}</div>
               
                <div>Resep</div>
              </div>
            </div>
          </div><a href="{{ route('admin.recipe') }}">
            <div class="panel-footer"><span class="pull-left">Lihat Resep</span><span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
              <div class="clearfix"></div>
            </div></a>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="panel panel-red">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-3"><i class="fa fa-cutlery fa-5x"></i></div>
              <div class="col-xs-9 text-right">
                
                <div class="huge">{{$ingredient}}</div>
                
                <div>Ingredients</div>
              </div>
            </div>
          </div><a href="{{ route('admin.ingredient') }}">
            <div class="panel-footer"><span class="pull-left">Lihat Ingredients</span><span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
              <div class="clearfix"></div>
            </div></a>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="panel panel-yellow">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-3"><i class="fa fa-life-ring fa-5x"></i></div>
              <div class="col-xs-9 text-right">
                
                <div class="huge">Halo Admin!
                   Kelola resep,bahan,hingga user disini.</div>
                
               
      </div>
</div>

@endsection