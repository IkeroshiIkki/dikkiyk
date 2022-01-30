@extends('layout/main')

@section('container')

<section>
<div class="jumbotron jumbotronberita jumbotron-fluid text-white">
    <div class="container ">
        <h1 class="display-3"><span style="font-family: poppins;">Tentang Kami</span></h1>
    </div>
</div>
</section>

<section id="tentangkami">
<div class="jumbotron2 jumbotron-fluid bg-white " id="home" >
    <div class="container">
    <div class="row">
        <div class="col-lg-6">
            <h1 class="display-4 judul">Tropisianimal</h1>
            <p class="leadfont lead" style="font-weight:bold;">Kami merupakan orgianisasi pencinta hewan langka di Indonesia yang berfokus untuk membudidayakan dan memelihara hewan langka yang ada didunia.</p>
            <p class="leadfont lead">Mari bersama-sama kita sukseskan misi penyelamatan hewan langka yang ada didunia untuk masa depan anak dan cucu kita kelak. semua hal dimulai dari diri kita sendiri.</p>
        </div>
        <div class="col-lg-6">
        <div class="row">
            <div class="col-lg-6">
            <img src="{{ url('images/bunglon.png') }}" width="250"   alt="">
            </div>
            <div class="col-lg-6 ">
            <img src="{{ url('images/orangutan.png') }}" width="250"   alt="">
            </div>
            <div class="col-lg-12 mt-3">
            <img src="{{ url('images/harimauputih.png') }}" width="535"   alt="">
            </div>
        </div>
        </div>
    </div>
    </div>
</div>
</section>

<section>
<div class="container mt-3">
    <h1 class="display-4 judul">Visi</h1>
    <p class="leadfont lead" style="font-weight:bold;">“Terwujudnya kesadaran manusia tentang pemeliharaan dan pembudidayaan hewan langka di dunia"</p>
    <h1 class="display-4 judul mt-5">Misi</h1>
    <p class="leadfont lead" style="font-weight:bold;">1. Mengadakan kegiatan-kegiatan pemeliharaan dan pembudidayaan hewan langka.</p>
    <p class="leadfont lead" style="font-weight:bold;">2. Mengadakan rescue untuk menyelamatkan hewan-hewan langka.</p>
    <p class="leadfont lead" style="font-weight:bold;">3. Mempererat tali persaudaraan dengan pertemuan-pertemuan rutin.</p>

    <br><br>
</div>
</section>

@endsection