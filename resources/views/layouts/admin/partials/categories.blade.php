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
        @slot('divClass', 'd-flex justify-content-center ')
        @slot('slot')
          <!-- add new Categories -->
          @div
            @slot('divClass', 'card shadow rounded col-lg-4 col-xl-4')
            @slot('slot')
              @div
                @slot('divClass', 'card-body p-4')
                @slot('slot')
                  @form
                    @slot('formClass', '')
                    @slot('formAction', '')
                    @slot('formMethod', '')
                    @slot('formAditional', '')
                    @slot('slot')
                      <!-- title -->
                      <p class="h6 font-weight-bold text-dark">Addd New Categories</p>
                      <!-- form Categories -->
                      @div
                        @slot('divClass', 'form-group')
                        @slot('slot')
                          <label for="addCategories" class="text-gray-800">Name</label>
                          <input type="text" name="" class="form-control form-control-sm" value="">
                          <small>it will show tag in your website</small>
                        @endslot
                      @enddiv
                      <!-- Categories desc -->
                      @div
                        @slot('divClass', 'form-group')
                        @slot('slot')
                          <label for="addCategories" class="text-gray-800">Categories Description</label>
                          <input type="text" name="" class="form-control form-control-sm" value="">
                          <small>The description is not prominent by default; however, some themes may show it</small>
                        @endslot
                      @enddiv
                        <button type="submit" name="button" class="btn btn-sm btn-primary">Add New Categories</button>
                    @endslot
                  @endform
                @endslot
              @enddiv
            @endslot
          @enddiv

          <!-- show Table -->
          @div
            @slot('divClass', 'card shadow rounded ml-2 col-lg-8 col-xl-8')
            @slot('slot')
              @div
                @slot('divClass', 'card-body p-3')
                @slot('slot')
                  <!-- tables -->
                  @div
                    @slot('divClass', 'table-responsive-xl ')
                    @slot('slot')
                      @table
                        @slot('tableClass', 'table table-sm table-striped')
                        @slot('tableId', 'table')
                        @slot('tableAditional', '')
                        @slot('tableHead')
                          <tr>
                            <th class="pl-3">Name</th>
                            <th>Description</th>
                            <th>Use</th>
                            <th>Action</th>
                          </tr>
                        @endslot
                        @slot('slot')
                          <!-- data -->
                          <tr>
                            <td> <a href="#" class="text-decoration-none">Yadis</a></td>
                            <td> <a href="#" class="text-decoration-none">-</a></td>
                            <td> <a href="#" class="text-decoration-none">0</a> </td>
                            <td>
                              <a href="#" class="text-primary text-decoration-none">
                                Edit &#124;
                              </a>
                              <a href="#" class="text-danger text-decoration-none">
                                Delete &#124;
                              </a>
                            </td>
                          </tr>

                          <tr>
                            <td> <a href="#" class="text-decoration-none">Laravel</a></td>
                            <td> <a href="#" class="text-decoration-none">Tutorial Laravel</a></td>
                            <td> <a href="#" class="text-decoration-none">0</a> </td>
                            <td>
                              <a href="#" class="text-primary text-decoration-none">
                                Edit &#124;
                              </a>
                              <a href="#" class="text-danger text-decoration-none">
                                Delete &#124;
                              </a>
                            </td>
                          </tr>

                          <tr>
                            <td> <a href="#" class="text-decoration-none">Python</a></td>
                            <td> <a href="#" class="text-decoration-none">Tutorial Python</a></td>
                            <td> <a href="#" class="text-decoration-none">0</a> </td>
                            <td>
                              <a href="#" class="text-primary text-decoration-none">
                                Edit &#124;
                              </a>
                              <a href="#" class="text-danger text-decoration-none">
                                Delete &#124;
                              </a>
                            </td>
                          </tr>

                          <tfoot class="font-weight-bold">
                            <tr>
                              <td class="pl-3">Name</td>
                              <td>Description</td>
                              <td>Use</td>
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


    @include('layouts.admin.includes.js')
    <script type="text/javascript">
      $(document).ready(function(){
        $('#table').DataTable({
          "oredering" : false,
          "info": false,
        });
      });
    </script>



@endsection
