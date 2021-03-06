@extends('admin.layouts.app')

@section('page-title', 'Misi')

@section('admin-role', 'Administrasi')

@section('content-title', 'Misi')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li><a href="{{ route('misi.index') }}"><i class="fa fa-clone"></i> Misi</a></li>
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
        {{session('error')}}
    </div>
    @endif
    <div class="col-md-6 col-xs-12">
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">Misi </h3>
                <a href="{{ route('misi.edit', $data['misi']->id) }}" style="float: right" class="btn btn-warning btn-sm"><span class="fa fa-chain"></span> Ubah</a>
                <br>
                <span class="label label-info">{{ date('d F Y', strtotime($data['misi']->updated_at)) }}</span>
            </div>
            <div class="box-body ">
                <div class="form-group">
                    <label>Judul</label>
                    <input type="text" id="judul" name="title" class="title form-control" style="background: white; font-size: 15px"
                        readonly value="{{ $data['misi']->title }}">
                </div>
                <div class="form-group">
                    <label>Foto</label>
                    <img class="img-responsive" id="logo" src="{{ url('/') }}{{$data['misi']->path}}{{$data['misi']->photo }}" width="50%" height="50%" alt="" srcset="">
                </div>
            </div>
            {{-- {{ url('/') }}{{$data['visi']->path}}{{$data['visi']->background_photo}} --}}
            <div class="box-footer text-center">

                {{-- {{ route('home.edit', $data['home']->id) }} --}}
            </div>
            </form>
        </div>
    </div>
    <div class="col-md-6 col-xs-12">
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">Isi konten misi</h3>
                <a href="{{ route('misi.create_content') }}" style="float: right" class="btn btn-success btn-sm"><span class="fa fa-plus"></span> Tambah data</a>
            </div>
            <div class="box-body no-padding">
                <table class="table table-striped">
                    <tr>
                        <th style="width: 10px; text-align: center">#</th>
                        <th style="width: 50px; text-align: center">ID</th>
                        <th style="text-align: center">Visi</th>
                        <th style="text-align: center">Aksi</th>
                    </tr>
                    @php $i = 1 @endphp
                    @foreach ($data['misi_content'] as $data)
                        <tr>
                            <td style="text-align: center; vertical-align: middle">{{ $i++ }}. </td>
                            <td style="text-align: center; vertical-align: middle"><b>( {{ $data->id }} )</b> </td>
                            <td style=" vertical-align: middle">{{ $data->description }}</td>
                            <td style="text-align: center; vertical-align: middle">
                                <form action="{{ route('misi.destroy_content', $data->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <div class="btn-group-vertical">
                                        <a href="{{ route('misi.edit_content', $data->id) }}" class="btn btn-warning btn-sm"><span class="fa fa-chain"></span> Edit</a>
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
