@extends('admin.layouts.app')

@section('page-title', 'Pengguna')

@section('admin-role', 'Administrasi')

@section('content-title', 'Pengguna')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Pengguna</a></li>
        <li class="active">Home</li>
    </ol>
@endsection

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <a href="{{ route('users.create') }}" class="btn btn-success"><span class="fa fa-plus"></span> Tambah data</a>
                </div>
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
                                    <th>Nama</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Photo</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $i = 1 @endphp
                                @foreach ($data['users'] as $user)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->username }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td> <img src="{{ url('/') }}/uploads/users/{{$user->photo}}" alt="" srcset=""></td>
                                        <td>
                                            <form action="{{route('users.destroy', $user->id)}}" method="post">
                                                @csrf
                                                @method('delete')
                                                <div class="btn-group">
                                                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning">Edit</a>
                                                    <input type="submit" value="Hapus" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?')" >
                                                </div>
                                            </form>
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
