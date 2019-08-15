@extends('layouts.admin.index')

@section('title', 'All Pages')

@section('content')

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-3">
      <h1 class="h3 mb-0 text-gray-800">Pages</h1>
      <!-- breadcrumb -->
      @breadcrumb
        @slot('slot')
          <!-- breadcrumb -->
          <li class="breadcrumb-item" aria-current="page">
            <i class="fa fa-files-o"></i>
            <span>Pages</span>
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
              <th></th>
              <th class="pl-3">Tittle</th>
              <th>Author</th>
              <th>Date</th>
              <th>Visibility</th>
              <th>Action</th>
            </tr>
          @endslot

          @slot('slot')
            <!-- data -->
            <tr>
              @foreach($page as $page)
                <td></td>
                <td class="pl-3" > <a href="#" class="text-decoration-none">{{ $page->page_title }}</a> </td>
                @foreach($page->users as $author)
                  <td> <a href="#" class="text-decoration-none">{{ $author->username }}</a> </td>
                @endforeach
                <td>Published {{$page->page_create}}</td>
                <td>{{$page->page_visibility}}</td>
                <td>
                  <a href="{{ route('editView', $page->id_page) }}" class="text-primary text-decoration-none">
                    Edit &#124;
                  </a>
                  <a href="{{ route('deletePage', $page->id_page) }}" class="text-danger text-decoration-none">
                    Delete &#124;
                  </a>
                </td>
              @endforeach
            </tr>

            <tfoot class="font-weight-bold">
              <td></td>
              <td class="pl-3">Tittle</td>
              <td>Author</td>
              <td>Date</td>
              <td>Visibility</td>
              <td>Action</td>
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
