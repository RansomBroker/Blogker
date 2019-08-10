@extends('layouts.admin.index')

@section('title', 'Add New Post')

@section('content')

  <!-- Page Heading -->
  @div
    @slot('divClass', 'd-sm-flex align-items-center justify-content-between mb-3')

    @slot('slot')
      <h1 class="h3 mb-0 text-gray-800">Add New Page</h1>
      <!-- breadcrumb -->
      @breadcrumb
          @slot('slot')
            <!-- breadcrumb -->
            <li class="breadcrumb-item" aria-current="page">
              <i class="fa fa-thumb-tack"></i>
              <span>Post/ Add New Page</span>
            </li>
          @endslot
      @endbreadcrumb
      <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
    @endslot

  @enddiv

  <div class="row">
    <div class="col-xl-12">
      @if($errors->any())
        <div class="alert alert-danger alert-dismissible">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <strong>Error</strong> all field must be fill.
        </div>
      @endif

      @form
        @slot('formClass', '')
        @slot('formAction', 'addNewPageProcess')
        @slot('formMethod', 'POST')
        @slot('formAditional', '')

        @slot('slot')
            @csrf
            <p class="text-gray-800 font-weight-bold">Page Headline</p>
            <!-- post title -->
            <input type="text" class="form-control mb-2" name="pageTitle" value="" placeholder="Page Title">
            <!-- ckeditor -->
            <textarea name="pageContent" id="text-ckeditor"></textarea>

            <!-- card settingg -->
            <h1 class="h4 mb-2 mt-5 font-weight-bold text-gray-800">Page Setting</h1>

            @div
              @slot('divClass', 'd-flex justify-start')

              @slot('slot')
                <!-- status and Visibility -->
                @div
                  @slot('divClass', 'card rounded shadow mr-3 mb-3 w-50 col-12 col-xl-12')
                  @slot('slot')
                    <!-- title  -->
                    @div
                      @slot('divClass', 'h6 ml-3 font-weight-bold text-gray-800 mt-3')
                      @slot('slot')
                        Visibility & Status
                      @endslot
                    @enddiv
                    <!-- title Visibility -->
                    <p class="ml-3 text-gray-800 mt-2">Visibility</p>
                    <!-- Title : Content -->
                    @div
                      @slot('divClass', 'form-inline')
                      @slot('slot')

                        @div
                          @slot('divClass', 'custom-control custom-radio ml-3 mb-2')
                          @slot('slot')
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="optVisibility" value="public">Public
                          </label>
                          @endslot
                        @enddiv

                        @div
                          @slot('divClass', 'custom-control custom-radio ml-3 mb-2')
                          @slot('slot')
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="optVisibility" value="private">Private
                          </label>
                          @endslot
                        @enddiv

                      @endslot
                    @enddiv
                    <!-- title publish -->
                    <p class="ml-3 mt-2 text-gray-800">Publish</p>
                    <input type='text' class='datepicker-here form-control w-75 ml-3 mb-3
                    ' data-timepicker="true" data-date-format="yyyy/mm/dd" data-time-format=' hh:ii:00' data-language='en' data-position="top right" name="pageCreate" />


                    <!-- author -->
                    <p class="ml-3 mt-2 text-gray-800">Author</p>
                    <select class="custom-select w-75 mb-3 ml-3" name="pageAuthor">
                      @foreach($user as $author)
                        <option value="{{ $author->id_user }}">{{ $author->username }}</option>
                      @endforeach
                    </select>

                    <div class="d-flex justify-content-center">
                      <!-- btn submit -->
                      <button type="submit" name="button" class="btn btn-primary mt-2 mb-3 w-75">Add New Page</button>
                    </div>

                  @endslot
                @enddiv
              @endslot
            @enddiv
        @endslot
      @endform
    </div>
  </div>

  @include('layouts.admin.includes.js')
  <script type="text/javascript">
    $(document).ready(function(){
      $('.js-example-basic-multiple').select2({
        width : 'resolve'
      });
    });
  </script>

  <script type="text/javascript">
    CKEDITOR.replace('text-ckeditor', {
      filebrowserImageBrowseUrl: 'addnewpage/laravel-filemanager?type=Images',
      filebrowserImageUploadUrl: 'addnewpage/laravel-filemanager/upload?type=Images&_token=' + $("input[name=_token]").val(),
      filebrowserBrowseUrl: 'addnewpage/laravel-filemanager?type=Files',
      filebrowserUploadUrl: 'addnewpage/laravel-filemanager/upload?type=Files&_token=' + $("input[name=_token]").val()
    });
  </script>

@endsection
