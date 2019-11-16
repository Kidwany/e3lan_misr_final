@extends('website.layouts.layouts')
@section('title', 'Campaign')

@section('content')

    <!--== Project Banner Start ==-->
    <section class="remove-padding cover-bg" style="background-image: url({{asset($billboard->image->path)}}); height: 80vh">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 remove-padding">
                </div>
            </div>
        </div>
    </section>
    <!--== Project Banner End ==-->


    <section class="white-bg bordered-bg">
        @include('dashboard.layouts.messages')
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-8 col-xs-12 xs-mb-30">
                    <h2 class="roboto-font font-300">{{$billboard->billboard_en->name}}</h2>
                    <p> {{$billboard->billboard_en->description}}</p>
                    <p class="mt-30">
                    <div class="tr-modal-popup">
                        <a href="#details-popup"  data-effect="mfp-zoom-in" class="btn btn-md btn-dark-outline btn-animate btn-square">
                            <span>Add To Your Next Campaign <i class="tr-icon icofont icofont-arrow-right"></i>
                            </span>
                        </a>
                    </div>
                    </p>

                    <div id="details-popup" class="white-bg all-padding-30 mfp-with-anim mfp-hide centerize-col col-lg-4 col-md-6 col-sm-7 col-xs-11 text-center">
                        <span class="text-uppercase font-25px font-600 mb-10 display-block dark-color">Enter Duration</span>
                       
                        <!-- -------------------- Tabs --------------------------- -->
                        <div class="row mt-30 tabs-style-01">
                            <div class="col-md-12">
                                <form name="contact-form" action="{{url('add-to-campaign')}}" method="POST" class="contact-form-style-01">
                                    @csrf
                                    @method('post')
                                    <input type="hidden" name="code" value="{{$billboard->id}}">
                                    <div class="messages"></div>
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="form-group">
                                                <label for="from">From</label>
                                                <input type="date" name="from" class="md-input" id="from"  placeholder="Email *" required data-error="Please Enter Valid Email">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-12">
                                            <div class="form-group">
                                                <label for="to">To</label>
                                                <input type="date" name="to" class="md-input" id="to" placeholder="Password" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="mt-10" style="display: flex; flex-direction: row; justify-content: center">
                                            <button type="submit" class="btn btn-color btn-md btn-default" href="clients.html"><i class="fa fa-filter"></i> Add To Campaign</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>


                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 xs-mb-30">
                    <ul class="portfolio-meta">
                        <li><span> Location </span> {{$billboard->parentLocation->parentLocation_en->location}}</li>
                        <li><span> Zone </span> {{$billboard->childLocation->childLocation_en->location}}</li>
                        <li><span> Area </span> {{$billboard->childOfChildLocation->childOfChildLocation_en->location}}</li>
                        <li><span> Size </span> {{$billboard->billboardSize->size}}</li>
                        <li><span> Dimensions </span> {{$billboard->dimension}}</li>
                        <li><span> Category </span><a href="{{url('services?service=' . $billboard->service->{'service_' . currentLang()}->title)}}"> {{$billboard->service->{'service_' . currentLang()}->title }}</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="white-bg mt-10">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12 centerize-col wow fadeInUp text-center" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                    <h2 class="mt-0 font-300 roboto-font mb-0">Billboard Location</h2>
                </div>
            </div>
        </div>
    </section>

    <iframe src="{{$billboard->location}}" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

  

@endsection
