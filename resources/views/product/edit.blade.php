@extends('layouts.admin')

@section('title', 'Product')

@section('content')
<main class="container">
    <h3 class="text-center">Product</h3>
    <form action="{{url('/admin/product/'.$product->id)}}" method="POST" enctype="multipart/form-data" class="form">
        @method('PATCH')
        <div class="form-group">
            <label for="logo">Logo</label>
            <input type="file" class="form-control @error('logo') is-invalid @enderror" name="logo" id="logo" value="{{old('logo') ?? $product->logo}}">
            @error('logo')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" id="nama" value="{{old('nama') ?? $product->nama}}">
            @error('nama')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="desc">Deskripsi Singkat</label>
            <input type="text" class="form-control @error('desc') is-invalid @enderror" name="desc" id="desc" value="{{old('desc') ?? $product->desc}}">
            @error('desc')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="baseline">Baseline</label>
            <input type="text" class="form-control @error('baseline') is-invalid @enderror" name="baseline" id="baseline" value="{{old('baseline') ?? $product->baseline}}">
            @error('baseline')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="target1">Target Tahun Ke 1</label>
            <input type="text" class="form-control @error('target1') is-invalid @enderror" name="target1" id="target1" value="{{old('target1') ?? $product->target1}}">
            @error('target1')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="target2">Target Tahun Ke 2</label>
            <input type="text" class="form-control @error('target2') is-invalid @enderror" name="target2" id="target2" value="{{old('target2') ?? $product->target2}}">
            @error('target2')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="target3">Target Tahun Ke 3</label>
            <input type="text" class="form-control @error('target3') is-invalid @enderror" name="target3" id="target3" value="{{old('target3') ?? $product->target3}}">
            @error('target3')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="enviroment">Enviroment</label>
            <input type="text" class="form-control @error('enviroment') is-invalid @enderror" name="enviroment" id="enviroment" value="{{old('enviroment') ?? $product->environment}}">
            @error('enviroment')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="gambar">Gambar Pendukung</label>
            <input type="file" class="form-control @error('gambar') is-invalid @enderror" name="gambar" id="gambar" value="{{old('gambar') ?? $product->gambar}}">
            @error('gambar')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="url">Website</label>
            <input type="text" class="form-control @error('url') is-invalid @enderror" name="url" id="url" value="{{old('url') ?? $product->url}}">
            @error('url')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary mt-3" value="submit">Edit</button>
        @csrf
    </form>
</main>
@endsection
