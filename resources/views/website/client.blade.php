@extends('website.layouts.layouts')
@section('title', 'Clients')

@section('content')

    <!--== Page Title Start ==-->
    <div class="transition-none">
        <section class="title-hero-bg parallax-effect" style="background-image: url({{assetPath('website/assets/images/clients/clients_bg.jpg')}});">
            <div class="container">
                <div class="page-title text-center white-color">
                    <h1>Our Clients</h1>
                    <h4 class="text-uppercase mt-30">Be one of our valuable clients</h4>
                </div>
            </div>
        </section>
    </div>
    <!--== Page Title End ==-->


    <section class="white-bg">
        <div class="container">
            <div class="row">
            </div>
            <div class="row mt-50">
                <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                    <div class="white-bg text-center display-table mb-30 full-width client-logo-height">
                        <div class="">
                            <a href="#"><img src="assets/images/clients/client-banque-du-caire-landscape-image-2019-jul-19.png" alt="01"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                    <div class="white-bg text-center display-table mb-30 full-width client-logo-height">
                        <div class="">
                            <a href="#"><img src="assets/images/clients/Egypt Post.png" alt="02"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                    <div class="white-bg text-center display-table mb-30 full-width client-logo-height">
                        <div class="">
                            <a href="#"><img src="assets/images/clients/Exxon Mobil.png" alt="03"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                    <div class="white-bg text-center display-table mb-30 full-width client-logo-height">
                        <div class="v-align-middle">
                            <a href="#"><img src="assets/images/clients/Orange.png" alt="04"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                    <div class="white-bg text-center display-table mb-30 full-width client-logo-height">
                        <div class="">
                            <a href="#"><img src="assets/images/clients/Ghabbour Auto.png" alt="05"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection
