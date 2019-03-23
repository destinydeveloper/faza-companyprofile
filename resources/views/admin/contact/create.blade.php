@extends('admin.layouts.app')

@section('page-title', 'Kontak kami')

@section('admin-role', 'Administrasi')

@section('content-title', 'Tambah kontak')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li><a href="{{ route('contact.index') }}"><i class="fa fa-address-card"></i> Kontak kami</a></li>
        <li class="active">Tambah kontak</li>
    </ol>
@endsection

@section('content')
<div class="row">
    <div class="col-md-7 col-xs-12">
        <div class="box">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Kontak kami </h3>
                </div>
                    <div class="box-body">
                        <form action="{{ route('contact.store') }}" method="post">
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
                                <label>Alamat</label>
                                <textarea name="address" class="form-control" id="deskripsi"  style="background: white; font-size: 15px" cols="30" rows="5" placeholder="Masukan alamat" autofocus="on" required></textarea>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-at"></i></span>
                                        <input type="email" id="judul" name="email" class="title form-control" style="background: white; font-size: 15px" value="" placeholder="Masukan E-mail" required>
                                    </div>
                            </div>
                            <div class="form-group">
                                <label for="link">Telepon</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-mobile-phone"></i></span>
                                    <input type="text" name="telp" class="form-control" placeholder="Masukan nomer telepon" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="link">Facebook link</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-facebook"></i></span>
                                    <input type="text" name="facebook_link" class="form-control" placeholder="Masukan link facebook" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="link">Twitter link</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-twitter"></i></span>
                                    <input type="text" name="twitter_link" class="form-control" placeholder="Masukan link twitter" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="link">Instagram link</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-instagram"></i></span>
                                    <input type="text" name="instagram_link" class="form-control" placeholder="Masukan link instagram" required>
                                </div>
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
