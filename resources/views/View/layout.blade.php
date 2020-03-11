<!DOCTYPE html>
<html lang="en-US">
@include('View.inc.head')
    <body>
        @include('View.inc.header')

            @yield('page-content')

        @include ('View.inc.footer')

    </body>
</html>
