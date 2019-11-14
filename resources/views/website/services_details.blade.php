@extends('website.layouts.layouts')
@section('title', 'Campaign')

@section('content')

    <!--== Project Banner Start ==-->
    <section class="remove-padding cover-bg" style="background-image: url({{url('website')}}/assets/images/services/Picture2.png); height: 80vh">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 remove-padding">
                </div>
            </div>
        </div>
    </section>
    <!--== Project Banner End ==-->

    <section class="white-bg bordered-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-8 col-xs-12 xs-mb-30">
                    <h2 class="roboto-font font-300">{{@$services->service_en->title}}</h2>
                    <p> {{@$services->service_en->description}}</p>
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
                                <form name="contact-form" action="#" method="POST" class="contact-form-style-01">
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
                        <li><span> Zone </span> Greater Cairo</li>
                        <li><span> Area </span> Al Abbasya</li>
                        <li><span> Size </span> Mega</li>
                        <li><span> Dimensions </span> 15m * 9m</li>
                        <li><span> Category </span><a href="#"> OOH Media</a></li>
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

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11283.479011416117!2d31.257839274354346!3d30.06479176276653!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14583f793811485f%3A0x18d94e1a49683396!2s6th%20of%20October%20Bridge!5e0!3m2!1sen!2seg!4v1573407664310!5m2!1sen!2seg" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

  

@endsection
