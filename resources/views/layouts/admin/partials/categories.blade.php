@extends('layouts.admin.index')

@section('title', 'Categories')

@section('content')

    <!-- Page Heading -->
    @div
      @slot('divClass', 'd-sm-flex align-items-center justify-content-between mb-3')
      @slot('slot')
        <h1 class="h3 mb-0 text-gray-800">Categories</h1>
        <!-- breadcrumb -->
        @breadcrumb
            @slot('slot')
              <!-- breadcrumb -->
              <li class="breadcrumb-item" aria-current="page">
                <i class="fa fa-thumb-tack"></i>
                <span>Post/ Categories</span>
              </li>
            @endslot
        @endbreadcrumb
        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
      @endslot
    @enddiv

    <div class="row">
      <!-- Categories Field -->
      <!-- add New Categories-->
      @div
        @slot('divClass', 'd-flex flex-wrap')
        @slot('slot')
          <!-- add new Categories -->
          @div
            @slot('divClass', 'card shadow rounded col-12 col-lg-4 ml-2 mt-2')
            @slot('slot')
              @div
                @slot('divClass', 'card-body p-4')
                @slot('slot')
                  <div class="alertLoading alert alert-warning alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong class="loadingText"></strong>
                  </div>
                  @form
                    @slot('formClass', '')
                    @slot('formAction', 'addCategoryProcess')
                    @slot('formMethod', 'POST')
                    @slot('formAditional', '')
                    @slot('slot')
                      @csrf
                      <!-- title -->
                      <p class="h6 font-weight-bold text-dark">Add New Categories</p>
                      <!-- form Categories -->
                      @div
                        @slot('divClass', 'form-group')
                        @slot('slot')
                          <label for="addCategories" class="text-gray-800">Name</label>
                          <input type="text" name="categoryName" class="form-control form-control-sm" value="">
                          <small>it will show category in your website</small>
                        @endslot
                      @enddiv
                      <!-- Categories desc -->
                      @div
                        @slot('divClass', 'form-group')
                        @slot('slot')
                          <label for="addCategories" class="text-gray-800">Categories Description</label>
                          <input type="text" name="categoryDescription" class="form-control form-control-sm" value="">
                          <small>The description is not prominent by default; however, some themes may show it</small>
                        @endslot
                      @enddiv
                        <button type="button" name="button" class="buttonSubmit btn btn-sm btn-primary">Add New Categories</button>
                    @endslot
                  @endform
                @endslot
              @enddiv
            @endslot
          @enddiv

          <!-- show Table -->
          @div
            @slot('divClass', 'card shadow rounded col-12 col-lg-7 mt-2 ml-2')
            @slot('slot')
              @div
                @slot('divClass', 'card-body p-3')
                @slot('slot')
                  <!-- tables -->
                  @div
                    @slot('divClass', 'table-responsive-xl ')
                    @slot('slot')
                      @table
                        @slot('tableClass', 'table table-sm table-striped tableCategories')
                        @slot('tableId', 'table')
                        @slot('tableAditional', '')
                        @slot('tableHead')
                          <tr>
                            <th class="pl-3">Category Name</th>
                            <th>Description</th>
                            <th>Action</th>
                          </tr>
                        @endslot
                        @slot('slot')
                          <!-- data -->
                          @foreach($category as $category)
                            <tr>
                              <td> <a href="#" id="{{ $category->id_categories }}" class="modalEditClick text-decoration-none" data-toggle="modal" data-target="#modalEdit" value="{{ $category->categories_name }}">{{ $category->categories_name }}</a></td>
                              <td> <a href="#" id="{{ $category->id_categories }}" class="modalEditCategoryDesc text-decoration-none" data-toggle="modal" data-target="#modalEditCategoryDesc" value="{{ $category->categories_description }}">{{ $category->categories_description }}</a></td>
                              <td>
                                <a id="{{ $category->id_categories }}" class="modalDeleteCategory text-danger text-decoration-none" data-toggle="modal" data-target="#modalDeleteCategory">
                                  Delete
                                </a>
                              </td>
                            </tr>
                          @endforeach

                          <tfoot class="font-weight-bold">
                            <tr>
                              <td class="pl-3">Category Name</td>
                              <td>Description</td>
                              <td>Action</td>
                            </tr>
                          </tfoot>
                        @endslot
                      @endtable
                    @endslot
                  @enddiv
                @endslot
              @enddiv
            @endslot
          @enddiv

        @endslot
      @enddiv
    </div>

    <!-- modal Edit Category Desc -->
    <div class="modal fade" id="modalEditCategoryDesc">
      <div class="modal-dialog">
        <div class="modal-content">
          <!-- modal body -->
          <div class="modal-body">
            <!-- aler -->
            <div class="alertLoadingModalCategoryDesc alert alert-warning alert-dismissible">
              <button type="button" class="closeModalAlertCategoryDesc" data-dismiss="alert">&times;</button>
              <strong class="loadingTextModalCategoryDesc"></strong>
            </div>
            <!-- title -->
            <p class="h6 font-weight-bold text-dark">Edit Category New Categories</p>
            <!-- category name -->
            <div class="form-group">
              <label for="addCategories" class="text-gray-800">Categories Description</label>
              <input type="text" name="categoryEditDesc" class="oldTextDesc form-control form-control-sm" value="">
              <small>The description is not prominent by default; however, some themes may show it</small>
            </div>
              <button type="button" name="button" class="btnCategoryDesc btn btn-sm btn-primary">Edit Category Description</button>
          </div>
        </div>
      </div>
    </div>

    <!-- modal Ediit Category-->
    <div class="modal fade" id="modalEdit">
      <div class="modal-dialog">
        <div class="modal-content">
          <!-- modal body -->
          <div class="modal-body">
            <!-- alert -->
            <div class="alertLoadingModalCategory alert alert-warning alert-dismissible">
              <button type="button" class="closeModalAlertCategory" data-dismiss="alert">&times;</button>
              <strong class="loadingTextModalCategory"></strong>
            </div>
            <!-- title -->
            <p class="h6 font-weight-bold text-dark">Edit Category New Categories</p>
            <!-- category name -->
            <div class="form-group">
              <label for="addCategories" class="text-gray-800">Name</label>
              <input type="text" name="categoryNameEdit" class="oldText form-control form-control-sm" value="">
              <small>it will show category in your website</small>
            </div>
              <button type="button" name="button" class="btnCategoryName btn btn-sm btn-primary">Edit Category Name</button>
          </div>
        </div>
      </div>
    </div>

    <!-- modal delet -->
    <div class="modal fade" id="modalDeleteCategory">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4>Delete Category Confirmation</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
            <!-- alert -->
            <div class="alertCategoryDelete alert alert-warning alert-dismissible">
              <button type="button" class="closeCategoryDelete" data-dismiss="alert">&times;</button>
              <strong class="loadingTextModalCategoryDelete"></strong>
            </div>

            <p>Are you sure to delete this category ?</p>
            <button type="submit" name="buttonSubmitDelete" class="btnDelete btn btn-danger float-right" >Delete Category</button>
          </div>
        </div>
      </div>
    </div>



    @include('layouts.admin.includes.js')
    <script type="text/javascript">
      $(document).ready(function(){
        $('#table').DataTable({
          "oredering" : false,
          "info": false,
          'lengthMenu' : [[5, 10], [5, 10, "All"]],
        });
      });
    </script>
    <!-- ajax -->
    <script type="text/javascript">
      // ajax setup
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
      $('.alertLoading').hide();
      $('.close').hide();
      $('.buttonSubmit').click(function(){
        var category = $("input[name=categoryName]").val();
        var categoryDescription = $("input[name=categoryDescription]").val();
        // console.log(category);
        // console.log(categoryDescription);
        $.ajax({
          type:'POST',
          url: '{{ route("addCategoryProcess") }}',
          data: {category:category, categoryDescription:categoryDescription,},
          beforeSend:function(){
            $('.alertLoading').fadeIn();
            $('.loadingText').fadeIn(1000);
            $('.loadingText').text('Adding To Database...');
          },
          success:function(data){
            $('.alertLoading').fadeOut();
            $('.alertLoading').removeClass('alert-warning');
            $('.alertLoading').addClass('alert-success');
            $('.alertLoading').fadeIn();
            $('.close').fadeIn();
            $('.loadingText').fadeIn(1000);
            $('.loadingText').text(data.success);
            $("input[name=categoryName]").val('');
            $("input[name=categoryDescription]").val('');
            $('.tableCategories').fadeOut();
            location.reload();
            $('.tableCategories').fadeIn(1000);
          }

        })
      })

    </script>
    <!-- edit Category Name -->
    <script type="text/javascript">
        // ajax setup
        $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });
        // event get value
        $('.alertLoadingModalCategory').hide()
        $('.closeModalAlertCategory').hide();
        $('.modalEditClick').click(function(){
            var id = $(this).attr('id');
            var valueCategoryName = $(this).attr('value');
            // console.log(id);
            // console.log(valueCategoryName);
            var setValueModal = $('.oldText').val(valueCategoryName);
            // ajax event
            $('.btnCategoryName').click(function(){
              var getNewValue =  $("input[name=categoryNameEdit]").val();
              console.log(getNewValue);
              $.ajax({
                type : 'POST',
                url : '{{ route("editCategoryProcess") }}',
                data : {id:id, getNewValue:getNewValue},
                beforeSend:function(){
                  $('.alertLoadingModalCategory').fadeIn();
                  $('.loadingTextModalCategory').fadeIn(1000);
                  $('.loadingTextModalCategory').text('Change Category Name To Database...');
                },
                success:function(data){
                  $('.alertLoadingModalCategory').fadeOut();
                  $('.alertLoadingModalCategory').removeClass('alert-warning');
                  $('.alertLoadingModalCategory').addClass('alert-success');
                  $('.alertLoadingModalCategory').fadeIn();
                  $('.closeModalAlertCategory').fadeIn();
                  $('.loadingTextModalCategory').fadeIn(1000);
                  $('.loadingTextModalCategory').text(data.success);
                  $("input[name=categoryNameEdit]").val('');
                  $('.tableCategories').fadeOut();
                  location.reload();
                  $('.tableCategories').fadeIn(1000);
                }

              })
            });
        });


    </script>
    <!-- edit Category Desc -->
    <script type="text/javascript">
      // ajax setup
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
      $('.alertLoadingModalCategoryDesc').hide();
      $('.closeModalAlertCategoryDesc').hide();
      $('.modalEditCategoryDesc').click(function(){
          var id = $(this).attr('id');
          var valueCategoryDesc = $(this).attr('value');
          var setValueModal = $('.oldTextDesc').val(valueCategoryDesc)
          console.log(id);
          console.log(valueCategoryDesc);
          $('.btnCategoryDesc ').click(function(){
            var getNewValue = $("input[name=categoryEditDesc]").val();
            $.ajax({
              type : 'POST',
              url: '{{ route("editCategoryDesc") }}',
              data : {id:id, getNewValue:getNewValue},
              beforeSend:function(){
                $('.alertLoadingModalCategoryDesc').fadeIn();
                $('.loadingTextModalCategoryDesc').fadeIn(1000);
                $('.loadingTextModalCategoryDesc').text('Change Category Description To Database...');
              },
              success:function(data){
                $('.alertLoadingModalCategoryDesc').fadeOut();
                $('.alertLoadingModalCategoryDesc').removeClass('alert-warning');
                $('.alertLoadingModalCategoryDesc').addClass('alert-success');
                $('.alertLoadingModalCategoryDesc').fadeIn();
                $('.closeModalAlertCategoryDesc').fadeIn();
                $('.loadingTextModalCategoryDesc').fadeIn(1000);
                $('.loadingTextModalCategoryDesc').text(data.success);
                $("input[name=categoryEditDesc]").val('');
                $('.tableCategories').fadeOut();
                location.reload();
                $('.tableCategories').fadeIn(1000);
              }
            })
          })

      });
    </script>
    <!-- delete category -->
    <script type="text/javascript">
      // ajax setup
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
      $('.alertCategoryDelete').hide();
      $('.closeCategoryDelete').hide();
      $('.modalDeleteCategory').click(function(){
          var id = $(this).attr('id');
          console.log(id);
          $('.btnDelete').click(function(){
            $.ajax({
              type : 'POST',
              url : '{{ route("deleteCategory") }}',
              data: {id:id},
              beforeSend:function(){
                $('.alertCategoryDelete').fadeIn(1000);
                $('.loadingTextModalCategoryDelete').fadeIn(1000);
                $('.loadingTextModalCategoryDelete').text('Change Category Description To Database...');
              },
              success:function(data){
                $('.alertCategoryDelete').fadeOut();
                $('.alertCategoryDelete').removeClass('alert-warning');
                $('.alertCategoryDelete').addClass('alert-success');
                $('.alertCategoryDeletec').fadeIn();
                $('.closeCategoryDelete').fadeIn();
                $('.loadingTextModalCategoryDelete').fadeIn(1000);
                $('.loadingTextModalCategoryDelete').text(data.success);
                $('.tableCategories').fadeOut();
                location.reload();
                $('.tableCategories').fadeIn(1000);
              }
            })
          })
      });




    </script>


@endsection
