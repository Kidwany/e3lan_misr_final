@extends('website.layouts.layouts')
@section('title', 'Contact')

@section('content')


    <!-- start page title section -->
    <section class="wow fadeIn parallax" data-stellar-background-ratio="0.5"
             style="background-image:url('{{asset('website/images/bkg/bkg-1.jpg')}}');">
        <div class="opacity-medium bg-extra-dark-gray"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 extra-small-screen display-table page-title-large">
                    <div class="display-table-cell vertical-align-middle text-center">
                        <!-- start page title -->
                        <h1 class="text-white alt-font font-weight-600 letter-spacing-minus-1 margin-10px-bottom">
                            Contact Us
                        </h1>
                        <!-- end page title -->
                        <!-- start sub title -->
                        <span class="text-white opacity6 alt-font">Reach Us at any time you want!</span>
                        <!-- end sub title -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end page title section -->

    <!-- start contact info -->
    <section class="wow fadeIn">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-8 col-xs-12 center-col margin-eight-bottom sm-margin-40px-bottom xs-margin-30px-bottom text-center last-paragraph-no-margin">
                    <h5 class="alt-font font-weight-700 text-extra-dark-gray text-uppercase">We love to talk</h5>
                </div>
            </div>
            <div class="row">
                <div class="row">
                    <!-- start contact info item -->
                    <div class="col-md-3 col-sm-6 col-xs-12 text-center sm-margin-eight-bottom xs-margin-30px-bottom wow fadeInUp last-paragraph-no-margin">
                        <div class="display-inline-block margin-20px-bottom">
                            <div class="bg-extra-dark-gray icon-round-medium"><i class="icon-map-pin icon-medium text-white"></i></div>
                        </div>
                        <div class="text-extra-dark-gray text-uppercase text-small font-weight-600 alt-font margin-5px-bottom">Visit Our Office</div>
                        <p class="center-col">{!! $contact->{'address_' . currentLang()} !!}</p>
                        <a href="#" class="text-decoration-line-through-deep-pink text-uppercase text-deep-pink text-small margin-15px-top xs-margin-10px-top display-inline-block">GET DIRECTION</a>
                    </div>
                    <!-- end contact info item -->
                    <!-- start contact info item -->
                    <div class="col-md-3 col-sm-6 col-xs-12 text-center sm-margin-eight-bottom xs-margin-30px-bottom wow fadeInUp last-paragraph-no-margin" data-wow-delay="0.2s">
                        <div class="display-inline-block margin-20px-bottom">
                            <div class="bg-extra-dark-gray icon-round-medium"><i class="icon-chat icon-medium text-white"></i></div>
                        </div>
                        <div class="text-extra-dark-gray text-uppercase text-small font-weight-600 alt-font margin-5px-bottom">Let's Talk</div>
                        <p class="center-col">Phone:{{$contact->phone}}<br></p>
                        <a href="#" class="text-decoration-line-through-deep-pink text-uppercase text-deep-pink text-small margin-15px-top xs-margin-10px-top display-inline-block">call us</a>
                    </div>
                    <!-- end contact info item -->
                    <!-- start contact info item -->
                    <div class="col-md-3 col-sm-6 col-xs-12 text-center xs-margin-30px-bottom wow fadeInUp last-paragraph-no-margin" data-wow-delay="0.4s">
                        <div class="display-inline-block margin-20px-bottom">
                            <div class="bg-extra-dark-gray icon-round-medium"><i class="icon-envelope icon-medium text-white"></i></div>
                        </div>
                        <div class="text-extra-dark-gray text-uppercase text-small font-weight-600 alt-font margin-5px-bottom">E-mail Us</div>
                        <p class="center-col"><a href="mailto:info@yourdomain.com">{{$contact->email}}</a><br></p>
                        <a href="#" class="text-decoration-line-through-deep-pink text-uppercase text-deep-pink text-small margin-15px-top xs-margin-10px-top display-inline-block">send e-mail</a>
                    </div>
                    <!-- end contact info item -->
                    <!-- start contact info item -->
                    <div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp last-paragraph-no-margin" data-wow-delay="0.6s">
                        <div class="display-inline-block margin-20px-bottom">
                            <div class="bg-extra-dark-gray icon-round-medium"><i class="icon-megaphone icon-medium text-white"></i></div>
                        </div>
                        <div class="text-extra-dark-gray text-uppercase text-small font-weight-600 alt-font margin-5px-bottom">Customer Services</div>
                        <p class="xs-width-100 center-col">Lorem Ipsum is simply dummy<br>text of the printing.</p>
                        <a href="#" class="text-decoration-line-through-deep-pink text-uppercase text-deep-pink text-small margin-15px-top xs-margin-10px-top display-inline-block">open ticket</a>
                    </div>
                    <!-- end contact info item -->
                </div>
            </div>
        </div>
    </section>
    <!-- end contact info section -->

    <!-- start form section -->
    <section class="wow fadeIn" id="start-your-project">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-8 col-xs-12 center-col margin-eight-bottom sm-margin-40px-bottom xs-margin-30px-bottom text-center last-paragraph-no-margin">
                    <h5 class="alt-font font-weight-700 text-extra-dark-gray text-uppercase">tell us about your project</h5>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since. Lorem Ipsum has been the industry. Lorem Ipsum is simply dummy text.</p>
                </div>
            </div>
            @include('dashboard.layouts.messages')
            <form id="contact"  action="{{url('message')}}" method="post">
                @csrf
                @method('post')
                <div class="row">
                    <div class="col-md-12">
                        <div id="success-project-contact-form" class="no-margin-lr"></div>
                    </div>
                    <div class="col-md-6">
                        <input type="text" name="name" id="name" placeholder="Name *" required class="big-input" value="{{old('name')}}">
                    </div>
                    <div class="col-md-6">
                        <input type="text" name="phone" id="phone" placeholder="Phone" required class="big-input" value="{{old('phone')}}">
                    </div>
                    <div class="col-md-6">
                        <input type="email" name="email" id="email" placeholder="E-mail *" required class="big-input" value="{{old('email')}}">
                    </div>
                    <div class="col-md-6">
                        <input type="text" name="title" id="email" required placeholder="Message Title" class="big-input" value="{{old('title')}}">
                    </div>
                    {{--<div class="col-md-6">
                        <div class="select-style big-select">
                            <select name="budget" id="budget" class="bg-transparent no-margin-bottom">
                                <option value="">Select your budget</option>
                                <option value="$500 - $1000">$500 - $1000</option>
                                <option value="$1000 - $2000">$1000 - $2000</option>
                                <option value="$2000 - $5000">$2000 - $5000</option>
                            </select>
                        </div>
                    </div>--}}
                    <div class="col-md-12">
                        <textarea name="message" id="comment" placeholder="Describe your project" rows="6" class="big-textarea">{{old('message')}}</textarea>
                    </div>
                    <div class="col-md-12 text-center">
                        <button id="project-contact-us-button" type="submit" class="btn btn-transparent-dark-gray btn-large margin-20px-top">send message</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- end form section -->
    <section class="wow fadeIn bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center social-style-4 border round">
                    <span class="text-medium font-weight-600 text-uppercase display-block alt-font text-extra-dark-gray margin-30px-bottom">On social networks</span>
                    <div class="social-icon-style-4">
                        <ul class="margin-30px-top large-icon">
                            @if($contact->facebook)
                                <li><a class="facebook" href="{{url($contact->facebook)}}" target="_blank"><i class="fab fa-facebook-f"></i><span></span></a></li>
                            @endif
                            @if($contact->twitter)
                                    <li><a class="twitter" href="{{url($contact->twitter)}}" target="_blank"><i class="fab fa-twitter"></i><span></span></a></li>
                                @endif
                            @if($contact->instagram)
                                    <li><a class="dribbble" href="{{url($contact->instagram)}}" target="_blank"><i class="fab fa-instagram"></i><span></span></a></li>
                            @endif
                            @if($contact->linkedin)
                                <li><a class="linkedin" href="{{url($contact->linkedin)}}" target="_blank"><i class="fab fa-linkedin-in"></i><span></span></a></li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--- start map section --->
    <section class="no-padding one-second-screen sm-height-400px wow fadeIn">
        <iframe class="width-100 height-100"
                src="{{$contact->location}}"></iframe>
    </section>
    <!--- end map section --->

@endsection
