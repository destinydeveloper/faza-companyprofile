@extends('admin.layouts.app')

@section('page-title', 'Kontak kami')

@section('admin-role', 'Administrasi')

@section('content-title', 'Kontak kami')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li><a href="{{ route('contact.index') }}"><i class="fa fa-address-card"></i> Kontak kami</a></li>
        <li class="active">Home</li>
    </ol>
@endsection

@section('content')
<div class="row">
        @if (session('success'))
            <div class="alert alert-success alert-dismissible">
                {{session('success')}}
            </div>
        @endif
    <div class="col-md-7 col-xs-12">
        <div class="box">
            <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Kontak kami </h3>
                        <a href="{{ route('contact.edit', $data['contact']->id) }}" style="float: right" class="btn btn-warning btn-sm"><span class="fa fa-chain"></span> Ubah</a>
                        <br>
                        <span class="label label-info">{{ date('d F Y', strtotime($data['contact']->updated_at)) }}</span>
                    </div>
                    <div class="box-body">
                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea name="address" class="form-control" id="deskripsi"  style="background: white; font-size: 15px" cols="30" rows="5" placeholder="Masukan alamat" readonly> {{ $data['contact']->address }} </textarea>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-at"></i></span>
                                    <input type="text" id="judul" name="email" class="title form-control" style="background: white; font-size: 15px" value="{{ $data['contact']->email }}" placeholder="Masukan E-mail" readonly>
                                </div>
                        </div>
                        <div class="form-group">
                            <label for="link">Telepon</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-mobile-phone"></i></span>
                                <input type="text" name="telp" class="form-control" placeholder="Masukan nomer telepon" required value="{{ $data['contact']->telp }}" style="background: white; font-size: 15px" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="link">Facebook link</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-facebook"></i></span>
                                <input type="text" name="facebook_link" class="form-control" placeholder="Masukan link facebook" required value="{{ $data['contact']->facebook_link }}" style="background: white; font-size: 15px" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="link">Twitter link</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-twitter"></i></span>
                                <input type="text" name="twitter_link" class="form-control" placeholder="Masukan link twitter" required value="{{ $data['contact']->twitter_link }}" style="background: white; font-size: 15px" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="link">Instagram link</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-instagram"></i></span>
                                <input type="text" name="instagram_link" class="form-control" placeholder="Masukan link instagram" required value="{{ $data['contact']->instagram_link }}" style="background: white; font-size: 15px" readonly>
                            </div>
                        </div>
                    </div>
               </form>
            </div>
        </div>
    </div>
</div>


@endsection
