{{-- <nav class="navbar navbar-expand-lg py-3 d-flex justify-content-center fixed-top " id="navbar">
    <div class="container-fluid m-0 p-0 navbarwidthsm">
        <img src="./media/logo.png" alt="logo Majestic" class="logo py-2">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01" style="width:100rem">
            <ul class="navbar-nav me-auto bg-danger ">
            <li class="nav-item ps-lg-4">
                <a class="nav-link text-dark fw-semibold" aria-current="page" href="">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark fw-semibold" href="">Annunci</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark fw-semibold" href="">Contatti</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark fw-semibold" href="">Crea negozio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark fw-semibold" href="">Negozi creati</a>
            </li>
            @guest

            <li class="nav-item">
                <a class="nav-link text-dark fw-semibold"  href="">Registrati</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark fw-semibold"  href="">Login</a>
            </li>

            @else
            <li class="nav-item">
                <a class="nav-link text-dark fw-semibold"  href="#" onclick="event.preventDefaul(); document.querySelector('#form-logout').submit()">LogOut</a>
                {{-- al click su questo link, inibisce l'href e cercarmi un form indicato dall'id form-logout, e di questo form spingi il tasto submit
            </li>
            <form method="POST" action="{{ route('logout') }}" class="d-none">@csrf</form>
            @endguest

            <li class="nav-item" style="width:9.7rem">
                <a class="nav-link text-dark fw-semibold"  href="">Messaggi ricevuti</a>
            </li>

           {{-- se l'utente è autentica scrivi
            @auth
                we o fratm {{Auth::user()->name}}
            @else

            @endauth

            </ul>
            <section class="icon d-flex justify-content-end bg-primary">
                <i class="fa-solid fa-cart-shopping p-2 text-dark"></i>
                <i class="fa-solid fa-magnifying-glass p-2 text-dark"></i>
                <i class="fa-regular fa-user p-2 text-dark"></i>
                <i class="fa-regular fa-heart py-2 ps-2 text-dark"></i>
            </section>
        </div>
    </div>
</nav> --}}

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
          {{-- <div class="sec-center mt-3">
            <input class="dropdown m-0 p-0" type="checkbox" id="dropdown" name="dropdown"/>
            <label for="dropdown"><i class="fa-regular fa-user p-2 text-dark m-0 p-0 "></i></label> --}}
            {{-- <div class="section-dropdown" style="width: fit-content"> --}}
                <a class="text-dark m-0 pe-5"  href="{{ route('register') }}">Registrati</a>
                <a class="text-dark m-0 pe-5" href="{{ route('login') }}">Accedi</a>
                {{-- <a class="text-dark m-0 pe-5"  href="#" onclick="event.preventDefault(); document.querySelector('#form-logout').submit()">LogOut</a>
                <form id="form-logout" method="POST" action="" class="d-none">@csrf</form> --}}
            {{-- </div> --}}
        </div>
        </ul>
      </div>
    </div>
  </nav>