@extends('layouts.admin.index')

@section('title', 'All Users')

@section('content')

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-3">
      <h1 class="h3 mb-0 text-gray-800">Users</h1>
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

      <!-- table -->
      <div class="col-md-12 table-responsive-md mr-auto mb-4 mt-2 ml-2">
        @table
          @slot('tableClass', 'table table-active table-striped table-sm table-bordered table-hover text-gray-800 shadow')
          @slot('tableId', 'table')
          @slot('tableAditional', '')

          @slot('tableHead')
            <tr>
              <th class="pl-3">Username</th>
              <th>Name</th>
              <th>Email</th>
              <th>Description</th>
              <th>Role</th>
              <th>Post</th>
              <th>Action</th>
            </tr>
          @endslot
          @slot('slot')
            <!-- data -->
            @foreach($user as $user)
              <tr>
                <td class="pl-3" >
                  <a href="#" class="text-decoration-none">
                    <img src="{{ asset('img/profile/'.$user->image_profile) }}" class="rounded" style="width:64px; height:64px;" alt="">
                     {{ $user->username }}
                  </a>
                </td>
                <td>
                  <a href="#" class="text-decoration-none">{{ $user->name }}
                  </a>
                </td>
                <td>
                  <a href="#" class="text-decoration-none">{{ $user->email }}</a>
                </td>
                <td>
                  <p>{{ $user->description }}</p>
                </td>
                <td>
                  <a href="#" class="text-decoration-none">{{ $user->role_name }}</a>
                </td>
                <td>
                  <a href="#" class="text-decoration-none">{{ 0 }}</a>
                </td>
                <td>
                  @if(auth()->user()->role != 2)
                    <a href="{{ route('getUserId', $user->id_user) }}" class="text-primary text-decoration-none">
                        Edit &#124;
                    </a>
                    <button type="button" id="{{ $user->id_user }}" class="btnDelete btn btn-sm text-danger" data-toggle="modal" data-target="#modalDelete" >
                      Delete
                    </button>
                  @endif
                  @endforeach
                  @if(auth()->user()->id_user == Auth::id() && auth()->user()->role == 2)
                    <a href="{{ route('getUserId', $user->id_user) }}" class="text-primary text-decoration-none">
                        Edit &#124;
                    </a>

                    <a href="#" class="text-danger text-decoration-none">
                        Delete &#124;
                    </a>
                  @endif
                </td>
              </tr>



            <tfoot class="font-weight-bold">
              <tr>
                <td class="pl-3">Username</td>
                <td>Name</td>
                <td>Email</td>
                <td>Description</td>
                <td>Role</td>
                <td>Post</td>
                <td>Action</td>
              </tr>
            </tfoot>
          @endslot

        @endtable
      </div>

      <!-- Modal Delete -->
      <div class="modal" id="modalDelete">
        <div class="modal-dialog">
          <div class="modal-content">
            <!-- Modal Delete Header -->
            <div class="modal-header">
              <h4 class="modal-title">Delete User Confirmation</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal Delete Body -->
            <div class="modal-body">
              <p id="modalBodyText">Are you sure to delete this user ?</p>
              <button type="button" name="buttonDelete" id="buttonDelete" class="btn btn-danger float-right mr-2 ml-2">Delete</button>
              <button type="button" name="buttonCancell" id="buttonCancell" class="btn btn-warning float-right mr-2 ml-2" data-dismiss="modal">Cancel</button>
            </div>
          </div>
        </div>
      </div>

    </div>

    <!-- js -->
    @include('layouts.admin.includes.js')
    <script type="text/javascript">
      $(document).ready(function() {
        $('#table').DataTable( {
        });
      });
    </script>
    <script type="text/javascript">
      // ajax setup
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
      // get id
      $('.btnDelete').click(function(){
          var id = $(this).attr('id');
          // console.log(id);
        $('#buttonDelete').click(function(){
            $.ajax({
              type:'POST',
              url:'{{ route("deleteProfile") }}',
              data:{id:id,},
              dataSrc:"",
              beforeSend:function(){
                $('#modalBodyText').text('Deleting....');
              },
              success:function(data){
                  setTimeout(function(){
                    $('#modalBodyText').text(data.success);
                    $('#buttonDelete').attr("disabled", true);
                    location.reload();
                  }, 2000);

              }

            });
        });
      });
    </script>


@endsection
