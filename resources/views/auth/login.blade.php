<title>{{__("Login")}}</title>

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
                            <img src="{{asset('backend/assets/images/logo-dark.png')}}" height="30" class="logo-dark mx-auto" alt="">
                            <img src="{{asset('backend/assets/images/logo-light.png')}}" height="30" class="logo-light mx-auto" alt="">
                        </a>
                    </div>
                </div>

                <h4 class="text-muted text-center font-size-18"><b>{{__("Sign In")}}</b></h4>

                <div class="p-3">
                    <form class="form-horizontal mt-3" method="post" action="{{route('login')}}">
                        @csrf
                        <div class="form-group mb-3 row">
                            <div class="col-12">
                                <input class="form-control" type="text" name="username" required="" placeholder="{{__("Username")}}">
                            </div>
                        </div>

                        <div class="form-group mb-3 row">
                            <div class="col-12">
                                <input name="password" class="form-control" type="password" required="" placeholder="{{__("Password")}}">
                            </div>
                        </div>

                        <div class="form-group mb-3 row">
                            <div class="col-12">
                                <div class="custom-control custom-checkbox">
                                    <input name="remember" type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="form-label ms-1" for="customCheck1">{{__("Remember me")}}</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group mb-3 text-center row mt-3 pt-1">
                            <div class="col-12">
                                <button class="btn btn-info w-100 waves-effect waves-light" type="submit">{{__("Log In")}}</button>
                            </div>
                        </div>

                        <div class="form-group mb-0 row mt-2">
                            <div class="col-sm-7 mt-3">
                                <a href="{{route('password.request')}}" class="text-muted"><i class="mdi mdi-lock"></i> {{__("Forgot your password?")}}</a>
                            </div>
                            <div class="col-sm-5 mt-3">
                                <a href="{{route('register')}}" class="text-muted"><i class="mdi mdi-account-circle"></i> {{__("Create an account")}}</a>
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


