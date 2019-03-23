@extends('admin.layouts.app')

@section('page-title', 'Foto')

@section('admin-role', 'Administrasi')

@section('content-title', 'Foto')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li><a href="{{ route('notice.index') }}"><i class="fa fa-file-image-o"></i> Foto</a></li>
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
    <div class="col-md-12 col-xs-12">
        <div class="box">
            <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Foto </h3>
                        <a href="{{ route('photo.create') }}" style="float: right" class="btn btn-success btn-sm"><span class="fa fa-plus"></span> Tambah foto</a>
                    </div>
                    <div class="box-body">
                        <div class="row">
                            @foreach ($data['photo'] as $data)
                                <div class="col-md-4" style="text-align: center" >
                                    <span style="float: right" class="label label-info">{{ date('d F Y', strtotime($data->updated_at)) }}</span>
                                    <br>
                                    <img src="{{ url('/') }}{{ $data->path }}{{ $data->photo }}" alt="" width="100%" height="300px">
                                    <div style="margin: 10px 0px">
                                        <form action="{{ route('photo.destroy', $data->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <a href="{{ route('photo.edit', $data->id) }}" class="btn btn-warning btn-sm" ><span class="fa fa-chain"></span> Ubah</a>
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?')">
                                                <span class="fa fa-trash"></span> Hapus
                                            </button>
                                            </form>
                                        </div>
                                    &nbsp;
                                </div>
                            @endforeach
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection
