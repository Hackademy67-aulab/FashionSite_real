<x-layout>
    <x-slot name=title>{{Route::currentRouteName()}}</x-slot>
    <section class="m-0 p-0">
        <x-navbar/>
        <x-percorso/>
        <h1 class="text-center h3 fw-bold" style="margin-top: 10rem">Negozi creati</h1>
    </section>

    <section class="vw-100 d-flex justify-content-center" style="min-height:30px">

        <section style="width: 60%" class="d-flex  flex-wrap">

        @foreach ($shops as $shop)

           {{-- card --}}
            <section style="width:18rem" class="mb-5 mx-5 mt-5">
                <div class="d-flex justify-content-end align-items-end" style="background-image: url('{{ Storage::url("{$shop->img}") }}'); background-size: cover; background-repeat: no-repeat;
                ; height:25rem;">

                </div>
                <p class="my-2 p-0">{{$shop->name}}</p>
                <p class="fw-bold m-0 p-0">{{$shop->city}}</p>
                <p class="fw-bold m-0 p-0">{{$shop->description}}</p>
                <a href="{{ route('modificanegozi',compact('shop')) }}">Modifica</a>
                {{-- <a href="Chiama la modale">Cancella</a> --}}
                {{-- <a href="Chiama la modale">Cancella</a> --}}
                <a href="" onclick="event.preventDefault(); document.querySelector('#form-delete-{{$shop->id}}').submit();" class="btn btn-danger">Cancella</a>
                <form id="form-delete-{{$shop->id}}" method="POST" action="{{route('negoziocancellato', compact('shop'))}}">
                    @method('delete')
                    @csrf
                </form>

            </section>

            @endforeach



        </section>

    </section>



</x-layout>
