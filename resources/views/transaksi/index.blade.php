@extends('layouts.app')

@section('content')


<div class="content">
    <!-- Animated -->
    <div class="animated fadeIn">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">
                        <a href="{{ route('schedule.create')}}" class="btn btn-sm btn-primary">Tambah Data</a>
                    </strong>
                </div>
                <div class="card-body">
                    <table id="bootstrap-data-table" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">transaksi</th>
                                <th scope="col">Nama pemesan</th>
                                <th scope="col">Area lapangan</th>
                                <th scope="col">Bukti transaksi</th>
                            </tr>
                        </thead>
                       <tbody>
                        {{-- @foreach ($data as $item)
                                    <tr>
                                        <td>{{ $item->id}}</td>
                                        <td>{{ $item->name}}</td>
                                        <td>{{ $item->time_schedule}}</td>
                                        <td>{{ $item->duration}}</td>
                                        <td>{{ $item->date_schedule}}</td>
                                        <td>{{ $item->soccer_field}}</td>
                                        <td>{{ $item->status}}</td>
                                        <td>
                                            <a href="/schedule/{{ $item->id }}/edit" class="btn btn-xs btn-primary">Edit</a>
                                            <a href="/schedule/destroy/{{$item->id}}" class="btn btn-xs btn-danger" onclick="return confirm('yakin?');">Delete</a>
</td>
                                        </td>
                                    </tr>
                                   @endforeach --}}
                       </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- .animated -->
</div>
@endsection
