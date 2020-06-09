<div id="mobile-menu" class="d-none flex-column justify-content-between position-fixed w-100 h-100 p-5 bg-light">
    <div class="d-flex justify-content-between align-items-center">

    </div>
    <div class="d-flex flex-column justify-content-around">
        <a href="{{route('/')}}" class="text-uppercase p-3">home</a>
        <a href="{{route('view_about')}}" class="text-uppercase p-3">about</a>
        <a href="{{route('view_services')}}" class="text-uppercase p-3">services</a>
        <a href="{{route('view_countries')}}" id="navDropdownMobile" data-toggle="dropdown" aria-haspopup="true"
           aria-expanded="false"
           class="text-uppercase p-3 dropdown dropdown-toggle">countries</a>

        <div class="dropdown-menu border-0" aria-labelledby="navDropdownMobile">
            @if(!empty($countries))
                @foreach($countries as $country)
                    <a href="{{ url('country_details').'/'.$country->id }}"
                       class="dropdown-item text-uppercase">{{ $country->country_name }}</a>
                @endforeach
            @endif
        </div>

        <a href="{{route('view_institutes')}}" class="text-uppercase p-3">institutes</a>
        <a href="{{route('view_stories')}}" class="text-uppercase p-3">success stories</a>
        <a href="{{route('view_blog')}}" class="text-uppercase p-3">blog</a>
        <a href="{{route('view_apply')}}" class="text-uppercase p-3">apply online</a>
    </div>
    <div class="d-flex align-items-center justify-content-around">
        <a href="https://facebook.com/InspirenGlobalEducation" target="_blank" class="social-fb"><i
                class="fab fa-facebook fa-2x"></i></a>
        <a href="https://twitter.com/InspirenEdu" target="_blank" class="social-twitter"><i
                class="fab fa-twitter fa-2x"></i></a>
        <a href="https://www.linkedin.com/in/inspiren-global-education-b79457194/" target="_blank"
           class="social-linkedin"><i class="fab fa-linkedin fa-2x"></i></a>
    </div>
</div>
@if(!empty($owner))
<nav class="navbar navbar-expand-lg navbar-light bg-color-primary text-light">
    <button class="navbar-toggler text-white" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <div class="collapse navbar-collapse text-light">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link text-light" href="#"> <i class="fas fa-phone"></i> &nbsp;{{ $owner->owner_mobile }} <span class="sr-only"></span></a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <a class="nav-link text-light" href="#"> <i class="fas fa-envelope"></i> &nbsp;{{ $owner->owner_email }} <span class="sr-only"></span></a>
            </form>
        </div>
    </button>


    <div class="collapse navbar-collapse text-light" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link text-light" href="#"> <i class="fas fa-phone"></i> &nbsp;+971 8856 221 23, +971 8856 221 23 <span class="sr-only"></span></a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
                <a class="nav-link text-light" href="#"> <i class="fas fa-envelope"></i> &nbsp;igeducation@gmail.com <span class="sr-only"></span></a>
        </form>
    </div>
</nav>
@endif
<!-- Fixed navbar -->
<header class="bg-light sticky-top" id="navbar">
    <div class="container-fluid">
        <div class="row no-gutter d-flex justify-content-between align-items-center">
            <a href="{{url('/')}}"><img src="{{asset('View/img/logo.png')}}" class="header-logo"
                                        alt="IG Education Logo"/></a>
            <div class="d-block d-md-none pr-3">
                <button class="btn" type="button" onclick="toggleMobileMenu()"><i class="fas fa-bars fa-2x"></i>
                </button>
            </div>
            <div class="d-none d-md-flex justify-content-around align-items-center">
                <a href="{{route('/')}}" class="text-uppercase px-2">home</a>
                <a href="{{route('view_about')}}" class="text-uppercase px-2">about</a>
                <a href="{{route('view_services')}}" class="text-uppercase px-2">services</a>

                <a class="nav-link nav-item dropdown dropdown-toggle text-uppercase px-2" href="#" id="navDropdown"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Countries</a>
                <div class="dropdown-menu" aria-labelledby="navDropdown">

                    @if(!empty($countries))
                        @foreach($countries as $country)
                            <a href="{{ url('country_details').'/'.$country->id }}"
                               class="dropdown-item text-uppercase">{{ $country->country_name }}</a>
                        @endforeach
                    @endif

                </div>


                {{--                    <a href="{{route('view_countries')}}" class="text-uppercase px-2">countries</a>--}}
                <a href="{{route('view_institutes')}}" class="text-uppercase px-2">institutes</a>
                <a href="{{route('view_stories')}}" class="text-uppercase px-2">success stories</a>
                <a href="{{route('view_blog')}}" class="text-uppercase px-2">blog</a>
                {{--                    <a href="{{route('view_apply')}}" class="btn btn-online btn-sm text-uppercase text-light animate__animated animate__infinite animate__heartBeat">apply online</a>--}}
                <a href="{{route('view_apply')}}" class="btn btn-online btn-sm text-uppercase text-light">apply
                    online</a>
            </div>
        </div>
    </div>
</header>
