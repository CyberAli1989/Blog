
<title>{{__("Verify Email")}}</title>
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

                    <h4 class="text-muted text-center font-size-18"><b>{{__("Verify Email")}}</b></h4>


                    <div class="p-3">
                        <form class="form-horizontal mt-3" method="post" action="{{route('verification.send')}} ">
                            @csrf
                            <div class="alert alert-info alert-dismissible fade show mt-3" role="alert">
                                {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                            </div>
                            @if (session('status') == 'verification-link-sent')
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                                </div>
                            @endif

                            <input class="btn btn-info w-100 waves-effect waves-light" type="submit" value="{{ __('Resend Verification Email') }}">

                        </form>
                        <form method="post" action="{{route('logout')}}">
                            @csrf
                            <input class="btn btn-secondary w-100 waves-effect waves-light" type="submit" value="{{__("Log Out")}}">
                        </form>
                    </div>
                </div>
                <!-- end cardbody -->
            </div>
            <!-- end card -->
        </div>
        <!-- end container -->
    </div>
    <!-- end -->


@endsection
