@extends('layouts.theme.ransombroker.index')

@section('title')
    {{$post->post_title}}
@endsection

@section('content')
     <!-- content -->
     <div class="container">
      <div class="d-flex justify-content-start mb-5 mt-5">
        <!-- content -->
        <div class="row">
          <div class="col-md-12">
            <div class="card shadow rounded">
              <div class="card-body p-5">
                <!-- kategori -->
                @foreach($post->categories as $category)
                    <a href="{{ route('category', $category->categories_name) }}" class="btn text-primary font-weight-bold text-left">{{ $category->categories_name }}</a>
                @endforeach
                <!-- date when realease -->
                <p class="ml-3"><small class="font-weight-bold text-muted text-left">realease date {{ $post->post_create }}</small></p>
                <!-- title -->
                <h4 class="card-title mt-2 text-break">
                    {{ $post->post_title }}
                 </h4>
                 <!-- divider -->
                 <hr>
                <!-- content -->
                <div class="p-2">
                  {!! $post->post_content !!}
                </div>
                <!-- end of content -->

              </div>
            </div>
          </div>
        </div>

      </div>
    </div>

    @include('layouts.theme.ransombroker.includes.js')
    <script>
        $('img').addClass('img-fluid')
    </script>

@endsection