@extends('app')

@section('content')
    <div class="container mt-lg-5 ">
        <h2>Edit Artikel</h2>
        <div class="row mt-5">
            <div class="col-md-12">
                <form action="{{url('artikel/'. $data['id'])}}" method="POST">
                    @method('patch')
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Judul</label>
                        <input type="text" class="form-control" name="title" value="{{ $data['title'] }}"
                            placeholder="Masukkan judul">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Penulis</label>
                        <input type="text" class="form-control" name="author" placeholder="Penulis" value="{{ $data['author'] }}">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Konten</label>
                        <div >
                            <textarea id="summernote"
                            name="content">{{$data['content']}}</textarea>
                           </div>
                    </div>
                    <a href="{{url('/')}}"><button type="submit" class="btn btn-danger">Kembali</button></a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
@endsection
