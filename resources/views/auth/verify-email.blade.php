<x-layout>
    <x-slot name=title>Verifica email</x-slot>
    <section class="m-0 p-0">
        <x-navbar/>



        <div class="segment text-center" style="margin-top:15rem">
            <h1>Verifica la tua email</h1>
          </div>

          @if(session('status') == 'verification-link-sent')
          <div class="my-4 alert alert-success">
            <h2>Ti abbiamo inviato una nuova email di registrazione</h2>
          </div>

          @endif

        <form style="margin-top:10rem" method="POST" action="{{route('verification.send')}}" enctype="multipart/form-data">
          {{-- enctype permette di gestire file multimediali --}}
          @csrf
          <button class="red" type="submit">Invia una nuova email di verifica</button>
        </form>

        <p class="text-center mt-5 pt-5">stai riscontrando problemi?</p>
        <a class="nav-link text-dark fw-semibold text-center" href="#" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">LogOut</a>
        <form id="form-logout" method="POST" action="{{route('logout')}}" class="d-none">@csrf</form>

    </section>
</x-layout>