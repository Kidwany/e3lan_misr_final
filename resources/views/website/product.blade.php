@extends('website.layouts.layouts')
@section('title', 'Contact')

@section('content')

 <!--== Sliders Style 02 Start ==-->
 <section class="white-bg pb-50">
    <div class="container-fluid">
    	<div class="row">
        	<div class="col-sm-8 section-heading">
              <h4 class="text-uppercase mt-0">Sliders Style 02</h4>
        	</div>
        </div>
    </div>
  </section>

  <section class="pt-0 pb-0 dark-block">
    <div class="service-slider-2 slick height-650px">
    @foreach($product_images as $product_image)
      <div class="slide">
        <div class="slide-img height-650px" style="background:url(assets/images/slides/home-bg-19.jpg) center center / cover scroll no-repeat;"></div>
        
            <div class="container">
              <div class="row">


              		<div class="white-color default-bg all-padding-50">
@if($product_image->isimage==1)
              	
                          <img src="/{{$product_image->url}}">
          						<!-- <h3 class="font-700">Creative & innovative digital agency.</h3>
          						<p class="mt-30"><a class="btn btn-dark btn-lg btn-default">Buy Template</a> </p> -->
              	
@else
                   <!--== Video Start ==-->
                  
                   <section class="parallax-bg fixed-bg"  data-parallax-bg-image="website/assets/images/video/parallax-bg-9.jpg" data-parallax-speed="0.8" data-parallax-direction="up">
  	<div class="parallax-overlay" style=" background-image: url(website/assets/images/video/parallax-bg-9.jpg);"></div>
  	<div class="container">
  		<div class="row">
  			<div class="col-md-12 text-center parallax-content">
  				<div class="center-layout">
                <div class="v-align-middle">
      					 <a class="popup-youtube" href="{{$product_image->url}}">
      					  <div class="play-button">
      					  	<i class="tr-icon ion-android-arrow-dropright"></i>
      					  </div>
      					 </a>
                  <h2 class="white-color">We create web & tech solutions<br> that bring you results</h2>
                  
                </div>
              </div>
  			</div>
  		</div>
  	</div>
  </section>
  <!--== Video End ==-->

                  @endif
                  </div>
                 
                 
            
          </div>
        </div>
      </div>
      @endforeach
      

 
  </section>
  <!--== Sliders Style 02 End ==-->
  @endsection