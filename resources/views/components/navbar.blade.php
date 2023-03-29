<nav class="navbar navbar-expand-lg  fixed-top  d-flex align-items-center" id="navbar" style="height:5rem">
    <div class="container-fluid d-flex align-items-center" style="width: fit-content">
        <img src="./media/logo.png" alt="logo Majestic" class="pe-5" style="height:1rem">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse " id="navbarNavDropdown">
        <ul class="navbar-nav  d-flex align-items-center">
          <li class="nav-item ">
            <a class="nav-link active m-0 p-2 fw-bold" aria-current="page" href="{{ route('home') }}">Home</a>
          </li>
          {{-- @if (Auth::user()->id==1) --}}
          <li class="nav-item ">
            <a class="nav-link active m-0 p-2 fw-bold" aria-current="page" href="{{ route('creaprodotto') }}">Crea prodotto</a>
          </li>
          {{-- @endif --}}
          <li class="nav-item ">
            <a class="nav-link active m-0 p-2 fw-bold" aria-current="page" href="{{ route('listaprodotti') }}">Tutti i prodotti</a>
          </li>

          <li class="nav-item ">
            <a class="nav-link active m-0 p-2 fw-bold" aria-current="page" href="{{ route('creanegozio') }}">Crea negozio</a>
          </li>

          <li class="nav-item ">
            <a class="nav-link active m-0 p-2 fw-bold" aria-current="page" href="{{ route('listanegozi') }}">Tutti i negozi</a>
          </li>

          <li class="nav-item ">
            <a class="nav-link active m-0 p-2 fw-bold" aria-current="page" href="{{ route('profiloutente') }}">Profilo</a>
          </li>

          @auth
          <div class="sec-center h-100 ms-5">
            <input class="dropdown m-0 p-0" type="checkbox" id="dropdown" name="dropdown"/>
            <label for="dropdown" class="m-0 p-0"><p class="m-0 p-0 text-dark">Benvenuto {{ Auth::user()->name }}</p></label>
            <div class="section-dropdown" style="width: fit-content">


              <a class="nav-link text-dark fw-semibold" href="#" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Logout</a>
              <form id="form-logout" method="POST" action="{{route('logout')}}" class="d-none">@csrf</form>

            </div>
        </div>


            @else


            <a class="text-dark ms-5 p-0 "  href="{{ route('register') }}">Registrati</a>
            <a class="text-dark ms-3 p-0" href="{{ route('login') }}">Accedi</a>

        @endauth
        </ul>
      </div>
    </div>
  </nav>