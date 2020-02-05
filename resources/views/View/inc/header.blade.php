<div id="mobile-menu" class="d-none flex-column justify-content-between position-fixed w-100 h-100 p-5 bg-light">
        <div class="d-flex justify-content-between align-items-center">

        </div>
        <div class="d-flex flex-column justify-content-around">
            <a href="{{route('/')}}" class="text-uppercase p-3">home</a>
            <a href="{{route('view_about')}}" class="text-uppercase p-3">about</a>
            <a href="{{route('view_services')}}" class="text-uppercase p-3">services</a>
            <a href="{{route('view_countries')}}" class="text-uppercase p-3">countries</a>
            <a href="{{route('view_institutes')}}" class="text-uppercase p-3">institutes</a>
            <a href="{{route('view_scholarships')}}" class="text-uppercase p-3">scholarships</a>
            <a href="{{route('view_blog')}}" class="text-uppercase p-3">blog</a>
            <a href="{{route('view_apply')}}" class="text-uppercase p-3">apply</a>
        </div>
        <div class="d-flex align-items-center justify-content-around">
            <a href="https://facebook.com/InspirenGlobalEducation" target="_blank" class="social-fb"><i class="fab fa-facebook fa-2x"></i></a>
            <a href="https://twitter.com/InspirenEdu" target="_blank" class="social-twitter"><i class="fab fa-twitter fa-2x"></i></a>
            <a href="https://www.linkedin.com/in/inspiren-global-education-b79457194/" target="_blank" class="social-linkedin"><i class="fab fa-linkedin fa-2x"></i></a>
        </div>
    </div>
<header class="bg-light sticky-top">
        <div class="container">
            <div class="row no-gutter d-flex justify-content-between align-items-center">
                <a href="{{url('/')}}"><img src="{{asset('View/img/logo.png')}}" class="header-logo" alt="IG Education Logo" /></a>
                <div class="d-block d-md-none pr-3"><button class="btn" type="button" onclick="toggleMobileMenu()"><i class="fas fa-bars fa-2x"></i></button></div>
                <div class="d-none d-md-flex justify-content-around align-items-center">
                    <a href="{{route('/')}}" class="text-uppercase px-2">home</a>
                    <a href="{{route('view_about')}}" class="text-uppercase px-2">about</a>
                    <a href="{{route('view_services')}}" class="text-uppercase px-2">services</a>

                    <a class="nav-link nav-item dropdown dropdown-toggle text-uppercase px-2" href="#" id="navDropdown"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Countries</a>
                    <div class="dropdown-menu" aria-labelledby="navDropdown">
                        <a href="#" class="dropdown-item text-uppercase">australia</a>
                        <a href="#" class="dropdown-item text-uppercase">canada</a>
                        <a href="#" class="dropdown-item text-uppercase">ireland</a>
                        <a href="#" class="dropdown-item text-uppercase">netherland</a>
                        <a href="#" class="dropdown-item text-uppercase">sweden</a>
                        <a href="#" class="dropdown-item text-uppercase">uk</a>
                        <a href="#" class="dropdown-item text-uppercase">usa</a>
                    </div>

{{--                    <a href="{{route('view_countries')}}" class="text-uppercase px-2">countries</a>--}}
                    <a href="{{route('view_institutes')}}" class="text-uppercase px-2">institutes</a>
                    <a href="{{route('view_scholarships')}}" class="text-uppercase px-2">scholarships</a>
                    <a href="{{route('view_blog')}}" class="text-uppercase px-2">blog</a>
                    <a href="{{route('view_apply')}}" class="text-uppercase px-2">apply</a>
                </div>
            </div>
        </div>
    </header>
