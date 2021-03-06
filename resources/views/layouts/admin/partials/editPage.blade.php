@extends('layouts.admin.index')

@section('title', 'Add New Post')

@section('content')

  <!-- Page Heading -->
  @div
    @slot('divClass', 'd-sm-flex align-items-center justify-content-between mb-3')

    @slot('slot')
      <h1 class="h3 mb-0 text-gray-800">Edit Page</h1>
      <!-- breadcrumb -->
      @breadcrumb
          @slot('slot')
            <!-- breadcrumb -->
            <li class="breadcrumb-item" aria-current="page">
              <i class="fa fa-thumb-tack"></i>
              <span>Post/ Edit Page</span>
            </li>
          @endslot
      @endbreadcrumb
      <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
    @endslot

  @enddiv

  <div class="row">
    <div class="col-xl-12">
      @form
        @slot('formClass', '')
        @slot('formAction', 'updatePage')
        @slot('formMethod', 'POST')
        @slot('formAditional', '')

        @slot('slot')
          @csrf
          <input type="hidden" name="pageId" value="{{ $page->id_page}}">

            <p class="text-gray-800 font-weight-bold">Page Headline</p>
            <!-- post title -->
            <input type="text" class="form-control mb-2" name="pageTitle" value="{{ $page->page_title }}" placeholder="Page Title">
            <!-- ckeditor -->
            <textarea name="pageContent" id="text-ckeditor">{{ $page->page_content }}</textarea>

            <!-- card settingg -->
            <h1 class="h4 mb-2 mt-5 font-weight-bold text-gray-800">Page Setting</h1>

            @div
              @slot('divClass', 'd-flex flex-warp')

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
                            <input type="radio" class="custom-control-input" id="RadioOptPublic" name="optVisibility" value="public">
                            <label class="custom-control-label" for="RadioOptPublic">Public</label>
                          @endslot
                        @enddiv

                        @div
                          @slot('divClass', 'custom-control custom-radio ml-3 mb-2')
                          @slot('slot')
                            <input type="radio" class="custom-control-input" id="RadioOptPrivate" name="optVisibility" value="private">
                            <label class="custom-control-label" for="RadioOptPublic">Private</label>
                          @endslot
                        @enddiv

                      @endslot
                    @enddiv
                    <!-- title publish -->
                    <p class="ml-3 mt-2 text-gray-800">Publish</p>
                    <input type='text' class='datepicker-here form-control w-75 ml-3 mb-3
                    ' data-timepicker="true" data-time-format='hh:ii' data-language='en' data-position="top right" name="pageCreate" value="{{ $page->page_create }}"/>

                    <!-- author -->
                    <p class="ml-3 mt-2 text-gray-800">Author</p>
                    <select class="custom-select w-75 mb-3 ml-3" name="pageAuthor">
                      @foreach($user as $user)
                        <option value="{{ $user->id_user }}">{{ $user->username }}</option>
                      @endforeach
                    </select>

                    <div class="d-flex justify-content-center">
                      <!-- btn submit -->
                      <button type="submit" name="button" class="btn btn-primary mt-2 mb-3 w-75">Edit Page</button>
                    </div>

                  @endslot
                @enddiv
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
      filebrowserImageBrowseUrl: 'blogker/laravel-filemanager?type=Images',
      filebrowserImageUploadUrl: 'blogker/laravel-filemanager/upload?type=Images&_token=' + $("input[name=_token]").val(),
      filebrowserBrowseUrl: 'blogker/laravel-filemanager?type=Files',
      filebrowserUploadUrl: 'blogker/laravel-filemanager/upload?type=Files&_token=' + $("input[name=_token]").val()
    });
  </script>

@endsection
