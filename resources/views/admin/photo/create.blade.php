@extends('admin.layouts.app')

@section('page-title', 'Foto')

@section('admin-role', 'Administrasi')

@section('content-title', 'Tambah foto')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li><a href="{{ route('photo.index') }}"><i class="fa fa-file-image-o"></i> Foto</a></li>
        <li class="active">Tambah foto</li>
    </ol>
@endsection

@section('content')
<div class="row">
    <div class="col-md-6 col-xs-12">
        <div class="box">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Foto </h3>
                </div>
                    <div class="box-body">
                        <form action="{{ route('photo.store') }}" method="post" enctype="multipart/form-data">
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

                            @if (session('error'))
                                <div class="alert alert-danger">
                                    {{ session('error') }}
                                </div>
                            @endif
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
