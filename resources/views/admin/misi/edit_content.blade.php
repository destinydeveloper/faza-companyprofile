@extends('admin.layouts.app')

@section('page-title', 'Misi')

@section('admin-role', 'Administrasi')

@section('content-title', 'Edit konten misi')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li><a href="{{ route('misi.index') }}"><i class="fa fa-clone"></i> Misi</a></li>
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
    <div class="col-md-6 col-xs-12">
        <div class="box">
            <div class="box box-primary">
                <div class="box-body">
                    <form action="{{ route('misi.update_content', $data['misi_edit']->id) }}" method="post">
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
                            <label for="judul">Deskripsi</label>
                            <textarea name="description" id="judul" cols="30" rows="5" class="form-control" style="background: white; font-size: 15px" autofocus="on" required>{{ $data['misi_edit']->description }}</textarea>
                        </div>
                        <div class="box-footer text-center">
                            <input type="submit" class="btn btn-warning btn-block" value="Ubah">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xs-12">
        <div class="box">
            <div class="box box-primary">
                <div class="box-body no-padding">
                    <table class="table table-striped">
                        <tr>
                            <th style="width: 15px; text-align: center; vertical-align: middle">#</th>
                            <th style="text-align: center; vertical-align: middle">Deskripsi</th>
                            <th style="text-align: center; vertical-align: middle">Update terakhir</th>
                        </tr>
                        @php $i = 1 @endphp
                        @foreach ($data['misi_content'] as $data)
                            <tr >
                                <td style="text-align: center;vertical-align: middle">{{ $i++ }}.</td>
                                <td>{{ $data['description'] }}</td>
                                <td style="text-align: center;vertical-align: middle">
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
