@extends('backend.layout.admin-layout')

@section('content')

    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <img class="card-img-top avatar-lg rounded-circle mt-3 mx-auto img-fluid"
                     src="{{(!empty($showUser->profile_img))? url('upload/'.$showUser->id.'/'.$showUser->profile_img):url('upload/no_image.jpg')}}"
                     alt="{{$showUser->name}}">
                <div class="card-body">
                    <h4 class="">{{$showUser->name}}</h4>
                    <hr>
                    <span class="h6">{{__("Username : ")}}</span>
                    <p class="card-text d-inline-block">{{$showUser->username}}</p>
                    <hr>
                    <span class="h6">{{__("Email : ")}}</span>
                    <p class="card-text d-inline-block">{{$showUser->email}}</p>
                    <hr>
                    <p class="card-text">
                        <small class="text-muted">{{$showUser->created_at}}</small>
                    </p>
                    <a href="{{route('admin.profile.edit')}}"
                       class="btn btn-dark w-100">{{__("Edit Profile")}}</a>
                </div>
            </div>
        </div>
    </div>

@endsection
