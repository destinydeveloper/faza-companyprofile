@extends('admin.layouts.app')

@section('page-title', 'Pengguna')

@section('admin-role', 'Administrasi')

@section('content-title', 'Ubah password')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li><a href="{{ route('users.index') }}"><i class="fa fa-home"></i> Pengguna</a></li>
        <li class="active">Ubah password</li>
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
                <form role="form" action="{{ route('users.saveChange') }}" method="POST">
                    @csrf
                    @if ($errors->any() || session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible">
                            {{session('success')}}
                        </div>
                    @endif
                    <div class="box-body">
                        <div class="form-group">
                            <label for="nama">Username</label>
                        <input type="text" class="form-control" id="nama" name="username" placeholder="Masukan username" value="{{ auth()->user()->username }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="username">Password lama</label>
                            <input type="password" autofocus="on" class="form-control" id="username" name="oldPassword" placeholder="Masukan password lama" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password baru</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Masukan password baru" value="{{ old('newPassword') }}" required>
                        </div>
                        <div class="form-group">
                            <label for="password-confirm">Konfirmasi password baru</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Konfirmasi password baru" required>
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
