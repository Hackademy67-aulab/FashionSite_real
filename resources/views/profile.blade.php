<x-layout>
    <x-slot name=title>{{Route::currentRouteName()}}</x-slot>


    <!-- NAVBAR -->
    <x-navbar/>
    <!-- FINE NAVBAR -->

    <h1 class="text-center mt-5 pt-5">Profilo di {{ Auth::user()->name }}</h1>

    @foreach (Auth::user()->shops as $shop)

           {{-- card --}}
           <section class="d-flex flex-column align-items-center">
                <section style="width:18rem" class="mb-5 mx-5 mt-5">
                    <div class="d-flex justify-content-end align-items-end" style="background-image: url('{{ Storage::url("{$shop->img}") }}'); background-size: cover; background-repeat: no-repeat;
                    ; height:25rem;">

                    </div>
                    <p class="my-2 p-0">{{$shop->name}}</p>
                    <p class="fw-bold m-0 p-0">{{$shop->city}}</p>
                    <p class="fw-bold m-0 p-0">{{$shop->description}}</p>
                    <p class="fw-bold m-0 p-0">creato da {{$shop->user->name}}</p>
                </section>
            </section>

            @endforeach

            <form action="{{ route('profilocancellato') }}" method="POST">
            @method('delete')
            @csrf
            <button type="submit">cancellati</button>
            </form>


</x-layout>
