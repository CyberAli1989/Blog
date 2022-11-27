<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="{{asset('frontend/assets/css/bootstrap-rtl.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/main.css')}}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body dir="rtl">
@include('frontend.layout.header')

<section id="hero" class="my-4 py-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="img-container">
                    <img src="{{asset('frontend/assets/imgs/front-end/user.png')}}" alt="">
                </div>
            </div>
            <div class="col-lg-8">
                <div class="content">
                    <h2 class="name">{{Auth::user()->name}}</h2>
                    <h4 class="job">{{__("full stack web developer")}}</h4>
                    <p>
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است،
                        چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی
                        مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. لورم ایپسوم متن ساختگی با
                        تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه
                        و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع
                        با هدف بهبود ابزارهای کاربردی می باشد.
                    </p>
                    <a href="#" class="btn btn-red">{{__("Samples")}}</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="hobbits" class="my-4 py-5">
    <div class="container">
        <div class="title">
            <h2>{{__("Interests and hobbies")}}
            </h2>
            <span></span>
            <p class="mt-5">
                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و
                متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است
            </p>
        </div>
        <div class="content mt-3">
            <div class="row">
                <div class="col-lg-3 my-3">
                    <div class="box">
                        <div class="icon">
                            <i class="fa-solid fa-clapperboard"></i>
                        </div>
                        <div class="name">
                            {{__("Movies")}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 my-3">
                    <div class="box">
                        <div class="icon">
                            <i class="fa-solid fa-clapperboard"></i>
                        </div>
                        <div class="name">
                            {{__("Movies")}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 my-3">
                    <div class="box">
                        <div class="icon">
                            <i class="fa-solid fa-clapperboard"></i>
                        </div>
                        <div class="name">
                            {{__("Movies")}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 my-3">
                    <div class="box">
                        <div class="icon">
                            <i class="fa-solid fa-clapperboard"></i>
                        </div>
                        <div class="name">
                            {{__("Movies")}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 my-3">
                    <div class="box">
                        <div class="icon">
                            <i class="fa-solid fa-clapperboard"></i>
                        </div>
                        <div class="name">
                            {{__("Movies")}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 my-3">
                    <div class="box">
                        <div class="icon">
                            <i class="fa-solid fa-clapperboard"></i>
                        </div>
                        <div class="name">
                            {{__("Movies")}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 my-3">
                    <div class="box">
                        <div class="icon">
                            <i class="fa-solid fa-clapperboard"></i>
                        </div>
                        <div class="name">
                            {{__("Movies")}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 my-3">
                    <div class="box">
                        <div class="icon">
                            <i class="fa-solid fa-clapperboard"></i>
                        </div>
                        <div class="name">
                            {{__("Movies")}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<script src="{{asset('frontend/assets/js/jquery.min.js')}}"></script>
<script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
<script src="{{asset('frontend/assets/js/nav.js')}}"></script>
<script src="{{asset('frontend/assets/js/plugins/init.js')}}"></script>
<script src="{{asset('frontend/assets/js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>

