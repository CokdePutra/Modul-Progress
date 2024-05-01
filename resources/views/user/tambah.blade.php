@extends('layouts.main')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-3">
                <form action="{{ route('user.store') }}" method="POST">
                    @csrf
                    <h3 class="text-center mb-5">Masukan Data</h3>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Nama User</span>
                        <input type="text" name="name" class="form-control"
                            aria-label="Dollar amount (with dot and two decimal places)" placeholder="John Doe">
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Email</span>
                        <input type="email" name="email" class="form-control"
                            aria-label="Dollar amount (with dot and two decimal places)" placeholder="johndoe@example.com">
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Password</span>
                        <input type="password" name="password" class="form-control"
                            aria-label="Dollar amount (with dot and two decimal places)" placeholder="********">
                        @error('password')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary w-100 mb-2">Submit</button>
                    <a href="{{ route('user.index') }}" class="btn btn-info w-100">Kembali</a>
                </form>
            </div>
        </div>
    </div>
@endsection
