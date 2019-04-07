{{-- Ini punyanya menu --}}
@extends('admin.layouts.app')

@section('page-title', 'History')

@section('admin-role', 'Administrasi')

@section('content-title', 'History')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-history"></i> History</a></li>
        <li class="active">Home</li>
    </ol>
@endsection

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="row" style="margin-top: 5px;padding: 2px 5px;">
                    <div class="col-md-6 col-xs-12">
                        <form action="{{ route('history.index') }}" method="get">
                            <label for="pengguna">Pilih pengguna</label>
                            <div class="form-group form-inline">
                                <select class="form-control" id="pengguna" name="user_name">
                                    @foreach ($users as $pengguna)
                                        <option value="{{ $pengguna->name }}" {{ $pengguna->name == Request::get('user_name') ? 'selected' : '' }}>{{ $pengguna->name }}</option>
                                    @endforeach
                                </select>
                                <button type="submit" class="btn btn-info btn-sm">
                                    <span class="fa fa-search"></span>
                                    Cari
                                </button>
                                <a href="{{ route('history.index') }}" class="btn btn-primary btn-sm"><span class="fa fa-reply-all"></span> Tampilkan semua</a>
                            </div>
                        </form>
                    </div>
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
                                    <th>Pengguna</th>
                                    <th>History</th>
                                    <th>Terakhir update</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $i = 1 @endphp
                                @foreach ($history as $key => $data)
                                    <tr>
                                        <td>{{ $number++ }}.</td>
                                        <td>{{ $data->user->name }}</td>
                                        <td style="text-align: left">{!! $data->user_history !!}</td>
                                        <td>
                                            <span class="label label-info">{{ date('d F Y, H:i', strtotime($data->updated_at)) }}</span>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="clearfix"></div>
                            <div class="text-center">
                                {{ $history->links() }}
                            </div>
                    </div>
                </div>
            </div>
        </div>

@endsection
