@extends('layouts.app')

@section('content')


<div class="content">
    <!-- Animated -->
    <div class="animated fadeIn">

        <div class="col-lg-12">
            <div class="card">
                <div class="card-header"><strong>Areas</strong><small> Form</small></div>
                <div class="card-body card-block">
                    <form action="{{ route('area.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf

                    <div class="form-group"><label for="company" class=" form-control-label">Deskripsi Lapangan</label>
                        <textarea id="company" placeholder="" name="description"  class="form-control @error('description') is-invalid @enderror"></textarea>
                        @error('description')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        </div>
                    <div class="form-group"><label for="company" class=" form-control-label">Lapangan</label>
                        <input type="text" id="company" placeholder="" name="name"  class="form-control @error('name') is-invalid @enderror">
                        @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group"><label for="company" class=" form-control-label">Gambar</label>
                        <input type="file" id="company" placeholder="" name="photo"  class="form-control @error('photo') is-invalid @enderror">
                        @error('photo')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    </div>
                </div>
                <div class="px-4 mb-4">
                    <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i> Submit
                    </button>
                    <a href="{{route('area.index')}}" class="btn btn-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i> Kembali
                    </a>
                </div>
            </form>
            </div>
        </div>

    </div>

    </div>
    <!-- .animated -->
</div>
@endsection
