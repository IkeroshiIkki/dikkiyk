<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/ico" href="{{ url('svg/pawprint.svg') }}" >

    <title>Tropisianimal</title>
  </head>
  <body>
    <header>
        <div class="container">
          <nav class="navbar navbar-expand-md navbar-dark scrolling-navbar">
            <a class="navbar-brand text-white" href="#">
              <img src="{{ url('images/Tropisianimaltext.png') }}" width="150"   alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="{{ url('/')}}">HOME <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ url('/tentang')}}">TENTANG</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ url('/berita')}}">BERITA</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ url('/galeri')}}">GALERI</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ url('/kontak')}}">KONTAK</a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
        </header>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script>

        $(window).scroll(function(){
            if($window).scrollTop()){
                $("nav").addClass("black");
            }else{
                $("nav").removeClass('black');
            }
        });
    </script>
         

    
    
    @yield('container')

    
  <section>
    <div class="footer">
      <div class="container">
        <div class="footer-content text-white pt-5">
          <div class="row">
            <div class="col-lg-4">
              <a href=""><img src="{{ url('images/Tropisianimaltext.png') }}" width="200" alt=""></a><br><br>
              <p class="lead text-secondary footerbold">Komunitas hewan langka yang ada di Indonesia, yang berfokus pada pemeliharaan dan pembudidayaan hewan langka yang ada didunia. </p>
              <div class="row">
                <a class="ml-3" href="">
                  <img class="logososmed mr-2" src="{{ url('images/facebook.png') }}" alt="">
                  <img class="logososmed" src="{{ url('images/twitter.png') }}" alt="">
                </a>
              </div>
            </div>
            <div class="col-lg-2">
              <h4>Useful links</h4>
              <p class="lead mt-4">Blog</p>
              <p class="lead">Hewan</p>
              <p class="lead">Galery</p>
              <p class="lead">Testimonial</p>
            </div>
            <div class="col-lg-2">
              <h4>Privacy</h4>
              <p class="lead mt-4">Karir</p>
              <p class="lead">Tentang Kami</p>
              <p class="lead">Kontak Kami</p>
              <p class="lead">Servis</p>
            </div>
            <div class="col-lg-4 ">
              <h4>Contact info</h4>
              <p class="lead mt-4"><img class="mr-2" src="{{ url('svg/mail.svg') }}" alt=""> tropisianimal@gmail.com</p>
              <p class="lead"><img class="mr-2" src="{{ url('svg/phone.svg') }}" alt="">+64 821 1513 7496</p>
              <p class="lead"><img class="mr-3" src="{{ url('svg/map-pin.svg') }}" alt="">Kota Bandung, Jawa Barat</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      Copyright &copy;2021 Dikki Yusuf Kartajaya | 10121034 - IF1 | All rights reserved <br><br>
    </div>
  </section>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script type="text/javascript">
        window.addEventListener('scroll', function(){
            var header = document.queryselector("header");
            header.classlist.toggle("sticky", window.scrollY > 0);
        })
    </script>
  </body>
</html>

