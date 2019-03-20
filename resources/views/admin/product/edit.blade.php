@extends('admin.layouts.app')

@section('page-title', 'Product')

@section('admin-role', 'Administrasi')

@section('content-title', 'Edit product')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li><a href="{{ route('product.index') }}"><i class="fa fa-product-hunt"></i> Product</a></li>
        <li class="active">Edit Product</li>
    </ol>
@endsection

@section('content')
<div class="row">
    <div class="col-md-7 col-xs-12">
        <div class="box">
            <div class="box box-primary">
                    <div class="box-body">
                        <form action="{{ route('product.update', $data['product']->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')

                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            <div class="form-group">
                                <label for="exampleInputFile">Upload Foto</label>
                                <input type="file" id="exampleInputFile" name="photo" value="{{ old('photo') }}" required>
                                <p class="help-block">* Maksimal 2 MB</p>
                            </div>
                            <div class="box-body ">
                                <div class="form-group">
                                    <label>Foto</label>
                                    <img class="img-responsive" id="logo" src="{{ url('/') }}{{$data['product']->path}}{{$data['product']->photo }}" width="50%" height="50%" alt="" srcset="">
                                </div>
                            </div>
                            <div class="box-footer text-center">
                                <input type="submit" class="btn btn-primary btn-block" value="Simpan">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
