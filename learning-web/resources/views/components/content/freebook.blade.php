@extends('layouts.home')

@section('content')
    <div class="container mt-3 p-2">

        <div class="container p-2 my-md-3 text-center">
            <h3>{{ $title }}</h3>
        </div>

        <div class="row p-2 justify-content-evenly content-item">

            <div class="col-6 col-sm-4 col-md-3 col-lg-2 mt-3">
                <div class="card shadow">
                    <img src="{{ asset('images/cover-books/HTML5NotesForProfessionalsCover.png') }}"
                         class="card-img-top" alt="cover">
                    <div class="card-body">
                        <h5 class="card-title align-items-center d-flex p-1">HTML5 Notes for Professional</h5>
                        <p class="card-text">Ini adalah buku gratis tidak resmi yang dibuat untuk tujuan pendidikan dan
                            tidak berafiliasi dengan grup atau perusahaan HTML5 resmi. Semua merek dagang dan merek
                            dagang terdaftar adalah properti dari pemiliknya masing-masing.</p>
                        <a href="/buku-gratis/buku1" class="btn btn-primary">Buka</a>
                    </div>
                </div>
            </div>

            <div class="col-6 col-sm-4 col-md-3 col-lg-2 mt-3">
                <div class="card shadow">
                    <img src="{{ asset('images/cover-books/CSSNotesForProfessionalCover.png') }}" class="card-img-top"
                         alt="cover">
                    <div class="card-body">
                        <h5 class="card-title align-items-center d-flex p-1">CSS Notes for Professional</h5>
                        <p class="card-text p-1">Ini adalah buku gratis tidak resmi yang dibuat untuk tujuan pendidikan
                            dan tidak berafiliasi dengan grup atau perusahaan HTML5 resmi. Semua merek dagang dan merek
                            dagang terdaftar adalah properti dari pemiliknya masing-masing.</p>
                        <a href="/buku-gratis/buku2" class="btn btn-primary">Buka</a>
                    </div>
                </div>
            </div>

            <div class="col-6 col-sm-4 col-md-3 col-lg-2 mt-3">
                <div class="card shadow">
                    <img src="https://dummyimage.com/178x249/000/ffffff&text=dummy+images" class="card-img-top"
                         alt="cover">
                    <div class="card-body">
                        <h5 class="card-title align-items-center d-flex p-1">Nama Buku</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="#" class="btn btn-primary">Buka</a>
                    </div>
                </div>
            </div>

            <div class="col-6 col-sm-4 col-md-3 col-lg-2 mt-3">
                <div class="card shadow">
                    <img src="https://dummyimage.com/178x249/000/ffffff&text=dummy+images" class="card-img-top"
                         alt="cover">
                    <div class="card-body">
                        <h5 class="card-title align-items-center d-flex p-1">Nama Buku</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="#" class="btn btn-primary">Buka</a>
                    </div>
                </div>
            </div>

            <div class="col-6 col-sm-4 col-md-3 col-lg-2 mt-3">
                <div class="card shadow">
                    <img src="https://dummyimage.com/178x249/000/ffffff&text=dummy+images" class="card-img-top"
                         alt="cover">
                    <div class="card-body">
                        <h5 class="card-title align-items-center d-flex p-1">Nama Buku</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="#" class="btn btn-primary">Buka</a>
                    </div>
                </div>
            </div>

            <div class="col-6 col-sm-4 col-md-3 col-lg-2 mt-3">
                <div class="card shadow">
                    <img src="https://dummyimage.com/178x249/000/ffffff&text=dummy+images" class="card-img-top"
                         alt="cover">
                    <div class="card-body">
                        <h5 class="card-title align-items-center d-flex p-1">Nama Buku</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="#" class="btn btn-primary">Buka</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
