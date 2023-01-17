<?php

use App\Http\Controllers\productController;

$total = 0;
if (Session::has('user')) {
  $total = productController::cartItem();
}

?>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">Pizza 4 All</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/myorders">Orders</a>
        </li>



      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>

       
        <li class="nav-item" style="margin-left:3%;margin-right:1%">
          <a class="nav-link" href="/cartList">Cart({{$total}})</a>
        </li>
        
        @if(Session::has('user'))
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{Session::get('user')['name']}}
          </a>
          <ul class="dropdown-menu">
            <li><a href="/logout">Logout</a></li>
          </ul>
        </li>
        @else
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item" style="margin-left: 5%;margin-right:2%;">
          <a class="nav-link" href="/login" style="width: 70px;">Sign in</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/register" style="width: 70px;">Sign up</a>
        </li>
        </ul>
        @endif
      </form>
    </div>
  </div>
</nav>