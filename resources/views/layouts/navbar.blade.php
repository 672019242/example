
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

        <div class="container"> 
          <div class="row"> 
            <div class="col-md-6">

            <form action="{{ route('logout') }}" method="post">
        
              @csrf
        
                <button type="submit" class="dropdown-tem btn btn-secondary mt-2"> Logout </button>
                  </form>
          </div>
        </div>
        

        </div>

            @endguest

            
          
      </ul>
      </div>
    </div>
  </nav>