@extends('admin.layouts.app')

@section('page-title', 'Dashboard')

@section('admin-role', 'Administrasi')

@section('content-title', 'Dashboard')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Dashboard</a></li>
        <li class="active">Home</li>
    </ol>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-4 col-xs-12">
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3>{{ $jml_menu }}</h3>
                    <p>Menu</p>
                </div>
                <div class="icon">
                    <i class="ion ion-document-text"></i>
                </div>
                <a href="{{ route('menu.index') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-4 col-xs-12">
            <div class="small-box bg-green">
                <div class="inner">
                    <h3>{{ $jml_user }} </h3>
                    <p>Pengguna</p>
                </div>
                <div class="icon">
                    <i class="ion ion-ios-people"></i>
                </div>
                <a href="{{ route('users.index') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-4 col-xs-12">
            <div class="small-box bg-yellow">
                <div class="inner">
                    <h3>{{ $jml_foto_video }}</h3>
                    <p>Jumlah foto & video</p>
                </div>
                <div class="icon">
                    <i class="ion ion-images"></i>
                </div>
                <a href="{{ route('photo.index') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>
@endsection
