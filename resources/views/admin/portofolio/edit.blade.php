@extends('layouts.app')
@section('title', 'Edit portofolio')

@section('content')
<div class="container">

    <form action="{{ route('portofolio.update', $portofolio->id) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="row">

            <div class="col-4">
                <img src="/image/{{ $portofolio->image }}" class="img-fluid shadow-sm" style="border-radius: 14px;"
                    id="imgPrev">
                <div class="mt-3">
                    <div class="alert alert-warning d-flex align-items-center" role="alert">
                        <div>
                            Gambar hanya berekstensi JPG dan PNG, Maksimal ukuran 2 MB
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-8">
                <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" class="form-control" name="title" value="{{ $portofolio->title }}">
                </div>
                @error('title')
                <small style="color: red">{{ $message }}</small>
                @enderror

                <div class="form-group">
                    <label for="">Kategori</label>
                    <input type="text" class="form-control" name="category" value="{{ $portofolio->category }}">
                </div>
                @error('category')
                <small style="color: red">{{ $message }}</small>
                @enderror


                <div class="form-group">
                    <label for="">Tanggal</label>
                    <input type="text" class="form-control" name="tanggal" value="{{ $portofolio->tanggal }}">
                </div>
                @error('tanggal')
                <small style="color: red">{{ $message }}</small>
                @enderror

                <div class="form-group">
                    <label for="">Lokasi</label>
                    <input type="text" class="form-control" name="lokasi" value="{{ $portofolio->lokasi }}">
                </div>
                @error('lokasi')
                <small style="color: red">{{ $message }}</small>
                @enderror

                <div class="form-group">
                    <label for="">Gambar</label>
                    <input type="file" class="form-control" name="image">
                </div>
                @error('image')
                <small style="color: red">{{ $message }}</small>
                @enderror




            </div>
        </div>
        <div class="form-group">
            <label for="">Deskripsi</label>
            <textarea name="description" class="form-control" id="content" cols="30"
                rows="10">{{ $portofolio->description }}</textarea>
        </div>
        @error('description')
        <small style="color: red">{{ $message }}</small>
        @enderror


        <div class="form-group">
            <label for="">Detail</label>
            <textarea name="detail" class="form-control" cols="30" rows="10">{{ $portofolio->detail }}</textarea>
        </div>
        @error('detail')
        <small style="color: red">{{ $message }}</small>
        @enderror

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ url('admin/portofolio') }}" class="btn btn-danger">Batal</a>
    </form>

</div>
@endsection