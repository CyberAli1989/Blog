<?php
$id = Auth::user()->id;
$showUser = \App\Models\User::find($id);
?>

<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!-- User details -->
        <div class="user-profile text-center mt-3">
            <div class="">
                <img src="{{(!empty($showUser->profile_img))? url('upload/'.$id.'/'.$showUser->profile_img):url('upload/no_image.jpg')}}" alt="" class="avatar-md rounded-circle">
            </div>
            <div class="mt-3">
                <h4 class="font-size-16 mb-1">{{$showUser->name}}</h4>
                <span class="text-muted"><i class="ri-record-circle-line align-middle font-size-14 text-success"></i> Online</span>
            </div>
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">{{__("Menu")}}</li>

                <li>
                    <a href="{{route('dashboard')}}" class="waves-effect">
                        <i class="ri-dashboard-line"></i><span class="badge rounded-pill bg-success float-end">3</span>
                        <span>{{__("Dashboard")}}</span>
                    </a>
                </li>

                <li>
                    <a href="#" class=" waves-effect">
                        <i class="ri-calendar-2-line"></i>
                        <span>{{__("Calendar")}}</span>
                    </a>
                </li>
                {{--Slider Setup--}}
                <li>
                    <a href="#" class="has-arrow waves-effect">
                        <i class="ri-mail-send-line"></i>
                        <span>{{__("Home Slide Setup")}}</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('admin.slider.home')}}">{{__("Home Slide")}}</a></li>
                    </ul>
                </li>

                {{--About Me Setup--}}
                <li>
                    <a href="#" class="has-arrow waves-effect">
                        <i class="ri-mail-send-line"></i>
                        <span>{{__("About Me Setup")}}</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('admin.about.index')}}">{{__("About Me")}}</a></li>
                    </ul>
                </li>
                {{--Category Setup--}}
                <li>
                    <a href="#" class="has-arrow waves-effect">
                        <i class="ri-mail-send-line"></i>
                        <span>{{__("Category Setup")}}</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('admin.category.create')}}">{{__("Category")}}</a></li>
                    </ul>
                </li>
                {{--Portfolio Setup--}}
                <li>
                    <a href="#" class="has-arrow waves-effect">
                        <i class="ri-mail-send-line"></i>
                        <span>{{__("Portfolio Setup")}}</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('admin.portfolio.create')}}">{{__("Portfolio")}}</a></li>
                    </ul>
                </li>


                <li class="menu-title">Components</li>

                <li>
                    <a href="#" class="has-arrow waves-effect">
                        <i class="ri-profile-line"></i>
                        <span>{{__("Utility")}}</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="#">{{__("Starter Page")}}</a></li>
                        <li><a href="#">{{__("Timeline")}}</a></li>
                        <li><a href="#">{{__("Directory")}}</a></li>
                        <li><a href="#">{{__("Invoice")}}</a></li>
                        <li><a href="#">{{__("Error 404")}}</a></li>
                        <li><a href="#">{{__("Error 500")}}</a></li>
                    </ul>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
