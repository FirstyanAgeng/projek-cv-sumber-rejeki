@extends('layouts.app')
@section('title', 'Edit client')

@section('content')
<div class="container">
    <a href="{{ url('/admin/client') }}" class="btn btn-primary">kembali</a>
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('client.update', $client->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="">Judul</label>
                    <input type="text" class="form-control" name="title" value="{{ $client->title }}">
                </div>
                @error('title')
                <small style="color: red">{{ $message }}</small>
                @enderror
                <img src="/image/{{ $client->image }}" alt="" class="img-fuid" width="300" height="300">
                <div class="form-group">
                    <label for="">Gambar</label>
                    <input type="file" class="form-control" name="image">
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