<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/home.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Tabel Menu</title>
</head>

<body>
    @include('layouts.navbar')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-6">
                <a href="Menu/Tambah-menu" class="btn btn-primary mt-5">Tambah</a>
                <table class="table table-striped ms-auto">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Menu</th>
                            <th scope="col">Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($TabelMenu as $item)
                            <tr>
                                <th>{{ $loop->index + 1 }}</th>
                                <td>{{ $item->nama_menu }}</td>
                                <td>{{ $item->harga }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
