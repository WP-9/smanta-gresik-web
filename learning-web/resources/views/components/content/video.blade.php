@extends('layouts.home')

@section('content')
    <div class="container mt-3 p-2">

        <div class="container p-2 my-md-3 text-center">
            <h3>{{ $title }}</h3>
        </div>

        <div class="row p-2 justify-content-evenly content-item">

            <div class="col-6 col-sm-4 col-md-3 col-lg-2 mt-3">
                <div class="card shadow">
                    <img src="https://dummyimage.com/178x249/000/ffffff&text=dummy+videos"
                         class="card-img-top" alt="cover">
                    <div class="card-body">
                        <h5 class="card-title align-items-center d-flex p-1">Dasar Pemrograman JavaScript</h5>
                        <p class="card-text">Sebuah video tutorial pembelajaran dasar bahasa pemrograman JavaScript.</p>
                        <a href="#" class="btn btn-primary">Buka</a>
                    </div>
                </div>
            </div>

            <div class="col-6 col-sm-4 col-md-3 col-lg-2 mt-3">
                <div class="card shadow">
                    <img src="https://dummyimage.com/178x249/000/ffffff&text=dummy+videos" class="card-img-top"
                         alt="cover">
                    <div class="card-body">
                        <h5 class="card-title align-items-center d-flex p-1">Dasar Pemrograman Java</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="#" class="btn btn-primary">Buka</a>
                    </div>
                </div>
            </div>

            <div class="col-6 col-sm-4 col-md-3 col-lg-2 mt-3">
                <div class="card shadow">
                    <img src="https://dummyimage.com/178x249/000/ffffff&text=dummy+videos"
                         class="card-img-top" alt="cover">
                    <div class="card-body">
                        <h5 class="card-title align-items-center d-flex p-1">Dasar Pemrograman Python</h5>
                        <p class="card-text">Sebuah video tentang pemrograman python.</p>
                        <a href="#" class="btn btn-primary">Buka</a>
                    </div>
                </div>
            </div>

            <div class="col-6 col-sm-4 col-md-3 col-lg-2 mt-3">
                <div class="card shadow">
                    <img src="https://dummyimage.com/178x249/000/ffffff&text=dummy+videos" class="card-img-top"
                         alt="cover">
                    <div class="card-body">
                        <h5 class="card-title align-items-center d-flex p-1">Tips Membangun Website</h5>
                        <p class="card-text p-1">Berbagai macam tips yang harus diketahui untuk membangun sebauh website menjadi lebih menarik.</p>
                        <a href="#" class="btn btn-primary">Buka</a>
                    </div>
                </div>
            </div>

            <div class="col-6 col-sm-4 col-md-3 col-lg-2 mt-3">
                <div class="card shadow">
                    <img src="https://dummyimage.com/178x249/000/ffffff&text=dummy+videos" class="card-img-top"
                         alt="cover">
                    <div class="card-body">
                        <h5 class="card-title align-items-center d-flex p-1">Nama Video</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="#" class="btn btn-primary">Buka</a>
                    </div>
                </div>
            </div>

            <div class="col-6 col-sm-4 col-md-3 col-lg-2 mt-3">
                <div class="card shadow">
                    <img src="https://dummyimage.com/178x249/000/ffffff&text=dummy+videos" class="card-img-top"
                         alt="cover">
                    <div class="card-body">
                        <h5 class="card-title align-items-center d-flex p-1">Nama Video</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="#" class="btn btn-primary">Buka</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

