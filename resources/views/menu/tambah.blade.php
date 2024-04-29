@extends('layouts.main')

@section('content')
    <section class="hero">
        <h2>Welcome to Kopi Kenangan</h2>
    </section>
    <section>
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
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </section>
@endsection
