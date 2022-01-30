@extends('layout/main')

@section('container')

<div class="jumbotron jumbotronberita jumbotron-fluid text-white">
    <div class="container ">
        <h1 class="display-3"><span style="font-family: poppins;">Berita</span></h1>
    </div>
</div>


<section>
    <div class="container">
        <div class="row mb-5 mt-5">
            <div class="div col-lg-6 ">
                <div class="row">
                    <div class="col-lg-6 ">
                        <img src="{{ url('images/gajahpotrait.png') }}" alt="" width="255px">
                    </div>
                    <div class="col-lg-6">
                        <img src="{{ url('images/badak.png') }}" alt="" width="255" height="190" style="margin-bottom:22px;">
                        <img src="{{ url('images/kudanil.png') }}" alt="" width="255" height="240">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <h1 class="display-4 judul" style="font-size:50px !important;">10 Hewan Herbivora<br>Yang Berbahaya</h1>
                    <p class="leadfont lead" style="font-weight:bold;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam in, qui laboriosam odit, soluta nisi voluptas ex voluptate aut architecto a itaque temporibus debitis autem earum unde consequatur ipsum accusantium?</p>
                    <p class="leadfont lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam in, qui laboriosam odit, soluta nisi voluptas ex voluptate aut architecto a itaque temporibus debitis autem earum unde consequatur ipsum accusantium?</p>
                <a href="#" class="btn btn-success">&nbsp; Baca Selengkapnya&nbsp; 🠖</a>
            </div>
        </div>
    </div>
</section>


<section id="berita">
<div class="jumbotron-fluid">
    <div class="container">
      <h1 class="display-4 text-black pt-5">Berita Lainnya</h1>
      <div class="row mt-4">
        <div class="col-lg-4">
          <div class="cardberita">
            <div class="card" style="width: 22rem;">
              <img src="{{ url('images/harimau.png') }}" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="judulberita card-text">Apa Kabar Kebun Binatang Saat Wabah Covid 19?</p>
                <p class="previewberita card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus, perspiciatis!</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="cardberita">
            <div class="card" style="width: 22rem;">
              <img src="{{ url('images/burung.png') }}" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="judulberita card-text">Anugrah Dari Hutan <br> Indonesia</p>
                <p class="previewberita card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus, perspiciatis!</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="cardberita">
            <div class="card" style="width: 22rem;">
              <img src="{{ url('images/badak.png') }}" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="judulberita card-text">10 Hewan Herbivora Yang Berbahayuk</p>
                <p class="previewberita card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus, perspiciatis!</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-3">
        <div class="col-lg-4">
          <div class="cardberita">
            <div class="card" style="width: 22rem;">
              <img src="{{ url('images/harimauputih.png') }}" class="card-img-top" alt="..." height="200px">
              <div class="card-body">
                <p class="judulberita card-text">4 Penyakit Yang Ditularkan Hewan Ke Manusia</p>
                <p class="previewberita card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus, perspiciatis!</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="cardberita">
            <div class="card" style="width: 22rem;">
              <img src="{{ url('images/karang.png') }}" class="card-img-top" alt="..." height="200px">
              <div class="card-body">
                <p class="judulberita card-text">Terumbu Karang: Pengertian, Jenis, Sebaran, dan Masalah</p>
                <p class="previewberita card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus, perspiciatis!</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="cardberita">
            <div class="card" style="width: 22rem;">
              <img src="{{ url('images/rusa.png') }}" class="card-img-top" alt="..." height="200px">
              <div class="card-body">
                <p class="judulberita card-text">Ternyata, Tanduk Rusa Berasal dari Sel Kanker Tulang</p>
                <p class="previewberita card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus, perspiciatis!</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </section><br><br>

@endsection