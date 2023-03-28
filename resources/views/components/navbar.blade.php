<nav class="navbar navbar-expand-lg  fixed-top  d-flex align-items-center " id="navbar" style="height:5rem">
    <div class="container-fluid d-flex align-items-center" style="width: fit-content">
        <img src="./media/logo.png" alt="logo Majestic" class="pe-5" style="height:1rem">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse " id="navbarNavDropdown">
        <ul class="navbar-nav  d-flex align-items-center">
          <li class="nav-item">
            <a class="nav-link active m-0 p-2" aria-current="page" href="{{ route('home') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link m-0 p-2" href="#">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link m-0 p-2" href="#">Pricing</a>
          </li>
          ciao
          <div class="sec-center mt-3">
            <input class="dropdown m-0 p-0" type="checkbox" id="dropdown" name="dropdown"/>
            <label for="dropdown"><i class="fa-regular fa-user p-2 text-dark m-0 p-0 "></i></label>
            <div class="section-dropdown" style="width: fit-content">
            @auth
            <a class="nav-link text-dark fw-semibold" href="#" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Logout</a>
            <form id="form-logout" method="POST" action="{{route('logout')}}" class="d-none">@csrf</form>
            @else
            <a class="text-dark m-0 pe-5"  href="{{ route('register') }}">Registrati</a>
            <a class="text-dark m-0 pe-5" href="{{ route('login') }}">Accedi</a>
            @endauth
            </div>
        </div>
        </ul>
      </div>
    </div>
  </nav>