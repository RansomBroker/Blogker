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
      <div class="col-xl-12 table-responsive-xl mr-auto mb-5">
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
            <tr>
              <td class="pl-3" >
                <a href="#" class="text-decoration-none">
                  <img src="https://via.placeholder.com/64x64.png?text=User+Profile/" alt="">
                   Yadis
                </a>
              </td>
              <td>
                <a href="#" class="text-decoration-none">Yadistira Fajar Ramadhan
                </a>
              </td>
              <td>
                <a href="#" class="text-decoration-none">yadisoke@gmail.com</a>
              </td>
              <td>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.derit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              </td>
              <td>
                <a href="#" class="text-decoration-none">Admin</a>
              </td>
              <td>
                <a href="#" class="text-decoration-none">5</a>
              </td>
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
              <td class="pl-3" >
                <a href="#" class="text-decoration-none">
                  <img src="https://via.placeholder.com/64x64.png?text=User+Profile/" alt="">
                   Yadis
                </a>
              </td>
              <td>
                <a href="#" class="text-decoration-none">Yadistira Fajar Ramadhan
                </a>
              </td>
              <td>
                <a href="#" class="text-decoration-none">yadisoke@gmail.com</a>
              </td>
              <td>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Dui</p>
              </td>
              <td>
                <a href="#" class="text-decoration-none">Admin</a>
              </td>
              <td>
                <a href="#" class="text-decoration-none">5</a>
              </td>
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
              <td class="pl-3" >
                <a href="#" class="text-decoration-none">
                  <img src="https://via.placeholder.com/64x64.png?text=User+Profile/" alt="">
                   Yadis
                </a>
              </td>
              <td>
                <a href="#" class="text-decoration-none">Yadistira Fajar Ramadhan
                </a>
              </td>
              <td>
                <a href="#" class="text-decoration-none">yadisoke@gmail.com</a>
              </td>
              <td>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.derit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              </td>
              <td>
                <a href="#" class="text-decoration-none">Admin</a>
              </td>
              <td>
                <a href="#" class="text-decoration-none">5</a>
              </td>
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
              <td class="pl-3" >
                <a href="#" class="text-decoration-none">
                  <img src="https://via.placeholder.com/64x64.png?text=User+Profile/" alt="">
                   Yadis
                </a>
              </td>
              <td>
                <a href="#" class="text-decoration-none">Yadistira Fajar Ramadhan
                </a>
              </td>
              <td>
                <a href="#" class="text-decoration-none">yadisoke@gmail.com</a>
              </td>
              <td>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.derit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              </td>
              <td>
                <a href="#" class="text-decoration-none">Admin</a>
              </td>
              <td>
                <a href="#" class="text-decoration-none">5</a>
              </td>
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

    </div>

    <!-- js -->
    @include('layouts.admin.includes.js')
    <script type="text/javascript">
      $(document).ready(function() {
        $('#table').DataTable( {
        });
      });
    </script>


@endsection
