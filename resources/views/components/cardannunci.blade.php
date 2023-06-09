{{-- card --}}
<section style="width:18rem" class="mb-5 mx-5 mt-5">
    <div class="d-flex justify-content-end align-items-end " style="background-image: url('{{ Storage::url("{$product->img}") }}'); background-size: cover; background-repeat: no-repeat;
    ; height:25rem; cursor:pointer;">


        {{-- heart --}}
        <div class="body me-1" style="position:relative; top:1.3rem">
            <label class="button">
            <input type="checkbox" />
            <span class="wrapper">
                <svg viewBox="0 -0.5 20 20" class="icon" style="height: 20px;">
                <g>
                    <g id="heart">
                    <path id="svg_1" d="m10.02718,19.1162l-7.00532,-6.2995c0,0 -1.37775,-1.4065 -1.97963,-2.46683c-0.68775,-1.21158 -0.91032,-2.64695 -0.91032,-2.64695c0,0 -0.32612,-1.70039 0.04712,-3.14219c0.37323,-1.44179 1.39813,-2.30132 1.39813,-2.30132c0,0 0.83141,-0.86498 2.2765,-1.12951c0.34288,-0.06276 1.90106,-0.55798 3.51853,0.20929c1.75685,0.83339 2.64309,2.46353 2.64309,2.46353c0,0 0.7278,-1.21292 1.6298,-1.88289c0.9019,-0.66998 1.9113,-0.89888 1.9113,-0.89888c0,0 0.9406,-0.27457 2.3777,-0.04673c1.3203,0.21615 2.2631,1.06324 2.2631,1.06324c0,0 1.0603,1.11742 1.444,2.03448c0.3838,0.91706 0.3585,2.03601 0.3585,2.03601c0,0 0.007,0.98564 -0.1494,1.90069c-0.1564,0.91506 -0.4643,1.70247 -0.4643,1.70247c0,0 -0.491,0.91741 -1.0608,1.67459c-0.5697,0.7571 -1.2237,1.351 -1.2237,1.351c0,0 -0.6017,0.5718 -2.343,2.1502c-1.7413,1.5784 -4.7313,4.2293 -4.7313,4.2293z" />
                    </g>
                </g>
                </svg>
            </span>
            <span class="ripple"></span>
            </label>
        </div>
    </div>
    <p class="my-2 p-0" style="color: rgb(152, 152, 152)">{{$product->name}}</p>
    <p class="fw-bold m-0 p-0">{{$product->price}} $</p>
    <p class="fw-bold m-0 p-0">{{$product->description}}</p>
</section>
{{-- fine card --}}