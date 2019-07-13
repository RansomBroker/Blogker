@extends('layouts.admin.index')

@section('title', 'Add New Post')

@section('content')

  <!-- Page Heading -->
  @div
    @slot('divClass', 'd-sm-flex align-items-center justify-content-between mb-3')

    @slot('slot')
      <h1 class="h3 mb-0 text-gray-800">EditPost</h1>
      <!-- breadcrumb -->
      @breadcrumb
          @slot('slot')
            <!-- breadcrumb -->
            <li class="breadcrumb-item" aria-current="page">
              <i class="fa fa-thumb-tack"></i>
              <span>Post/ Edit Post</span>
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
        @slot('formAction', '')
        @slot('formMethod', '')
        @slot('formAditional', '')

        @slot('slot')
            <p class="text-gray-800 font-weight-bold">Post Headline</p>
            <!-- post title -->
            <input type="text" class="form-control mb-2" name="" value="" placeholder="Post Title">
            <!-- ckeditor -->
            <textarea name="text-ckeditor" id="text-ckeditor"></textarea>

            <!-- card settingg -->
            <h1 class="h4 mb-2 mt-5 font-weight-bold text-gray-800">Post Setting</h1>

            @div
              @slot('divClass', 'd-flex flex-warp')

              @slot('slot')
              <!-- status and Visibility -->
              @div
                @slot('divClass', 'card rounded shadow mr-1 mb-2 w-50')
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
                    @slot('divClass', 'form-inline p-2')
                    @slot('slot')

                      @div
                        @slot('divClass', 'custom-control custom-radio ml-3 mb-2')
                        @slot('slot')
                          <input type="radio" class="custom-control-input" id="RadioOptPublic" name="" value="">
                          <label class="custom-control-label" for="RadioOptPublic">Public</label>
                        @endslot
                      @enddiv

                      @div
                        @slot('divClass', 'custom-control custom-radio ml-3 mb-2')
                        @slot('slot')
                          <input type="radio" class="custom-control-input" id="RadioOptPublic" name="" value="">
                          <label class="custom-control-label" for="RadioOptPublic">Private</label>
                        @endslot
                      @enddiv

                    @endslot
                  @enddiv
                  <!-- title publish -->
                  <p class="ml-3 mt-2 text-gray-800">Publish</p>
                  <input type='text' class='datepicker-here form-control w-75 ml-3 mb-3
                  ' data-timepicker="true" data-time-format='hh:ii' data-language='en' data-position="top right" />

                  <!-- author -->
                  <p class="ml-3 mt-2 text-gray-800">Author</p>
                  <select class="custom-select w-75 mb-3 ml-3" name="">
                    <option selected></option>
                    <option value="Yadis">Yadis</option>
                    <option value="AdminLaen">AdminLaen</option>
                  </select>


                @endslot
              @enddiv

              <!-- Categories and tags -->
              @div
                @slot('divClass', 'card rounded shadow ml-3 w-50 mb-3')
                @slot('slot')
                  <!-- title  -->
                  @div
                    @slot('divClass', 'h6 ml-3 font-weight-bold text-gray-800 mt-3')
                    @slot('slot')
                      Categories & tags
                    @endslot
                  @enddiv

                  <!-- Categories -->
                  <p class="ml-3 mt-2 text-gray-800">Categories</p>
                  <select class="custom-select w-75 mb-3 ml-3" name="">
                    <option selected></option>
                    <option value="cat1">Laravel</option>
                    <option value="cat2">Python</option>
                  </select>

                  <!-- Tags -->
                  <p class="ml-3 mt-2 text-gray-800">Tags</p>
                  @div
                    @slot('divClass','ml-3 mb-3 w-100')
                    @slot('slot')
                      <select class="js-example-basic-multiple custom-select  border w-75  border-secondary" multiple="multiple" name="">
                        <option value="cat1">Laravel</option>
                        <option value="cat2">Python</option>
                      </select>
                    @endslot
                  @enddiv

                @endslot
              @enddiv

              @endslot
            @enddiv

            <!-- btn submit -->
            <button type="submit" name="button" class="btn btn-primary mt-5 mb-5">Publish</button>

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
