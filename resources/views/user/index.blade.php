@extends('layouts.main')
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-6">
                <h2 class="text-center">Daftar User</h2>
                <a href="{{ route('user.create') }}" class="btn btn-primary mt-5">Tambah</a>
                <table class="table table-striped ms-auto">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama User</th>
                            <th scope="col">Email</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($users as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>
                                    <a href="{{ route('user.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                                    <form action="{{ route('user.destroy', $item->id) }}" method="POST" class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are your sure?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <td colspan="4" class="text-center">Data Tidak Ada</td>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    @if (session('success'))
        <script>
            Swal.fire({
                title: 'Success',
                text: "{{ session('success') }}",
                icon: 'success',
                confirmButtonText: 'OK!'
            })
        </script>
    @endif
    @if (session('error'))
        <script>
            Swal.fire({
                title: 'Error',
                text: "{{ session('error') }}",
                icon: 'error',
                confirmButtonText: 'OK!'
            })
        </script>
    @endif
@endpush
