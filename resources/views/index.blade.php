@extends('myapp')
@section('content')

<nav id="navbar" class="navbar navbar-expand-lg mb-3 bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">Belgrano Explorer</a>
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="/ask-me-a-question">Ask me a question!</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/create-user">Create User</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/users-list">Users List</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/upload-file">Upload File</a>
        </li>
      </ul>

      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>

    </div>
  </div>
</nav>

<div class="align-items-center center-button">
  <h1 id="title" class="text-center p-4 mt-4">Wellcome To Belgrano Explorer!</h1>
  <h4 id="sub-title" class="text-center">Who Are You?</h4>
  <div class="container-fluid">
    <div class="container col-md-5 col-md-offset-3 p-4 mt-4">
      <div class="form-floating mb-3">
          <input type="email" class="form-control mb-3" name="email" id="floatingInput" placeholder="name@example.com">
          <label for="floatingInput">Email address</label>
      </div>
      <div class="form-floating">
          <input type="username" class="form-control mb-3" name="username" id="floatingInput" placeholder="Username">
          <label for="floatinInput">Username</label>
      </div>
      <input type="submit" value="Log-in" class="btn btn-primary my-2" />
    </div>
  </div>
  <h4 id="sub-title" class="text-center">Don't have an account?
    <a class="btn btn-link" href="/create-user" role="button" >Create User</a>
  </h4>
</div>

<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-header" sytle="color: #fff;">
    <h5 class="offcanvas-title"  id="offcanvasExampleLabel"> <p style="color: #000">Profile</p></h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>

  <div class="offcanvas-body">
    <div >
      Some text here      
    </div>
    <div class="dropdown mt-3">
      <button class="btn btn border-black dropdown-toggle" type="button" data-bs-toggle="dropdown">
        Dropdown button
      </button>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="/upload-file">Upload File</a></li>
        <li><a class="dropdown-item" href="#">Another action</a></li>
        <li><a class="dropdown-item" href="#">Something else here</a></li>
      </ul>
    </div>
  </div>
</div>


@endsection