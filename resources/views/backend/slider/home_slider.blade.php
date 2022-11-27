@extends('backend.layout.admin-layout')


@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form method="post" enctype="multipart/form-data"
                          action="{{(empty($homeSlider->id)? route('admin.slider.home.create'):route('admin.slider.home.update',$homeSlider->id))}}">
                        @csrf
                        {{-- Title --}}
                        <div class="row mb-3">
                            <label for="title" class="col-sm-2 col-form-label">{{__("Title")}}</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="title"
                                       value="{{$homeSlider->title??null}}"
                                       placeholder="{{__("Title")}}"
                                       id="title">
                            </div>
                        </div>
                        {{-- Short Description --}}
                        <div class="row mb-3">
                            <label for="short_description"
                                   class="col-sm-2 col-form-label">{{__("Short Description")}}</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="short_description"
                                       value="{{$homeSlider->short_description??null}}"
                                       placeholder="{{__("Short Description")}}"
                                       id="short_description">
                            </div>
                        </div>
                        {{-- Cv File --}}
                        <div class="row mb-3">
                            <label for="cv_link" class="col-sm-2 col-form-label">{{__("Cv File")}}</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="file" name="cv_link"
                                       value="{{$homeSlider->cv_link??null}}"
                                       placeholder="{{__("Cv File")}}"
                                       id="cv_link">
                            </div>
                        </div>
                        {{-- Header Image --}}
                        <div class="row mb-3">
                            <label for="header_img" class="col-sm-2 col-form-label">{{__("Header Image")}}</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="file" name="header_img"
                                       placeholder="{{__("Header Image")}}"
                                       id="header_img">
                            </div>
                            <div class="text-end mt-3">
                                <label for="header_img">
                                    <img id="header_img_show"
                                         src="{{(!empty($homeSlider->header_img))? url($homeSlider->header_img):url('upload/no_image.jpg')}}"
                                         alt="avatar-5"
                                         class="rounded avatar-lg">
                                </label>

                            </div>
                        </div>
                        {{-- Header Profile --}}
                        <div class="row mb-3">
                            <label for="header_profile" class="col-sm-2 col-form-label">{{__("Header Profile")}}</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="file" name="header_profile"
                                       placeholder="{{__("Header Profile")}}"
                                       id="header_profile">
                            </div>
                            <div class="text-end mt-3">
                                <label for="header_profile">
                                    <img id="header_profile_show"
                                         src="{{(!empty($homeSlider->header_profile))? url($homeSlider->header_profile):url('upload/no_image.jpg')}}"
                                         alt="avatar-5"
                                         class="rounded avatar-lg">
                                </label>

                            </div>
                        </div>
                        {{-- Submit --}}
                        <div class="row mb-3">
                            <div class="col-sm-12">
                                <input class="btn btn-dark w-100" type="submit" value="{{__("Update Home Slider")}}">
                            </div>
                        </div>
                    </form>
                    <!-- end row -->
                </div>
            </div>
        </div> <!-- end col -->


    </div>


@endsection
