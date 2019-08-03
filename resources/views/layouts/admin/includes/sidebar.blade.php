<!-- Sidebar -->
<ul class="navbar-nav bg-asphalt sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center mt-2 mb-2" href="{{ route('dashboard') }}">
    <div class="sidebar-brand-icon">
      <i class="fa fa-book"></i>
    </div>
    <div class="sidebar-brand-text mx-3">BlogKer Project<sup>beta</sup></div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0 mt-2">

  <!-- menu -->
  <div class="sidebar-heading">
    Main Menu
  </div>

  <!-- Nav Item - Dashboard -->
  @navItem
    @slot('slot')
      <a class="nav-link" href="{{ route('dashboard') }}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span>
      </a>
    @endslot
  @endnavItem

  <!-- Nav Item - Post collapsePages-->
  @navItem
    <a href="#" class="nav-link collapsed" data-toggle="collapse" data-target="#postsCollapse" aria-expanded="true" aria-controls="postsCollapse">
      <i class="fa fa-pencil"></i>
      <span>Post</span>
    </a>
    <div id="postsCollapse" class="collapse" aria-labelledby="PostsHeader" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Post Menu:</h6>
        <!-- item -->
        <a href="{{ route('allPosts') }}" class="collapse-item">All Post</a>
        <a href="{{ route('addNewPost') }}" class="collapse-item">Add New Post</a>
        <a href="{{ route('categories') }}" class="collapse-item">Categories</a>
      </div>
    </div>
  @endnavItem

  <!-- Nav Item - Pages -->
  @navItem
    <a href="#" class="nav-link collapsed" data-toggle="collapse" data-target="#pagesCollapse" aria-expanded="true" aria-controls="pagesCollapse">
      <i class="fa fa-file"></i>
      <span>Pages</span>
    </a>
    <div id="pagesCollapse" class="collapse" aria-labelledby="PagesHeader" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Pages Menu:</h6>
        <!-- item -->
        <a href="{{ route('allPages') }}" class="collapse-item">All Page</a>
        <a href="{{ route('addNewPage') }}" class="collapse-item">Add New Page</a>
      </div>
    </div>
  @endnavItem

  <!-- Nav Item - User -->
  @navItem
    <a href="#" class="nav-link collapsed" data-toggle="collapse" data-target="#usersCollapse" aria-expanded="true" aria-controls="usersCollapse">
      <i class="fa fa-user"></i>
      <span>Users</span>
    </a>
    <div id="usersCollapse" class="collapse" aria-labelledby="UsersHeader" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Users Menu:</h6>
        <!-- item -->
        <a href="{{ route('allUsers') }}" class="collapse-item">All Users</a>
        @if(auth()->user()->role != 2)
          <a href="{{ route('addNewUser') }}" class="collapse-item">Add New User</a>
        @endif
      </div>
    </div>
  @endnavItem

  <!-- Divider -->
  <hr class="sidebar-divider my-0 mt-4 mb-4">

  <!-- see the blog -->
  <a href="" name="button" class="btn btn-sm btn-info ml-3 mr-3">See Blog</a>

</ul>
<!-- End of Sidebar -->
