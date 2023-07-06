@extends('layouts.app')
@section('title', 'Edit blog')

@section('content')
<div class="container">
    <a href="{{ url('/admin/blog') }}" class="btn btn-primary">kembali</a>
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('blog.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="">Judul</label>
                    <input type="text" class="form-control" name="title" value="{{ $blog->title }}">
                </div>
                @error('title')
                <small style="color: red">{{ $message }}</small>
                @enderror

                <div class="form-group">
                    <label for="">Kategori</label>
                    <input type="text" class="form-control" name="kategori" value="{{ $blog->kategori }}">
                </div>
                @error('kategori')
                <small style="color: red">{{ $message }}</small>
                @enderror

                <div class="form-group">
                    <label for="">Deskripsi</label>
                    <input type="text" class="form-control" name="subtitle" value="{{ $blog->subtitle }}">
                </div>
                @error('title')
                <small style="color: red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <label for="">Konten</label>
                    <textarea name="content" class="form-control" id="" cols="30"
                        rows="10">{{ $blog->content }}</textarea>
                </div>
                @error('content')
                <small style="color: red">{{ $message }}</small>
                @enderror

                <img src="/image/{{ $blog->image_1 }}" alt="" class="img-fuid" width="300" height="300">
                <div class="form-group">
                    <label for="">Gambar</label>
                    <input type="file" class="form-control" name="image_1">
                </div>
                @error('image')
                <small style="color: red">{{ $message }}</small>
                @enderror
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection