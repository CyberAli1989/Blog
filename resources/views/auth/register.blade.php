
<title>{{__("Register")}}</title>

@extends('auth.layout.auth-layout')

@section('content')
    <div class="bg-overlay"></div>
    <div class="wrapper-page">
        <div class="container-fluid p-0">
            <div class="card">
                <div class="card-body">
                    <div class="text-center mt-4">
                        <div class="mb-3">
                            <a href="#" class="auth-logo">
                                <img src="{{asset('backend/assets/images/logo-dark.png')}}" height="30"
                                     class="logo-dark mx-auto" alt="">
                                <img src="{{asset('backend/assets/images/logo-light.png')}}" height="30"
                                     class="logo-light mx-auto" alt="">
                            </a>
                        </div>
                    </div>

                    <h4 class="text-muted text-center font-size-18"><b>{{__("Register")}}</b></h4>

                    <div class="p-3">
                        <form class="form-horizontal mt-3" method="post" action="{{route('register')}}">
                            @csrf
                            <div class="form-group mb-3 row">
                                <div class="col-12">
                                    <input class="form-control" type="text" name="name" required=""
                                           placeholder="{{__("Name")}}">
                                </div>
                            </div>

                            <div class="form-group mb-3 row">
                                <div class="col-12">
                                    <input class="form-control" type="text" name="username" required=""
                                           placeholder="{{__("Username")}}">
                                </div>
                            </div>

                            <div class="form-group mb-3 row">
                                <div class="col-12">
                                    <input class="form-control" type="text" name="email" required=""
                                           placeholder="{{__("Email")}}">
                                </div>
                            </div>

                            <div class="form-group mb-3 row">
                                <div class="col-12">
                                    <input name="password" class="form-control" type="password" required=""
                                           placeholder="{{__("Password")}}">
                                </div>
                            </div>

                            <div class="form-group mb-3 row">
                                <div class="col-12">
                                    <input name="password_confirmation" class="form-control" type="password" required=""
                                           placeholder="{{__("Confirm Password")}}">
                                </div>
                            </div>

                            <div class="form-group mb-3 text-center row mt-3 pt-1">
                                <div class="col-12">
                                    <button class="btn btn-info w-100 waves-effect waves-light"
                                            type="submit">{{__("Register")}}</button>
                                </div>
                            </div>

                            <div class="form-group mt-2 mb-0 row">
                                <div class="col-12 mt-3 text-center">
                                    <a href="{{route('login')}}" class="text-muted">Already have account?</a>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- end -->
                </div>
                <!-- end cardbody -->
            </div>
            <!-- end card -->
        </div>
        <!-- end container -->
    </div>
@endsection
<!-- end -->


