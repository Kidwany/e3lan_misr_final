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

    <script>
        $(document).ready(function () {
            $('#main_services').on('change', function () {
                var mainServicetId = $(this).val();
                //alert(mainServicetId);
                if (mainServicetId)
                {
                    $.ajax({
                        header: '@csrf',
                        url: '{{adminUrl('sub-services/')}}' + '/' + mainServicetId,
                        type: "GET",
                        dataType: 'json',
                        success: function (data) {
                            $('#sub_services').empty();
                            //$('#childOfChildLocation').empty();
                            $.each(data, function (key, value) {
                                $('#sub_services').append('<option value="' + value.id +'">'+ value.service_en.title +'</option>')

                            })
                        }
                    })
                }
            });

            $('#parent_location').on('change', function () {
                var parentLocationIdId = $(this).val();
                //alert(childId);
                if (parentLocationIdId)
                {
                    $.ajax({
                        header: '@csrf',
                        url: '{{adminUrl('child-locations/')}}' + '/' + parentLocationIdId,
                        type: "GET",
                        dataType: 'json',
                        success: function (data) {
                            $('#child_location').empty();
                            $('#child_of_child_location').empty();
                            $.each(data, function (key, value) {
                                $('#child_location').append('<option value="' + value.id +'">'+ value.child_location_en.location +'</option>')

                            })
                        }
                    })
                }
            });

            $('#child_location').on('click', function () {
                var childLocationIdId = $(this).val();
                //alert(childId);
                if (childLocationIdId)
                {
                    $.ajax({
                        header: '@csrf',
                        url: '{{adminUrl('child-of-child-locations/')}}' + '/' + childLocationIdId,
                        type: "GET",
                        dataType: 'json',
                        success: function (data) {
                            $('#child_of_child_location').empty();
                            $.each(data, function (key, value) {
                                $('#child_of_child_location').append('<option value="' + value.id +'">'+ value.child_of_child_location_en.location +'</option>')

                            })
                        }
                    })
                }
            });
        });
    </script>
@endsection
{{-- Start of page Content --}}
@section('content')

    <section class="content-header">
        <h1>
            Billboards
            <small>Edit Billboard</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{adminUrl('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{{adminUrl('/billboard')}}">Billboard</a></li>
            <li class="active">Add Billboard</li>
        </ol>
    </section>


    <section class="content">
        @include('dashboard.layouts.messages')
        <form role="form" action="{{route('billboard.update', $billboard->id)}}" enctype="multipart/form-data" method="post">
            @csrf
            @method('patch')
            <input type="hidden" name="created_by">
            <div class="row">
                <!-- English Side -->
                <div class="col-md-12">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Add Billboard Info</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <div class="box-body">
                            <div class="form-group">

                                <div class="col-lg-4">
                                    <label for="exampleInputEmail1"> Name</label>
                                    <input type="text" class="form-control" name="name" id="exampleInputEmail1" placeholder="Enter Billboard Title" value="{{$billboard->billboard_en->name}}">
                                    <p class="help-block">Enter title of service</p>
                                </div>

                                <div class="col-lg-4">
                                    <label for="exampleInputEmail1">Billboard Code</label>
                                    <input type="text" class="form-control" name="code" id="exampleInputEmail1" placeholder="Enter Billboard Code" value="{{$billboard->code}}">
                                    <p class="help-block">Enter Billboard Code Ex: #E52S48</p>
                                </div>

                                <div class="col-lg-4">
                                    <label for="exampleInputEmail1">Billboard Dimensions</label>
                                    <input type="text" class="form-control" name="dimensions" id="exampleInputEmail1" placeholder="Enter Billboard Dimensions" value="{{$billboard->dimension}}">
                                    <p class="help-block">Enter Billboard Dimensions </p>
                                </div>

                                <div class="col-lg-4">
                                    <label for="exampleInputEmail1">Billboard Location Url</label>
                                    <input type="url" class="form-control" name="location" id="exampleInputEmail1" placeholder="Enter Billboard Location" value="{{$billboard->location}}">
                                    <p class="help-block">Enter Billboard Area Url on <strong>Google Maps</strong> </p>
                                </div>

                                <div class="col-lg-4">
                                    <label for="exampleInputEmail1"> Billboard Service Name</label>
                                    <select name="service_id" id="main_services" class="form-control">
                                        <option value="0">Choose Service Name</option>
                                        @if($services)
                                            @foreach($services as $service)
                                                <option value="{{$service->id}}" {{$service->id == $billboard->service_id ? 'selected' : ''}}>{{$service->service_en->title}}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                    <p class="help-block"> Choose Service for this Billboard</p>
                                </div>

                                <div class="col-lg-4">
                                    <label for="exampleInputEmail1"> Billboard Sub Service Name</label>
                                    <select name="sub_service" id="sub_services" class="form-control">
                                        <option>Choose Service Name</option>
                                        @if($subServices)
                                            @foreach($subServices as $subService)
                                                <option value="{{$subService->id}}" {{$subService->id == $billboard->sub_service_id ? 'selected' : ''}}>{{$subService->service_en->title}}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                    <p class="help-block"> Choose Sub Service for this Billboard if Exist</p>
                                </div>

                                <div class="col-lg-4">
                                    <label for="exampleInputEmail1"> Billboard Area</label>
                                    <select name="parent_location" id="parent_location" class="form-control">
                                        <option>Choose Area</option>
                                        @if($parentLocations)
                                            @foreach($parentLocations as $parentLocation)
                                                <option value="{{$parentLocation->id}}" {{$parentLocation->id == $billboard->parent_location_id ? 'selected' : ''}}>{{$parentLocation->parentLocation_en->location}}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                    <p class="help-block"> Choose Billboard Area</p>
                                </div>

                                <div class="col-lg-4">
                                    <label for="exampleInputEmail1"> Billboard Zone</label>
                                    <select name="child_location" id="child_location" class="form-control">
                                        <option>Choose Zone</option>
                                        @if($childLocations)
                                            @foreach($childLocations as $childLocation)
                                                <option value="{{$childLocation->id}}" {{$childLocation->id == $billboard->child_location_id ? 'selected' : ''}}>{{$childLocation->childLocation_en->location}}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                    <p class="help-block"> Choose Billboard Zone</p>
                                </div>

                                <div class="col-lg-4">
                                    <label for="exampleInputEmail1"> Billboard Location</label>
                                    <select name="child_of_child_location" id="child_of_child_location" class="form-control">
                                        <option>Choose Location</option>
                                        @if($childOfChildLocations)
                                            @foreach($childOfChildLocations as $childOfChildLocation)
                                                <option value="{{$childOfChildLocation->id}}" {{$childOfChildLocation->id == $billboard->child_location_id ? 'selected' : ''}}>{{$childOfChildLocation->childOfChildLocation_en->location}}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                    <p class="help-block"> Choose Billboard Location</p>
                                </div>

                                <div class="col-lg-4">
                                    <label for="exampleInputEmail1"> Billboard Size</label>
                                    <select name="size" id="size" class="form-control">
                                        <option>Choose Size</option>
                                        @if($sizes)
                                            @foreach($sizes as $size)
                                                <option value="{{$size->id}}" {{$billboard->size_id == $size->id ? 'selected' : ''}}>{{$size->size}}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                    <p class="help-block"> Choose Billboard Size</p>
                                </div>

                                <div class="col-lg-4">
                                    <label for="exampleInputEmail1"> Image</label>
                                    <input type="file" class="form-control" name="image_id" id="exampleInputEmail1" placeholder="Enter Billboard text">
                                    <p class="help-block"> Upload Billboard Image </p>
                                </div>

                                <div class="col-lg-4">
                                    <label for="exampleInputEmail1"> Images</label>
                                    <input type="file" class="form-control" multiple name="images[]" id="exampleInputEmail1" placeholder="Enter Billboard text">
                                    <p class="help-block"> Upload another Billboard Images </p>
                                </div>

                                <div class="col-lg-8">
                                    <label for="exampleInputEmail1"> Billboard Description</label>
                                    <textarea  class="form-control" name="description" id="exampleInputEmail1" placeholder="Enter Billboard Description" rows="6">{{$billboard->billboard_en->description}}</textarea>
                                    <p class="help-block">Enter Description of Billboard</p>
                                </div>

                                {{-- <div class="col-lg-6">
                                     <label for="exampleInputEmail1"> Video Url</label>
                                     <input type="url" class="form-control" name="video_id" id="exampleInputEmail1" placeholder="Enter Video Url">
                                     <p class="help-block"> Enter Youtube Video Embed Url </p>
                                 </div>--}}

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
