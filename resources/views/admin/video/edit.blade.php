@extends('admin.layouts.app')

@section('page-title', 'Video')

@section('admin-role', 'Administrasi')

@section('content-title', 'Edit video')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li><a href="{{ route('video.index') }}"><i class="fa fa-file-movie-o"></i> Video</a></li>
        <li class="active">Edit video</li>
    </ol>
@endsection

@section('content')
<div class="row">
    @if (session('success'))
    <div class="alert alert-success alert-dismissible">
        {{session('success')}}
    </div>
    @endif

    @if (session('error'))
    <div class="alert alert-danger alert-dismissible">
        {{session('success')}}
    </div>
    @endif
    <div class="col-md-4 col-xs-12">
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">Video </h3>
            </div>
            <div class="box-body">
                <form action="{{ route('video.update', $data['video']->id) }}" method="post">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="judul">Link youtube</label>
                        <textarea name="link_video" id="judul" cols="30" rows="5" class="form-control" style="background: white; font-size: 15px" autofocus="on" required placeholder="Masukan link youtube">{{ $data['video']->link_video }}</textarea>
                    </div>
                    <input type="submit" class="btn btn-success btn-block" value="Simpan">
                </form>
            </div>
            </form>
        </div>
    </div>
    <div class="col-md-8 col-xs-12">
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">Isi konten produk</h3>
                {{-- <a href="{{ route('product.create_content') }}" style="float: right" class="btn btn-success btn-sm"><span class="fa fa-plus"></span> Tambah data</a> --}}
            </div>
            <div class="box-body no-padding table-responsive">
                {!! $data['video']->embed_file !!}
            </div>
        </div>
    </div>
</div>


@endsection
