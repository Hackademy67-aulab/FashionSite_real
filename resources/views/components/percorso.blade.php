<section class="d-flex justify-content-center w-100" style="position:relative; top: 7rem; border-top: 1px solid rgb(179, 179, 179); border-bottom: 1px solid rgb(179, 179, 179)">
    <div class="d-flex align-items-center py-3  justify-content-center" style="width: 55%">
        @if (Route::currentRouteName()=='primapagina')
            <p class="m-0 p-0">Home</p>
        @else
            <td><p class="m-0 p-0 text-dark">Home</p><td>
            <td><i class="fa-solid fa-angle-right fa-2xs mx-4 my-0 p-0"></i><td>
            <td><p class="m-0 p-0" style="color:rgb(179, 179, 179)">{{Route::currentRouteName()}}</p><td>
        @endif


    </div>
</section>