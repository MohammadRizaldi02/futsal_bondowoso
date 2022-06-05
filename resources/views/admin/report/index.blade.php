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
                                <th scope="col">Area</th>
                                <th scope="col">Bukti Transfer</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Jam</th>
                                <th> Status</th>
                            </tr>
                        </thead>
                       <tbody>
                        @foreach ($data as $item)
                            <tr>
                                <td>{{ $loop->iteration}}</td>
                                <td>{{ $item->area->name}}</td>
                                <td>{{ $item->evidence_of_transfer}}</td>
                                <td>{{ $item->schedule->date_schedule}}</td>
                                <td>{{ $item->schedule->time_schedule}}</td>

                                <td>
                                    <button class="btn btn-{{ ($item->evidence_of_transfer == null) ? 'warning' : 'success'}}">{{ ($item->evidence_of_transfer == null) ? 'Pending' : 'Lunas'}}</button>
                                </td>
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

