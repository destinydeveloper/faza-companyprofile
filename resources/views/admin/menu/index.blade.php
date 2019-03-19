@extends('admin.layouts.app')

@section('page-title', 'Menu')

@section('admin-role', 'Administrasi')

@section('content-title', 'Menu')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-database"></i> Menu</a></li>
        <li class="active">Home</li>
    </ol>
@endsection

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                {{-- <div class="box-header">
                    <a href="{{ route('menu.create') }}" class="btn btn-success"><span class="fa fa-plus"></span> Tambah data</a>
                </div> --}}
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible">
                        {{session('success')}}
                    </div>
                @endif
                    <div class="box-body table-responsive">
                        <table class="table table-striped table-hover table-bordered table-align-middle text-center">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Judul</th>
                                    <th>Sub-judul</th>
                                    <th>Pengedit</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $i = 1 @endphp
                                @foreach ($data['menu'] as $data)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $data->title }}</td>
                                        <td>{{ $data->sub_title }}</td>
                                        <td>
                                            <span class="label label-danger">{{ $data->user->name }}</span>
                                        </td>
                                        <td>
                                            <a href="{{ route('menu.edit', $data->id) }}" class="btn btn-warning">Edit</a>
                                            {{-- <form action="{{route('menu.destroy', $data->id)}}" method="post">
                                                @csrf
                                                @method('delete')
                                                <div class="btn-group">
                                                    <input type="submit" value="Hapus" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?')" >
                                                </div>
                                            </form> --}}
                                        </td>
                                        {{--<td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td> --}}
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

@endsection
