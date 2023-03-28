<x-layout>
    <x-slot name=title>Crea negozio</x-slot>
    <section class="m-0 p-0">
        <x-navbar/>

        <x-percorso/>

        <form style="margin-top:10rem" method="POST" action="{{route('negoziocreato')}}" enctype="multipart/form-data">
          {{-- enctype permette di gestire file multimediali --}}
          @csrf
          <div class="segment text-center mb-5">
            <h1>Crea negozio</h1>
          </div>

          <section>

            <label>
              <input name="name" type="text" placeholder="Nome" class="@error('name') is-invalid @enderror"/>
            </label>
            @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror


          <label>
            <input name="city" type="text" placeholder="City" class="@error('city') is-invalid @enderror"/>
          </label>
          @error('city')
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror

          <label>
            <input name="description" type="text" placeholder="Descrizione" class="@error('description') is-invalid @enderror"/>
          </label>
          @error('password')
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror

            <label>
                <input name="img" type="file" class="form-control @error('img') is-invalid @enderror" accept="image/jpg, image/bmp, image/png, image/webp">
                @error('img')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </label>


          <button class="red" type="submit">Crea negozio</button>

        </form>

    </section>
</x-layout>