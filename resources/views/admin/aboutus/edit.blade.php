@extends('admin.layouts.app')

@section('page-title', 'Tentang kami')

@section('admin-role', 'Administrasi')

@section('content-title', 'Edit tentang kami')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li><a href="{{ route('aboutus.index') }}"><i class="fa fa-history"></i> Tentang kami</a></li>
        <li class="active">Edit data Tentang kami</li>
    </ol>
@endsection

@section('content')
<div class="row">
    <div class="col-md-7 col-xs-12">
        <div class="box">
            <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Tentang kami </h3>
                    </div>
                    <div class="box-body">
                        <form action="{{ route('aboutus.update', $data['aboutUs']->id) }}" method="post" enctype="multipart/form-data">
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
                                <input type="text" id="judul" name="title" class="title form-control" style="background: white; font-size: 15px" value="{{ $data['aboutUs']->title }}" autofocus="on" required>
                            </div>
                            <div class="form-group">
                                <label for="deskripsi">Deskripsi</label>
                                <textarea name="description" class="form-control" id="deskripsi" style="background: white; font-size: 15px" cols="30" rows="5">{{ $data['aboutUs']->description }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Upload Logo</label>
                                <input type="file" id="exampleInputFile" name="photo" value="{{ old('photo') }}">
                                <p class="help-block">* Maksimal 2 MB</p>
                            </div>
                            <div class="form-group">
                                <label for="logo">Photo</label>
                                <img class="img-responsive" id="logo" src="{{ url('/') }}{{$data['aboutUs']->path}}{{$data['aboutUs']->photo}}" width="50%" height="50%" alt="" srcset="">
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
