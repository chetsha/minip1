<!doctype html>
<html lang="en">
@ include("includes.head")
<body>
    @include (include.menu)
    @yield('content')

    @ include("includes.jsfooter")
</body>
</html>