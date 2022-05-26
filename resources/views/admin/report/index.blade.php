@extends('layouts.app')

@section('content')


<div class="content">
    <!-- Animated -->
    <div class="animated fadeIn">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">
                        <a href="">Laporan Lapangan yang sudah diboking</a>
                    </strong>
                </div>
                <div class="card-body">
                    <table id="bootstrap-data-table" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Atas Nama</th>
                                <th scope="col">Lapangan</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Jam</th>
                                <th scope="col">Hari</th>
                            </tr>
                        </thead>
                       <tbody>
                        @foreach ($data as $item)
                                    <tr>
                                        <td>{{ $loop->iteration}}</td>
                                        <td>{{ $item->name}}</td>
                                        <td>{{ $item->soccer_field}}</td>
                                        <td>{{ $item->date_schedule}}</td>
                                        <td>{{ $item->time_schedule}}</td>
                                        <td>{{ $item->day}}</td>
                                        </td>
                                    </tr>
                                   @endforeach
                       </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- .animated -->
</div>
@endsection

