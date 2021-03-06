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
          @slot('formAction', 'register')
          @slot('formMethod', 'POST')
          @slot('slot')
            @csrf
            @cardNoHeadTitle
              @slot('card', 'card rounded shadow mb-5 col-sm-12 col-md-12 col-lg-12')
              @slot('cardBody', 'card-body p-4')
              @slot('slot')
                <!-- title user -->
                <p class="h5 text-gray-800 font-weight-bold">Add New User</p>
                <!-- desc -->
                <small>Create a new user and add them to this site.</small>
                <!-- table input -->
                @table
                  @slot('tableClass', 'table table-borderless table-responsive-sm ')
                  @slot('tableId', 'table')
                  @slot('tableAditional', '')
                  @slot('tableHead', '')
                  @slot('slot')
                    <!-- username -->
                    <tr>
                      <td><label for="username" class="mr-2 text-dark font-weight-bold">Username (required)<span><small class="text-danger">*</small> </span> </label></td>
                      <td><input type="text" name="username" value="{{ old('username') }}" id="username" class="form-control form-control-sm {{ $errors->has('username') ? 'is-invalid' : '' }}">
                        @if($errors->has('username'))
                            <div class="invalid-feedback">
                                It must be fill
                            </div>
                        @endif
                      </td>
                    </tr>

                    <!-- Email -->
                    <tr>
                      <td><label for="email" class="mr-2 text-dark font-weight-bold">Email (required)<span><small class="text-danger">*</small> </span></label></td>
                      <td><input type="text" name="email" value="{{ old('email') }}" id="email" class="form-control form-control-sm {{ $errors->has('email') ? 'is-invalid' : '' }}">
                        @if($errors->has('email'))
                            <div class="invalid-feedback">
                                It must be fill
                            </div>
                        @endif
                      </td>
                    </tr>

                    <!-- name -->
                    <tr>
                      <td><label for="name" class="mr-2 text-dark font-weight-bold">Name<span><small class="text-danger">*</small> </span></label></td>
                      <td><input type="text" name="name" value="{{ old('name') }}" id="name" class="form-control form-control-sm {{ $errors->has('name') ? 'is-invalid' : '' }}">
                        @if($errors->has('name'))
                            <div class="invalid-feedback">
                                It must be fill
                            </div>
                        @endif
                      </td>
                    </tr>

                    <!-- Bio-->
                    <tr>
                      <td><label for="bio" class="mr-2 text-dark font-weight-bold">Description<span><small class="text-danger">*</small> </span></label>
                      <p> <small>it must fill, and it will appear in who author post</small> </p>
                      </td>
                      <td><textarea class="form-control {{ $errors->has('bio') ? 'is-invalid' : '' }}" name="bio" rows="2" id="bio"></textarea>
                        @if($errors->has('bio'))
                            <div class="invalid-feedback">
                                It must be fill
                            </div>
                        @endif
                      </td>
                    </tr>

                    <!-- password -->
                    <tr>
                      <td><label for="password" class="mr-2 text-dark font-weight-bold">Password<span><small class="text-danger">*</small> </span></label></td>
                      <td><input type="password" name="password" value="" id="password" class="form-control form-control-sm {{ $errors->has('password') ? 'is-invalid' : '' }}">
                        @if($errors->has('password'))
                            <div class="invalid-feedback">
                                At least 8 charachter
                            </div>
                        @endif
                      </td>
                    </tr>

                    <!-- password confirm -->
                    <tr>
                      <td><label for="password_confirmation" class="mr-2 text-dark font-weight-bold">Password Confirmation<span><small class="text-danger">*</small> </span></label></td>
                      <td><input type="password" value="" name="password_confirmation" id="password-confirm" class="form-control form-control-sm {{ $errors->has('password_confirmation') ? 'is-invalid' : '' }}">
                        @if($errors->has('password_confirmation'))
                            <div class="invalid-feedback">
                                Password does not match
                            </div>
                        @endif
                      </td>
                    </tr>

                    <!-- role -->
                    <tr>
                      <td><label for="role" class="mr-2 text-dark font-weight-bold">Role<span><small class="text-danger">*</small> </span></label></td>
                      <td>
                        <select class="custom-select {{ $errors->has('role') ? 'is-invalid' : '' }}" name="role" id="role">
                          @foreach( $role as $role)
                            <option value="{{ $role->id_role }}">{{ $role->roles_name }}</option>
                          @endforeach
                        </select>
                        @if($errors->has('role'))
                            <div class="invalid-feedback">
                                it must be selected
                            </div>
                        @endif
                      </td>
                    </tr>

                    <!-- upload profile picture -->
                    <tr>
                      <td> <label for="upload-picture" class="mr-2 text-dark font-weight-bold">Upload Profile Picture<span><small class="text-danger">*</small> </span></label> </td>
                      <td> <input type="file" name="upload-picture" value="" class="{{ $errors->has('upload-picture') ? 'is-invalid' : '' }}" id="upload-picture">
                      <!-- after upload they will apear preview -->
                      <img id="image-preview" class="mt-2" width="86px" src="https://via.placeholder.com/86x86?text=Image+Preview/ " alt="">
                        @if($errors->has('upload-profile'))
                            <div class="invalid-feedback">
                                You must have profile picture
                            </div>
                        @endif
                    </td>


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
    <script>
      function readURL(input){
        if(input.files && input.files[0]){
          var reader = new FileReader();
          reader.onload = function(e){
            $('#image-preview').attr('src', e.target.result);
          }
          reader.readAsDataURL(input.files[0]);
        }
      }

      $('#upload-picture').change(function(){
        readURL(this);
      });
    </script>


@endsection
