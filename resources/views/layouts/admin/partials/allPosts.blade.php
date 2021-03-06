@extends('layouts.admin.index')

@section('title', 'All Posts')

@section('content')

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-3">
      <h1 class="h3 mb-0 text-gray-800">Post</h1>
      <!-- breadcrumb -->
      @breadcrumb
        @slot('slot')
          <!-- breadcrumb -->
          <li class="breadcrumb-item" aria-current="page">
            <i class="fa fa-thumb-tack"></i>
            <span>Post</span>
          </li>
        @endslot
      @endbreadcrumb
      <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
    </div>

    <div class="row">

      <!-- table -->
      <div class="col-md-12 table-responsive-md mr-auto mb-4 mt-2 ml-2">
        @table
          @slot('tableClass', 'table table-active table-striped table-sm table-bordered table-hover text-gray-800 shadow-sm')
          @slot('tableId', 'table')
          @slot('tableAditional', '')

          @slot('tableHead')
            <tr>
              <th></th>
              <th class="pl-3">Tittle</th>
              <th>Author</th>
              <th>Categories</th>
              <th>Date</th>
              <th>Action</th>
              <th>Visibility</th>
            </tr>
          @endslot

          @slot('slot')
            <tr>
              @foreach($post as $post)
                <td></td>
                <td class="pl-3" > <a href="#" class="text-decoration-none">{{ $post->post_title }}</a></td>
                @foreach($post->users as $author)
                  <td> <a href="#" class="text-decoration-none">{{ $author->username }}</a></td>
                @endforeach
                @foreach($post->categories as $category)
                  <td> <a href="#" class="text-decoration-none">{{ $category->categories_name }}</a></td>
                @endforeach
                <td>Published {{ $post->post_create }}</td>
                <td>
                  <a href="{{ route('editPostGetId', $post->id_post) }}" class="text-primary text-decoration-none">
                    Edit &#124;
                  </a>
                  <a href="#" id="{{ $post->id_post }}" class="deletePost text-danger text-decoration-none" data-toggle="modal" data-target="#modalDeletePost">
                    Delete &#124;
                  </a>
                </td>
                <td><a href="#" class="text-decoration-none">{{ $post->post_visibility }}</a></td>
              </tr>
            @endforeach


            <tfoot class="font-weight-bold">
              <tr>
                <td></td>
                <td class="pl-3">Tittle</td>
                <td>Author</td>
                <td>Categories</td>
                <td>Date</td>
                <td>Action</td>
                <td>Visibility</td>
              </tr>
            </tfoot>
          @endslot

        @endtable
      </div>

      <div class="modal" id="modalDeletePost">
        <div class="modal-dialog">
          <div class="modal-content">

            <div class="modal-header">
              <h4>Delete Post Confirmation</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body">
                <p class="modalTextBody">Are u sure to delete this Post ?</p>
                <button type="button" class="btnDeletePost btn btn-danger float-right" name="button">Delete</button>
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
    <!-- ajax delete post -->
    <script type="text/javascript">
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
      // get id
      $('.deletePost').click(function(){
        var id = $(this).attr('id');
        $('.btnDeletePost').click(function(){
          $.ajax({
            type : 'POST',
            url : '{{ route("deletePost") }}',
            data: {id:id},
            beforeSend:function(){
              $('.modalBodyText').text('Deleting....');
            },
            success:function(data){
              setTimeout(function(){
                $('.modalBodyText').text(data.success);
                $('.btnDeletePost').attr("disabled", true);
                location.reload();
              }, 2000);
            }
          })
        });
      });
    </script>


@endsection
