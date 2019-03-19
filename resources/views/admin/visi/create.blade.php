@extends('admin.layouts.app')

@section('page-title', 'Visi')

@section('admin-role', 'Administrasi')

@section('content-title', 'Tambah visi')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li><a href="{{ route('visi.index') }}"><i class="fa fa-clone"></i> Visi</a></li>
        <li class="active">Tambah Visi</li>
    </ol>
@endsection

@section('content')
<div class="row">
    <div class="col-md-7 col-xs-12">
        <div class="box">
            <div class="box box-primary">
                    <div class="box-body">
                        <form action="{{ route('visi.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
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
                                <input type="text" id="judul" name="title" class="title form-control" style="background: white; font-size: 15px" value="{{ old('title') }}" required>
                            </div>
                            <div class="form-group">
                                <label for="deskripsi">Deskripsi</label>
                                <textarea name="description" class="form-control" id="deskripsi" style="background: white; font-size: 15px" cols="30" rows="5" required>{{ old('description') }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Upload Foto</label>
                                <input type="file" id="exampleInputFile" name="photo" value="{{ old('photo') }}" required>
                                <p class="help-block">* Maksimal 2 MB</p>
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
