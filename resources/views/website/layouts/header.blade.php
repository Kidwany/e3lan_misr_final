<!--== Header Start ==-->
<nav class="navbar navbar-default navbar-fixed navbar-transparent white bootsnav on no-full">
    <!--== Start Top Search ==-->
    <!--<div class="fullscreen-search-overlay" id="search-overlay"> <a href="#" class="fullscreen-close" id="fullscreen-close-button"><i class="icofont icofont-close"></i></a>
        <div id="fullscreen-search-wrapper">
            <form method="get" id="fullscreen-searchform">
                <input type="text" value="" placeholder="Type and hit Enter..." id="fullscreen-search-input" class="search-bar-top">
                <i class="fullscreen-search-icon icofont icofont-search">
                    <input value="" type="submit">
                </i>
            </form>
        </div>
    </div>-->
    <!--== End Top Search ==-->
    <div class="container">
        <!--== Start Atribute Navigation ==-->
        <div class="attr-nav hidden-xs sm-display-none">
            <ul class="social-media-dark social-top">
                <li>
                    <div class="tr-modal-popup">
                        <a href="#modal-popup" data-effect="mfp-zoom-in" class=" icofont icofont-login white" style="color: #ddb35b"> Login</a>
                    </div>
                </li>
                <!--<li><a href="#" class="icofont icofont-social-twitter"></a></li>
                <li><a href="#" class="icofont icofont-social-instagram"></a></li>-->
            </ul>
        </div>

        <div id="modal-popup" class="white-bg all-padding-30 mfp-with-anim mfp-hide centerize-col col-lg-4 col-md-6 col-sm-7 col-xs-11 text-center">
            <span class="text-uppercase font-25px font-600 mb-10 display-block dark-color">Login or Register</span>
            <!-- -------------------- Tabs --------------------------- -->
            <div class="row mt-30 tabs-style-01">
                <div class="col-md-12">
                    <div class="light-tabs">
                        <!--== Nav tabs ==-->
                        <ul class="nav nav-tabs text-center" role="tablist">
                            <li role="presentation" class="active"><a href="#mission" role="tab" data-toggle="tab">Login</a></li>
                            <li role="presentation"><a href="#history" role="tab" data-toggle="tab">Register</a></li>
                        </ul>
                        <!--== Tab panes ==-->

                        <div class="tab-content text-center">
                            <!-- -------------------- Login Tab --------------------------- -->
                            <div role="tabpanel" class="tab-pane fade in active" id="mission">
                                <form name="contact-form" action="#" method="POST" class="contact-form-style-01">
                                    <div class="messages"></div>
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="form-group">
                                                <label class="sr-only" for="email">Email</label>
                                                <input type="email" name="email" class="md-input" id="email" placeholder="Email *" required data-error="Please Enter Valid Email">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-12">
                                            <div class="form-group">
                                                <label class="sr-only">Password</label>
                                                <input type="password" name="subject" class="md-input" id="subject-2" placeholder="Password" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="mt-10" style="display: flex; flex-direction: row; justify-content: center">
                                            <button type="submit" class="btn btn-color btn-md btn-default" href="clients.html"><i class="fa fa-filter"></i> Login</button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <!-- -------------------- Register Tab --------------------------- -->
                            <div role="tabpanel" class="tab-pane fade" id="history">
                                <form name="contact-form" action="#" method="POST" class="contact-form-style-01">
                                    <div class="messages"></div>
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="form-group">
                                                <label class="sr-only" for="email">Name</label>
                                                <input type="text" name="name" class="md-input" id="Name" placeholder="Email *" required data-error="Please Enter Valid Email">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-12">
                                            <div class="form-group">
                                                <label class="sr-only" for="email">Email</label>
                                                <input type="email" name="email" class="md-input" id="email" placeholder="Email *" required data-error="Please Enter Valid Email">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-12">
                                            <div class="form-group">
                                                <label class="sr-only">Password</label>
                                                <input type="password" name="password" class="md-input" id="subject-2" placeholder="Password" required>
                                            </div>
                                        </div>

                                        <div class="col-md-12 col-sm-12">
                                            <div class="form-group">
                                                <label class="sr-only">Confirm Password</label>
                                                <input type="password" name="password_confirmation" class="md-input"  placeholder="Confirm Password" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="mt-10" style="display: flex; flex-direction: row; justify-content: center">
                                            <button type="submit" class="btn btn-color btn-md btn-default" href="clients.html"><i class="fa fa-filter"></i> Login</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>


        <!--== End Atribute Navigation ==-->

        <!--== Start Header Navigation ==-->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu"> <i class="tr-icon ion-android-menu"></i> </button>
            <div class="logo"> <a href="index.html"> <img class="logo logo-display" src="assets/images/logo/Light.png" alt=""> <img class="logo logo-scrolled" src="assets/images/logo/Dark.png" alt=""> </a> </div>
        </div>
        <!--== End Header Navigation ==-->

        <!--== Collect the nav links, forms, and other content for toggling ==-->
        <div class="collapse navbar-collapse" id="navbar-menu">
            <ul class="nav navbar-nav navbar-right" data-in="fadeIn" data-out="fadeOut">
                <li> <a href="{{url('/')}}" class="dropdown-toggle">Home</a></li>
                <li><a href="{{url('about')}}" class="dropdown-toggle" data-toggle="dropdown">About</a></li>
                <li class="dropdown"> <a href="{{url('services')}}" class="dropdown-toggle" data-toggle="dropdown">Services</a>
                    <ul class="dropdown-menu">
                        <li> <a href="#" class="dropdown-toggle" data-toggle="dropdown">OOH Media</a>
                        </li>
                        <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Production </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Landmarks </a></li>
                                <li><a href="#">Street Signage </a></li>
                                <li><a href="#">Directional Signs </a></li>
                                <li><a href="#">Project Hoardings  </a></li>
                                <li><a href="#">Landscaping   </a></li>
                                <li><a href="#">Mock-ups    </a></li>
                                <li><a href="#">Exhibitions     </a></li>
                                <li><a href="#">Booth constructions     </a></li>
                                <li><a href="#">ATM Casing     </a></li>
                                <li><a href="#">Kiosks     </a></li>
                                <li><a href="#">Others </a></li>
                            </ul>
                        </li>
                        <li> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Other Services</a></li>
                    </ul>
                </li>
                <li><a href="{{url('client')}}" class="dropdown-toggle" data-toggle="dropdown">Our Clients</a></li>
                <li><a href="{{url('buildCamp')}}" class="dropdown-toggle" data-toggle="dropdown">Build Your Campaign</a></li>
                <li><a href="{{url('contact')}}" class="dropdown-toggle" data-toggle="dropdown">Contact</a></li>
                <li class="dropdown"> <a href="services.html" class="dropdown-toggle" data-toggle="dropdown">Mohamed</a>
                    <ul class="dropdown-menu">
                        <li> <a href="myCamps.html" class="dropdown-toggle" data-toggle="dropdown">My Campaigns</a></li>
                        <div class="line-horizontal grey-bg width-100-percent centerize-col"></div>
                        <li> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!--== /.navbar-collapse ==-->
    </div>
</nav>
<!--== Header End ==-->
