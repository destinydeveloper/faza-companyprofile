@extends('admin.layouts.app')

@section('page-title', 'Visi')

@section('admin-role', 'Administrasi')

@section('content-title', 'Edit visi')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li><a href="{{ route('visi.index') }}"><i class="fa fa-clone"></i> Visi</a></li>
        <li class="active">Edit visi</li>
    </ol>
@endsection

@section('content')
<div class="row">
    <div class="col-md-7 col-xs-12">
        <div class="box">
            <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Visi </h3>
                    </div>
                    <div class="box-body">
                        <form action="{{ route('visi.update', $data['visi']->id) }}" method="post" enctype="multipart/form-data">
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
                                <input type="text" id="judul" name="title" class="title form-control" style="background: white; font-size: 15px" value="{{ $data['visi']->title }}" autofocus="on" required>
                            </div>
                            <div class="form-group">
                                <label for="deskripsi">Deskripsi</label>
                                <textarea name="description" class="form-control" id="deskripsi" style="background: white; font-size: 15px" cols="30" rows="5">{{ $data['visi']->description }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Upload Logo</label>
                                <input type="file" id="exampleInputFile" name="photo" value="{{ old('photo') }}">
                                <p class="help-block">* Maksimal 2 MB</p>
                            </div>
                            <div class="form-group">
                                <label for="logo">Photo</label>
                                <img class="img-responsive" id="logo" src="{{ url('/') }}{{$data['visi']->path}}{{$data['visi']->photo}}" width="50%" height="50%" alt="" srcset="">
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
