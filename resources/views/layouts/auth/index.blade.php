<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    @include('layouts.auth.includes.head')

    <title>Blogker - @yield('title')</title>

    @include('layouts.auth.includes.css')

  </head>
  <body>
    @yield('content')
  </body>
</html>
