@extends('backend.layout.admin-layout')


@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form method="post" enctype="multipart/form-data"
                          action="{{(empty($about->id)? route('admin.about.create'):route('admin.about.update',$about->id))}}">
                        @csrf
                        {{-- Name --}}
                        <div class="row mb-3">
                            <label for="name" class="col-sm-2 col-form-label">{{__("Name")}}</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="name"
                                       value="{{$about->name??null}}"
                                       placeholder="{{__("Name")}}"
                                       id="name">
                            </div>
                        </div>
                        {{-- Job --}}
                        <div class="row mb-3">
                            <label for="job"
                                   class="col-sm-2 col-form-label">{{__("Job")}}</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="job"
                                       value="{{$about->job??null}}"
                                       placeholder="{{__("Job")}}"
                                       id="job">
                            </div>
                        </div>
                        {{-- Description --}}
                        <div class="row mb-3">
                            <label for="description"
                                   class="col-sm-2 col-form-label">{{__("Description")}}</label>
                            <div class="col-sm-10">
                                <textarea name="description" id="editor1" class="form-control" rows="8">
                                    {{json_decode($about->description??null)}}
                                </textarea>
                            </div>
                        </div>
                        {{-- About Me Image --}}
                        <div class="row mb-3">
                            <label for="header_profile" class="col-sm-2 col-form-label">{{__("About Me Image")}}</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="file" name="image"
                                       placeholder="{{__("About Me Image")}}"
                                       id="header_profile">
                            </div>
                            <div class="text-end mt-3">
                                <label for="header_profile">
                                    <img id="header_profile_show"
                                         src="{{(!empty($about->image))? url($about->image):url('upload/no_image.jpg')}}"
                                         alt="avatar-5"
                                         class="rounded avatar-lg">
                                </label>

                            </div>
                        </div>
                        {{-- Submit --}}
                        <div class="row mb-3">
                            <div class="col-sm-12">
                                <input class="btn btn-dark w-100" type="submit" value="{{__("Update About Me")}}">
                            </div>
                        </div>
                    </form>
                    <!-- end row -->
                </div>
            </div>
        </div> <!-- end col -->


    </div>


@endsection
