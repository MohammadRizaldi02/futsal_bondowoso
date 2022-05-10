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
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Salary</th>
                            </tr>
                        </thead>
                       <tbody>
                           
                       </tbody>
                    </table>
                </div>
            </div>
        </div>
    
    </div>
    <!-- .animated -->
</div>
@endsection
