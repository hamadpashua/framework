<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <link rel="icon" href="{{ asset('favicon/favicon.ico') }}">
    <title>Blade page</title>
</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><strong>Sailor Framework</strong></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/test') }}">Test Auth</a>
          </li>
        </ul>
        @if (isAuthenticated())
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{ url('/') }}">Welcome, {{ user()->name }}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/logout') }}">Logout</a>
          </li>
        </ul>
        @else
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{ url('/') }}">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/logout') }}">Logout</a>
          </li>
        </ul>
        @endif
      </div>
    </div>
  </nav>

    <div class="container my-4">


  @if(has('auth'))
  <div class="container mx-4 my-2">
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
          {{ flash('auth') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
  </div>
  @endif

  @if(has('success'))
  <div class="container mx-4 my-2">
      <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ flash('success') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
  </div>
  @endif

  @if(session('fail'))
  <div class="container mx-4 my-2">
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
          {{ flash('fail') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
  </div>
  @endif

        <div class="card mx-auto col-md-8">
            <div class="card-header">
                <div class="card-title"><h5>testing middlewares</h5></div>
            </div>
            <div class="card-body">
                <form action="{{ url('/') }}" method="post" id="test-form">
                    <div class="from-group">
                        <label for="name">Enter Name</label>
                        <input type="text" name="name" id="name" class="form-control @if ($errors && $errors->has('name')) is-invalid @endif" value="{{ $old?$old['name']:'' }}">
                        @if ($errors && $errors->has('name'))
                            <div class="invalid-feedback">{{ $errors->first('name') }}</div>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-primary my-3">make auth</button>
                </form>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    {{-- <script src="{{ asset('js/script.js') }}"></script> --}}
</body>
</html>