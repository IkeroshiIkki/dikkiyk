@extends('layout/main')

@section('container')

  <div class="jumbotron jumbotron-fluid text-white">
    <div class="container">
      <h1 class="display-3"><span style="font-family: poppins;">Hewan<br>Tropis di Dunia</span></h1>
      <div class="col">
        <p class="lead">Indonesia sebuah negara tropis dengan berbagai teritori wilayah dari darat, udara, hingga laut yang menjadikan alam Indonesia tempat yang cocok untuk hewan langka di dunia</p>
      </div>
    </div>
  </div>

  <section id="tentangkami">
    <div class="jumbotron2 jumbotron-fluid bg-white " id="home" >
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <p class="lead text-success" style="font-weight:bold;">TENTANG KAMI</p>
              <h1 class="display-4 judul">Membangun <br>Komunitas Hewan</h1>
                <p class="leadfont lead" style="font-weight:bold;">Kami membangun sebuah komunitas pencinta hewan khususnya bagi para peminat hewan langka untuk tetap melestarikan dan melindungi hewan langka yang ada didunia terutama yang ada di Indonesia</p>
                <p class="leadfont lead">Pentingnya melestarikan dan melindungi hewan langka adalah agar anak cucu kita dapat melihat dan mempelajari indahnya kehidupan di alam bebas dan juga sebagai gerakan Hak Asasi Hewan, yang berarti hewan juga berhak untuk hidup</p>
              <a href="#" class="btn btn-success">&nbsp; Baca Selengkapnya&nbsp; 🠖</a>
          </div>
          <div class="col-lg-6">
            <div class="row">
              <div class="col-lg-6">
                <img src="{{ url('images/gajah.png') }}" width="250"   alt="">
              </div>
              <div class="col-lg-6 gambartentan">
                <img src="{{ url('images/komodo.png') }}" width="250"   alt="">
              </div>
              <div class="col-lg-12 mt-3">
                <img src="{{ url('images/buaya.png') }}" width="535"   alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="kartu">
  <div class="jumbotronkartu jumbotron-fluid">
    <div class="container">
      <h1 class="display-4 text-white">Kami Membawa Anda<br> Untuk Mengetahui Lebih Dalam</h1>
      <div class="ourwork">
        <div class="row mt-4">
          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
            <div class="card card1" style="width: 15rem;">
              <img class="card-img-top gambarow" src="{{ url('svg/pawprint.svg') }}" alt="Card image cap">
              <div class="card-body">
                <h4 class="card-title" style="font-weight:bold;">Pentingnya Menjaga Hewan Langka.</h4>
                <p class="card-text lead" style="text-align:left;">Meletarikan hewan dan tumbuhan berarti melindunginya dari kepunahan.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
            <div class="card card1" style="width: 15rem;">
              <img class="card-img-top gambarow" src="{{ url('svg/pawprint.svg') }}" alt="Card image cap">
              <div class="card-body">
                <h4 class="card-title" style="font-weight:bold;">Banyaknya Hewan Langka di Indonesia.</h4>
                <p class="card-text lead" style="text-align:left;">Indonesia merupakan tempat yang strategis untuk kehidupan hewan langka. </p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
            <div class="card card1" style="width: 15rem;">
              <img class="card-img-top gambarow" src="{{ url('svg/pawprint.svg') }}" alt="Card image cap">
              <div class="card-body">
                <h4 class="card-title" style="font-weight:bold;">Komunitas Hewan Langka.</h4>
                <p class="card-text lead" style="text-align:left;">Kami membangun sebuah komunitas hewan langka di Indonesia. </p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
            <div class="card card1" style="width: 15rem;">
              <img class="card-img-top gambarow" src="{{ url('svg/pawprint.svg') }}" alt="Card image cap">
              <div class="card-body">
                <h4 class="card-title" style="font-weight:bold;">Membuat Lingkungan yang baik Untuk Hewan Langka.</h4>
                <p class="card-text lead" style="text-align:left;">Kami berusaha membuat lingkungan yang nyaman untuk hewan langka. </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </section>

  <section id="berita">
  <div class="jumbotron-fluid">
    <div class="container">
      <p class="lead text-success mt-5" style="font-weight:bold;">BERITA</p>
      <h1 class="display-4 text-black">Baca Berita Terbaru kami <br>Dalam Tropisianimal</h1>
      <div class="row mt-4">
        <div class="col-lg-4">
          <div class="cardberita">
            <div class="card" style="width: 22rem;">
              <img src="{{ url('images/harimau.png') }}" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="judulberita card-text">Apa Kabar Kebun Binatang Saat Wabah Covid 19?</p>
                <p class="previewberita card-text">Adanya covid-19 membuat perubahan signifikan pada Kebun binatang. </p>
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
                <p class="previewberita card-text">Alam Indonesia yang strategis untuk kehidupan hewan langka. </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="cardberita">
            <div class="card" style="width: 22rem;">
              <img src="{{ url('images/badak.png') }}" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="judulberita card-text">10 Hewan Herbivora Yang Berbahaya</p>
                <p class="previewberita card-text">ini beberapa hewan herbivora yang berbahaya, No 9 bikin kaget!!!</p>
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
                <p class="previewberita card-text">Adapun Penyakit yang bisa ditularkan kepada manusia. </p>
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
                <p class="previewberita card-text">Terumbu Karang di Indonesia merupakan salah satu destinasi wisata paling indah didunia. </p>
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
                <p class="previewberita card-text">Fakta-fakta menarik tentang tanduk Rusa</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </section>

  <section id="galeri">
    <div class="container">
      <p class="lead text-success mt-5" style="font-weight:bold;">GALERI</p>
      <h1 class="display-4 text-black mb-5">Lihat Lebih Banyak Hewan Tropis <br>Pada Galeri Kami</h1>
    </div>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="row">
            <div class="col-lg-3"><img src="{{ url('images/bunglon.png') }}" alt=""></div>
            <div class="col-lg-3"><img src="{{ url('images/orangutan.png') }}" alt=""></div>
            <div class="col-lg-3"><img width="520px" height="370px" src="{{ url('images/penyu.png') }}" alt=""></div>
            <div class="col-lg-3"><img src="{{ url('images/kakatua.png') }}" alt=""></div>
          </div>
        </div>
        <div class="carousel-item">
        <div class="row">
            <div class="col-lg-3"><img src="{{ url('images/bunglon.png') }}" alt=""></div>
            <div class="col-lg-3"><img src="{{ url('images/orangutan.png') }}" alt=""></div>
            <div class="col-lg-3"><img width="520px" height="370px" src="{{ url('images/penyu.png') }}" alt=""></div>
            <div class="col-lg-3"><img src="{{ url('images/kakatua.png') }}" alt=""></div>
          </div>
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
  </section>

@endsection