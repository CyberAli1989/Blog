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

{{--start hereo section--}}
<section id="hero" class="my-4 py-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="img-container">
                    <img src="{{(!empty($about->image)?asset($about->image):url('upload/no-image.jpg'))}}" alt="">
                </div>
            </div>
            <div class="col-lg-8">
                <div class="content">
                    <h2 class="name">{{$about->name}}</h2>
                    <h4 class="job">{{__("full stack web developer")}}</h4>
                    <div>
                        @if($_GET['q']??null)
                            {!! json_decode($about->description) !!}
                        @else
                            {!! mb_substr(json_decode($about->description) , 0 , 600)  !!}
                            <a href="?q=all"> ...</a>
                        @endif
                    </div>
                    <a href="#" class="btn btn-red active">{{__("Samples")}}</a>
                </div>
            </div>
        </div>
    </div>
</section>
{{--end hereo section--}}

{{--start hobbits section--}}
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
{{--end hobbits section--}}

{{--start portfolio section--}}
<section id="portfolio" class="my-4 py-5">
    <div class="container">
        <div class="title">
            <h2>{{__("PortFolio")}}
            </h2>
            <span></span>
            <p class="mt-5">
                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و
                متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است
            </p>
        </div>
        <div class="row my-3">
            <div class="col-12">
                <div id="portfolio_sort" class="btns">
                    <a href="#" data-filter="all" class="btn btn-red active">همه</a>
                    @foreach($portfolio_cats as $btn)
                        <a href="#" data-filter="cat{{$btn->id}}" class="btn btn-red">{{$btn->title}}</a>
                    @endforeach
                </div>
            </div>
            <div id="sort_items" class="row py-5">
                @foreach($portfolio as $item)
                <div class="col-lg-3 my-2 cat{{$item->category->id}} items">
                    <div class="box">
                        <div class="box-img">
                            <a href="#"><span class="fa fa-eye"></span></a>
                            <img src="{{url($item->image)}}" alt="">
                        </div>
                        <div class="box-content">
                            <a href="#" class="name h4">{{$item->name}}</a>
                            <p class="category">{{$item->category->title}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>


</section>
{{--end portfolio section--}}


<script src="{{asset('frontend/assets/js/jquery.min.js')}}"></script>
<script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
<script src="{{asset('frontend/assets/js/nav.js')}}"></script>
<script src="{{asset('frontend/assets/js/portfolio.js')}}"></script>
<script src="{{asset('frontend/assets/js/plugins/init.js')}}"></script>
<script src="{{asset('frontend/assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/preloader.js')}}"></script>
@yield('script')
</body>
</html>

