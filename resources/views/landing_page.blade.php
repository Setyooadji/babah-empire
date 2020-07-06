@extends('layouts/main')

@section('container')
<!--================Home Banner Area =================-->
<section class="home_banner_area">
    <div class="banner_inner d-flex align-items-center">
        <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
        <div class="container" style="height:-200px;">
            <div class="banner_content text-center" data-aos-anchor-placement="top-bottom">            
                <h3>Find your homey residential here <br>with Anugerah Pratama Lazuardi</h3>
                <a class="main_btn page-scroll" href="#portfolio">Find now</a>
            </div>
        </div>
    </div>
</section>
<!--================End Home Banner Area =================-->


<!--================Service  Area =================-->
<section class="service-area area-padding">
    <div class="container">
        <div class="area-heading" data-aos="fade-top">
            <h3 class="line">What We Provide</h3>
        </div>
        <div class="row">
            <!-- Single service -->
            <div class="col-md-6 col-xl-3">
                <div class="single-service">
                    <div class="service-icon" data-aos="fade-right">
                        <img src="{{ URL::asset('images/icon/murah.svg') }}" alt="">
                    </div>
                    <div class="service-content" data-aos="fade-left">
                        <h5>Harga yang bersaing</h5>
                        <p>PT. Anugerah Pratama Lazuardi hadir untuk membantu masyarakat yang menginginkan rumah minimalis dengan harga yang terjangkau. </p>
                    </div>
                </div>
            </div>
            <!-- Single service -->
            <div class="col-md-6 col-xl-3">
                <div class="single-service">
                    <div class="service-icon" data-aos="fade-right">
                        <img src="{{ URL::asset('images/icon/lokasi.svg') }}" alt="" style="margin-top:-8px;">
                    </div>
                    <div class="service-content" data-aos="fade-left">
                        <h5>Lokasi yang strategis</h5>
                        <p>Lokasi yang strategis dan mudah dijangkau dari manapun merupakan target kami untuk mempermudah konsumen memenuhi kebutuhan. </p>
                    </div>
                </div>
            </div>
            <!-- Single service -->
            <div class="col-md-6 col-xl-3">
                <div class="single-service">
                    <div class="service-icon" data-aos="fade-right">
                        <img src="{{ URL::asset('images/icon/mudah.svg') }}" alt="">
                    </div>
                    <div class="service-content" data-aos="fade-left">
                        <h5>Proses kpr mudah</h5>
                        <p>Kami akan membantu anda dalam melakukan proses pencairan kpr dengan dp minimum untuk mendapatkan rumah hunian yang diimpikan. </p>
                    </div>
                </div>
            </div>
            <!-- Single service -->
            <div class="col-md-6 col-xl-3">
                <div class="single-service">
                    <div class="service-icon" data-aos="fade-right">
                        <img src="{{ URL::asset('images/icon/terpercaya.svg') }}" alt="">
                    </div>
                    <div class="service-content" data-aos="fade-left">
                        <h5>Terpercaya</h5>
                        <p>PT. Anugerah Pratama Lazuardi telah menyelesaikan 10 proyek, oleh karena itu kami akan terus menjaga kualitas dan kepuasan konsumen. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================Service Area end =================-->

<!--================Funny number  Area =================-->
<section class="number-area" id="number-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5 col-lg-5">
                <div class="number-img" data-aos="fade-right">
                    <img src="{{ URL::asset('images/banner/about6.png') }}" alt="">
                </div>
            </div>
            <div class="col-md-7 col-lg-6">
                <div class="number-content" data-aos="fade-left">
                    <h4>Menawarkan Kualitas Dan <br>
                        Kepuasan Konsumen</h4>
                    <p>Kami menawarkan kualitas bahan bangunan yang kokoh, awet, dan tahan lama<br> kepuasan dari konsumen selalu menjadi bagian dari semangat kami untuk membantu anda mendapatkan rumah impian.</p>
                    <div class="number-wrapper">
                        <div class="single-number">
                            <h5><span class="counter">100</span>+</h5>
                            <p>happy customer</p>
                        </div>
                        <div class="single-number">
                            <h5><span class="counter">10</span></h5>
                            <p>Project Done</p>
                        </div>
                        <div class="single-number">
                            <h5><span class="counter">9.5</span>/<span class="counter">10</span></h5>
                            <p>Average Rating</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================Funny number Area end =================-->



<!--================ Start Portfolio Area =================-->
<section class="portfolio_area area-padding" id="portfolio">
    <div class="container">
        <div class="area-heading">
            <h3 class="line">Project</h3>
        </div>
        <div class="card-grid col-6">
            @foreach($proyek as $p)
                <a class="card" href="#">
                <div class="card__background" style="background-image: url( {{ url('/data_file/'.$p->file) }} )">
                    </div>
                    <div class="card__content">
                        <p class="card__category">Project</p>
                        <h3 class="card__heading">{{$p->nama_proyek}}</h3>
                        <p class="card__category">{{$p->alamat_proyek}}</p>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</section>

<!--================ End Portfolio Area =================-->

<!--================ Start Testimonial Area =================-->
<section class="testimonial-area area-padding">
    <div class="container">
        <div class="area-heading">
            <h3 class="line">Marketing</h3>   
        </div>
        <div class="row">
            <div class="active-testimonial-carusel owl-carousel">
                @foreach($marketing as $m)
                <div class="single-testimonial item d-flex flex-row">
                    <div class="thumb">
                        <img class="img-fluid" src="{{ url('/data_file/'.$m->file) }}" alt="">
                    </div>
                    <div class="desc">
                        <h4>{{$m->nama_marketing}}</h4>
                        <p class="designation">{{$m->jabatan}}</p>
                        <p class="designation">{{$m->email_marketing}}</p>
                        <p>
                            {{$m->notlp_marketing}}
                        </p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!--================ End Testimonial Area =================-->



@endsection