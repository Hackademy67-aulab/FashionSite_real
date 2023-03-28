<x-layout>
    <x-slot name=title>Crea prodotto</x-slot>
    <section class="m-0 p-0">
        <x-navbar/>

        <x-percorso/>

        <form style="margin-top:10rem" method="POST" action="{{route('prodottocreato')}}" enctype="multipart/form-data">
          {{-- enctype permette di gestire file multimediali --}}
          @csrf
          <div class="segment text-center mb-5">
            <h1>Crea prodotto</h1>
          </div>

          <section>

            <label>
              <input name="name" type="text" placeholder="Nome" class="@error('name') is-invalid @enderror"/>
            </label>
            @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror


          <label>
            <input name="price" type="text" placeholder="Prezzo" class="@error('price') is-invalid @enderror"/>
          </label>
          @error('prezzo')
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror

          <label>
            <input name="description" type="text" placeholder="Descrizione" class="@error('description') is-invalid @enderror"/>
          </label>
          @error('password')
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror

          <label>
            <input name="img" type="file" placeholder="img" accept="image/png, image/jpeg" class="@error('img') is-invalid @enderror"/>
          </label>
          @error('img')
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror


          <button class="red" type="submit">Crea prodotto</button>

        </form>

    </section>
</x-layout>