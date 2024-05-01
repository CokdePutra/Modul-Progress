@extends('layouts.main')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-3">
                <form action="{{ route('menu.update', $item->id) }}" method="POST">
                    @method('put')
                    @csrf
                    <h3 class="text-center mb-5">Masukan Data</h3>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Nama Menu</span>
                        <input type="text" name="nama_menu" class="form-control"
                            aria-label="Dollar amount (with dot and two decimal places)" value="{{ old('nama_menu', $item->nama_menu) }}">
                        @error('nama_menu')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Rp</span>
                        <input type="text" name="harga" class="form-control"
                            aria-label="Dollar amount (with dot and two decimal places)" value="{{ old('harga', $item->harga) }}">
                        @error('harga')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-warning mb-2 w-100">Edit</button>
                    <a href="{{ route('menu.index') }}" class="btn btn-info w-100">Kembali</a>
                </form>
            </div>
        </div>
    </div>
@endsection
