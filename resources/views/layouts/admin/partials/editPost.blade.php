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
      @if($errors->any())
        <div class="alert alert-danger alert-dismissible">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <strong>Error</strong> all field must be fill.
        </div>
      @endif

        <form class="" action="{{ route('updatePost') }}" method="POST">
          @csrf
          <input type="hidden" name="postId" value="{{ $post->id_post}}">

          <p class="text-gray-800 font-weight-bold">Post Headline</p>
          <!-- post title -->
          <input type="text" class="form-control mb-2" name="postTitle" value="{{ $post->post_title }}" placeholder="Post Title">
          <!-- ckeditor -->
          <textarea name="textCkeditor" id="text-ckeditor">{{ $post->post_content }}</textarea>

          <!-- card settingg -->
          <h1 class="h4 mb-2 mt-5 font-weight-bold text-gray-800">Post Setting</h1>

          <div class="d-flex flex-warp">
            <!-- status and Visibility -->
            <div class="card rounded shadow mr-1 mb-2 w-50">
              <!-- title -->
              <div class="h6 ml-3 font-weight-bold text-gray-800 mt-3">
                Visibility & Status
              </div>
              <!-- title Visibility -->
              <p class="ml-3 text-gray-800 mt-2">Visibility</p>
              <!-- title Visibility -->
              <div class="form-inline p-2">

                <div class="form-check-inline">
                  <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="optVisibility" value="public">Public
                  </label>
                </div>

                <div class="form-check-inline">
                  <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="optVisibility" value="private">Private
                  </label>
                </div>

              </div>
              <!-- title publish -->
              <p class="ml-3 mt-2 text-gray-800">Publish</p>
              <input type='text' class='datepicker-here form-control w-75 ml-3 mb-3
              ' data-timepicker="true" data-date-format="yyyy/mm/dd" data-time-format=' hh:ii:00' data-language='en' data-position="top right" name="postCreate" value="{{ $post->post_create }}" />

              <!-- author -->
              <p class="ml-3 mt-2 text-gray-800">Author</p>
              <select class="custom-select w-75 mb-3 ml-3" name="postAuthor">
                <option selected></option>
                @foreach($user as $user)
                  <option value="{{ $user->id_user }}">{{ $user->username }}</option>
                @endforeach
              </select>

            </div>

            <!-- categories  -->
            <div class="card rounded shadoow ml-3 w-50 mb-3">
              <!-- title -->
              <div class="h6 ml-3 font-weight-bold text-gray-800 mt-3">
                Categories & tags
              </div>

              <!-- Categories -->
              <p class="ml-3 mt-2 text-gray-800">Categories</p>
              <select class="custom-select w-75 mb-3 ml-3" name="postCategory" >
                  <option selected></option>
                  @foreach($category as $category)
                      <option value="{{ $category->id_categories }}">{{ $category->categories_name }}</option>
                  @endforeach
              </select>

            </div>

          </div>
          <!-- btn submit -->
          <button type="submit" name="button" class="btn btn-primary mt-5 mb-5">Publish</button>

      </form>


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
