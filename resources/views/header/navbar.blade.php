<nav class="navbar navbar-expand-lg bg-body-tertiary py-2">
    <div class="container">
      <div class="mx-auto">
        <a class="navbar-brand fw-bold" href="#"><span class="text-white">E-Learning Universitas Muhammadiyah Jember</span></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto fw-bold">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
          </li>
          <li class="nav-item">
            @guest
             <a class="nav-link" href="{{ route('login') }}">Sign in</a>
            @endguest

            @auth
              <form action="{{ route('logout') }}" method="post">
                @csrf
                <button type="submit" class="btn btn-primmary fw-bold text-white">Logout</button>
              </form>
              
            @endauth
            
          </li>
        </ul>
      </div>
      </div>
      
    </div>
  </nav>