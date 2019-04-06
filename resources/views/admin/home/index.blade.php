@extends('admin.layouts.app')

@section('page-title', 'Home')

@section('admin-role', 'Administrasi')

@section('content-title', 'Home')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li><a href="{{ route('users.index') }}"><i class="fa fa-home"></i> Home</a></li>
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
    <div class="col-md-5 col-xs-12">
        <div class="box">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Home </h3>
                    <a href="{{ route('home.create') }}" style="float: right" class="btn btn-success btn-sm"><span class="fa fa-plus"></span> Tambah Foto</a>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <label>Slide Foto</label>
                        {{-- Carousel --}}
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    @php $a = 0 @endphp
                                    @foreach ($data as $slide)
                                        <li data-target="#carousel-example-generic" data-slide-to="{{ $a++ }}" class="{{ $slide->id == 1 ? 'active' : '' }}"></li>
                                    @endforeach
                                </ol>
                                <div class="carousel-inner">
                                    @foreach ($data as $foto)
                                    <div class="item {{ $foto->id == 1 ? ' active' : '' }}">
                                            <img src="{{ url('/') }}{{ $foto->path }}{{ $foto->photo }}" alt="First slide">

                                            <div class="carousel-caption">
                                                <div >
                                                    {{ $foto->caption }}
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                  <span class="fa fa-angle-left"></span>
                                </a>
                                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                  <span class="fa fa-angle-right"></span>
                                </a>
                              </div>
                        {{-- Carousel --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-7 col-xs-12">
        <div class="box">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Home </h3>
                    <br>
                    {{-- <span class="label label-info">{{ date('d F Y', strtotime($data['home']->updated_at)) }}</span> --}}
                </div>
                <div class="box-body no-padding table-responsive">
                    <table class="table table-striped">
                        <tr>
                            <th style="width: 10px; text-align: center">#</th>
                            <th style="width: 50px; text-align: center">ID</th>
                            <th style="width: 300px; text-align: center">Gambar</th>
                            <th style="text-align: center">Caption</th>
                            <th style="text-align: center">Update terakhir</th>
                            <th style="text-align: center">Aksi</th>
                        </tr>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($data as $item)
                            <tr>
                                <td style="text-align: center; vertical-align: middle">{{ $no++ }}.) </td>
                                <td style="text-align: center; vertical-align: middle"><b>( {{ $item->id }} )</b></td>
                                <td style="text-align: center; vertical-align: middle">
                                    <img src="{{ url('/') }}{{ $item->path }}{{ $item->photo }}" alt="First slide" width="50%">
                                </td>
                                <td style="text-align: center; vertical-align: middle">{{ $item->caption }}</td>
                                <td style="text-align: center; vertical-align: middle"><span class="label label-info">{{ date('d F Y', strtotime($item->updated_at)) }}</span></td>
                                <td style=" vertical-align: middle">
                                    <form action="{{ route('home.destroy', $item->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <div class="btn-group-vertical">
                                            <a href="{{ route('home.edit', $item->id) }}" class="btn btn-warning btn-sm"><span class="fa fa-chain"></span> Edit</a>
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
</div>


@endsection
