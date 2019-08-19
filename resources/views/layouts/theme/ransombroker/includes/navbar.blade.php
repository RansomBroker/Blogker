<!-- nav bar -->
<nav class="navbar navbar-expand-lg navbar-light bg-green topbar static-top">
      <!-- navbar brand -->
      <a href="{{ route('home') }}" class="navbar-brand text-white font-weight-bold text-capitalize ml-5">
        RansomBroker
      </a>

      <!-- when minimize -->
      <button class="navbar-toggler btn btn-light" type="button" name="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!--responsive navbar  -->
      <div class="collapse navbar-collapse" id="navbarToggler">

        <ul class="navbar-nav ml-4">
          <!-- item -->
          <li class="nav-item">
            <a href="{{ route('home') }}" class="nav-link text-silver font-weight-bold">
              Home
            </a>
          </li>

          <!-- item -->
          <li class="nav-item ml-2">
            <a href="" class="nav-link text-silver font-weight-bold">
              Category 1
            </a>
          </li>

          <li class="nav-item ml-2">
            <a href="#" class="nav-link text-silver font-weight-bold">
              Category 2
            </a>
          </li>

          <li class="nav-item ml-2">
            <a href="#" class="nav-link text-silver font-weight-bold">
              Category 3
            </a>
          </li>

          <li class="nav-item ml-2">
            <a href="#" class="nav-link text-silver font-weight-bold">
              Arduino
            </a>
          </li>

        </ul>

      </div>

    </nav>
