<x-layout>
    <x-slot name=title>{{Route::currentRouteName()}}</x-slot>
    <section class="m-0 p-0">
        <x-navbar/>

        <form style="margin-top:15rem" method="POST" action="{{route('login')}}" enctype="multipart/form-data">
          {{-- enctype permette di gestire file multimediali --}}

          @csrf

          <div class="segment text-center mb-5">
            <h1>Accedi</h1>
          </div>

          <section>

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




          <button class="red" type="submit">Accedi</button>

        </form>

    </section>
</x-layout>