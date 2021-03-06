@extends('admin.layouts.app')

@section('page-title', 'Pengumuman')

@section('admin-role', 'Administrasi')

@section('content-title', 'Pengumuman')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li><a href="{{ route('notice.index') }}"><i class="fa fa-list-alt"></i> Pengumuman</a></li>
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
                        <h3 class="box-title">Pengumuman </h3>
                        <a href="{{ route('notice.edit', $data['notice']->id) }}" style="float: right" class="btn btn-warning btn-sm"><span class="fa fa-chain"></span> Ubah</a>
                        <br>
                        <span class="label label-info">{{ date('d F Y', strtotime($data['notice']->updated_at)) }}</span>
                    </div>
                    <div class="box-body">
                        <div class="form-group">
                            <label>Judul</label>
                            <input type="text" id="judul" name="title" class="title form-control" style="background: white; font-size: 15px" value="{{ $data['notice']->title }}" readonly>
                        </div>
                        <div class="form-group">
                            <label>Deskripsi</label>
                            <textarea name="description" class="form-control" id="deskripsi" style="background: white; font-size: 15px" cols="30" rows="5" readonly>{{ $data['notice']->description }}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Foto</label>
                            <img class="img-responsive" id="logo" src="{{ url('/') }}{{$data['notice']->path}}{{$data['notice']->photo}}" width="50%" height="50%" alt="" srcset="">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection
