<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Hamad Pashua, Sailor Entertainment, Company">
    <meta name="generator" content="Sailor 0.00.1">
    <title>Starter Template · Sailor v1.0</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/starter-template/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">

    <!-- Favicons -->
    <link rel="icon" href="{{ asset('favicon/favicon.ico') }}">
    <meta name="theme-color" content="#7952b3">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="{{ url('css/starter-template.css') }}" rel="stylesheet" type="text/css">
  </head>
  <body>

@if(has('auth'))
<div class="container mx-4 my-2">
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ flash('auth') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
</div>
@endif

<div class="col-lg-8 mx-auto p-2 py-md-5">
  <header class="d-flex align-items-center pb-3 mb-5 border-bottom col-md-9">
    <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
      <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" class="me-2" viewBox="0 0 118 94" role="img"><title>Bootstrap</title><path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z" fill="currentColor"></path></svg>
      <span class="fs-4">Starter template</span>
    </a>
  </header>

  <main>
    <h1>Get started with Sailor Framework</h1>
    <p class="fs-5 col-md-8">Quickly and easily get started with sailor framework, production-ready 
        files with this barebones example featuring, e-commerce, and many other management systems. 
        Some basic HTML, PHP and any third part package can be interacted with it. </br></br>
        <strong>Download all our examples to get started. </strong></p>

    <div class="row g-5">
      <div class="col-md-6">
        <ul class="icon-list">
          <li><a href="https://github.com/hamadpashua/mvc" rel="noopener" target="_blank">Sailor framework</a></li>
        </ul>
      </div>
    </div>

  </main>
  <footer class="pt-5 my-2 text-muted border-top">
    Created by Hamad Pashua and the Sailor team &middot; &copy; 2022
  </footer>
</div>

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
  </body>
</html>
