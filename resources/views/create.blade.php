@extends('app')

@section('content')
    <div class="container mt-lg-5 ">
        <h2>Tambah Artikel</h2>
        <div class="row mt-5">
            <div class="col-md-12">
                <form action="{{ url('artikel') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Judul</label>
                        <input type="text" class="form-control" name="title" placeholder="Masukkan judul">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Penulis</label>
                        <input type="text" class="form-control" name="author" placeholder="Penulis">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Konten</label>
                       <div >
                        <textarea id="summernote"
                        name="content">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cupiditate sit laboriosam recusandae eaque, aperiam incidunt dolor impedit enim qui nemo corporis, obcaecati adipisci quos earum iure harum ullam fuga beatae.</textarea>
                       </div>
                        {{-- <textarea name="content" class="form-control "
                            style="height: 100px!important" rows="10" cols="10" id="editor">
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cupiditate sit laboriosam recusandae eaque, aperiam incidunt dolor impedit enim qui nemo corporis, obcaecati adipisci quos earum iure harum ullam fuga beatae.
                                </textarea> --}}
                    </div>
                    <a href="{{ url('/') }}"><button type="submit" class="btn btn-danger">Kembali</button></a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>


@endsection
