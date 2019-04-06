@extends('admin.layouts.app')

@section('page-title', 'Divisi')

@section('admin-role', 'Administrasi')

@section('content-title', 'Edit konten divisi')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li><a href="{{ route('product.index') }}"><i class="fa fa-list-ol"></i> Divisi</a></li>
        <li class="active">Edit konten</li>
    </ol>
@endsection

@section('content')
<div class="row">
    @if (session('success'))
        <div class="alert alert-success alert-dismissible">
            {{session('success')}}
        </div>
    @endif
    <div class="col-md-5 col-xs-12">
        <div class="box">
            <div class="box box-primary">
                <div class="box-body">
                    <form action="{{ route('product.update_content', $data['product_edit']->id) }}" method="post">
                        @csrf
                        @method('put')
                        @if ($errors->any() || session('error'))
                        <div class="alert alert-danger">
                            <ul>
                                {{session('error')}}
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <div class="form-group">
                                <label for="judul">Judul</label>
                                <input type="text" name="title" class="form-control" placeholder="Masukan judul produk" required value="{{ $data['product_edit']->title }}" autofocus="on">
                        </div>
                        <div class="form-group">
                            <label for="link">Link</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-at"></i></span>
                                <input type="text" name="link" class="form-control" placeholder="Masukan link produk" required value="{{ $data['product_edit']->link }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="judul">Deskripsi</label>
                            <textarea name="description" id="judul" cols="30" rows="5" class="form-control" style="background: white; font-size: 15px"  required>{{ $data['product_edit']->description }}</textarea>
                        </div>
                        <div class="box-footer text-center">
                            <input type="submit" class="btn btn-warning btn-block" value="Ubah">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-7 col-xs-12">
        <div class="box">
            <div class="box box-primary">
                <div class="box-body no-padding">
                    <table class="table table-striped">
                        <tr>
                            <th style="width: 15px; text-align: center; vertical-align: middle">#</th>
                            <th style="width: 50px; text-align: center; vertical-align: middle">ID</th>
                            <th style="text-align: center; vertical-align: middle">Judul</th>
                            <th style="text-align: center; vertical-align: middle">Link</th>
                            <th style="text-align: center; vertical-align: middle">Deskripsi</th>
                            <th style="text-align: center; vertical-align: middle">Update terakhir</th>
                        </tr>
                        @php $i = 1 @endphp
                        @foreach ($data['product_content'] as $data)
                            <tr>
                                <td style="text-align: center;vertical-align: middle">{{ $i++ }}.</td>
                                <td style="text-align: center; vertical-align: middle"><b>( {{ $data->id }} )</b> </td>
                                <td style="text-align: center;vertical-align: middle">{{ $data['title'] }}</td>
                                <td style="text-align: center;vertical-align: middle"><a href="{{ $data->link }}" target="_blank">{{ $data->link }}</a></td>
                                <td>{{ $data['description'] }}</td>
                                <td style="vertical-align: middle">
                                    <span class="label label-info">{{ date('d F Y', strtotime($data->updated_at)) }}</span>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
