@extends('layouts.admin.index')

@section('title', 'All Posts')

@section('content')

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-3">
      <h1 class="h3 mb-0 text-gray-800">Post</h1>
      <!-- breadcrumb -->
      @breadcrumb
        <!-- breadcrumb -->
        <li class="breadcrumb-item" aria-current="page">
          <i class="fa fa-thumb-tack"></i>
          <span>Post</span>
        </li>
      @endbreadcrumb
      <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
    </div>

    <div class="row">

      <!-- table -->
      <div class="col-xl-12 table-responsive-xl mr-auto">
        @table
          @slot('tableClass', 'table table-sm table-striped')
          @slot('tableId', 'table')
          @slot('tableAditional', '')

          @slot('tableHead')
            <tr>
              <th></th>
              <th class="pl-3">Tittle</th>
              <th>Author</th>
              <th>Categories</th>
              <th>Tags</th>
              <th>Date</th>
              <th>Action</th>
              <th>Visibility</th>
            </tr>
          @endslot

          @slot('slot')
            <tr>
              <td></td>
              <td class="pl-3" > <a href="#" class="text-decoration-none">Lorem Ipsum Sir Dolor Amet</a> </td>
              <td> <a href="#" class="text-decoration-none">Yadis</a> </td>
              <td> <a href="#" class="text-decoration-none">Uncategorized</a></td>
              <td>
                <a href="#" class="badge badge-pill badge-primary">Laravel</a>
                <a href="#" class="badge badge-pill badge-primary">PHP</a>
                <a href="#" class="badge badge-pill badge-primary">MySQL</a>
                <a href="#" class="badge badge-pill badge-primary">Botstrap</a>
              </td>
              <td>Published 2019/06/01</td>
              <td>
                <a href="#" class="text-primary text-decoration-none">
                  Edit &#124;
                </a>
                <a href="#" class="text-danger text-decoration-none">
                  Delete &#124;
                </a>
              </td>
              <td><a href="#" class="text-decoration-none">Public</a></td>
            </tr>

            <tr>
              <td></td>
              <td class="pl-3" > <a href="#" class="text-decoration-none">Lorem Ipsum Sir Dolor Amet</a> </td>
              <td> <a href="#" class="text-decoration-none">Yadis</a> </td>
              <td> <a href="#" class="text-decoration-none">Uncategorized</a></td>
              <td>
                <a href="#" class="badge badge-pill badge-primary">Python</a>
                <a href="#" class="badge badge-pill badge-primary">Django</a>
                <a href="#" class="badge badge-pill badge-primary">Botstrap</a>
              </td>
              <td>Published 2019/06/01</td>
              <td>
                <a href="#" class="text-primary text-decoration-none">
                  Edit &#124;
                </a>
                <a href="#" class="text-danger text-decoration-none">
                  Delete &#124;
                </a>
              </td>
              <td><a href="#" class="text-decoration-none">Private</a></td>
            </tr>

            <tr>
              <td></td>
              <td class="pl-3" > <a href="#" class="text-decoration-none">Lorem Ipsum Sir Dolor Amet</a> </td>
              <td> <a href="#" class="text-decoration-none">Yadis</a> </td>
              <td> <a href="#" class="text-decoration-none">Uncategorized</a></td>
              <td>
                <a href="#" class="badge badge-pill badge-primary">HTML</a>
                <a href="#" class="badge badge-pill badge-primary">CSS</a>
                <a href="#" class="badge badge-pill badge-primary">JavaScript</a>
                <a href="#" class="badge badge-pill badge-primary">PHP</a>
              </td>
              <td>Published 2019/06/01</td>
              <td>
                <a href="#" class="text-primary text-decoration-none">
                  Edit &#124;
                </a>
                <a href="#" class="text-danger text-decoration-none">
                  Delete &#124;
                </a>
              </td>
              <td><a href="#" class="text-decoration-none">Public</a></td>
            </tr>

            <tr>
              <td></td>
              <td class="pl-3" > <a href="#" class="text-decoration-none">Lorem Ipsum Sir Dolor Amet</a> </td>
              <td> <a href="#" class="text-decoration-none">Yadis</a> </td>
              <td> <a href="#" class="text-decoration-none">Uncategorized</a></td>
              <td>
                <a href="#" class="badge badge-pill badge-primary">JavaScript</a>
                <a href="#" class="badge badge-pill badge-primary">VueJs</a>
              </td>
              <td>Published 2019/06/01</td>
              <td>
                <a href="#" class="text-primary text-decoration-none">
                  Edit &#124;
                </a>
                <a href="#" class="text-danger text-decoration-none">
                  Delete &#124;
                </a>
              </td>
              <td><a href="#" class="text-decoration-none">Public</a></td>
            </tr>

          @endslot

        @endtable
      </div>

    </div>

    <!-- js -->
    @include('layouts.admin.includes.js')
    <script type="text/javascript">
      $(document).ready(function() {
        $('#table').DataTable( {
            columnDefs: [ {
                orderable: false,
                className: 'select-checkbox',
                targets:   0
            } ],
            select: {
                style:'multi',
                selector:'td:first-child'
            },
            order: [[ 1, 'asc' ]]
        });
      });
    </script>


@endsection
