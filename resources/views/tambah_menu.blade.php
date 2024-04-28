<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/home.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Home</title>
</head>

<body>
    @include('layouts.navbar')
    <main>
        <section class="hero">
            <h2>Welcome to Kopi Kenangan</h2>
        </section>
        <section class="form_menu">
            <form action="/Menu" method="POST">
                @csrf
                <h3 class="text-center mb-5">Masukan Data</h3>
                <div class="input-group mb-3">
                    <span class="input-group-text">Nama Menu</span>
                    <input type="text" name="nama_menu" class="form-control"
                        aria-label="Dollar amount (with dot and two decimal places)">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Rp</span>
                    <input type="text" name="harga" class="form-control"
                        aria-label="Dollar amount (with dot and two decimal places)">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Kopi Kenangan. All Rights Reserved.</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
