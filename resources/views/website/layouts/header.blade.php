
<header>
    <!-- start navigation -->
    <nav class="navbar navbar-default bootsnav bg-transparent header-dark white-link navbar-fixed-top nav-box-width">
        <div class="container nav-header-container">
            <div class="row">
                <!-- start logo -->
                <div class="col-md-2 col-xs-5">
                    <a href="{{url('/')}}" title="Crop Media" class="logo"><img src="{{asset($setting->image->path)}}"
                                                                       data-rjs="images/logo@2x.png" class="logo-dark" alt="Pofo"><img src="{{asset($setting->image->path)}}"
                                                                                                                                       data-rjs="images/logo-white@2x.png" alt="Pofo" class="logo-light default"></a>
                </div>
                <!-- end logo -->
                <div class="col-md-7 col-xs-2 width-auto pull-right accordion-menu xs-no-padding-right">
                    <button type="button" class="navbar-toggle collapsed pull-right" data-toggle="collapse"
                            data-target="#navbar-collapse-toggle-1">
                        <span class="sr-only">toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="navbar-collapse collapse pull-right" id="navbar-collapse-toggle-1">
                        <ul id="accordion" class="nav navbar-nav navbar-left no-margin alt-font text-normal" data-in="fadeIn"
                            data-out="fadeOut">
                            <!-- start menu item -->
                            <li class="dropdown megamenu-fw">
                                <a href="{{url('/')}}">Home</a><i class="fas fa-angle-down dropdown-toggle" data-toggle="dropdown"
                                                                 aria-hidden="true"></i>
                            </li>
                            <li class="dropdown simple-dropdown">
                                <a href="{{url('service')}}">Services</a><i class="fas fa-angle-down dropdown-toggle"
                                                                            data-toggle="dropdown" aria-hidden="true"></i>

                                <!-- start sub menu -->
                                <ul class="dropdown-menu" role="menu">

                                    @if($services)
                                        @foreach($services as $service)
                                            <li class="dropdown">
                                                <a class="dropdown-toggle" data-toggle="dropdown" href="{{url('service#' . str_slug($service->service_en->title ))}}">
                                                    {{$service->{'service_' . currentLang()}->title}}
                                                </a>
                                            </li>
                                        @endforeach
                                    @endif

                                </ul>
                                <!-- end sub menu -->
                            </li>

                            <li class="dropdown simple-dropdown"><a href="{{url('portfolio')}}">Portfolio</a><i
                                    class="fas fa-angle-down dropdown-toggle" data-toggle="dropdown" aria-hidden="true"></i>
                            </li>
                            <li class="dropdown simple-dropdown"><a href="{{url('client')}}" title="Blog">Clients</a><i
                                    class="fas fa-angle-down dropdown-toggle" data-toggle="dropdown" aria-hidden="true"></i>
                            </li>

                            <li class="dropdown megamenu-fw">
                                <a href="{{url('team')}}">Our Team</a><i class="fas fa-angle-down dropdown-toggle" data-toggle="dropdown"
                                                                     aria-hidden="true"></i>
                            </li>

                            <li class="dropdown megamenu-fw">
                                <a href="{{url('contact')}}">Contact Us</a><i class="fas fa-angle-down dropdown-toggle"
                                                                              data-toggle="dropdown" aria-hidden="true"></i>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2 col-xs-5 width-auto">
                    <div class="header-social-icon xs-display-none">
                        @if($contact->facebook)
                            <a href="{{url($contact->facebook)}}" title="Facebook" target="_blank"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                        @endif
                        @if($contact->twitter)
                                <a href="{{url($contact->twitter)}}" title="Twitter" target="_blank"><i class="fab fa-twitter"></i></a>
                        @endif
                        @if($contact->instagram)
                                <a href="{{url($contact->instagram)}}" title="Dribbble" target="_blank"><i class="fab fa-instagram"></i></a>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- end navigation -->
</header>
<!-- end header -->
