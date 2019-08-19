<!DOCTYPE html>
<html lang="en">
<head>

    @include('layouts.theme.ransombroker.includes.head')

    <title>RansomBroker - @yield('title')</title>

    @include('layouts.theme.ransombroker.includes.css')

</head>
<body>
    <!-- navbar -->
    @include('layouts.theme.ransombroker.includes.navbar')

    @yield('content')

    <!-- footer -->
    @include('layouts.theme.ransombroker.includes.footer')
    <!-- js -->
    @include('layouts.theme.ransombroker.includes.js')
</body>
</html>