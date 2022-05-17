@extends('layouts.app')

@section('content')


<div class="content">
    <!-- Animated -->
    <div class="animated fadeIn">

        <div class="col-lg-12">
            <div class="card">
                <div class="card-header"><strong>Schadules</strong><small> Form</small></div>
                <div class="card-body card-block">
                    <form action="{{ route('schedule.update',$scheduleid->id)}}" method="POST">
                        @csrf
                        @method('PUT')

                    <div class="form-group"><label for="company" class=" form-control-label">Nama Penyewa</label>
                        <input type="text" id="company" value="{{$scheduleid->name}}" placeholder="" name="name"  class="form-control"></div>
                    <div class="form-group">
                        <label for="vat" class=" form-control-label">Jam</label>
                        <input type="time" id="vat" value="{{$scheduleid->time_schedule}}" placeholder="" name="time_schedule" class="form-control"></div>
                    <div class="form-group">
                        <label for="street" class=" form-control-label">Durasi</label>
                        <input type="text" id="street" value="{{$scheduleid->duration}}" name="duration" class="form-control"></div>
                    <div class="row form-group">
                        <div class="col-8">
                            <div class="form-group"><label for="city" class=" form-control-label">Tanggal</label>
                                <input type="date" id="" value="{{$scheduleid->data_schedule}}" name="date_schedule" class="form-control"></div>
                        </div>
                        <div class="col-8">
                            <div class="form-group"><label for="postal-code" class=" form-control-label">Lapangan</label>
                                 <select name="soccer_field" class="form-control">
                                      <option value="lapangan 1">Lapangan 1</option>
                                      <option value="lapangan 2">Lapangan 2</option>
                                      <option value="lapangan 3">Lapangan 3</option>
                                  </select>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="px-4 mb-4">
                    <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i> Update
                    </button>
                </div>
            </form>
            </div>
        </div>

    </div>

    </div>
    <!-- .animated -->
</div>
@endsection
