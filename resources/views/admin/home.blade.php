@extends('admin.layout.app')
@section('heading','Admin Panel')
    
@section('main_content')
<div class="row">
    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
            <div class="card-icon bg-primary">
                <i class="fa fa-user"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>Total News Categories</h4>
                </div>
                <div class="card-body">
                    12
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
            <div class="card-icon bg-danger">
                <i class="fa fa-user"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>Total News</h4>
                </div>
                <div class="card-body">
                    122
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
            <div class="card-icon bg-warning">
                <i class="fa fa-bullhorn"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>Total Users</h4>
                </div>
                <div class="card-body">
                    45
                </div>
            </div>
        </div>
    </div>
</div>
@endsection