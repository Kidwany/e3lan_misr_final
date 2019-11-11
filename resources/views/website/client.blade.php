@extends('website.layouts.layouts')
@section('title', 'Clients')

@section('content')

    <!-- start page title section -->
    <section class="wow fadeIn parallax" data-stellar-background-ratio="0.5"
             style="background-image:url('{{asset('website/images/bkg/bkg-2.jpg')}}');">
        <div class="opacity-medium bg-extra-dark-gray"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 extra-small-screen display-table page-title-large">
                    <div class="display-table-cell vertical-align-middle text-center">
                        <!-- start page title -->
                        <h1 class="text-white alt-font font-weight-600 letter-spacing-minus-1 margin-10px-bottom">
                            Our Valuable Clients
                        </h1>
                        <!-- end page title -->
                        <!-- start sub title -->
                        <span class="text-white opacity6 alt-font">More than 20 clients around the world</span>
                        <!-- end sub title -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end page title section -->


    <!-- start clients logo section -->
    <section class="bg-light-gray">
        <div class="container">
            <div class="row">
                @if($clients)
                    @foreach($clients as $client)
                        <!-- start client logo item -->
                            <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp">
                                <div class="bg-white clients-list text-center display-table width-100 margin-30px-bottom">
                                    <div class="display-table-cell vertical-align-middle">
                                        <a href="#"><img src="{{asset($client->image->path)}}" alt="" /></a>
                                    </div>
                                </div>
                            </div>
                            <!-- end client logo item -->
                    @endforeach
                @endif
            </div>
        </div>
    </section>
    <!-- end clients logo section -->


    <!-- start testimonials section -->
    {{--<section class="wow fadeIn animated bg-light-gray">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12">
                    <p class="alt-font text-medium-gray margin-5px-bottom text-uppercase text-small">what people says</p>
                    <h5
                        class="text-uppercase alt-font text-extra-dark-gray margin-20px-bottom font-weight-700 sm-width-100 xs-width-100">
                        Testimonials</h5>
                    <span
                        class="separator-line-horrizontal-medium-light2 bg-deep-pink display-table margin-auto width-100px"></span>
                </div>
            </div>
            <div class="row">
                <div class=" margin-100px-top sm-margin-70px-top sm-width-60 sm-center-col xs-width-100 xs-margin-50px-top">
                    <div class="col-md-4 sm-margin-two-bottom wow fadeIn last-paragraph-no-margin testimonial-style3">
                        <div
                            class="testimonial-content-box padding-twelve-all bg-white border-radius-6 box-shadow arrow-bottom sm-padding-eight-all">
                            I wanted to hire the best and after looking at several other companies, I knew Jacob was the perfect guy
                            for the job. He is a true professional.
                        </div>
                        <!-- start testimonials item -->
                        <div class="testimonial-box padding-25px-all xs-padding-20px-all">
                            <div class="image-box width-20"><img src="images/testimonials/7c16b2aaf4927f77604ce8293dc08cbf.png"
                                                                 class="border-radius-100" alt="">
                            </div>
                            <div class="name-box padding-20px-left">
                                <div class="alt-font font-weight-600 text-small text-uppercase text-extra-dark-gray">Fatma ramy
                                </div>
                                <p class="text-extra-small text-uppercase text-medium-gray">Graphic Designer</p>
                            </div>
                        </div>
                    </div>
                    <!-- end testimonials item -->
                    <!-- start testimonials item -->
                    <div class="col-md-4 sm-margin-two-bottom wow fadeIn last-paragraph-no-margin testimonial-style3"
                         data-wow-delay="0.2s">
                        <div
                            class="testimonial-content-box padding-twelve-all bg-white border-radius-6 box-shadow arrow-bottom sm-padding-eight-all">
                            This is an excellent company! I personally enjoyed the energy and the professional support the whole team
                            gave to us into creating website.
                        </div>
                        <div class="testimonial-box padding-25px-all xs-padding-20px-all">
                            <div class="image-box width-20"><img src="images/testimonials/avtar-15.jpg" class="border-radius-100"
                                                                 alt="">
                            </div>
                            <div class="name-box padding-20px-left">
                                <div class="alt-font font-weight-600 text-small text-uppercase text-extra-dark-gray">Moahmed alaa
                                </div>
                                <p class="text-extra-small text-uppercase text-medium-gray">Creative Director</p>
                            </div>
                        </div>
                    </div>
                    <!-- end testimonials item -->
                    <!-- start testimonials item -->
                    <div class="col-md-4 wow fadeIn last-paragraph-no-margin testimonial-style3" data-wow-delay="0.4s">
                        <div
                            class="testimonial-content-box padding-twelve-all bg-white border-radius-6 box-shadow arrow-bottom sm-padding-eight-all">
                            Their team are easy to work with and helped me make amazing websites in a short amount of time. Thanks
                            again guys for all your hard work.
                        </div>
                        <div class="testimonial-box padding-25px-all xs-padding-20px-all">
                            <div class="image-box width-20"><img src="images/testimonials/d11b13f43b7fc7950386ec9c99c80800.png"
                                                                 class="border-radius-100" alt="">
                            </div>
                            <div class="name-box padding-20px-left">
                                <div class="alt-font font-weight-600 text-small text-uppercase text-extra-dark-gray">Foad fahmey</div>
                                <p class="text-extra-small text-uppercase text-medium-gray">Co Founder / CEO</p>
                            </div>
                        </div>
                    </div>
                    <!-- end testimonials item -->
                </div>
            </div>
        </div>
    </section>--}}
    <!-- end testimonials section -->


@endsection
