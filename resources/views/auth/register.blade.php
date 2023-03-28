<x-layout>
    <x-slot name=title>Registrati</x-slot>
    <section class="m-0 p-0">
        <x-navbar/>

        <x-percorso/>

        <form style="margin-top:10rem" method="POST" action="{{route('register')}}" enctype="multipart/form-data">
          {{-- enctype permette di gestire file multimediali --}}
          @csrf
          <div class="segment text-center mb-5">
            <h1>Register</h1>
          </div>

          <section>

            <label>
              <input name="name" type="text" placeholder="name" class="@error('name') is-invalid @enderror"/>
            </label>
            @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror


          <label>
            <input name="email" type="text" placeholder="Email" class="@error('email') is-invalid @enderror"/>
          </label>
          @error('email')
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror

          <label>
            <input name="password" type="password" placeholder="Password" class="@error('password') is-invalid @enderror"/>
          </label>
          @error('password')
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror


          <label>
            <input name="password_confirmation" type="password" placeholder="Conferma password" class="@error('password') is-invalid @enderror"/>
          </label>
          @error('password')
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror


          <button class="red" type="submit">Registrati</button>

        </form>

    </section>
</x-layout>