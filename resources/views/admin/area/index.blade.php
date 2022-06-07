@extends('layouts.app')


@section('content')


<div class="content">
    <!-- Animated -->
    <div class="animated fadeIn">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">
                        <a href="{{ route('area.create')}}" class="btn btn-sm btn-primary">Tambah Data</a>
                    </strong>
                </div>
                <div class="card-body">
                    <table id="bootstrap-data-table" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Deskripsi Lapangan</th>
                                <th scope="col">Lapangan</th>
                                <th scope="col">Gambar</th>
                                <th scope="col">Action</th>

                            </tr>
                        </thead>
                       <tbody>
                        @foreach ($data as $item)
                                    <tr>
                                        <td>{{ $loop->iteration}}</td>
                                        <td>
                                            {{ \Str::limit($item->description, 50, '') }}
                                            @if (strlen($item->description) > 50)
                                                <span id="dots-{{ $item->id}}">...</span>
                                                <span id="more-{{ $item->id}}" style="display:none;">{{ substr($item->description, 50) }}</span>
                                            @endif

                                            <button onclick="myFunction({{ $item->id}})" type="button" class="btn btn-primary btn-sm" id="myBtn-{{ $item->id}}">Read more</button>

                                        </td>
                                        <td>{{ $item->name}}</td>
                                        <td>
                                            <img src="{{ url('/public/image/'. $item->photo)}}" alt="">
                                        </td>
                                        <td>
                                            <a href="/area/{{ $item->id }}/edit" class="btn btn-xs btn-primary">Edit</a>
                                            <a href="/area/destroy/{{$item->id}}" class="btn btn-xs btn-danger" onclick="return confirm('yakin?');">Delete</a>
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

@push('scripts')
    <script>
          // javascript untuk readmore
          function myFunction(id) {
            var dots = document.getElementById("dots-" + id);
            var moreText = document.getElementById("more-" + id);
            var btnText = document.getElementById("myBtn-"+id);

            if (dots.style.display === "none") {
                dots.style.display = "inline";
                btnText.innerHTML = "Read more";
                moreText.style.display = "none";
            } else {
                dots.style.display = "none";
                btnText.innerHTML = "Read less";
                moreText.style.display = "inline";
            }
        }
    </script>
@endpush
