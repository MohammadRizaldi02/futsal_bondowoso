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
                                <th scope="col">User</th>
                                <th scope="col">Area</th>
                                <th scope="col">Transaksi</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Jam</th>
                            </tr>
                        </thead>
                       <tbody>
                        @foreach ($data as $item)
                            <tr>
                                <td>{{ $loop->iteration}}</td>
                                <td>{{ $item->user->name}}</td>
                                <td>{{ $item->area->name}}</td>
                                <td>{{ $item->evidence_of_transfer}}</td>
                                <td>{{ $item->created_at->format("d-m-Y")}}</td>
                                <td>{{ $item->created_at->format("H:i")}}</td>
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

