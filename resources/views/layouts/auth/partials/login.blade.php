@extends('layouts.auth.index')

@section('title', 'login')

@section('content')

  <div class="container">
    <h2 class="font-weight-bold text-dark text-center mt-5">Welcome To Blogker</h2>
    <div class="d-flex justify-content-center mt-2">
      <div class="row">
        <div class="card shadow-sm col-lg-12 col-xl-12">
          <div class="card-body mt-3">
            <h5 class="text-center font-weight-bold text-dark">Blogker Login</h5>
            <form class="" action="index.html" method="post">
              <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" name="" value="" placeholder="enter your username">
              </div>
              <div class="form-group">
                <label for="password">password</label>
                <input type="password" class="form-control" name="" value="" placeholder="password">
              </div>

              <button type="submit" name="button" class="btn btn-primary bg-info float-right btn-sm mt-2">Login</button>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
