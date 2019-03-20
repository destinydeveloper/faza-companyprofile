@extends('admin.layouts.app')

@section('page-title', 'Produk')

@section('admin-role', 'Administrasi')

@section('content-title', 'Tambah produk')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li><a href="{{ route('product.index') }}"><i class="fa fa-product-hunt"></i> Produk</a></li>
        <li class="active">Tambah konten</li>
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
                    <form action="{{ route('product.store_content') }}" method="post">
                        @csrf
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
                            <input type="text" name="title" class="form-control" placeholder="Masukan judul produk" required>
                        </div>
                        <div class="form-group">
                            <label for="link">Link</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-at"></i></span>
                                <input type="text" name="link" class="form-control" placeholder="Masukan link produk" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <textarea name="description" id="deskripsi" cols="30" rows="5" class="form-control" style="background: white; font-size: 15px" placeholder="Masukan deskripsi produk" required>{{ old('title') }}</textarea>
                        </div>
                        <div class="box-footer text-center">
                            <input type="submit" class="btn btn-primary btn-block" value="Simpan">
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
                            <th style="text-align: center; vertical-align: middle">Judul</th>
                            <th style="text-align: center; vertical-align: middle">Link</th>
                            <th style="text-align: center; vertical-align: middle">Deskripsi</th>
                            <th style="text-align: center; vertical-align: middle">Update terakhir</th>
                        </tr>
                        @php $i = 1 @endphp
                        @foreach ($data['product_content'] as $data)
                            <tr >
                                <td style="text-align: center">{{ $i++ }}.</td>
                                <td>{{ $data['title'] }}</td>
                                <td><a href="http://{{ $data['link'] }}">{{ $data['link'] }}</a></td>
                                <td>{{ $data['description'] }}</td>
                                <td>
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
