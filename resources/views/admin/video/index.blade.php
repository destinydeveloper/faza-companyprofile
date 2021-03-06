@extends('admin.layouts.app')

@section('page-title', 'Video')

@section('admin-role', 'Administrasi')

@section('content-title', 'Video')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li><a href="{{ route('misi.index') }}"><i class="fa fa-file-movie-o"></i> Video</a></li>
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

    @if (session('error'))
    <div class="alert alert-danger alert-dismissible">
        {{session('success')}}
    </div>
    @endif
    <div class="col-md-4 col-xs-12">
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">Video </h3>
                {{-- <a href="{{ route('video.edit', $data['product']->id) }}" style="float: right" class="btn btn-warning btn-sm"><span class="fa fa-chain"></span> Ubah</a> --}}
            </div>
            <div class="box-body">
                <form action="{{ route('video.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="judul">Link youtube</label>
                        <textarea name="link_video" id="judul" cols="30" rows="5" class="form-control" style="background: white; font-size: 15px" autofocus="on" required placeholder="Masukan link youtube"></textarea>
                    </div>
                    <input type="submit" class="btn btn-success btn-block" value="Simpan">
                </form>
            </div>
            {{-- {{ url('/') }}{{$data['visi']->path}}{{$data['visi']->background_photo}} --}}
            <div class="box-footer text-center">

                {{-- {{ route('home.edit', $data['home']->id) }} --}}
            </div>
            </form>
        </div>
    </div>
    <div class="col-md-8 col-xs-12">
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">Isi konten video</h3>
                {{-- <a href="{{ route('product.create_content') }}" style="float: right" class="btn btn-success btn-sm"><span class="fa fa-plus"></span> Tambah data</a> --}}
            </div>
            <div class="box-body no-padding ">
                <table class="table table-striped">
                    <tr>
                        <th style="width: 10px; text-align: center">#</th>
                        <th style="text-align: center">Video</th>
                        <th style="text-align: center">Aksi</th>
                    </tr>
                    @php $i = 1 ; $link  @endphp
                    @foreach ($data['video'] as $data)

                        <tr >
                            <td style="text-align: center; vertical-align: middle">{{ $i++ }}. </td>
                            <td style=" vertical-align: middle; text-align: center" >
                                <span style="float: right" class="label label-info">{{ date('d F Y', strtotime($data->updated_at)) }}</span>
                                <span style="float: left" class="label label-danger">{{ $data->id }}</span>
                                <br>
                                {!! $data->embed_file !!}
                            </td>
                            <td style="text-align: center; vertical-align: middle">
                                <form action="{{ route('video.destroy', $data->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <div class="btn-group-vertical">
                                        <a href="{{ route('video.edit', $data->id) }}" class="btn btn-warning btn-sm"><span class="fa fa-chain"></span> Edit</a>
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?')">
                                                <span class="fa fa-trash"></span> Hapus
                                        </button>
                                    </div>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>


@endsection
