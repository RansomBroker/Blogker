@extends('layouts.admin.index')

@section('title', 'Add New Post')

@section('content')

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-3">
    <h1 class="h3 mb-0 text-gray-800">Add New Post</h1>
    <!-- breadcrumb -->
    @breadcrumb
        @slot('slot')
          <!-- breadcrumb -->
          <li class="breadcrumb-item" aria-current="page">
            <i class="fa fa-thumb-tack"></i>
            <span>Post/ Add New Post</span>
          </li>
        @endslot
    @endbreadcrumb
    <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
  </div>

  <div class="row">
    <div class="col-xl-12">
      @form
        @slot('formClass', '')
        @slot('formAction', '')
        @slot('formMethod', '')
        @slot('formAditional', '')

        @slot('slot')
            <p class="text-gray-800 font-weight-bold">Post Headline</p>
            <!-- post title -->
            <input type="text" class="form-control mb-2" name="" value="" placeholder="Post Title">
            <!-- ckeditor -->
            <textarea name="text-ckeditor" id="text-ckeditor"></textarea>
        @endslot
      @endform
    </div>
  </div>

  @include('layouts.admin.includes.js')
  <script type="text/javascript">
    CKEDITOR.replace('text-ckeditor', {
      filebrowserImageBrowseUrl: 'blogker/laravel-filemanager?type=Images',
      filebrowserImageUploadUrl: 'blogker/laravel-filemanager/upload?type=Images&_token=' + $("input[name=_token]").val(),
      filebrowserBrowseUrl: 'blogker/laravel-filemanager?type=Files',
      filebrowserUploadUrl: 'blogker/laravel-filemanager/upload?type=Files&_token=' + $("input[name=_token]").val()
    });
  </script>

@endsection
