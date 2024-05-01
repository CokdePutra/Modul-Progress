@extends('layouts.main')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-3">
                <form action="{{ route('menu.store') }}" method="POST">
                    @csrf
                    <h3 class="text-center mb-5">Masukan Data</h3>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Nama Menu</span>
                        <input type="text" name="nama_menu" class="form-control"
                            aria-label="Dollar amount (with dot and two decimal places)">
                        @error('nama_menu')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Rp</span>
                        <input type="text" name="harga" class="form-control"
                            aria-label="Dollar amount (with dot and two decimal places)">
                        @error('harga')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary w-100 mb-2">Tambah</button>
                    <a href="{{ route('menu.index') }}" class="btn btn-info w-100">Kembali</a>
                </form>
            </div>
        </div>
    </div>
@endsection
