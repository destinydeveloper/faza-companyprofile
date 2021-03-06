@extends('admin.layouts.app')

@section('page-title', 'Tentang Kami')

@section('admin-role', 'Administrasi')

@section('content-title', 'Tentang Kami')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li><a href="{{ route('aboutus.index') }}"><i class="fa fa-history"></i> Tentang Kami</a></li>
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
                        <h3 class="box-title">Tentang kami </h3>
                        <a href="{{ route('aboutus.edit', $data['aboutUs']->id) }}" style="float: right" class="btn btn-warning btn-sm"><span class="fa fa-chain"></span> Ubah</a>
                        <br>
                        <span class="label label-info">{{ date('d F Y', strtotime($data['aboutUs']->updated_at)) }}</span>
                    </div>
                    <div class="box-body">
                        <div class="form-group">
                            <label>Judul</label>
                            <input type="text" id="judul" name="title" class="title form-control" style="background: white; font-size: 15px" value="{{ $data['aboutUs']->title }}" readonly>
                        </div>
                        <div class="form-group">
                            <label>Deskripsi</label>
                            <textarea name="description" class="form-control" id="deskripsi" style="background: white; font-size: 15px" cols="30" rows="5" readonly>{{ $data['aboutUs']->description }}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Foto</label>
                            <img class="img-responsive" id="logo" src="{{ url('/') }}{{$data['aboutUs']->path}}{{$data['aboutUs']->photo}} " width="50%" height="50%" alt="" srcset="">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection
