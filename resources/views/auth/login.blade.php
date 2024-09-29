<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.98.0">
    <title>Signin Template · Bootstrap v5.2</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/">

    {{-- My Css --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

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

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/signin.css') }}" rel="stylesheet">
  </head>
  <body class="text-center"> 
  @include('header.navbar')
    
<main class="form-signin w-100 m-auto">
    @if (session('fail'))
        <div class="alert alert-danger">
            {{ session('fail') }}
        </div>
    @endif

  <form action="{{ route('authenticate') }}" method="post">
    @csrf
    <img class="mb-4" src="{{ asset('img/logo umj.png') }}" alt="" width="100" height="100">
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

    <div class="form-floating">
      <input type="email" name="email" class=" @error('email') is-invalid @enderror form-control" id="floatingInput" placeholder="name@example.com" required>
      @error('email')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
      <label for="floatingInput">Email</label>
    </div>
    <div class="form-floating">
      <input type="password" name="password" class=" mt-3 @error('password') is-invalid @enderror form-control" id="floatingPassword" placeholder="Password" required>
      @error('password')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
      <label for="floatingPassword">Password</label>
    </div>
    <div>
        <small class="fw-bold">Untuk mahasiswa baru Nim dan Password sama!</small>
    </div>
    <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Sign in</button>
    <a href="{{ route('register') }}">Registrasi</a>
    <p class="mt-5 mb-3 text-muted">&copy; 2020–2023</p>
  </form>
</main>
  </body>
</html>
