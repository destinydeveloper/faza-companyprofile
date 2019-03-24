@extends('admin.layouts.app')

@section('page-title', 'Home')

@section('admin-role', 'Administrasi')

@section('content-title', 'Edit home')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li><a href="{{ route('home.index') }}"><i class="fa fa-home"></i> Home</a></li>
        <li class="active">Tambah data Home</li>
    </ol>
@endsection

@section('content')
<div class="row">
    <div class="col-md-7 col-xs-12">
        <div class="box">
            <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Home </h3>
                        {{-- <a href="{{ route('home.edit', $data['home']->id) }}" style="float: right" class="btn btn-warning btn-sm"><span class="fa fa-chain"></span> Ubah</a> --}}
                    </div>
                    <div class="box-body">
                        <form action="{{ route('home.update', $data['home']->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            <div class="form-group">
                                <label for="judul">Judul</label>
                                <input type="text" id="judul" name="title" class="title form-control" style="background: white; font-size: 15px" value="{{ $data['home']->title }}" autofocus="on" required>
                            </div>
                            <div class="form-group">
                                <label for="deskripsi">Deskripsi</label>
                                <textarea name="description" class="form-control" id="deskripsi" style="background: white; font-size: 15px" cols="30" rows="5">{{ $data['home']->description }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Upload Logo</label>
                                <input type="file" id="exampleInputFile" name="logo" value="{{ old('logo') }}">
                                <p class="help-block">* Maksimal 2 MB</p>
                            </div>
                            <div class="form-group">
                                <label for="logo">Logo</label>
                                <img class="img-responsive" id="logo" src="{{ url('/') }}{{$data['home']->path}}{{$data['home']->photo}}" width="50%" height="50%" alt="" srcset="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Upload Background foto</label>
                                <input type="file" id="exampleInputFile" name="background_photo" value="{{ old('background_photo') }}">
                                <p class="help-block">* Maksimal 2 MB | Format .jpg</p>
                            </div>
                            <div class="form-group">
                                <label for="logo">Logo</label>
                                <img class="img-responsive" id="logo" src="{{ url('/') }}{{$data['home']->path}}{{$data['home']->background_photo}}" width="100%" height="50%" alt="" srcset="">
                            </div>
                            <div class="box-footer text-center">
                                <input type="submit" class="btn btn-primary btn-block" value="Simpan">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
