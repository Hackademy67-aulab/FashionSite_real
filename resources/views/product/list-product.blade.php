<x-layout>
    <x-slot name=title>{{Route::currentRouteName()}}</x-slot>
    <section class="m-0 p-0">
        <x-navbar/>
        <x-percorso/>
        <h1 class="text-center h3 fw-bold" style="margin-top: 10rem">Bestseller annunci</h1>
        <x-category/>
    </section>

    <section class="vw-100 d-flex justify-content-center" style="min-height:30px">

        <section style="width: 60%" class="d-flex  flex-wrap">

            @foreach ($products as $product)

            <x-cardannunci
                :product="$product"
            />

            @endforeach



        </section>

    </section>



</x-layout>