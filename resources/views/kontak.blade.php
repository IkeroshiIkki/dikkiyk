@extends('layout/main')

@section('container')

<section>
<div class="jumbotron jumbotronberita jumbotron-fluid text-white">
    <div class="container ">
        <h1 class="display-3"><span style="font-family: poppins;">Kontak</span></h1>
    </div>
</div>
</section>

<section>
    <div class="container">
        <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1980.1993248615554!2d107.67446407196411!3d-6.962211260281012!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68c3f7d595b4c5%3A0x1d66c153c5df0ec5!2sKomp.%20Bandung%20Indah%20Raya%20Blok%20C9%20No.20%2C%20Mekarjaya%2C%20Kec.%20Rancasari%2C%20Kota%20Bandung%2C%20Jawa%20Barat%2040292!5e0!3m2!1sen!2sid!4v1600833565289!5m2!1sen!2sid" width="1125" height="250" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></p>
        <h1 class="display-4 judul mt-4">Kontak Kami</h1>
        <div class="row">
            <div class="col-lg-8">
                <form action="">
                    <div class="form-group" >
                        <div class="input-group">
                            <textarea class="form-control bg-light rounded-0" placeholder="Deskripsi" rows="10"></textarea>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-4">
            <form action="">
                <div class="form-group" >
                    <div class="input-group">
                        <div class="row areakecil">
                            <textarea class="form-control bg-light rounded-0" placeholder="Subject" rows="1"></textarea>
                            <textarea class="form-control bg-light mt-4 rounded-0" placeholder="Nama" rows="1"></textarea>
                            <textarea class="form-control bg-light mt-4 rounded-0" placeholder="Email" rows="1"></textarea>
                            <button type="submit" class="btn btn-success btn-block py-3 px-5 mt-3 rounded-0" >Kirim <img src="{{ url('svg/send.svg') }}"></a></button>
                        </div>
                    </div>
                </div>
            </form>
            </div>
        </div>
        <div class="row mt-2 mb-5 "> 
            <div class="col-lg-4 ">
                <div class="circle">
                <img class="card-img-top gambarkontak " src="{{ url('svg/mail.svg') }}" alt="Card image cap">
                <h4 class="card-title mt-2" style="">Email</h4>
                <p class="card-text lead leadkontak">tropisianimal@gmail.com</p>
            </div>
            </div>
            <div class="col-lg-4">
                <div class="circle">
                <img class="card-img-top gambarkontak " src="{{ url('svg/phone.svg') }}" alt="Card image cap">
                <h4 class="card-title mt-2" style="">Phone</h4>
                <p class="card-text lead leadkontak" >+64 821 1513 7496</p>
            </div>
            </div>
            <div class="col-lg-4">
                <div class="circle">
                <img class="card-img-top gambarkontak " src="{{ url('svg/map-pin.svg') }}" alt="Card image cap">
                <h4 class="card-title mt-2" style="">Location</h4>
                <p class="card-text lead leadkontak" >Kota Bandung, Jawa Barat <br>Indonesia</p>
            </div>
            </div>
        </div>
    </div>
</section>


@endsection