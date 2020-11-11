@extends('app')

@section('content')
    <div class="container mt-lg-2 mb-5">
        <div class="row">

            <div class="col-md-12 mt-4">
                <div class="card">
                    <div class="card-header">
                        <h3>{{$data['title']}}</h3>
                        <label for="">{{ date('Y-m-d h:i:s', strtoTime($data['created_at']))}} oleh {{ $data['author'] }}</label>
                    </div>
                    <div class="card-body">
                        {!! $data['content'] !!}
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
