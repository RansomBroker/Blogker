<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    @include('layouts.admin.includes.head')

    <title>Blogker - @yield('title')</title>

    @include('layouts.admin.includes.css')

  </head>
  <body id="page-top">
    <div id="wrapper">

      <!-- sidebar -->
      @include('layouts.admin.includes.sidebar')

      <div class="d-flex flex-column" id="content-wrapper" >
        <!-- topbar -->
        @include('layouts.admin.includes.topbar')
        <div id="content">
          @yield('content')
        </div>

      </div>

    </div>


    @include('layouts.admin.includes.js')

  </body>
</html>
