<x-layout>
    <x-slot name=title>Modifica negozio</x-slot>
    <section class="m-0 p-0">
        <x-navbar/>

        <x-percorso/>

        <form style="margin-top:10rem" method="POST" action="{{ route('negoziomodificato', compact('shop') )}}" enctype="multipart/form-data">
            @method('put')
          {{-- enctype permette di gestire file multimediali --}}
          @csrf
          <div class="segment text-center mb-5">
            <h1>Modifica negozio {{ $shop->name }}</h1>
          </div>

          <section>

            <label>
              <input name="name" type="text" placeholder="{{ $shop->name }}" class="@error('name') is-invalid @enderror" />
            </label>
            @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror


          <label>
            <input name="city" type="text" placeholder="{{ $shop->city }}" class="@error('city') is-invalid @enderror" />
          </label>
          @error('city')
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror

          <label>
            <input name="description" type="text" placeholder="{{ $shop->description }}" class="@error('description') is-invalid @enderror"/>
          </label>
          @error('password')
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror

          @if ($shop->img)
            <section class="d-flex flex-column align-items-center my-3">
              <img src="{{ Storage::url("{$shop->img}") }}" alt="" style="width:15rem">
              <p>Questa è l'immagine inserita, intendi cambiarla?</p>
            </section>
            @else
            <p>Non ci sono immagini in questo negozio</p>
          @endif
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
