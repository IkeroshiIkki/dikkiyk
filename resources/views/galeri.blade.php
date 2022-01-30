@extends('layout/main')

@section('container')

<section>
<div class="jumbotron jumbotronberita jumbotron-fluid text-white">
    <div class="container ">
        <h1 class="display-3"><span style="font-family: poppins;">Galeri</span></h1>
    </div>
</div>
</section>

<section>
    <div class="container">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="{{ url('images/buaya.png') }}" class="d-block w-100" alt="..." height="400px">
                </div>
                <div class="carousel-item">
                <img src="{{ url('images/buaya.png') }}" class="d-block w-100" alt="..." height="400px">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div class="row mt-4">
            <div class="col-lg-3">
                <img src="{{ url('images/elang.png') }}" alt="" width="250">
            </div>
            <div class="col-lg-3">
                <img src="{{ url('images/rusa.png') }}" alt="" width="250">
            </div>
            <div class="col-lg-3">
                <img src="{{ url('images/gajah.png') }}" alt="" width="250">
            </div>
            <div class="col-lg-3">
                <img src="{{ url('images/kakatua.png') }}" alt="" width="250">
            </div>
        </div>
        <div class="row mt-4 mb-5">
            <div class="col-lg-3">
                <img src="{{ url('images/kudanil.png') }}" alt="" width="250">
            </div>
            <div class="col-lg-3">
                <img src="{{ url('images/orangutan.png') }}" alt="" width="250">
            </div>
            <div class="col-lg-3">
                <img src="{{ url('images/karang.png') }}" alt="" width="250">
            </div>
            <div class="col-lg-3">
                <img src="{{ url('images/komodo.png') }}" alt="" width="250">
            </div>
        </div>
    </div>
</section>

@endsection