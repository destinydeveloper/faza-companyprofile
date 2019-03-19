@extends('admin.layouts.app')

@section('page-title', 'Menu')

@section('admin-role', 'Administrasi')

@section('content-title', 'Tambah menu')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li><a href="{{ route('menu.index') }}"><i class="fa fa-database"></i> Menu</a></li>
        <li class="active">Tambah data</li>
    </ol>
@endsection

@section('content')
<div class="row">
    <div class="col-md-7 col-xs-12">
        <div class="box">
            <div class="box box-primary">
                <form role="form" action="{{ route('menu.store') }}" method="POST">
                    @csrf
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <div class="box-body">
                        <div class="form-group">
                            <label for="nama">Judul</label>
                        <input type="text" class="form-control" id="nama" name="title" placeholder="Masukan nama" value="{{ old('name') }}" required>
                        </div>
                        <div class="form-group">
                            <label for="subTitle">Sub-judul</label>
                            <textarea class="form-control" name="sub_title" id="subTitle" cols="30" rows="5" placeholder="Masukan Sub judul" required>{{ old('sub_title') }}</textarea>
                        </div>
                    </div>
                    <div class="box-footer text-center">
                        <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection
