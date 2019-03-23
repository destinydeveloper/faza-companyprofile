@extends('admin.layouts.app')

@section('page-title', 'Home')

@section('admin-role', 'Administrasi')

@section('content-title', 'Home')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li><a href="{{ route('users.index') }}"><i class="fa fa-home"></i> Home</a></li>
        <li class="active">Home</li>
    </ol>
@endsection

@section('content')
<div class="row">
    <div class="col-md-7 col-xs-12">
        <div class="box">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Home </h3>
                    <a href="{{ route('home.edit', $data['home']->id) }}" style="float: right" class="btn btn-warning btn-sm"><span class="fa fa-chain"></span> Ubah</a>
                    <br>
                    <span class="label label-info">{{ date('d F Y', strtotime($data['home']->updated_at)) }}</span>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <label>Judul</label>
                        <input type="text" id="judul" name="title" class="title form-control" style="background: white; font-size: 15px" value="{{ $data['home']->title }}" readonly>
                    </div>
                    <div class="form-group">
                        <label>Deskripsi</label>
                        <textarea name="description" class="form-control" id="deskripsi" style="background: white; font-size: 15px" cols="30" rows="5" readonly>{{ $data['home']->description }}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Logo</label>
                        <img class="img-responsive" id="logo" src="{{ url('/') }}{{$data['home']->path}}{{$data['home']->photo}}" width="50%" height="50%" alt="" srcset="">
                    </div>
                    <div class="form-group">
                        <h3>Background foto</h3>
                        <img id="background" class="img-responsive" src="{{ url('/') }}{{$data['home']->path}}{{$data['home']->background_photo}}" width="100%" height="50%" alt="" srcset="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
