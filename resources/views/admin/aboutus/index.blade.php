@extends('admin.layouts.app')

@section('page-title', 'Tentang Kami')

@section('admin-role', 'Administrasi')

@section('content-title', 'Tentang Kami')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li><a href="{{ route('aboutus.index') }}"><i class="fa fa-home"></i> Tentang Kami</a></li>
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
                    <div class="box-body">
                        <div class="form-group">
                            <h3>Judul</h3>
                            <input type="text" id="judul" name="title" class="title form-control" style="background: white; font-size: 15px" value="{{ $data['aboutUs']->title }}" readonly>
                        </div>
                        <div class="form-group">
                            <h3>Deskripsi</h3>
                            <textarea name="description" class="form-control" id="deskripsi" style="background: white; font-size: 15px" cols="30" rows="5" readonly>{{ $data['aboutUs']->description }}</textarea>
                        </div>
                        <div class="form-group">
                            <h3>Foto</h3>
                            <img class="img-responsive" id="logo" src="{{ url('/') }}{{$data['aboutUs']->path}}{{$data['aboutUs']->photo}} " width="50%" height="50%" alt="" srcset="">
                        </div>
                    </div>
                    {{-- {{ url('/') }}{{$data['home']->path}}{{$data['home']->background_photo}} --}}
                    <div class="box-footer text-center">
                        <a href="{{ route('aboutus.edit', $data['aboutUs']->id) }}" class="btn btn-warning btn-block">Ubah</a>
                        {{-- {{ route('home.edit', $data['home']->id) }} --}}
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection
