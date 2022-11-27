@extends('backend.layout.admin-layout')

@section('content')

    <div class="row">

        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form method="post" enctype="multipart/form-data" action="{{route('admin.profile.update')}}">
                        @csrf
                        {{-- Name --}}
                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">{{__("Name")}}</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="name" value="{{$editUser->name}}"
                                       placeholder="{{__("Name")}}"
                                       id="example-text-input">
                            </div>
                        </div>
                        {{-- Username --}}
                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">{{__("Username")}}</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="username" value="{{$editUser->username}}"
                                       placeholder="{{__("Username")}}"
                                       id="example-text-input">
                            </div>
                        </div>
                        {{-- Email --}}
                        <div class="row mb-3">
                            <label for="email" class="col-sm-2 col-form-label">{{__("Email")}}</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="email" name="email" value="{{$editUser->email}}"
                                       placeholder="{{__("Email")}}"
                                       id="email">
                            </div>
                        </div>
                        {{-- Profile Image --}}
                        <div class="row mb-3">
                            <label for="profile_img" data-img="true" class="col-sm-2 col-form-label">{{__("Profile Img")}}</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="file" name="profile_img"
                                       placeholder="{{__("Profile Img")}}"
                                       id="profile_img">
                            </div>

                            <div class="text-end mt-3">
                                <label for="profile_img">
                                    <img id="show_img" src="{{(!empty($editUser->profile_img))? url('upload/'.$editUser->id.'/'.$editUser->profile_img):url('upload/no_image.jpg')}}" alt="avatar-5"
                                         class="rounded avatar-lg">
                                </label>

                            </div>
                        </div>
                        {{-- Submit --}}
                        <div class="row mb-3">
                            <div class="col-sm-12">
                                <input class="btn btn-dark w-100" type="submit" value="{{__("Update Profile")}}">
                            </div>
                        </div>
                    </form>
                    <!-- end row -->
                </div>
            </div>
        </div> <!-- end col -->


    </div>


@endsection
