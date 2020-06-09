<!DOCTYPE html>
<html lang="en-US">
@include('View.inc.head')
<body>

    <div>
        @include('View.inc.header')
    </div>

    <div>
        @yield('page-content')
    </div>

@include ('View.inc.footer')

</body>
</html>
