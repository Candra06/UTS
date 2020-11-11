@extends('app')

@section('content')
    <div class="container mt-lg-2 mb-5">
        <div class="row">
            @for ($i = 0; $i < count($data); $i++)
                <div class="col-md-12 mt-4">
                    <div class="card">
                        <div class="card-header ">
                            <div class="row d-flex flex-row-reverse">
                                <div class="col-md-6 d-flex flex-row-reverse">
                                    <a data-toggle="modal" data-target="#exampleModal-{{ $data[$i]['id'] }}" href="#exampleModal" class="btn btn-danger ml-1" style="height: 35px;"><i class="fa fa-trash" ></i> </a>   <a
                                        href="/artikel/{{ $data[$i]['id'] }}/edit" class="btn btn-primary mr-2" style="height: 35px;"><i class="fa fa-edit"></i> </a>

                                </div>
                                <div class="col-md-6">
                                    <h3 class="mr-auto p-2">{{ $data[$i]['title'] }}</h3>
                                </div>
                                <div class="col-md-12">
                                    <label for="">{{ date('Y-m-d h:i:s', strtoTime($data[$i]['created_at'])) }} oleh
                                        {{ $data[$i]['author'] }}</label>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                        {!! substr($data[$i]['content'], 0, 300) !!}
                        </div>
                        <div class="card-footer text-muted d-flex flex-row-reverse">
                            <a href="artikel/{{ $data[$i]['id'] }}">Selengkapnya</a>
                        </div>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal-{{ $data[$i]['id'] }}" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <form action="artikel/{{ $data[$i]['id'] }}" method="POST">
                                    @method('delete')
                                    @csrf
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Konfirmasi</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <input type="hidden" name="id" id="">
                                        Apakah anda ingin menghapus data tersebut?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Konfirmasi</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


            @endfor

        </div>
    </div>


@endsection
