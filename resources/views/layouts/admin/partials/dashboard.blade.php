@extends('layouts.admin.index')

@section('title', 'Dashboard')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-3">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    <!-- breadcrumb -->
    @breadcrumb
      <li class="breadcrumb-item" aria-current="page">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span>
      </li>
    @endbreadcrumb
    <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
  </div>

  <!-- Content Row -->
  <div class="row">

    <!-- welcome text -->
    <div class="col-xl-12 col-md-6 mb-4">
      @cardNoHeadTitle
        @slot('card', 'border-left-success shadow h-100 py-2')
        @slot('cardBody', '')

        @slot('slot')
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="h4 font-weight-bold text-success text-uppercase mb-2">Welcome To BlogKer Beta Version 1.0.0</div>
              <div class="h6 mb-0 font-weight-bold text-gray-800">Create by love For Love</div>
            </div>
          </div>
        @endslot
      @endcardNoHeadTitle
    </div>

    <div class="col-xl-8 col-md-4 mt-4">
      @cardNoHeadTitle
        @slot('card', 'shadow h-100 py-2' )
        @slot('cardBody', '' )

        @slot('slot')
          <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="h6 font-weight-bold text-body text-uppercase mb-2"> Blogker Beta Version 1.0.0 update</div>
            <!-- changelog update -->
            <div class="h6 mb-0 font-weight-bold text-gray-800">
              <ul>
                <li>Added New Post</li>
                <li>Now Added some features</li>
                <li>User Management</li>
                <li>Now user etc, can make static page</li>
              </ul>
            </div>
          </div>
        </div>
        @endslot
      @endcardNoHeadTitle
    </div>

  </div>

@endsection
