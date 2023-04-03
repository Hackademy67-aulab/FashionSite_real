<nav class="navbar navbar-expand-lg  fixed-top  d-flex align-items-center justify-content-center" id="navbar" style="height:5rem">
  <div class="container-fluid d-flex align-items-center navbarlgpos " style="width: fit-content; padding-top:0rem !important;">
    <img src="./media/logo.png" alt="logo Majestic" class="pe-5 me-3" style="height:1rem">
    <button class="navbar-toggler  " type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon buttonnavbar"></span>
    </button>
    <div class="collapse navbar-collapse mt-4 mb-4 mt-lg-0 mb-lg-0" id="navbarNavDropdown">
      <ul class="navbar-nav  d-flex align-items-center">
          <a class="nav-link active m-0 p-2" aria-current="page" href="{{ route('home') }}">Home</a>

        @auth
        @if (Auth::user()->id==1)
          <a class="nav-link active m-0 p-2" aria-current="page" href="{{ route('creaprodotto') }}">Crea prodotto</a>
        @endif
        @endauth

          <a class="nav-link active m-0 p-2" aria-current="page" href="{{ route('listaprodotti') }}">Tutti i prodotti</a>



          <a class="nav-link active m-0 p-2" aria-current="page" href="{{ route('listanegozi') }}">Tutti i negozi</a>


        @auth
        <div class="sec-center h-100 ms-0 ps-0 ms-lg-5 ">
          <input class="dropdown m-0 p-0 " type="checkbox" id="dropdown" name="dropdown"/>
          <label for="dropdown" class="m-0 p-0"><p class="m-0 p-0 text-dark">Benvenuto {{ Auth::user()->name }}</p></label>
          <div class="section-dropdown py-2 ms-0 " style="width: fit-content">

            <a class="text-dark mx-2 p-0 " aria-current="page" href="{{ route('profiloutente') }}">Profilo</a>

            <a class="text-dark mx-2 mt-2 p-0 fw-light" aria-current="page" href="{{ route('creanegozio') }}">Crea negozio</a>

            <a class="text-dark mx-2 mt-2 p-0" href="#" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Logout</a>
            <form id="form-logout" method="POST" action="{{route('logout')}}" class="d-none">@csrf</form>

          </div>
        </div>

        @else
        <div class="sec-center h-100 ms-lg-5">
          <input class="dropdown m-0 p-0" type="checkbox" id="dropdown" name="dropdown"/>
          <label for="dropdown" class="m-0 p-0 "><p class="m-0 p-0 text-dark">Ciao, Accedi!</p></label>
          <div class="section-dropdown py-2" style="width: fit-content">
            <a class="nav-link active mx-2 p-0 fw-light"  href="{{ route('register') }}">Registrati</a>
            <a class="nav-link active mx-2 mt-2 p-0 fw-light" href="{{ route('login') }}">Accedi</a>
          </div>
        </div>
        @endauth

      </ul>
    </div>
  </div>
</nav>
