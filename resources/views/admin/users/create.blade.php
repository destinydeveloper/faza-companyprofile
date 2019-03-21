@extends('admin.layouts.app')

@section('page-title', 'Pengguna')

@section('admin-role', 'Administrasi')

@section('content-title', 'Tambah Pengguna')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li><a href="{{ route('users.index') }}"><i class="fa fa-home"></i> Pengguna</a></li>
        <li class="active">Tambah data</li>
    </ol>
@endsection

@section('content')
<div class="row">
    <div class="col-md-7 col-xs-12">
        <div class="box">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Pengguna </h3>
                </div>
                <form role="form" action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
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
                    <div class="box-body">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="name" placeholder="Masukan nama" value="{{ old('name') }}" required>
                        </div>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username" name="username" placeholder="Masukan username" value="{{ old('username') }}" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Masukan email" value="{{ old('email') }}" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password" value="{{ old('password') }}" required>
                        </div>
                        <div class="form-group">
                            <label for="password-confirm">Confirm Password</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Konfirmasi password" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Upload foto</label>
                            <input type="file" id="exampleInputFile" name="photo" value="{{ old('photo') }}" required>
                            <p class="help-block">* Maksimal 2 MB</p>
                        </div>
                    </div>
                    <div class="box-footer text-center">
                        <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection
