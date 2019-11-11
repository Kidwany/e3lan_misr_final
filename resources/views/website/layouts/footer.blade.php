<!-- start footer -->
<footer class="footer-modern-dark bg-extra-dark-gray padding-five-tb xs-padding-30px-tb">
    <div class="footer-widget-area padding-40px-bottom xs-padding-30px-bottom">
        <div class="container">
            <div class="row equalize xs-equalize-auto">
                <!-- start slogan -->
                <div
                    class="col-md-4 col-sm-12 col-xs-12 xs-text-center sm-margin-three-bottom xs-margin-20px-bottom display-table">
                    <div class="display-table-cell vertical-align-middle">
                        <h6 class="text-light-gray width-70 md-width-100 no-margin-bottom">Crop Media Business
                            Consultant Company</h6>
                    </div>
                </div>
                <!-- end slogan -->
                <!-- start contact information -->
                <div class="col-md-4 col-sm-6 col-xs-12 xs-text-center xs-margin-20px-bottom display-table">
                    <div class="display-table-cell vertical-align-middle">
							<span class="display-block text-light-gray">{!! $contact->address_en !!}</span>
                        <a href="mailto:sales@domain.com" title="sales@domain.com" class="text-light-gray">{{$contact->mail}}</a>
                        <span class="text-light-gray">{{$contact->phone}}</span>
                    </div>
                </div>
                <!-- end contact information -->
                <!-- start social media -->
                <div class="col-md-4 col-sm-6 col-xs-12 social-style-2 xs-text-center display-table">
                    <div class="display-table-cell vertical-align-middle">
                        <a href="{{url('/')}}"><img class="footer-logo" src="{{asset($setting->image->path)}}"
                                                 data-rjs="{{asset($setting->image->path)}}" alt="crop"></a>
                        <div class="social-icon-style-8">
                            <ul class="text-extra-small margin-20px-top xs-no-margin-bottom text-uppercase no-padding no-margin-bottom list-style-none">
                                @if($contact->facebook)
                                    <li class="display-inline-block margin-10px-right">
                                        <a class="text-light-gray" href="{{$contact->facebook}}" target="_blank" title="">Facebook</a>
                                    </li>
                                @endif
                                @if($contact->twitter)
                                        <li class="display-inline-block margin-10px-right">
                                            <a class="text-light-gray" href="{{$contact->twitter}}" target="_blank" title="Twitter">Twitter</a>
                                        </li>
                                @endif
                                @if($contact->instagram)
                                        <li class="display-inline-block margin-10px-right">
                                            <a class="text-light-gray" href="{{$contact->instagram}}" target="_blank" title="Instagram">Instagram</a>
                                        </li>
                                @endif
                                @if($contact->linkedin)
                                        <li class="display-inline-block margin-10px-right">
                                            <a class="text-light-gray" href="{{$contact->linkedin}}" target="_blank" title="Linkedin">Linkedin</a>
                                        </li>
                                @endif

                            </ul>
                        </div>
                    </div>
                </div>
                <!-- end social media -->
            </div>
        </div>
    </div>
    <div class="container">
        <!-- start copyright -->
        <div class="footer-bottom border-top border-color-medium-dark-gray padding-40px-top xs-padding-30px-top">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12 text-left text-small xs-text-center"></div>
                <div class="col-md-6 col-sm-6 col-xs-12 text-right text-small xs-text-center">&copy; 2019 Crop Media
                    is Proudly Powered by <a href="http://www.cropmedia.org" target="_blank" title="Crop Media">Crop
                        Media</a></div>
            </div>
        </div>
        <!-- end copyright -->
    </div>
</footer>
<!-- end footer -->
