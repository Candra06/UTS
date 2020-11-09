@extends('app')

@section('content')
    <div class="container mt-lg-2 mb-5">
        <div class="row">
            @for ($i = 0; $i < count($data); $i++)
                <div class="col-md-12 mt-4">
                    <div class="card">
                        <div class="card-header ">
                            
                            <div class="row">

                                <div class="col-md-6 d-flex flex-row-reverse" >
                                    <a href="/artikel/{{ $data[$i]['id'] }}/edit">Edit</a> | <a data-toggle="modal" data-target="#exampleModal"
                                        href="#exampleModal">Hapus</a>
                                    {{-- <form action="/artikel/{{ $data[$i]['id'] }}"
                                        method="post" class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-danger"> Hapus</button>
                                    </form> --}}
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mr-auto p-2">{{ $data[$i]['title'] }}</h3>
                                    <label for="">{{ date('Y-m-d h:i:s', strtoTime($data[$i]['created_at'])) }} oleh
                                        {{ $data[$i]['author'] }}</label>
                                </div>
                            </div>

                            <br>

                        </div>
                        <div class="card-body">
                            {{ substr($data[$i]['content'], 0, 300) }}
                        </div>
                        <div class="card-footer text-muted d-flex flex-row-reverse">
                            <a href="artikel/{{ $data[$i]['id'] }}">Selengkapnya</a>
                        </div>
                    </div>

                </div>
            @endfor

        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
@endsection
