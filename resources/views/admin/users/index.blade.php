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
                    <h3 class="box-title">Pengguna </h3>
                    <a href="{{ route('users.create') }}" style="float: right" class="btn btn-success btn-sm"><span class="fa fa-plus"></span> Tambah data</a>
                </div>
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible">
                        {{session('success')}}
                    </div>
                @endif
                    <div  class="box-body table-responsive">
                        <table  class="table table-striped table-hover table-bordered table-align-middle text-center">
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
                                        <td style="vertical-align: middle">{{ $i++ }}</td>
                                        <td style="vertical-align: middle">{{ $user->name }}</td>
                                        <td style="vertical-align: middle">{{ $user->username }}</td>
                                        <td style="vertical-align: middle">{{ $user->email }}</td>
                                        <td style="vertical-align: middle"> <img src="{{ url('/') }}/uploads/users/{{$user->photo}}" alt="" srcset=""></td>
                                        <td style="vertical-align: middle">
                                            <form action="{{route('users.destroy', $user->id)}}" method="post">
                                                @csrf
                                                @method('delete')
                                                <div class="btn-group-vertical btn-group-sm">
                                                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning"><span class="fa fa-chain"></span> Edit</a>
                                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Jika menghapus data ini akan berpengaruh pada data lain, apakah anda yakin ?')">
                                                        <span class="fa fa-trash"> Hapus</span>
                                                    </button>
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
