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
    <link rel="stylesheet" href="{{ asset('css/main/home.css') }}">

    <!-- Title Icon -->
    <link rel="icon" href="{{ asset('images/smanta.png') }}">

    <title>SMANTA Gresik | E-Learning</title>


</head>
<body>

<header>
    @include('partials.head')
</header>

<main>

    <div class="container-fluid content-text mt-5 py-4">

        <div class="container">
            <p>
                <strong class="fs-4">Selamat datang di situs e-Learning Sekolah kami! 👋</strong> <br> Kami memahami
                bahwa dunia pendidikan terus berkembang dan kami ingin memberikan solusi terbaik bagi siswa dan guru
                dalam belajar dan mengajar. Situs e-Learning kami hadir untuk membantu siswa belajar secara efektif dan
                efisien serta mempermudah guru dalam mengelola dan menyampaikan materi ajar. <br><br>
                Dengan menggunakan teknologi terbaru dan user interface yang intuitif, siswa dapat belajar dimana saja
                dan kapan saja. Materi ajar dapat diakses dengan mudah dan disajikan dengan visual yang menarik,
                sehingga mempermudah siswa untuk memahami dan mengingat materi. Selain itu, siswa juga dapat
                berinteraksi dengan guru dan sesama siswa melalui fitur diskusi online dan tugas bersama. <br><br>
                Guru dapat mengelola dan menyampaikan materi ajar dengan mudah melalui platform ini. Materi ajar dapat
                dibuat dengan format multimedia seperti video, audio, dan teks. Guru juga dapat memantau kemajuan siswa
                dan memberikan feedback secara efisien melalui sistem pengukuran dan evaluasi.
            </p>
        </div>

        <div class="row">
            <div class="col-12 col-sm-2"></div>
            <div class="col-sm-8 shadow-lg quotes-wrap pt-5 pb-4 my-3 justify-content-center text-center">
                <p>
                    <q>
                        Belajar itu bukan hanya kebutuhan, bukan hanya sekedar belajar, tapi suatu keharusan agar
                        manusia tau tempat untuk melawan yang "boleh" dan membela yang "boleh" dengan kata (iya/tidak)
                        yang menentukan.
                    </q> <br>
                    – Miftachul Huda
                </p>
            </div>
            <div class="col-12 col-sm-2"></div>
        </div>

    </div>

    <div class="container-fluid mt-5" id="menuKategori">
        @include('partials.navmain')
    </div>

    @yield('content')

</main>

<footer>
    <!-- Footer Start -->
    @include('partials.footer')
    <!-- Footer End -->
</footer>


<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

</body>
</html>
