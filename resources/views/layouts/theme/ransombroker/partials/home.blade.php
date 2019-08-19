@extends('layouts.theme.ransombroker.index')

@section('title', 'Home')

@section('content')
    <!-- jumbotron -->
    <div class="jumbotron jumbotron-fluid bg-dark shadow mb-5">
      <!-- content -->
      <div class="container">
        <h1 class="h1 font-weight-bold text-white text-capitalize">
          Welcome To RansomBroker
        </h1>
        <p class="text-white ml-5 font-weight-bold small">If knowledge is not put into practice, it does not benefit one</p>
      </div>
    </div>

    <!-- container -->
    <div class="container">
      <!-- flex view -->
      <div class="d-flex flex-wrap align-content-md-around">

        <!-- card content -->

        <div class="row">

          <!-- content -->
          @foreach($post as $post)
            <div class="col-md-4">
              <div class="card rounded shadow m-4">
                <!-- img content -->
                @if($post->post_thumbnail != null)
                  <a href="{{ route('read', $post->slug) }}"><img src="{{ asset('photos/'.$post->post_thumbnail) }}" class="card-img-top" alt=""></a>
                @elseif($post->post_thumbnail == null)
                  <a href="{{ route('read', $post->slug) }}"><img src="https://via.placeholder.com/300x120.png" class="card-img-top" alt=""></a>
                @endif
                <div class="card-body pt-1 pl-0">
                  <!-- Category -->
                  @foreach($post->categories as $category)
                    <p><a href="{{ route('category', $category->categories_name) }}" class=" btn text-primary font-weight-bold text-left">{{ $category->categories_name }}</a></p>
                  @endforeach
                  <!-- content -->
                  <a href="{{ route('read', $post->slug) }}" class="btn text-left " role="button" >
                    {{ $post->post_title }}
                  </a>
                </div>
              </div>
            </div>
          @endforeach
          
        </div>
        <!-- end of card content -->
      </div>
    </div>
    <!-- end of container content -->

    <!-- pagination -->
    <div class="container">
      <!-- pagination -->
      <nav aria-label="pagination" class="m-4">
        <ul class="pagination">
          <li class="page-item"><a href="#" class="page-link">Previous</a></li>
          <li class="page-item"><a href="#" class="page-link">1</a></li>
          <li class="page-item"><a href="#" class="page-link">2</a></li>
          <li class="page-item"><a href="#" class="page-link">3</a></li>
          <li class="page-item"><a href="#" class="page-link">Next</a></li>
        </ul>
      </nav>
    </div>
    
@endsection