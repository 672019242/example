<nav class="navbar navbar-expand-lg bg-white border-bottom">
  <div class="container">
    <a class="navbar-brand" href="#">Example</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">

      @foreach ($navbar as $name => $url)

        <li class="nav-item">
          <a class="nav-link" href="{{ $url }}">{{ $name }}</a>
        </li>
            
      @endforeach
           
    </ul>
      
    <ul class="navbar-nav mb-2 mb-lg-0">

      @guest

        <li class="nav-item">
          <a class="nav-link" href="{{ route('login') }}">Login</a>
        </li>
          
        <li class="nav-item">
          <a class="nav-link" href="{{ route('register') }}">Register</a>
        </li>

      @else

      <form action="{{ route('logout') }}" method="post">
        
      @csrf

        <button type="submit" class="dropdown-tem"> Logout </button>
          </form>
        
            <li class="nav-item dropdown">

              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">

                {{ Auth::user()->name }}

              </a>
              <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">

                <li> <a class="dropdown-item" href="#">Action</a></li>
                <li> <a class="dropdown-item" href="#">Another action</a></li>
                <li>
                  <hr class="dropdown-divider">
          
                </li>
                <li> 
                  <form action="{{ route('logout') }}" method="post">
                    @csrf

                    <button type="submit" class="dropdown-tem"> Logout </button>
                </form>
                 </li>
              </ul>

            @endguest
          
      </ul>
      </div>
    </div>
  </nav>