@extends('website.layouts.layouts')
@section('title', 'Campaign')

@section('content')

  <!--== Page Title Start ==-->
  <div class="transition-none">
        <section class="title-hero-bg parallax-effect" style="background-image: url({{url('website')}}/assets/images/services/camp_cover.jpg);">
            <div class="container">
                <div class="page-title text-center white-color">
                    <h1>Build Your Campaign</h1>
                    <h4 class="text-uppercase mt-30">Build Your Next Campaign with E3lan Misr</h4>
                </div>
            </div>
        </section>
    </div>
    <!--== Page Title End ==-->

    <!--== Featured Product Start ==-->
    <section style="min-height: 350px">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-9 col-xs-12 xs-mb-50">
                   @foreach($buildCamps as $buildCamp)
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="product-item tr-products">
                            <div class="product-image tr-product-thumbnail">
                                <a href="{{url('serviceDetails')}}/{{$buildCamp->id}}">
                                    <img class="img-responsive" src="{{$buildCamp->image->path}}" alt="torneo-product"/>
                                </a>
                                <div class="product-action">
                                    <div class="tr-modal-popup">
                                        <a href="#details-popup" data-effect="mfp-zoom-in" class="btn-shopping btn-light btn-md btn-square btn" type="button" value="Add to Cart">
                                            <i class="icofont icofont-mega-phone"></i> <span>Add to Campaign </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="wrap-label">
                                    <span class="label-product new-label">New</span>
                                    <!--<span class="label-product sale-label">-50%</span>-->
                                </div>
                            </div>
                            <div class="tr-product-content">
                                <h4><a href="{{url('serviceDetails')}}/{{$buildCamp->id}}" class="tr-product-title" title="Stitchout Boot">{{@$buildCamp->service_en->title}}</a></h4>
                                <div class="product-price tr-product-price">
                                    <span class="tr-product-price-price">#AGD009</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                  

                </div>
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="widget sidebar_widget">
                        <h5 class="aside-title text-uppercase">Choose Zone</h5>
                        <form method="get">
                            <select name="orderby" style="color: #333">
                                <option value="menu_order" selected="selected">All Zones </option>
                                <option value="popularity">6 October Bridge</option>
                                <option value="rating">Mohandessin & 15th May</option>
                                <option value="date">Mehwar 26th July</option>
                                <option value="price">El Sheikh Zayed/ 6 October City</option>
                                <option value="price-desc">Cairo Alex Desert Road</option>
                                <option value="price-desc">El Wahat Road</option>
                                <option value="price-desc">Waslet Dahshour</option>
                            </select> <input type="hidden" name="paged" value="1">
                            <!--<input type="text" name="name" class="md-input" id="search" required="" placeholder="Type what it's your mind...">-->
                        </form>
                    </div>

                    <div class="widget sidebar_widget">
                        <h5 class="aside-title text-uppercase">Choose Area</h5>
                        <select name="orderby" style="color: #333">
                            <option value="menu_order" selected="selected">All Areas </option>
                            <option value="popularity">Nasr City</option>
                            <option value="rating">Ramsees - Ghamra</option>
                            <option value="date">Heliopolis</option>
                            <option value="price">Dokki</option>

                        </select> <input type="hidden" name="paged" value="1">
                    </div>

                    <div class="widget sidebar_widget display-block">
                        <h5 class="aside-title text-uppercase">Choose Sizes</h5>
                        <div class="row">
                            <div class="container-fluid">
                                <div class="col-lg-6">
                                    <div class="form-check">
                                        <input type="checkbox" name="vehicle1" value="Bike"> Large<br>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-check">
                                        <input type="checkbox" name="vehicle1" value="Bike">Mega<br>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-check">
                                        <input type="checkbox" name="vehicle1" value="Bike"> Small<br>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>

               

                    <div class="row">
                        <div class="mt-40" style="display: flex; flex-direction: row; justify-content: center">
                            <a class="btn btn-color btn-md btn-default" href="clients.html"><i class="fa fa-filter"></i> Filter</a>
                        </div>
                    </div>
                  

                </div>
            </div>
        </div>

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


    </section>
    <!--== Featured Product End ==-->

  


  

@endsection
