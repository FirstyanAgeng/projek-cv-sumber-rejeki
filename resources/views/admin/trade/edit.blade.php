@extends('layouts.app')
@section('title', 'Create trade')

@section('content')
<div class="container">
    <a href="{{ url('/admin/trade') }}" class="btn btn-primary">kembali</a>
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('trade.update', $trade->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" class="form-control" name="name" value="{{ $trade->name }}">
                </div>
                @error('title')
                <small style="color: red">{{ $message }}</small>
                @enderror

                <div class="form-group">
                    <label for="">Kategori</label>
                    <input type="text" class="form-control" name="category" value="{{ $trade->category }}">
                </div>
                @error('category')
                <small style="color: red">{{ $message }}</small>
                @enderror

                <div class="form-group">
                    <label for="">Harga</label>
                    <input type="number" class="form-control" name="price" value="{{ $trade->price }}">
                </div>
                @error('title')
                <small style="color: red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <label for="">Deskripsi</label>
                    <textarea name="description" class="form-control" id="" cols="30"
                        rows="10">{{ $trade->description }}</textarea>
                </div>
                @error('description')
                <small style="color: red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <label for="">Detail</label>
                    <textarea name="detail" class="form-control" id="" cols="30"
                        rows="10">{{ $trade->detail }}</textarea>
                </div>
                @error('detail')
                <small style="color: red">{{ $message }}</small>
                @enderror
                <img src="/image/{{ $trade->image }}" alt="" class="img-fuid" width="300" height="300">
                <div class="form-group">
                    <label for="">Gambar</label>
                    <input type="file" class="form-control" id="formFile" name="image">
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