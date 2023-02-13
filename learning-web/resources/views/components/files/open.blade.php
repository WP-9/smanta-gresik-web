<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Bootstrap Local -->
    <link rel="stylesheet" href="{{ asset('css/main/open-style.css') }}">

    <!-- Title Icon -->
    <link rel="icon" href="{{ asset('images/smanta.png') }}">

    <title>SMANTA Gresik | E-Learning</title>
</head>
<body>

<header>
    <div class="container p-2 d-flex justify-content-between align-items-center">
        <div class="p-2">
            <a href="/buku-gratis#menuKategori" class="btn btn-primary">&laquo; Kembali</a>
        </div>
        <div class="p-2">
            <h1 class="mt-2 mb-4 text-center">{{ $title }}</h1>
        </div>
    </div>
</header>

<main>
    <div class="container-fluid p-3 main-wrap">
        <div class="container p-2 my-2">
            <iframe src="{{ asset($file) }}" title="File">
            </iframe>
        </div>
    </div>
</main>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>
