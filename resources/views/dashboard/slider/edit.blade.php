@extends('dashboard.layouts.layouts')
@section('title', 'Dashboard')
{{--Drop Your Customized Style Codes Here--}}
@section('customizedStyle')
@endsection
{{--Drop Your Customized Scripts Codes Here--}}
@section('customizedScript')
    <script>
        //Initialize Select2 Elements
        $('.select2').select2()
    </script>
@endsection
{{-- Start of page Content --}}
@section('content')

    <section class="content-header">
        <h1>
            Slider
            <small>Edit Slide</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{adminUrl('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{{adminUrl('/slider')}}">Slider</a></li>
            <li class="active">Edit Slide</li>
        </ol>
    </section>


    <section class="content">
        @include('dashboard.layouts.messages')
        <form role="form" action="{{route('slider.update', $slide->id)}}" enctype="multipart/form-data" method="post">
            @csrf
            @method('patch')
            <div class="row">
                <!-- English Side -->
                <div class="col-md-12">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Add Slide Info</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <div class="box-body">
                            <div class="form-group">
                                <div class="col-lg-6">
                                    <label for="exampleInputEmail1"> URL</label>
                                    <input type="text" class="form-control" name="url" id="exampleInputEmail1" placeholder="Enter URL" value="{{$slide->url}}">
                                    <p class="help-block">Enter Url of Slide If Exist</p>
                                </div>

                                <div class="col-lg-6">
                                    <label for="exampleInputEmail1"> Slide Title</label>
                                    <input type="text" class="form-control" name="title_en" id="exampleInputEmail1" placeholder="Enter Slide Title" value="{{$slide->slider_en->title}}">
                                    <p class="help-block">Enter Title of Slide</p>
                                </div>

                                <div class="col-lg-6">
                                    <label for="exampleInputEmail1"> Slide Sub Title</label>
                                    <input type="text" class="form-control" name="sub_title" id="exampleInputEmail1" placeholder="Enter Slide Sub Title" value="{{$slide->slider_en->sub_title}}">
                                    <p class="help-block">Enter Sub Title of Slide</p>
                                </div>

                                <div class="col-lg-6">
                                    <label for="exampleInputEmail1"> Slide Description</label>
                                    <input type="text" class="form-control" name="description_en" id="exampleInputEmail1" placeholder="Enter Slide Description" value="{{$slide->slider_en->description}}">
                                    <p class="help-block">Enter Description of Slide</p>
                                </div>

                                <div class="col-lg-6">
                                    <label for="exampleInputEmail1"> Button</label>
                                    <input type="text" class="form-control" name="button_en" id="exampleInputEmail1" placeholder="Enter button text" value="{{$slide->slider_en->button}}">
                                    <p class="help-block">Enter Text on button </p>
                                </div>

                                <div class="col-lg-6">
                                    <label for="exampleInputEmail1"> Image</label>
                                    <input type="file" class="form-control" name="image_id" id="exampleInputEmail1" placeholder="Enter button text">
                                    <p class="help-block"> Upload Slide Image <strong>Recommended High Resolution Image</strong> </p>
                                </div>

                            </div>
                        </div>
                        <div class="box-footer">
                            <div class="col-lg-6">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </form>
    </section>

@endsection
