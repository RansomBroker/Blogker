@extends('layouts.admin.index')

@section('title', 'Add New User')

@section('content')

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-3">
      <h1 class="h3 mb-0 text-gray-800">Add New Users</h1>
      <!-- breadcrumb -->
      @breadcrumb
        @slot('slot')
          <!-- breadcrumb -->
          <li class="breadcrumb-item" aria-current="page">
            <i class="fa fa-user"></i>
            <span>User</span>
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
            @cardNoHeadTitle
              @slot('card', 'card rounded shadow mb-5')
              @slot('cardBody', 'card-body p-4')
              @slot('slot')
                <!-- title user -->
                <p class="h5 text-gray-800 font-weight-bold">Add New User</p>
                <!-- desc -->
                <small>Create a new user and add them to this site.</small>
                <!-- table input -->
                @table
                  @slot('tableClass', 'table table-borderless table-responsive-lg col-sm-6 col-lg-8')
                  @slot('tableId', 'table')
                  @slot('tableAditional', '')
                  @slot('tableHead', '')
                  @slot('slot')
                    <!-- username -->
                    <tr>
                      <td><label for="username" class="mr-2 text-dark font-weight-bold">Username (required)<span><small class="text-danger">*</small> </span> </label></td>
                      <td><input type="text" name="" value="" id="username" class="form-control form-control-sm"></td>
                    </tr>

                    <!-- Email -->
                    <tr>
                      <td><label for="email" class="mr-2 text-dark font-weight-bold">Email (required)<span><small class="text-danger">*</small> </span></label></td>
                      <td><input type="text" name="" value="" id="email" class="form-control form-control-sm"></td>
                    </tr>

                    <!-- name -->
                    <tr>
                      <td><label for="name" class="mr-2 text-dark font-weight-bold">Name<span><small class="text-danger">*</small> </span></label></td>
                      <td><input type="text" name="" value="" id="name" class="form-control form-control-sm"></td>
                    </tr>

                    <!-- Bio-->
                    <tr>
                      <td><label for="bio" class="mr-2 text-dark font-weight-bold">Description<span><small class="text-danger">*</small> </span></label>
                      <p> <small>it must fill, and it will appear in who author post</small> </p>
                      </td>
                      <td><textarea class="form-control" rows="2" id="bio"></textarea></td>
                    </tr>

                    <!-- password -->
                    <tr>
                      <td><label for="password" class="mr-2 text-dark font-weight-bold">Password<span><small class="text-danger">*</small> </span></label></td>
                      <td><input type="password" name="" value="" id="password" class="form-control form-control-sm"></td>
                    </tr>

                    <!-- password confirm -->
                    <tr>
                      <td><label for="password-confirm" class="mr-2 text-dark font-weight-bold">Password Confirmation<span><small class="text-danger">*</small> </span></label></td>
                      <td><input type="password" value="" id="password-confirm" class="form-control form-control-sm"></td>
                    </tr>

                    <!-- role -->
                    <tr>
                      <td><label for="role" class="mr-2 text-dark font-weight-bold">Role<span><small class="text-danger">*</small> </span></label></td>
                      <td>
                        <select class="custom-select" name="" id="role">
                          <option value="">Author</option>
                          <option value="">Admin</option>
                        </select>
                      </td>
                    </tr>

                    <!-- upload profile picture -->
                    <tr>
                      <td> <label for="upload-picture" class="mr-2 text-dark font-weight-bold">Upload Profile Picture<span><small class="text-danger">*</small> </span></label> </td>
                      <td> <input type="file" name="" value="" id="upload-picture">
                      <!-- after upload they will apear preview -->
                      <img class="mt-2" src="https://via.placeholder.com/86x86?text=Image+Preview/ " alt=""></td>


                    </tr>

                    <!-- btn submit -->
                    <tr>
                      <td>
                        <button type="submit" class="btn btn-primary btn-sm" name="button">Add New user</button>
                      </td>
                    </tr>


                  @endslot
                @endtable
              @endslot
            @endcardNoHeadTitle
          @endslot
        @endform
      </div>

    </div>

    <!-- js -->
    @include('layouts.admin.includes.js')


@endsection
