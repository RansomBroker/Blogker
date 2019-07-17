@extends('layouts.admin.index')

@section('title', 'User Profile')

@section('content')

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-3">
      <h1 class="h3 mb-0 text-gray-800">Users Profile</h1>
      <!-- breadcrumb -->
      @breadcrumb
        @slot('slot')
          <!-- breadcrumb -->
          <li class="breadcrumb-item" aria-current="page">
            <i class="fa fa-user"></i>
            <span>User / User Profile</span>
          </li>
        @endslot
      @endbreadcrumb
      <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
    </div>

    <div class="row">

      <div class="col-xl-12">
        @form
          @slot('formClass', '')
          @slot('formAction', 'editProfile')
          @slot('formMethod', 'post')
          @slot('formAditional', '')
          @slot('slot')
            @cardNoHeadTitle
              @slot('card', 'card rounded shadow mb-5')
              @slot('cardBody', 'card-body p-4')
              @slot('slot')
                <!-- title user -->
                <p class="h5 text-gray-800 font-weight-bold">U0se Profile</p>
                <!-- desc -->
                <small>Create a new user and add them to this site.</small>
                <!-- table input -->
                @table
                  @slot('tableClass', 'table table-borderless table-responsive col-lg-8')
                  @slot('tableId', 'table')
                  @slot('tableAditional', '')
                  @slot('tableHead', '')
                  @slot('slot')
                    @foreach($user as $user)
                        <!-- username -->
                        <tr>
                          <td><label for="username" class="mr-2 text-dark font-weight-bold">Username</label></td>
                          <td><input type="text" name="" value="{{ $user->username }}" id="username" class="form-control form-control-sm">
                          </td>

                        </tr>

                        <!-- Email -->
                        <tr>
                          <td><label for="email" class="mr-2 text-dark font-weight-bold">Email (required)</label></td>
                          <td><input type="text" name="" value="{{ $user->email }}" id="email" class="form-control form-control-sm"></td>
                        </tr>

                        <!-- name -->
                        <tr>
                          <td><label for="name" class="mr-2 text-dark font-weight-bold">Name</label>
                            <p> <small>Name can't be change</small> </p>
                          </td>
                          <td><input type="text" name="{{ $user->name }}" value="" id="name" disabled class="form-control form-control-sm" placeholder="Yadistira Fajar Ramadhan">
                          </td>
                        </tr>

                        <!-- Bio-->
                        <tr>
                          <td><label for="bio" class="mr-2 text-dark font-weight-bold">Description</label>
                          <p> <small>it must fill, and it will appear in who author post</small> </p>
                          </td>
                          <td><textarea class="form-control" rows="2" id="bio" placeholder="" >{{ $user->description }}</textarea></td>
                        </tr>

                        <!-- password -->
                        <tr>
                          <td><label for="password" class="mr-2 text-dark font-weight-bold">Password </label></td>
                          <td><input type="password" name="" value="" id="password" class="form-control form-control-sm"></td>
                        </tr>

                        <!-- password confirm -->
                        <tr>
                          <td><label for="password-confirm" class="mr-2 text-dark font-weight-bold">Password Confirmation </label></td>
                          <td><input type="password" value="" id="password-confirm" class="form-control form-control-sm"></td>
                        </tr>

                        <!-- role -->
                        <tr>
                          <td><label for="role" class="mr-2 text-dark font-weight-bold">Role </label></td>
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
                          <img class="mt-2" style="width:86px; height:86px;" src="{{ asset('img/profile/'.$user->image_profile) }} " alt=""></td>


                        </tr>

                        <!-- btn submit -->
                        <tr>
                          <td>
                            <button type="submit" class="btn btn-primary btn-sm" name="button">Add New user</button>
                          </td>
                        </tr>
                    @endforeach
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
