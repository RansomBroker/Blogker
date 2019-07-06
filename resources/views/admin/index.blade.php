<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    @include('admin.includes.head')

    <title>Blogker - @yield('title')</title>

    @include('admin.includes.css')

  </head>
  <body id="page-top">
    <div id="wrapper">

      <!-- sidebar -->
      @include('admin.includes.sidebar')

      <div class="d-flex flex-column" id="content-wrapper" >
        <!-- topbar -->
        @include('admin.includes.topbar')
        <div id="content">
          @yield('content')
        </div>

      </div>

    </div>


    @include('admin.includes.js')

  </body>
</html>
