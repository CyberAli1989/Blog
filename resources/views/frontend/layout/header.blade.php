<div id="preloader">
    <div class="loader">
        <div class="snow">
            <span style="--i:11"></span>
            <span style="--i:12"></span>
            <span style="--i:15"></span>
            <span style="--i:17"></span>
            <span style="--i:18"></span>
            <span style="--i:13"></span>
            <span style="--i:14"></span>
            <span style="--i:19"></span>
            <span style="--i:20"></span>
            <span style="--i:10"></span>
            <span style="--i:18"></span>
            <span style="--i:13"></span>
            <span style="--i:14"></span>
            <span style="--i:19"></span>
            <span style="--i:20"></span>
            <span style="--i:10"></span>
            <span style="--i:18"></span>
            <span style="--i:13"></span>
            <span style="--i:14"></span>
            <span style="--i:19"></span>
            <span style="--i:20"></span>
            <span style="--i:10"></span>
        </div>
    </div>
</div>


<nav>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-3 col-6">
                <a href="#" class="logo">CyberAli</a>
            </div>
            <div id="mobile-menu" class="col-lg-9 mobile-menu order-last align-items-center justify-content-between">
                <ul class="menu">
                    <li>
                        <a href="#">
                            {{__("Home")}}
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            {{__("Services")}}
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            {{__("CV")}}
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            {{__("Samples")}}
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            {{__("Blog")}}
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            {{__("Contact With Me")}}
                        </a>
                    </li>
                </ul>
                <ul class="social">
                    <li>
                        <a href="#">
                            <span class="fa-brands fa-youtube"></span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="fa-brands fa-twitter"></span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="fa-brands fa-telegram"></span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="fa-brands fa-instagram"></span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-6 d-lg-none d-block">
                <a href="#" id="open-nav" class="nav-toggle">
                    <span class="fa-solid fa-bars-staggered"></span>
                </a>
            </div>
        </div>
    </div>
</nav>
<header
    style="background-image: url({{(!empty($homeSlider->header_img)?url($homeSlider->header_img):url('upload/no_image.jpg'))}})">
    <div id="particles-js"></div>
    <div class="content">
        <div class="box">
            <div class="box-img">
                <img
                    src="{{(!empty($homeSlider->header_profile))?url($homeSlider->header_profile):url('upload/no_image.jpg')}}"
                    alt="">
            </div>
            <div class="box-body">
                <h2>{{$homeSlider->title}}</h2>
                <p>
                    {{$homeSlider->short_description}}
                </p>
            </div>
            <div class="box-footer">
                <button class="download-button">
                    <a href="#">
                        <div class="docs">
                            <svg class="css-i6dzq1" stroke-linejoin="round" stroke-linecap="round" fill="none"
                                 stroke-width="2" stroke="currentColor" height="20" width="20" viewBox="0 0 24 24">
                                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                <polyline points="14 2 14 8 20 8"></polyline>
                                <line y2="13" x2="8" y1="13" x1="16"></line>
                                <line y2="17" x2="8" y1="17" x1="16"></line>
                                <polyline points="10 9 9 9 8 9"></polyline>
                            </svg> {{__("Download Cv")}}</div>
                        <div class="download">
                            <svg class="css-i6dzq1" stroke-linejoin="round" stroke-linecap="round" fill="none"
                                 stroke-width="2" stroke="currentColor" height="24" width="24" viewBox="0 0 24 24">
                                <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                <polyline points="7 10 12 15 17 10"></polyline>
                                <line y2="3" x2="12" y1="15" x1="12"></line>
                            </svg>
                        </div>
                    </a>
                </button>
            </div>
        </div>
    </div>
</header>


