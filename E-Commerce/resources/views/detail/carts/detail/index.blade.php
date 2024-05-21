@extends('layout.app')
@extends('layout.nav')

@section('main')

<style>
    /* Menghilangkan outline dan perubahan warna teks pada fokus */
    #carts_home button:focus {
            outline: none;
            color: inherit;
        }

        /* Menghilangkan perubahan warna teks pada saat tombol ditekan */
        #carts_home button:active {
            color: inherit;
        }

        /* Mengatur warna teks saat hover jika diperlukan */
        #carts_home button:hover {
            color: black; /* Ubah sesuai warna yang diinginkan */
        }/* Ubah sesuai dengan warna yang diinginkan saat hover */
</style>

<div class="bg-dark">


<div class="pt-5">
    <ul class="flex flex-wrap text-sm text-white font-medium text-center mx-5" id="carts_home" data-tabs-toggle="#carts_home" role="tablist">
        <li class="border w-full flex-1 h-10 bg-dark hover:bg-white " role="presentation">
            <button class="inline-block p-2 text-white hover:text-dark bg-dark hover:bg-white w-full h-auto" id="profile-tab" data-tabs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Keranjang (1)</button>
        </li>
        <li class="border w-full flex-1 h-10 bg-dark hover:bg-white " role="presentation">
            <button class="inline-block p-2 text-white hover:text-dark bg-dark hover:bg-white w-full h-auto" id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab" aria-controls="dashboard" aria-selected="false">Favorite (2)</button>
        </li>
    </ul>
</div>
<div class="pt-2" id="carts_home">
    <div id="profile" role="tabpanel" aria-labelledby="profile-tab">

    <div class="grid grid-cols-2 gap-3 px-6 ">

    <!-- card 1 -->
    <div class="col-span-1">
    <div class="max-w-full">
                    <a href="{{url(('/detail'))}}"><img src="{{ asset('assets/img/pic_profile_order.svg') }}" alt="Pic" class="w-full h-auto"></a>
                    <div class="py-2">
                        <div class="flex flex-wrap justify-between">
                    <h1 class="text-white text-sm md:text-lg font-medium">Classic Polo Shirt</h1>
                    <div class=" w-10 md:w-20 flex pt-1">
                    <svg class="w-3.5 h-3.5 md:w-10 md:h-10 flex-1  text-white" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 384 512"><path d="M0 48C0 21.5 21.5 0 48 0l0 48V441.4l130.1-92.9c8.3-6 19.6-6 27.9 0L336 441.4V48H48V0H336c26.5 0 48 21.5 48 48V488c0 9-5 17.2-13 21.3s-17.6 3.4-24.9-1.8L192 397.5 37.9 507.5c-7.3 5.2-16.9 5.9-24.9 1.8S0 497 0 488V48z"/></svg>
                    <svg class="w-3.5 h-3.5 text-white flex-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    </div>
                    </div>
                    <p class="text-white text-[11px] md:text-xs font-light">Rp 128.000</p>
                    
                    <div class="flex">
                        <!-- size baju -->
                    <p class="text-white pt-2 text-xs">L</p>
                        <!-- pembatas -->
                    <p class="text-white text-2xl pl-1 pr-1 font-light">I</p>
                        <!-- warna baju -->
                    <p class="text-white pt-2 text-xs">Deep purple</p>
                    </div>
                    <form class="mt-2">
            <div class="relative flex items-center max-w-[5rem]">
        <button type="button" id="decrement-button" data-input-counter-decrement="quantity-input" class="bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 hover:bg-gray-200 border border-gray-300 rounded-s-lg p-1 h-6 ">
            <svg class="w-2 h-2 text-gray hover:text-dark dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h16"/>
            </svg>
        </button>
        <input type="text" id="quantity-input" data-input-counter aria-describedby="helper-text-explanation" class="bg-gray-50 border-x-0 border-gray-300 h-6 text-center text-gray-900 text-sm block w-full py-2.5 dark:bg-gray-700" placeholder="0" required />
        <button type="button" id="increment-button" data-input-counter-increment="quantity-input" class="bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 hover:bg-gray-200 border border-gray-300 rounded-e-lg p-1 h-6 ">
            <svg class="w-3 h-3 text-gray hover:text-dark dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
            </svg>
                </button>
                </div>
                    </form>
                    </div>
            </div>
    </div>

    <!-- card 2 -->
    <div class="col-span-1">
    <div class="max-w-full">
                    <a href="{{url(('/detail'))}}"><img src="{{ asset('assets/img/pic_profile_order.svg') }}" alt="Pic" class="w-full h-auto"></a>
                    <div class="py-2">
                        <div class="flex flex-wrap justify-between">
                    <h1 class="text-white text-sm md:text-lg font-medium">Classic Polo Shirt</h1>
                    <div class=" w-10 md:w-20 flex pt-1">
                    <svg class="w-3.5 h-3.5 md:w-10 md:h-10 flex-1  text-white" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 384 512"><path d="M0 48C0 21.5 21.5 0 48 0l0 48V441.4l130.1-92.9c8.3-6 19.6-6 27.9 0L336 441.4V48H48V0H336c26.5 0 48 21.5 48 48V488c0 9-5 17.2-13 21.3s-17.6 3.4-24.9-1.8L192 397.5 37.9 507.5c-7.3 5.2-16.9 5.9-24.9 1.8S0 497 0 488V48z"/></svg>
                    <svg class="w-3.5 h-3.5 text-white flex-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    </div>
                    </div>
                    <p class="text-white text-[11px] md:text-xs font-light">Rp 128.000</p>
                    
                    <div class="flex">
                        <!-- size baju -->
                    <p class="text-white pt-2 text-xs">L</p>
                        <!-- pembatas -->
                    <p class="text-white text-2xl pl-1 pr-1 font-light">I</p>
                        <!-- warna baju -->
                    <p class="text-white pt-2 text-xs">Deep purple</p>
                    </div>
                    <form class="mt-2">
    <div class="relative flex items-center max-w-[5rem]">
        <button type="button" id="decrement-button" data-input-counter-decrement="quantity-input" class="bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 hover:bg-gray-200 border border-gray-300 rounded-s-lg p-1 h-6 ">
            <svg class="w-2 h-2 text-gray hover:text-dark dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h16"/>
            </svg>
        </button>
        <input type="text" id="quantity-input" data-input-counter aria-describedby="helper-text-explanation" class="bg-gray-50 border-x-0 border-gray-300 h-6 text-center text-gray-900 text-sm block w-full py-2.5 dark:bg-gray-700" placeholder="0" required />
        <button type="button" id="increment-button" data-input-counter-increment="quantity-input" class="bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 hover:bg-gray-200 border border-gray-300 rounded-e-lg p-1 h-6 ">
            <svg class="w-3 h-3 text-gray hover:text-dark dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
            </svg>
                </button>
                </div>
                    </form>
                    </div>
            </div>
    </div>

    <!-- card 3 -->
    <div class="col-span-1">
    <div class="max-w-full">
                    <a href="{{url(('/detail'))}}"><img src="{{ asset('assets/img/pic_profile_order.svg') }}" alt="Pic" class="w-full h-auto"></a>
                    <div class="py-2">
                        <div class="flex flex-wrap justify-between">
                    <h1 class="text-white text-sm md:text-lg font-medium">Classic Polo Shirt</h1>
                    <div class=" w-10 md:w-20 flex pt-1">
                    <svg class="w-3.5 h-3.5 md:w-10 md:h-10 flex-1  text-white" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 384 512"><path d="M0 48C0 21.5 21.5 0 48 0l0 48V441.4l130.1-92.9c8.3-6 19.6-6 27.9 0L336 441.4V48H48V0H336c26.5 0 48 21.5 48 48V488c0 9-5 17.2-13 21.3s-17.6 3.4-24.9-1.8L192 397.5 37.9 507.5c-7.3 5.2-16.9 5.9-24.9 1.8S0 497 0 488V48z"/></svg>
                    <svg class="w-3.5 h-3.5 text-white flex-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    </div>
                    </div>
                    <p class="text-white text-[11px] md:text-xs font-light">Rp 128.000</p>
                    
                    <div class="flex">
                        <!-- size baju -->
                    <p class="text-white pt-2 text-xs">L</p>
                        <!-- pembatas -->
                    <p class="text-white text-2xl pl-1 pr-1 font-light">I</p>
                        <!-- warna baju -->
                    <p class="text-white pt-2 text-xs">Deep purple</p>
                    </div>
                    <form class="mt-2">
    <div class="relative flex items-center max-w-[5rem]">
        <button type="button" id="decrement-button" data-input-counter-decrement="quantity-input" class="bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 hover:bg-gray-200 border border-gray-300 rounded-s-lg p-1 h-6 ">
            <svg class="w-2 h-2 text-gray hover:text-dark dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h16"/>
            </svg>
        </button>
        <input type="text" id="quantity-input" data-input-counter aria-describedby="helper-text-explanation" class="bg-gray-50 border-x-0 border-gray-300 h-6 text-center text-gray-900 text-sm block w-full py-2.5 dark:bg-gray-700" placeholder="0" required />
        <button type="button" id="increment-button" data-input-counter-increment="quantity-input" class="bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 hover:bg-gray-200 border border-gray-300 rounded-e-lg p-1 h-6 ">
            <svg class="w-3 h-3 text-gray hover:text-dark dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
            </svg>
                </button>
                </div>
                    </form>
                    </div>
            </div>
    </div>

    <!-- card 4 -->
    <div class="col-span-1">
    <div class="max-w-full">
                    <a href="{{url(('/detail'))}}"><img src="{{ asset('assets/img/pic_profile_order.svg') }}" alt="Pic" class="w-full h-auto"></a>
                    <div class="py-2">
                        <div class="flex flex-wrap justify-between">
                    <h1 class="text-white text-sm md:text-lg font-medium">Classic Polo Shirt</h1>
                    <div class=" w-10 md:w-20 flex pt-1">
                    <svg class="w-3.5 h-3.5 md:w-10 md:h-10 flex-1  text-white" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 384 512"><path d="M0 48C0 21.5 21.5 0 48 0l0 48V441.4l130.1-92.9c8.3-6 19.6-6 27.9 0L336 441.4V48H48V0H336c26.5 0 48 21.5 48 48V488c0 9-5 17.2-13 21.3s-17.6 3.4-24.9-1.8L192 397.5 37.9 507.5c-7.3 5.2-16.9 5.9-24.9 1.8S0 497 0 488V48z"/></svg>
                    <svg class="w-3.5 h-3.5 text-white flex-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    </div>
                    </div>
                    <p class="text-white text-[11px] md:text-xs font-light">Rp 128.000</p>
                    
                    <div class="flex">
                        <!-- size baju -->
                    <p class="text-white pt-2 text-xs">L</p>
                        <!-- pembatas -->
                    <p class="text-white text-2xl pl-1 pr-1 font-light">I</p>
                        <!-- warna baju -->
                    <p class="text-white pt-2 text-xs">Deep purple</p>
                    </div>
                    <form class="mt-2">
    <div class="relative flex items-center max-w-[5rem]">
        <button type="button" id="decrement-button" data-input-counter-decrement="quantity-input" class="bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 hover:bg-gray-200 border border-gray-300 rounded-s-lg p-1 h-6 ">
            <svg class="w-2 h-2 text-gray hover:text-dark dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h16"/>
            </svg>
        </button>
        <input type="text" id="quantity-input" data-input-counter aria-describedby="helper-text-explanation" class="bg-gray-50 border-x-0 border-gray-300 h-6 text-center text-gray-900 text-sm block w-full py-2.5 dark:bg-gray-700" placeholder="0" required />
        <button type="button" id="increment-button" data-input-counter-increment="quantity-input" class="bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 hover:bg-gray-200 border border-gray-300 rounded-e-lg p-1 h-6 ">
            <svg class="w-3 h-3 text-gray hover:text-dark dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
            </svg>
                </button>
                </div>
                    </form>
                    </div>
            </div>
    </div>


    </div>

    <div class="border border-white w-full h-0"></div>

    <div class="p-6 pt-10 ">
    <h1 class="text-white text-lg lg:text-2xl">You Might Also Like</h1>
    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-2 pt-5">
    <div class="col-span-1">
                    <div class="max-w-full">
                    <a href="{{url(('/detail'))}}"><img src="{{ asset('assets/img/pic_profile_order.svg') }}" alt="Pic" class="w-full h-auto"></a>
                    <div class="py-2 flex">
                    <h1 class="text-white text-sm md:text-lg font-medium">Classic Polo Shirt.</h1>
                    <div></div>
                    <svg class="w-3.5 h-3.5 md:w-10 md:h-10 text-white" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 384 512"><path d="M0 48C0 21.5 21.5 0 48 0l0 48V441.4l130.1-92.9c8.3-6 19.6-6 27.9 0L336 441.4V48H48V0H336c26.5 0 48 21.5 48 48V488c0 9-5 17.2-13 21.3s-17.6 3.4-24.9-1.8L192 397.5 37.9 507.5c-7.3 5.2-16.9 5.9-24.9 1.8S0 497 0 488V48z"/></svg>
                    </div>
                    <p class="text-white text-[11px] md:text-xs font-light">Rp 128.000</p>
                    </div>
                    </div>
                    
                </div>
                <div class="col-span-1">
                    <div class="max-w-full">
                    <a href="{{url(('/detail'))}}"><img src="{{ asset('assets/img/pic_profile_order.svg') }}" alt="Pic" class="w-full h-auto"></a>
                    <div class="py-2">
                    <h1 class="text-white text-sm md:text-lg font-medium">Classic Polo Shirt</h1>
                    <p class="text-white text-[11px] md:text-xs font-light">Rp 128.000</p>
                    </div>
                    </div>
                </div>
                <div class="col-span-1">
                    <div class="max-w-full">
                    <a href="{{url(('/detail'))}}"><img src="{{ asset('assets/img/pic_profile_order.svg') }}" alt="Pic" class="w-full h-auto"></a>
                    <div class="py-2">
                    <h1 class="text-white text-sm md:text-lg font-medium">Classic Polo Shirt</h1>
                    <p class="text-white text-[11px] md:text-xs font-light">Rp 128.000</p>
                    </div>
                    </div>
                </div>
                <div class="col-span-1 md:hidden lg:block">
                    <div class="max-w-full">
                    <a href="{{url(('/detail'))}}"><img src="{{ asset('assets/img/pic_profile_order.svg') }}" alt="Pic" class="w-full h-auto"></a>
                    <div class="py-2">
                    <h1 class="text-white text-sm md:text-lg font-medium">Classic Polo Shirt</h1>
                    <div class=" w-10 md:w-20 pt-1">
                    <p class="text-white text-[11px] md:text-xs font-light">Rp 128.000</p>
                    </div>
                    </div>
                </div>
    </div>
</div>

    </div>
    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
        <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Dashboard tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
    </div>
</div>

</div>

@endsection