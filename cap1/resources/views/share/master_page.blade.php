<!DOCTYPE html>
<html lang="en">
<head>

    @include('share.css')

</head>
<body>
    <div class="OBTS">

        @include('share.header')

        @yield('slider')

        @yield('content')

        @include('share.footer')
    </div>
</body>
</html>
