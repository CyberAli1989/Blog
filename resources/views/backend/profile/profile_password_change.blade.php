@extends('backend.layout.admin-layout')

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form method="post" action="{{route('admin.profile.password-save')}}">
                        @csrf
                        @if($errors)

                            @foreach($errors->all() as $err)
                                <p class="alert alert-danger">{{__($err)}}</p>
                            @endforeach
                        @endif
                        Old Password
                        <div class="row mb-3">
                            <label for="old_pass"
                                   class="col-sm-2 col-form-label">{{__("Old Password")}}</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="password" name="old_pass"
                                       placeholder="{{__("Old Password")}}"
                                       id="old_pass">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="new_pass"
                                   class="col-sm-2 col-form-label">{{__("New Password")}}</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="password" name="new_pass"
                                       placeholder="{{__("New Password")}}"
                                       id="new_pass">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="confirm_pass"
                                   class="col-sm-2 col-form-label">{{__("Confirm Password")}}</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="password" name="confirm_pass"
                                       placeholder="{{__("Confirm Password")}}"
                                       id="confirm_pass">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-12">
                                <input class="btn btn-dark w-100" type="submit" value="{{__("Update Password")}}">
                            </div>
                        </div>
                    </form>
                    <!-- end row -->
                </div>
            </div>
        </div> <!-- end col -->

    </div>
@endsection
