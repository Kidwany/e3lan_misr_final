@extends('website.layouts.layouts')
@section('title', 'Home')

@section('content')

    <!-- start slider section -->
    <section class="wow fadeIn example no-padding no-transition">
        <article class="content">
            <div id="rev_slider_1078_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container"
                 data-alias="classic4export" data-source="gallery"
                 style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
                <!-- start revolution slider 5.4.1 fullwidth mode -->
                <div id="rev_slider_1078_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.1">
                    <ul>
                        <!-- slide  -->
                        @if($slides)
                            @foreach($slides as  $key => $slide)
                                @if($key == 0)
                                    <li data-index="rs-1" data-transition="fade" data-slotamount="default" data-hideafterloop="0"
                                        data-hideslideonmobile="off" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut"
                                        data-masterspeed="200" data-thumb="{{asset($slide->image->path)}}" data-rotate="0" data-fstransition="fade"
                                        data-fsmasterspeed="100" data-fsslotamount="0" data-saveperformance="off" data-title="" data-param1=""
                                        data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8=""
                                        data-param9="" data-param10="" data-description="">
                                        <div class="opacity-extra-medium bg-black position-relative z-index-1"></div>
                                        <!-- main image -->
                                        <img src="{{asset($slide->image->path)}}" alt="Ocean" data-bgposition="center center" data-bgfit="cover"
                                             data-bgrepeat="no-repeat" data-bgparallax="1" class="rev-slidebg">
                                        <!-- layer nr. 3 -->
                                        <div class="tp-caption NotGeneric-Title tp-resizeme" data-x="['center','center','center','center']"
                                             data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                                             data-voffset="['-115','-110','-90','-90']" data-fontsize="['12','12','12','12']"
                                             data-lineheight="['20','20','20','20']" data-width="none" data-height="none" data-whitespace="nowrap"
                                             data-type="text" data-responsive_offset="on"
                                             data-frames='[{"from":"y:50px;opacity:0;","speed":1000,"to":"o:1;","delay":300,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[175%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);bw:2px 2px 2px 2px;"}]'
                                             data-textAlign="['center','center','center','center']" data-paddingtop="[10,10,10,10]"
                                             data-paddingright="[0,0,0,0]" data-paddingbottom="[10,10,10,10]" data-paddingleft="[0,0,0,0]"
                                             style="z-index: 7; white-space: nowrap; text-transform: uppercase; font-family:'Montserrat', sans-serif !important; font-weight: 500; letter-spacing:2px;">
                                            {{$slide->{'slider_'. currentLang()}->sub_title }}</div>
                                        <!-- layer nr. 4 -->
                                        <div class="tp-caption NotGeneric-SubTitle tp-resizeme " data-x="['center','center','center','center']"
                                             data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                                             data-voffset="['0','0','0','0']" data-fontsize="['70','70','60','50']"
                                             data-lineheight="['75','75','60','60']" data-width="none" data-height="none" data-whitespace="nowrap"
                                             data-type="text" data-responsive_offset="on"
                                             data-frames='[{"from":"y:50px;opacity:0;","speed":1000,"to":"o:1;","delay":600,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[175%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);bw:2px 2px 2px 2px;"}]'
                                             data-textAlign="['center','center','center','center']" data-paddingtop="[10,10,10,10]"
                                             data-paddingright="[0,0,0,0]" data-paddingbottom="[10,10,10,10]" data-paddingleft="[0,0,0,0]"
                                             style="z-index: 8; white-space: nowrap; font-family:'Montserrat', sans-serif !important; font-weight: 600; letter-spacing: -1px;">
                                            {!! $slide->{'slider_'. currentLang()}->title !!}
                                        </div>

                                        <!-- layer nr. 5 -->
                                        @if(!empty($slide->{'slider_'. currentLang()}->button))
                                            <a href="portfolio-full-width-grid-overlay.html"
                                               class="tp-caption btn btn-transparent-white btn-medium border-radius-4 z-index-5"
                                               data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                               data-y="['middle','middle','middle','middle']" data-voffset="['130','130','110','110']"
                                               data-fontsize="['12','14','14','14']" data-whitespace="nowrap"
                                               data-visibility="['on', 'on', 'on', 'on']" data-type="text" data-color="['#FFFFFF']"
                                               data-responsive_offset="on" data-responsive="on"
                                               data-frames='[{"from":"y:150px;opacity:0;","speed":1500,"to":"o:1;","delay":900,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[175%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0, 0, 0, 1.00);bc:rgba(255, 255, 255, 1.00);bw:2px 2px 2px 2px;"}]'
                                               data-textAlign="['inherit', 'inherit', 'right', 'center']" data-paddingtop="[6,6,6,6]"
                                               data-paddingright="[26,26,26,26]" data-paddingbottom="[6,6,6,6]" data-paddingleft="[26,26,26,26]"
                                               data-basealign="slide">{{$slide->{'slider_'. currentLang()}->button}}</a>
                                        @endif

                                        <!-- LAYER NR. 6 -->
                                    </li>
                                    @else
                                        <li data-index="rs-{{$key+1}}" data-transition="fade" data-slotamount="3" data-hideafterloop="0"
                                        data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="500"
                                        data-thumb="{{asset($slide->image->path)}}" data-rotate="0" data-saveperformance="off" data-title=""
                                        data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7=""
                                        data-param8="" data-param9="" data-param10="" data-description="">
                                        <div class="opacity-extra-medium bg-black position-relative z-index-1"></div>
                                        <!-- main image -->
                                        <img src="{{asset($slide->image->path)}}" alt="" data-bgposition="center center" data-bgfit="cover"
                                             data-bgrepeat="no-repeat" data-bgparallax="1" class="rev-slidebg" data-no-retina>
                                        <!-- layer nr. 3 -->
                                        <div class="tp-caption NotGeneric-Title tp-resizeme" data-x="['center','center','center','center']"
                                             data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                                             data-voffset="['-115','-110','-90','-90']" data-fontsize="['12','12','12','12']"
                                             data-lineheight="['20','20','20','20']" data-width="none" data-height="none" data-whitespace="nowrap"
                                             data-visibility="['on', 'on', 'on', 'on']" data-type="text" data-color="['#FFF']"
                                             data-responsive_offset="on" data-responsive="on"
                                             data-frames='[{"from":"y:50px;opacity:0;","speed":1000,"to":"o:1;","delay":300,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[175%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);bw:2px 2px 2px 2px;"}]'
                                             data-textAlign="['inherit', 'inherit', 'right', 'center']" data-paddingtop="[10,10,10,10]"
                                             data-paddingright="[30,30,30,30]" data-paddingbottom="[10,10,10,10]" data-paddingleft="[30,30,30,30]"
                                             data-basealign="slide"
                                             style="z-index: 7; white-space: nowrap; text-transform: uppercase; font-family:'Montserrat', sans-serif !important; font-weight: 500; letter-spacing:2px;">
                                            Talented Team</div>

                                        <!-- layer nr. 4 -->
                                        <div class="tp-caption NotGeneric-SubTitle tp-resizeme " data-x="['center','center','center','center']"
                                             data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                                             data-voffset="['0','0','0','0']" data-fontsize="['70','70','60','50']"
                                             data-lineheight="['75','75','60','60']" data-width="none" data-height="none" data-whitespace="nowrap"
                                             data-visibility="['on', 'on', 'on', 'on']" data-type="button" data-color="['#FFF']"
                                             data-responsive_offset="on" data-responsive="on"
                                             data-frames='[{"from":"y:50px;opacity:0;","speed":1500,"to":"o:1;","delay":600,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[175%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);bw:2px 2px 2px 2px;"}]'
                                             data-textAlign="['center', 'center', 'center', 'center']" data-paddingtop="[10,10,10,10]"
                                             data-paddingright="[30,30,30,30]" data-paddingbottom="[10,10,10,10]" data-paddingleft="[30,30,30,30]"
                                             data-basealign="slide"
                                             style="z-index: 8; white-space: nowrap; font-family:'Montserrat', sans-serif !important; font-weight: 600; letter-spacing: -1px;">
                                            Business Consultant</div>

                                            @if(!empty($slide->{'slider_'. currentLang()}->button))
                                            <a href="portfolio-full-width-grid-overlay.html"
                                               class="tp-caption btn btn-transparent-white btn-medium border-radius-4 z-index-5"
                                               data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                               data-y="['middle','middle','middle','middle']" data-voffset="['130','130','110','110']"
                                               data-fontsize="['12','14','14','14']" data-whitespace="nowrap"
                                               data-visibility="['on', 'on', 'on', 'on']" data-type="text" data-color="['#FFFFFF']"
                                               data-responsive_offset="on" data-responsive="on"
                                               data-frames='[{"from":"y:150px;opacity:0;","speed":1500,"to":"o:1;","delay":900,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[175%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0, 0, 0, 1.00);bc:rgba(255, 255, 255, 1.00);bw:2px 2px 2px 2px;"}]'
                                               data-textAlign="['inherit', 'inherit', 'right', 'center']" data-paddingtop="[6,6,6,6]"
                                               data-paddingright="[26,26,26,26]" data-paddingbottom="[6,6,6,6]" data-paddingleft="[26,26,26,26]"
                                               data-basealign="slide">Explore Work</a>
                                            @endif

                                        <!-- layer nr. 5 -->
                                        <!--<a href="portfolio-full-width-grid-overlay.html" class="tp-caption btn btn-transparent-white btn-medium border-radius-4 z-index-5"
                                       data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                       data-y="['middle','middle','middle','middle']" data-voffset="['130','130','110','110']"
                                       data-fontsize="['12','14','14','14']"
                                       data-whitespace="nowrap"
                                       data-visibility="['on', 'on', 'on', 'on']"
                                       data-type="text"
                                       data-color="['#FFFFFF']"
                                       data-responsive_offset="on"
                                       data-responsive="on"
                                       data-frames='[{"from":"y:150px;opacity:0;","speed":1500,"to":"o:1;","delay":900,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[175%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0, 0, 0, 1.00);bc:rgba(255, 255, 255, 1.00);bw:2px 2px 2px 2px;"}]'
                                       data-textAlign="['inherit', 'inherit', 'right', 'center']"
                                       data-paddingtop="[6,6,6,6]"
                                       data-paddingright="[26,26,26,26]"
                                       data-paddingbottom="[6,6,6,6]"
                                       data-paddingleft="[26,26,26,26]"
                                       data-basealign="slide">Explore Work</a>-->
                                        <!-- layer nr. 6 -->
                                    </li>
                                @endif

                            @endforeach
                        @endif

                    </ul>
                </div>
            </div>
            <!-- end revolution slider -->
        </article>
    </section>
    <!-- end slider section -->
    <!-- start parallax section -->
    <section class="parallax" data-stellar-background-ratio="0.6" style="background-image: url({{asset('website/images/home/pattern.jpg')}})">
        <div class="opacity-medium bg-extra-dark-gray"></div>
        <div class="container-fluid position-relative">
            <div class="row equalize sm-equalize-auto">
                <div class="col-md-6 col-sm-12 col-xs-12 display-table sm-margin-50px-bottom xs-margin-30px-bottom wow fadeIn">
                    <div class="display-table-cell vertical-align-middle text-center">
                        <img src="{{asset($about->aboutImage->path)}}" alt="" class="width-100">
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12 display-table wow fadeIn" data-wow-delay="0.2s">
                    <div class="display-table-cell vertical-align-middle">
                        <div class="width-75 md-width-100 padding-three-lr xs-no-padding-lr xs-no-padding-bottom">
                            <h4 class="alt-font text-white font-weight-600">Crop Media Business Consultant Company </h4>
                            <p>Crop Media is business consultant company that was born big with a crew that have 8 years
                                of experience.</p>
                            <ul class="no-padding list-style-4 margin-30px-bottom list-style-color">
                                {!! $about->{'about_' . currentLang()}->description !!}
                            </ul>
                            <a href="{{url('about')}}"
                               class="btn btn-white btn-small text-extra-small border-radius-4 margin-20px-tb sm-no-margin-bottom"><i
                                    class="fas fa-play-circle icon-very-small margin-5px-right no-margin-left" aria-hidden="true"></i>GET
                                TO KNOW US</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end parallax section -->
    <!--<section class="wow fadeIn bg-extra-dark-gray" style="visibility: visible; animation-name: fadeIn;">
    <div class="container">
        <div class="row equalize sm-equalize-auto">
            &lt;!&ndash; start feature box item &ndash;&gt;
            <div class="col-md-4 col-sm-12 col-xs-12 sm-text-center sm-margin-five-bottom xs-margin-ten-bottom display-table last-paragraph-no-margin" style="height: 93px;">
                <div class="display-table-cell vertical-align-middle">
                    <span class="text-extra-large text-white alt-font margin-15px-bottom display-block width-85 sm-width-100">“Crop Media”, Core Values</span>
                </div>
            </div>
            &lt;!&ndash; end feature box item &ndash;&gt;
            &lt;!&ndash; start feature box item &ndash;&gt;
            <div class="col-md-2 col-sm-3 col-xs-12 border-right border-color-medium-dark-gray text-center xs-margin-ten-bottom display-table wow zoomIn" style="visibility: visible; animation-name: zoomIn; height: 93px;">
                <div class="display-table-cell vertical-align-middle">
                    <img src="http://www.sa-spc.com/public/assertive/images/about/003-together.png" class="margin-20px-bottom" alt="" style="height: 50px" data-no-retina="">
                    <span class="display-block text-medium text-extra-light-gray"> Efficiency </span>
                </div>
            </div>
            &lt;!&ndash; end feature box item &ndash;&gt;
            &lt;!&ndash; start feature box item &ndash;&gt;
            <div class="col-md-2 col-sm-3 col-xs-12 border-right border-color-medium-dark-gray text-center xs-margin-ten-bottom display-table wow zoomIn" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: zoomIn; height: 93px;">
                <div class="display-table-cell vertical-align-middle">
                    <img src="http://www.sa-spc.com/public/assertive/images/about/002-creative.png" class="margin-20px-bottom" alt="" style="height: 50px" data-no-retina="">
                    <span class="display-block text-medium text-extra-light-gray">	Persistence </span>
                </div>
            </div>
            &lt;!&ndash; end feature box item &ndash;&gt;
            &lt;!&ndash; start feature box item &ndash;&gt;
            <div class="col-md-2 col-sm-3 col-xs-12 border-right border-color-medium-dark-gray text-center xs-margin-ten-bottom display-table wow zoomIn" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: zoomIn; height: 93px;">
                <div class="display-table-cell vertical-align-middle">
                    <img src="http://www.sa-spc.com/public/assertive/images/about/001-handshake.png" class="margin-20px-bottom" alt="" style="height: 50px" data-no-retina="">
                    <span class="display-block text-medium text-extra-light-gray">	Creativity </span>
                </div>
            </div>
            &lt;!&ndash; end feature box item &ndash;&gt;
            &lt;!&ndash; start feature box item &ndash;&gt;
            <div class="col-md-2 col-sm-3 col-xs-12 text-center display-table wow zoomIn" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: zoomIn; height: 93px;">
                <div class="display-table-cell vertical-align-middle">
                    <img src="http://www.sa-spc.com/public/assertive/images/about/004-dashboard.png" class="margin-20px-bottom" alt="" style="height: 50px" data-no-retina="">
                    <span class="display-block text-medium text-extra-light-gray">	Dedication </span>
                </div>
            </div>
        </div>
        &lt;!&ndash; end feature box item &ndash;&gt;
    </div>
</section>-->
    <!-- start services section -->
    <!-- start video section -->
    <section class="parallax" data-stellar-background-ratio="0"
             style="background-image:url({{asset('website/images/home/parallax-bg6.jpg')}});">
        <div class="opacity-full bg-extra-dark-gray"></div>
        <div class="container position-relative">
            <div class="row">
                <div class="col-lg-9 col-md-10 col-sm-12 text-center center-col wow fadeIn last-paragraph-no-margin">
                    <a class="popup-youtube" href="https://www.youtube.com/watch?v=nrJtHemSPW4"><img
                            src="{{asset('website/images/home/icon-play-white.png')}}" class="width-10 xs-width-50px margin-30px-bottom" alt="" /></a>
                    <h4 class="alt-font text-white">Crop Media has professional, dedicated and talented team who can do
                        any thing you want</h4>
                    <p class="width-75 margin-lr-auto text-medium-gray md-width-90 xs-width-100 xs-margin-30px-bottom">
                        With years of experience in the Business consulting, Social media designs, Photography and
                        Branding .</p>
                    <a href="{{url('team')}}"
                       class="btn btn-white btn-small text-extra-small border-radius-4 margin-45px-top xs-no-margin-top"><i
                            class="fas fa-play-circle icon-very-small margin-5px-right no-margin-left" aria-hidden="true"></i> Our
                        Team</a>
                </div>
            </div>
        </div>
    </section>
    <!-- end video section -->

    <!-- start services section -->
    <section class="wow fadeIn no-padding-bottom">
        <div class="container">
            <div class="row justify-content-center">
                <div
                    class="col-12 col-lg-12 col-md-12 margin-eight-bottom md-margin-40px-bottom sm-margin-30px-bottom text-center last-paragraph-no-margin">
                    <h5 class="alt-font text-uppercase text-extra-dark-gray font-weight-700 mb-0">Our Services</h5>
                </div>
            </div>
            <ul class="services-ul">
                @if($services)
                    @foreach($services as $service)
                        <li>
                            <a href="{{url('service' . '#' . str_slug($service->service_en->title))}}">
                                <div class="feature-box margin-eight-bottom md-margin-40px-bottom">
                                    <div class="content">
                                        <i class="{{$service->icon_code}} text-medium-gray icon-large margin-25px-bottom sm-margin-15px-bottom"></i>
                                        <div
                                            class="text-medium alt-font text-capitalize text-extra-dark-gray margin-10px-bottom sm-margin-5px-bottom">
                                            {{$service->service_en->title}}
                                        </div>
                                        <p class="width-85 margin-lr-auto sm-width-100">
                                            {{$service->service_en->description}}
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </li>
                    @endforeach
                @endif


            </ul>
        </div>
    </section>
    <!-- end services section -->

    <!-- start portfolio section -->
    <section class="wow fadeIn padding-20px-bottom bg-light-gray">
        <div class="container-fluid">
            <div class="row">
                <div class="row justify-content-center">
                    <div
                        class="col-12 col-lg-12 col-md-12 margin-four-bottom md-margin-40px-bottom sm-margin-30px-bottom text-center last-paragraph-no-margin">
                        <h5 class="alt-font text-uppercase text-extra-dark-gray font-weight-700 mb-0">Latest Projects
                        </h5>
                    </div>
                </div>
                <div class="col-md-12 hover-option4 margin-5px-bottom">
                    <div class="swiper-multy-row-container overflow-hidden portfolio-slider">
                        <div class="swiper-wrapper">
                            @if($projects)
                                @foreach($projects as $project)
                                    <div class="swiper-slide grid-item">
                                        <a href="{{url('project/' . $project->id)}}" class="project-card">
                                            <div class="img-div">
                                                <img src="{{asset($project->image->path)}}" alt=""
                                                     style="height: 100%; object-fit: cover; object-position: center center" />
                                            </div>
                                            <div class="slider-text">
                                            <span class="font-weight-600 line-height-normal alt-font text-white text-uppercase margin-5px-bottom display-block">
                                                {{$project->{'project_' . currentLang()}->name }}
                                            </span>
                                                <p class="text-white text-uppercase text-extra-small">
                                                    {{$project->relatedService->{'service_' . currentLang()}->title }}
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                @endforeach
                            @endif

                        </div>
                        <!-- start slider pagination -->
                        <div class="swiper-portfolio-prev swiper-button-black-highlight"><i class="ti-arrow-left"></i>
                        </div>
                        <div class="swiper-portfolio-next swiper-button-black-highlight"><i class="ti-arrow-right"></i>
                        </div>
                        <!-- end slider pagination -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end portfolio section -->

    <!-- start counter section -->
    <section class="wow fadeIn">
        <div class="container">
            <div class="row">
                <!-- start counter item -->
                <div
                    class="col-md-3 col-sm-6 col-xs-12 sm-padding-twelve-left sm-margin-ten-bottom xs-margin-50px-bottom xs-padding-15px-left wow fadeInRight">
                    <div class="feature-box-5 position-relative">
                        <i class="icon-desktop text-medium-gray icon-extra-medium top-6"></i>
                        <div class="feature-content">
                            <h6
                                class="display-block text-extra-dark-gray font-weight-600 alt-font no-margin-bottom timer xs-margin-5px-bottom"
                                data-speed="2000" data-to="350">350</h6>
                            <span class="text-small text-uppercase position-relative top-minus4">Happy Clients</span>
                        </div>
                    </div>
                </div>
                <!-- end counter item -->
                <!-- start counter item -->
                <div
                    class="col-md-3 col-sm-6 col-xs-12 sm-padding-twelve-left sm-margin-ten-bottom xs-margin-50px-bottom xs-padding-15px-left wow fadeInRight"
                    data-wow-delay="0.2s">
                    <div class="feature-box-5 position-relative">
                        <i class="icon-camera text-medium-gray icon-extra-medium top-6"></i>
                        <div class="feature-content">
                            <h6
                                class="display-block text-extra-dark-gray font-weight-600 alt-font no-margin-bottom timer xs-margin-5px-bottom"
                                data-speed="2000" data-to="780">780</h6>
                            <span class="text-small text-uppercase position-relative top-minus4">Photo Capture</span>
                        </div>
                    </div>
                </div>
                <!-- end counter item -->
                <!-- start counter item -->
                <div
                    class="col-md-3 col-sm-6 col-xs-12 sm-padding-twelve-left xs-margin-50px-bottom xs-padding-15px-left wow fadeInRight"
                    data-wow-delay="0.4s">
                    <div class="feature-box-5 position-relative">
                        <i class="icon-laptop text-medium-gray icon-extra-medium top-6"></i>
                        <div class="feature-content">
                            <h6
                                class="display-block text-extra-dark-gray font-weight-600 alt-font no-margin-bottom timer xs-margin-5px-bottom"
                                data-speed="2000" data-to="850">850</h6>
                            <span class="text-small text-uppercase position-relative top-minus4">Work Completed</span>
                        </div>
                    </div>
                </div>
                <!-- end counter item -->
                <!-- start counter item -->
                <div class="col-md-3 col-sm-6 col-xs-12 sm-padding-twelve-left xs-padding-15px-left wow fadeInRight"
                     data-wow-delay="0.6s">
                    <div class="feature-box-5 position-relative">
                        <i class="icon-chat text-medium-gray icon-extra-medium top-6"></i>
                        <div class="feature-content">
                            <h6
                                class="display-block text-extra-dark-gray font-weight-600 alt-font no-margin-bottom timer xs-margin-5px-bottom"
                                data-speed="2000" data-to="650">650</h6>
                            <span class="text-small text-uppercase position-relative top-minus4">Telephonic Talk</span>
                        </div>
                    </div>
                </div>
                <!-- end counter item -->
            </div>
        </div>
    </section>
    <!-- end counters section -->
    <!-- start testimonial slider section -->
    <!--<section class="bg-light-gray wow fadeIn">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-12 wow fadeIn">
                <p class="alt-font margin-5px-bottom text-uppercase text-small text-medium-gray">What people say</p>
                <h5 class="text-uppercase alt-font text-extra-dark-gray margin-20px-bottom font-weight-700 sm-width-100 xs-width-100">Clients Words</h5>
                <span class="separator-line-horrizontal-medium-light2 bg-deep-pink display-table margin-auto width-100px"></span>
            </div>
        </div>
        <div class="row position-relative margin-100px-top sm-margin-70px-top xs-margin-50px-top">
            <div class="swiper-container swiper-pagination-bottom black-move blog-slider swiper-three-slides">
                <div class="swiper-wrapper">
                    &lt;!&ndash; start testimonial item &ndash;&gt;
                    <div class="col-md-4 col-sm-6 col-xs-12 swiper-slide sm-margin-four-bottom">
                        <div class="margin-half-all bg-white box-shadow-light text-center padding-fourteen-all xs-padding-30px-all">
                            <img src="images/testimonials/7c16b2aaf4927f77604ce8293dc08cbf.png" class="border-radius-100 width-40 margin-25px-bottom sm-margin-15px-bottom" alt=""/>
                            <p class="sm-margin-15px-bottom xs-margin-20px-bottom">I wanted to hire the best and after looking at several other companies, I knew Jacob was the perfect guy for the job. He is a true professional.</p>
                            <span class="text-extra-dark-gray text-small text-uppercase display-block line-height-10 alt-font font-weight-600">Shoko Mugikura</span>
                            <span class="text-light-gray2 text-extra-small text-uppercase text-medium-gray">Design Manager</span>
                        </div>
                    </div>
                    &lt;!&ndash; end testimonial item &ndash;&gt;
                    &lt;!&ndash; start testimonial item &ndash;&gt;
                    <div class="col-md-4 col-sm-6 col-xs-12 swiper-slide sm-margin-four-bottom">
                        <div class="margin-half-all bg-white box-shadow-light text-center padding-fourteen-all xs-padding-30px-all">
                            <img src="images/testimonials/avtar-15.jpg" class="border-radius-100 width-40 margin-25px-bottom sm-margin-15px-bottom" alt=""/>
                            <p class="sm-margin-15px-bottom xs-margin-20px-bottom">Trust us we looked for a VERY long time and wasted thousands of dollars testing other teams, freelancers, and outsource companies.</p>
                            <span class="text-extra-dark-gray text-small text-uppercase display-block line-height-10 alt-font font-weight-600">Alexander Harvard</span>
                            <span class="text-light-gray2 text-extra-small text-uppercase text-medium-gray">Co Founder / CEO</span>
                        </div>
                    </div>
                    &lt;!&ndash; end testimonial item &ndash;&gt;
                    &lt;!&ndash; start testimonial item &ndash;&gt;
                    <div class="col-md-4 col-sm-6 col-xs-12 swiper-slide sm-margin-four-bottom">
                        <div class="margin-half-all bg-white box-shadow-light text-center padding-fourteen-all xs-padding-30px-all">
                            <img src="images/testimonials/d11b13f43b7fc7950386ec9c99c80800.png" class="border-radius-100 width-40 margin-25px-bottom sm-margin-15px-bottom" alt=""/>
                            <p class="sm-margin-15px-bottom xs-margin-20px-bottom">This is an excellent company! I personally enjoyed the energy and the professional support the whole team gave to us into creating website.</p>
                            <span class="text-extra-dark-gray text-small text-uppercase display-block line-height-10 alt-font font-weight-600">Lindsay Swanson</span>
                            <span class="text-light-gray2 text-extra-small text-uppercase text-medium-gray">Creative Director</span>
                        </div>
                    </div>
                    &lt;!&ndash; end testimonial item &ndash;&gt;
                    &lt;!&ndash; start testimonial item &ndash;&gt;
                    <div class="col-md-4 col-sm-6 col-xs-12 swiper-slide sm-margin-four-bottom">
                        <div class="margin-half-all bg-white box-shadow-light text-center padding-fourteen-all xs-padding-30px-all">
                            <img src="images/testimonials/d31ea03447e5fc317d66b0867665df05%20(1).png" class="border-radius-100 width-40 margin-25px-bottom sm-margin-15px-bottom" alt=""/>
                            <p class="sm-margin-15px-bottom xs-margin-20px-bottom">Their team are easy to work with and helped me make amazing websites in a short amount of time. Thanks again guys for all your hard work.</p>
                            <span class="text-extra-dark-gray text-small text-uppercase display-block line-height-10 alt-font font-weight-600">Herman Miller</span>
                            <span class="text-light-gray2 text-extra-small text-uppercase text-medium-gray">Creative Director</span>
                        </div>
                    </div>
                    &lt;!&ndash; end testimonial item &ndash;&gt;
                </div>
                <div class="swiper-pagination swiper-pagination-three-slides height-auto"></div>
            </div>
        </div>
    </div>
</section>-->
    <!-- end testimonial slider section -->

    <!-- start pricing section -->
    <section class="wow fadeIn padding-50px-top bg-light-gray">
        <div class="row">
            <!-- start feature box item -->
            <div class="col-lg-8 col-md-8 col-sm-10 col-xs-12 text-center center-col margin-four-bottom xs-margin-30px-bottom">
                <h5 class="font-weight-300 text-extra-dark-gray ">Pricing Plans </h5>
            </div>
            <!-- end feature box item -->
        </div>
        <div class="container">
            <div class="row">
                <div class="pricing-box-style1">
                    <!-- start pricing item -->
                    <div class="col-md-4 col-sm-12 col-xs-12 text-center sm-margin-30px-bottom wow fadeInUp">
                        <div class="pricing-box border-all border-width-1 border-color-extra-light-gray">
                            <div class="padding-55px-all bg-very-light-gray sm-padding-30px-all xs-padding-40px-all">
                                <!-- start pricing title -->
                                <div class="pricing-title text-center">
                                    <i class="ti-user icon-large text-deep-pink display-inline-block padding-30px-all bg-white box-shadow-light border-radius-100 margin-25px-bottom"></i>
                                </div>
                                <!-- end pricing title -->
                                <!-- start pricing price -->
                                <div class="pricing-price">
                                    <span class="alt-font text-extra-dark-gray font-weight-600 text-uppercase">Standard</span>
                                    <h4 class="text-extra-dark-gray alt-font font-weight-200 no-margin-bottom">EGP <span class="font-weight-400">2000</span></h4>
                                    <div class="text-extra-small text-uppercase alt-font margin-5px-top">Per Month</div>
                                </div>
                                <!-- end pricing price -->
                            </div>
                            <!-- start pricing features -->
                            <div class="padding-45px-all pricing-features sm-padding-20px-all xs-padding-30px-all">
                                <ul class="list-style-11">
                                    <li>8 Posts on Social Channels</li>
                                    <li>2 videos (it could be 1 min video or GIF).</li>
                                </ul>
                                <!-- start pricing action -->
                                <div class="pricing-action margin-35px-top sm-no-margin-top">
                                    <a href="#" class="btn btn-dark-gray btn-small text-extra-small">Choose Plan</a>
                                </div>
                                <!-- end pricing action -->
                            </div>
                            <!-- end pricing features -->
                        </div>
                    </div>
                    <!-- end pricing item -->
                    <!-- start pricing item -->
                    <div class="col-md-4 col-sm-12 col-xs-12 text-center sm-margin-30px-bottom wow fadeInUp" data-wow-delay="0.2s">
                        <div class="pricing-box border-all border-width-1 border-color-extra-light-gray">
                            <div class="padding-55px-all bg-very-light-gray sm-padding-30px-all xs-padding-40px-all">
                                <!-- start pricing title -->
                                <div class="pricing-title text-center">
                                    <i class="ti-briefcase icon-large text-deep-pink display-inline-block padding-30px-all bg-white box-shadow-light border-radius-100 margin-25px-bottom"></i>
                                </div>
                                <!-- end pricing title -->
                                <!-- start pricing price -->
                                <div class="pricing-price">
                                    <span class="alt-font text-extra-dark-gray font-weight-600 text-uppercase">Business</span>
                                    <h4 class="text-extra-dark-gray alt-font font-weight-200 no-margin-bottom">EGP <span class="font-weight-400">3200</span></h4>
                                    <div class="text-extra-small text-uppercase alt-font margin-5px-top">Per Month</div>
                                </div>
                                <!-- end pricing price -->
                            </div>
                            <!-- start pricing features -->
                            <div class="padding-45px-all pricing-features sm-padding-20px-all xs-padding-30px-all">
                                <ul class="list-style-11">
                                    <li>12 Posts on Social Channels.</li>
                                    <li>4 videos (it could be 1 min video or GIF).</li>
                                </ul>
                                <!-- start pricing action -->
                                <div class="pricing-action margin-35px-top sm-no-margin-top">
                                    <a href="#" class="btn btn-dark-gray btn-small text-extra-small">Choose Plan</a>
                                </div>
                                <!-- end pricing action -->
                            </div>
                            <!-- end pricing features -->
                        </div>
                    </div>
                    <!-- end pricing item -->
                    <!-- start pricing item -->
                    <div class="col-md-4 col-sm-12 col-xs-12 text-center wow fadeInUp" data-wow-delay="0.4s">
                        <div class="pricing-box border-all border-width-1 border-color-extra-light-gray">
                            <div class="padding-55px-all bg-very-light-gray sm-padding-30px-all xs-padding-40px-all">
                                <!-- start pricing title -->
                                <div class="pricing-title text-center">
                                    <i class="ti-world icon-large text-deep-pink display-inline-block padding-30px-all bg-white box-shadow-light border-radius-100 margin-25px-bottom"></i>
                                </div>
                                <!-- end pricing title -->
                                <!-- start pricing price -->
                                <div class="pricing-price">
                                    <span class="alt-font text-extra-dark-gray font-weight-600 text-uppercase">Ultimate</span>
                                    <h4 class="text-extra-dark-gray alt-font font-weight-200 no-margin-bottom">EGP <span class="font-weight-400">4200</span></h4>
                                    <div class="text-extra-small text-uppercase alt-font margin-5px-top">Per Month</div>
                                </div>
                                <!-- end pricing price -->
                            </div>
                            <!-- start pricing features -->
                            <div class="padding-45px-all pricing-features sm-padding-20px-all xs-padding-30px-all">
                                <ul class="list-style-11">
                                    <li>14 Posts on Social Channels.</li>
                                    <li>6 videos (it could be 1 min video or GIF).</li>
                                </ul>
                                <!-- start pricing action -->
                                <div class="pricing-action margin-35px-top sm-no-margin-top">
                                    <a href="#" class="btn btn-dark-gray btn-small text-extra-small">Choose Plan</a>
                                </div>
                                <!-- end pricing action -->
                            </div>
                            <!-- end pricing features -->
                        </div>
                    </div>
                    <!-- end pricing item -->
                </div>
            </div>
        </div>
    </section>
    <!-- end pricing section -->

    <!-- start clients slider section  -->
    <section class="wow fadeIn padding-four-top">
        <div class="container text-center">
            <div class="row">
                <div class="swiper-slider-clients swiper-container black-move wow fadeIn">
                    <div class="swiper-wrapper">
                        <!-- start slide -->
                        @if($clients)
                            @foreach($clients as $client)
                                <div class="swiper-slide text-center"><a href="javascript:void(0);"><img
                                            src="{{asset($client->image->path)}}" alt=""></a></div>
                            @endforeach
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end clients slider section -->


@endsection


