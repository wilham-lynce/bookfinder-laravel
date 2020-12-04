<?php
use App\Http\Controllers\AdminAccountController;
use App\Http\Controllers\BookController;

// $admin= 0;
// if (Session::has('username')) {
//   $admin =AdminAccountController::login();
// }
?>
<!--Navbar -->
<nav class="mb-1 navbar navbar-expand-lg navbar-dark default-color">
  {{-- <a class="navbar-brand" href="#">Navbar</a> --}}
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
    aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="admin">admin
          <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="addbook">addbook</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">actions
        </a>
        <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <form class="form-inline my-1" action="adminsearch">
        <div class="md-form form-sm my-0">
          <input class="form-control form-control-sm mr-sm-2 mb-0" type="text" placeholder="Search"
            aria-label="Search">
        </div>
        <button class="btn btn-outline-white btn-sm my-0" type="submit">Search</button>
      </form>
    </ul>
    <ul class="navbar-nav ml-auto nav-flex-icons">
      <li class="nav-item"><a class="nav-link" href="#"> welcome, {{ Session::get('username')['username'] }}</a></li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user"></i>profile
        </a>
        <div class="dropdown-menu dropdown-menu-right dropdown-default"
          aria-labelledby="navbarDropdownMenuLink-333">
          <a class="dropdown-item" href="#">settings</a>
          <a class="dropdown-item" href="#">activities</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="logout">logout</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
<!--/.Navbar -->