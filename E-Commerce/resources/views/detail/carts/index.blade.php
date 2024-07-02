@extends('layout.app')
@extends('layout.nav')

@section('main')

<style>
 





@media (min-width: 640px) { /* Ukuran layar SM */
  
}

@media (min-width: 768px) { /* Ukuran layar MD */
  
}

@media (min-width: 1024px) { /* Ukuran layar LG */
    .lg\:text-lg {
  font-size: 16px; /* or any other size you want */
}
}

@media (min-width: 1280px) { /* Ukuran layar XL */
    .xl\:text-xl {
    font-size: 18px;
  padding-top: 6px; /* or any other size you want */
    }
    .xl\:text-2xl {
    font-size: 26px;
    }

    .xl\:w-22{
        width: 80px;
    }/* or any other size you want */

    .xl\:h-10{
        height: 28px;
    }/* or any other size you want */
}

</style>


<div class="bg-dark">


<div class="pt-5">
    <ul class="flex flex-wrap text-sm md:text- text-white font-medium text-center mx-5" id="carts_home" data-tabs-toggle="#carts_home" role="tablist">
        <li class="me-1 w-full flex-1" role="presentation">
            <button class="inline-block p-4 border-b-2 rounded-t-lg md:text-lg w-[70%]" id="profile-tab" data-tabs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Keranjang (1)</button>
        </li>
        <li class="ms-1 w-full flex-1" role="presentation">
            <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 md:text-lg w-[70%]" id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab" aria-controls="dashboard" aria-selected="false">Favorite (2)</button>
        </li>
    </ul>
</div>



<div class="pt-2" id="carts_home">
    <div id="profile" role="tabpanel" aria-labelledby="profile-tab">

    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-3 px-6 ">

    <!-- card 1 -->
    <div class="col-span-1">
    <div class="max-w-full pt-5">
                    <a href="{{url(('/detail'))}}"><img src="{{ asset('assets/img/pic_profile_order.svg') }}" alt="Pic" class="w-full h-auto"></a>
                    <div class="py-2">
                        <div class="flex flex-wrap justify-between">
                    <h1 class="text-white text-sm md:text-lg lg:text-xl xl:text-2xl font-medium">Classic Polo Shirt</h1>
                    <div class=" w-10 md:w-20 lg:w-28  flex pt-1">
                    <svg class="w-4 lg:w-10 h-4 lg:h-10 flex-1  text-white" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 384 512"><path d="M0 48C0 21.5 21.5 0 48 0l0 48V441.4l130.1-92.9c8.3-6 19.6-6 27.9 0L336 441.4V48H48V0H336c26.5 0 48 21.5 48 48V488c0 9-5 17.2-13 21.3s-17.6 3.4-24.9-1.8L192 397.5 37.9 507.5c-7.3 5.2-16.9 5.9-24.9 1.8S0 497 0 488V48z"/></svg>
                    <svg class="w-4 lg:w-10 h-4 lg:h-10 text-white flex-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    </div>
                    </div>
                    <p class="text-white text-[11px] md:text-sm lg:text-lg xl:text-xl font-light">Rp 128.000</p>
                    
                    <div class="flex">
                        <!-- size baju -->
                    <p class="text-white pt-2 text-xs md:text-sm">L</p>
                        <!-- pembatas -->
                    <p class="text-white text-2xl md:text-3xl pl-1 pr-1 font-light">I</p>
                        <!-- warna baju -->
                    <p class="text-white pt-2 text-xs md:text-sm">Deep purple</p>
                    </div>
                    <div class="flex justify-between">
                        <form class="mt-4">
                            <div class="relative flex items-center max-w-[8rem]">
                                <button type="button" id="decrement-button" data-input-counter-decrement="quantity-input" class="bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 hover:bg-gray-200 border border-gray-300 rounded-l-lg p-2 h-8 focus:ring-gray-100 dark:focus:ring-gray-700 focus:ring-2 focus:outline-none transition duration-150 ease-in-out">
                                    <svg class="w-4 h-4 text-gray-900 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h16"/>
                                    </svg>
                                </button>
                                <input type="text" id="quantity-input" data-input-counter aria-describedby="helper-text-explanation" class="bg-gray-50 border-x-0 border-gray-300 h-8 text-center text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full py-1.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="0" required />
                                <button type="button" id="increment-button" data-input-counter-increment="quantity-input" class="bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 hover:bg-gray-200 border border-gray-300 rounded-r-lg p-2 h-8 focus:ring-gray-100 dark:focus:ring-gray-700 focus:ring-2 focus:outline-none transition duration-150 ease-in-out">
                                    <svg class="w-4 h-4 text-gray-900 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                                    </svg>
                                </button>
                            </div>
                        </form>
                        
                        <script>
                            document.getElementById('decrement-button').addEventListener('click', function() {
                                const input = document.getElementById('quantity-input');
                                let value = parseInt(input.value) || 0;
                                if (value > 0) {
                                    input.value = value - 1;
                                }
                            });
                        
                            document.getElementById('increment-button').addEventListener('click', function() {
                                const input = document.getElementById('quantity-input');
                                let value = parseInt(input.value) || 0;
                                input.value = value + 1;
                            });
                        </script>
            <a href="#" class="text-dark text-xs text-center flex justify-center items-center font-Font-Products bg-white h-6 xl:h-10 w-16 xl:w-20 mt-2 border-white rounded-lg">
                        Buy
                    </a>
                    </div>
                    </div>
            </div>
    </div>

    <!-- card 2 -->
    <div class="col-span-1">
    <div class="max-w-full pt-5">
                    <a href="{{url(('/detail'))}}"><img src="{{ asset('assets/img/pic_profile_order.svg') }}" alt="Pic" class="w-full h-auto"></a>
                    <div class="py-2">
                        <div class="flex flex-wrap justify-between">
                    <h1 class="text-white text-sm md:text-lg lg:text-xl xl:text-2xl font-medium">Classic Polo Shirt</h1>
                    <div class=" w-10 md:w-20 lg:w-28  flex pt-1">
                    <svg class="w-4 lg:w-10 h-4 lg:h-10 flex-1  text-white" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 384 512"><path d="M0 48C0 21.5 21.5 0 48 0l0 48V441.4l130.1-92.9c8.3-6 19.6-6 27.9 0L336 441.4V48H48V0H336c26.5 0 48 21.5 48 48V488c0 9-5 17.2-13 21.3s-17.6 3.4-24.9-1.8L192 397.5 37.9 507.5c-7.3 5.2-16.9 5.9-24.9 1.8S0 497 0 488V48z"/></svg>
                    <svg class="w-4 lg:w-10 h-4 lg:h-10 text-white flex-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    </div>
                    </div>
                    <p class="text-white text-[11px] md:text-sm lg:text-lg xl:text-xl
                    font-light">Rp 128.000</p>
                    
                    <div class="flex">
                        <!-- size baju -->
                    <p class="text-white pt-2 text-xs md:text-sm">L</p>
                        <!-- pembatas -->
                    <p class="text-white text-2xl md:text-3xl pl-1 pr-1 font-light">I</p>
                        <!-- warna baju -->
                    <p class="text-white pt-2 text-xs md:text-sm">Deep purple</p>
                    </div>
                    <div class="flex justify-between">
                    <form class="mt-2">
        <div class="relative flex items-center max-w-[5rem]">
            <button type="button" id="decrement-button"  class="bg-white dark:bg-white dark:hover:bg-white dark:border-white hover:bg-white border border-white rounded-s-lg p-1 h-6 active:bg-gray-200">
                <svg class="w-2 h-2 text-gray hover:text-dark dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h16"/>
                </svg>
            </button>
            <input type="text" id="quantity-input"  class="bg-white border-white h-6 text-center text-black text-sm block w-full font-Font-Products py-2.5 dark:bg-white" placeholder="0" readonly required />
            <button type="button" id="increment-button" class="bg-white dark:bg-white dark:hover:bg-white dark:border-white hover:bg-white border border-white rounded-e-lg p-1 h-6 active:bg-gray-200">
                <svg class="w-3 h-3 text-gray hover:text-dark dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                </svg>
            </button>
        </div>
    </form>
        <a href="#" class="text-dark text-xs text-center flex justify-center items-center font-Font-Products bg-white h-6 xl:h-10 w-16 xl:w-20 mt-2 border-white rounded-lg">
                        Buy
                    </a>
                    </div>
                    </div>
            </div>
    </div>

    <!-- card 3 -->
    <div class="col-span-1">
    <div class="max-w-full pt-5">
                    <a href="{{url(('/detail'))}}"><img src="{{ asset('assets/img/pic_profile_order.svg') }}" alt="Pic" class="w-full h-auto"></a>
                    <div class="py-2">
                        <div class="flex flex-wrap justify-between">
                    <h1 class="text-white text-sm md:text-lg lg:text-xl xl:text-2xl font-medium">Classic Polo Shirt</h1>
                    <div class=" w-10 md:w-20 lg:w-28  flex pt-1">
                    <svg class="w-4 lg:w-10 h-4 lg:h-10 flex-1  text-white" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 384 512"><path d="M0 48C0 21.5 21.5 0 48 0l0 48V441.4l130.1-92.9c8.3-6 19.6-6 27.9 0L336 441.4V48H48V0H336c26.5 0 48 21.5 48 48V488c0 9-5 17.2-13 21.3s-17.6 3.4-24.9-1.8L192 397.5 37.9 507.5c-7.3 5.2-16.9 5.9-24.9 1.8S0 497 0 488V48z"/></svg>
                    <svg class="w-4 lg:w-10 h-4 lg:h-10 text-white flex-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    </div>
                    </div>
                    <p class="text-white text-[11px] md:text-sm lg:text-lg xl:text-xl font-light" >Rp 128.000</p>
                    
                    <div class="flex">
                        <!-- size baju -->
                    <p class="text-white pt-2 text-xs md:text-sm">L</p>
                        <!-- pembatas -->
                    <p class="text-white text-2xl md:text-3xl pl-1 pr-1 font-light">I</p>
                        <!-- warna baju -->
                    <p class="text-white pt-2 text-xs md:text-sm">Deep purple</p>
                    </div>
                    <div class="flex justify-between">
                    <form class="mt-2">
        <div class="relative flex items-center max-w-[5rem]">
            <button type="button" id="decrement-button"  class="bg-white dark:bg-white dark:hover:bg-white dark:border-white hover:bg-white border border-white rounded-s-lg p-1 h-6 active:bg-gray-200">
                <svg class="w-2 h-2 text-gray hover:text-dark dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h16"/>
                </svg>
            </button>
            <input type="text" id="quantity-input"  class="bg-white border-white h-6 text-center text-black text-sm block w-full font-Font-Products py-2.5 dark:bg-white" placeholder="0" readonly required />
            <button type="button" id="increment-button" class="bg-white dark:bg-white dark:hover:bg-white dark:border-white hover:bg-white border border-white rounded-e-lg p-1 h-6 active:bg-gray-200">
                <svg class="w-3 h-3 text-gray hover:text-dark dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                </svg>
            </button>
        </div>
    </form>
        <a href="#" class="text-dark text-xs text-center flex justify-center items-center font-Font-Products bg-white h-6 xl:h-10 w-16 xl:w-20 mt-2 border-white rounded-lg">
                        Buy
                    </a>
                    </div>
                    </div>
            </div>
    </div>

    <!-- card 4 -->
    <!-- <div class="col-span-1">
    <div class="max-w-full pt-5">
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
                    <p class="text-white text-[11px] md:text-sm font-light">Rp 128.000</p>
                    
                    <div class="flex">
                        size baju 
                    <p class="text-white pt-2 text-xs md:text-sm">L</p>
                        pembatas 
                    <p class="text-white text-2xl pl-1 pr-1 font-light">I</p>
                        warna baju 
                    <p class="text-white pt-2 text-xs md:text-sm">Deep purple</p>
                    </div>

                    <div class="flex justify-between">
                    <form class="mt-2">
        <div class="relative flex items-center max-w-[5rem]">
            <button type="button" id="decrement-button"  class="bg-white dark:bg-white dark:hover:bg-white dark:border-white hover:bg-white border border-white rounded-s-lg p-1 h-6 active:bg-gray-200">
                <svg class="w-2 h-2 text-gray hover:text-dark dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h16"/>
                </svg>
            </button>
            <input type="text" id="quantity-input"  class="bg-white border-white h-6 text-center text-black text-sm block w-full font-Font-Products py-2.5 dark:bg-white" placeholder="0" readonly required />
            <button type="button" id="increment-button" class="bg-white dark:bg-white dark:hover:bg-white dark:border-white hover:bg-white border border-white rounded-e-lg p-1 h-6 active:bg-gray-200">
                <svg class="w-3 h-3 text-gray hover:text-dark dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                </svg>
            </button>
        </div>
    </form>
                    <button class="text-dark text-xs font-Font-Products bg-white h-6 w-16 mt-2 border-white rounded-lg">
                        Buy
                    </button>
                    </div>
    </div>
    </div>
    </div> -->


    </div>

    <div class="border border-white w-full h-0"></div>



    <!-- Your Might Also like -->

    <h1 class="text-white text-lg lg:text-2xl pt-6 ps-6">You Might Also Like</h1>


    <!-- <div class="flex justify-center">
    <div class="container">
      <div class="slider-wrapper">
        <button id="prev-slide" class="slide-button material-symbols-rounded">
          chevron_left
        </button>
        <ul class="image-list">
          <img src="" style="width: 325px;" alt="img-1" />
          <img class="w-1000" src="{{ asset('assets/img/pic_profile_order.svg') }}" alt="img-2" />
          <img style="width: 325px;" class="w-full h-auto" src="{{ asset('assets/img/pic_profile_order.svg') }}" alt="img-3" />
          <img style="width: 325px;" class="w-full h-auto" src="{{ asset('assets/img/pic_profile_order.svg') }}" alt="img-4" />
          <img style="width: 325px;" class="w-full h-auto" src="{{ asset('assets/img/pic_profile_order.svg') }}" alt="img-5" />
          <img style="width: 325px;" class="w-full h-auto" src="{{ asset('assets/img/pic_profile_order.svg') }}" alt="img-6" />
          <img style="width: 325px;" class="w-full h-auto" src="{{ asset('assets/img/pic_profile_order.svg') }}" alt="img-7" />
          <img style="width: 325px;" class="w-full h-auto" src="{{ asset('assets/img/pic_profile_order.svg') }}" alt="img-8" />
          <img style="width: 325px;" class="w-full h-auto" src="{{ asset('assets/img/pic_profile_order.svg') }}" alt="img-9" />
          <img style="width: 325px;" class="w-full h-auto" src="{{ asset('assets/img/pic_profile_order.svg') }}" alt="img-10" />
        </ul>
        <button id="next-slide" class="slide-button material-symbols-rounded">
          chevron_right
        </button>
      </div>
      
      <div class="slider-scrollbar">
        <div class="scrollbar-track">
          <div class="scrollbar-thumb"></div>
        </div>
      </div>
    </div> -->
    <!-- <script>
        const initSlider = () => {
    const imageList = document.querySelector(".slider-wrapper .image-list");
    const slideButtons = document.querySelectorAll(".slider-wrapper .slide-button");
    const sliderScrollbar = document.querySelector(".container .slider-scrollbar");
    const scrollbarThumb = sliderScrollbar.querySelector(".scrollbar-thumb");
    const maxScrollLeft = imageList.scrollWidth - imageList.clientWidth;
    
    // Handle scrollbar thumb drag
    scrollbarThumb.addEventListener("mousedown", (e) => {
        const startX = e.clientX;
        const thumbPosition = scrollbarThumb.offsetLeft;
        const maxThumbPosition = sliderScrollbar.getBoundingClientRect().width - scrollbarThumb.offsetWidth;
        
        // Update thumb position on mouse move
        const handleMouseMove = (e) => {
            const deltaX = e.clientX - startX;
            const newThumbPosition = thumbPosition + deltaX;

            // Ensure the scrollbar thumb stays within bounds
            const boundedPosition = Math.max(0, Math.min(maxThumbPosition, newThumbPosition));
            const scrollPosition = (boundedPosition / maxThumbPosition) * maxScrollLeft;
            
            scrollbarThumb.style.left = `${boundedPosition}px`;
            imageList.scrollLeft = scrollPosition;
        }

        // Remove event listeners on mouse up
        const handleMouseUp = () => {
            document.removeEventListener("mousemove", handleMouseMove);
            document.removeEventListener("mouseup", handleMouseUp);
        }

        // Add event listeners for drag interaction
        document.addEventListener("mousemove", handleMouseMove);
        document.addEventListener("mouseup", handleMouseUp);
    });

    // Slide images according to the slide button clicks
    slideButtons.forEach(button => {
        button.addEventListener("click", () => {
            const direction = button.id === "prev-slide" ? -1 : 1;
            const scrollAmount = imageList.clientWidth * direction;
            imageList.scrollBy({ left: scrollAmount, behavior: "smooth" });
        });
    });

     // Show or hide slide buttons based on scroll position
    const handleSlideButtons = () => {
        slideButtons[0].style.display = imageList.scrollLeft <= 0 ? "none" : "flex";
        slideButtons[1].style.display = imageList.scrollLeft >= maxScrollLeft ? "none" : "flex";
    }

    // Update scrollbar thumb position based on image scroll
    const updateScrollThumbPosition = () => {
        const scrollPosition = imageList.scrollLeft;
        const thumbPosition = (scrollPosition / maxScrollLeft) * (sliderScrollbar.clientWidth - scrollbarThumb.offsetWidth);
        scrollbarThumb.style.left = `${thumbPosition}px`;
    }

    // Call these two functions when image list scrolls
    imageList.addEventListener("scroll", () => {
        updateScrollThumbPosition();
        handleSlideButtons();
    });
}

window.addEventListener("resize", initSlider);
window.addEventListener("load", initSlider);

    </script> -->
    <!-- </div> -->
    </div>


    
</div>

        <!--  -->
        <!--  -->
        <!--  -->
        <!--  -->
    <!-- Favorite -->
        <!--  -->
        <!--  -->
        <!--  -->
        <!--  -->


<div class="hidden rounded-lg bg-dark dark:bg-gray-800" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">

        
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-3 px-6 ">

<!-- card 1 -->
<div class="col-span-1">
<div class="max-w-full pt-5">
                <a href="{{url(('/detail'))}}"><img src="{{ asset('assets/img/pic_profile_order.svg') }}" alt="Pic" class="w-full h-auto"></a>
                <div class="py-2">
                    <div class="flex flex-wrap justify-between">
                <h1 class="text-white text-sm md:text-lg lg:text-xl xl:text-2xl font-medium">Classic Polo Shirt</h1>
                <div class=" w-10 md:w-20 lg:w-28  flex pt-1">
                <svg class="w-4 lg:w-10 h-4 lg:h-10 flex-1  text-white" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 384 512"><path d="M0 48V487.7C0 501.1 10.9 512 24.3 512c5 0 9.9-1.5 14-4.4L192 400 345.7 507.6c4.1 2.9 9 4.4 14 4.4c13.4 0 24.3-10.9 24.3-24.3V48c0-26.5-21.5-48-48-48H48C21.5 0 0 21.5 0 48z"/></svg>
                <svg class="w-4 lg:w-10 h-4 lg:h-10 text-white flex-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
                </div>
                </div>
                <p class="text-white text-[11px] md:text-sm lg:text-lg xl:text-xl font-light">Rp 128.000</p>
                
                <div class="flex">
                    <!-- size baju -->
                <p class="text-white pt-2 text-xs md:text-sm">L</p>
                    <!-- pembatas -->
                <p class="text-white text-2xl md:text-3xl pl-1 pr-1 font-light">I</p>
                    <!-- warna baju -->
                <p class="text-white pt-2 text-xs md:text-sm">Deep purple</p>
                </div>
                <div class="flex justify-between">
                
        
                </div>
                </div>
        </div>
</div>

<!-- card 2 -->
<div class="col-span-1">
<div class="max-w-full pt-5">
                <a href="{{url(('/detail'))}}"><img src="{{ asset('assets/img/pic_profile_order.svg') }}" alt="Pic" class="w-full h-auto"></a>
                <div class="py-2">
                    <div class="flex flex-wrap justify-between">
                <h1 class="text-white text-sm md:text-lg lg:text-xl xl:text-2xl font-medium">Classic Polo Shirt</h1>
                <div class=" w-10 md:w-20 lg:w-28  flex pt-1">
                <svg class="w-4 lg:w-10 h-4 lg:h-10 flex-1  text-white" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 384 512"><path d="M0 48V487.7C0 501.1 10.9 512 24.3 512c5 0 9.9-1.5 14-4.4L192 400 345.7 507.6c4.1 2.9 9 4.4 14 4.4c13.4 0 24.3-10.9 24.3-24.3V48c0-26.5-21.5-48-48-48H48C21.5 0 0 21.5 0 48z"/></svg>
                <svg class="w-4 lg:w-10 h-4 lg:h-10 text-white flex-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
                </div>
                </div>
                <p class="text-white text-[11px] md:text-sm lg:text-lg xl:text-xl
                font-light">Rp 128.000</p>
                
                <div class="flex">
                    <!-- size baju -->
                <p class="text-white pt-2 text-xs md:text-sm">L</p>
                    <!-- pembatas -->
                <p class="text-white text-2xl md:text-3xl pl-1 pr-1 font-light">I</p>
                    <!-- warna baju -->
                <p class="text-white pt-2 text-xs md:text-sm">Deep purple</p>
                </div>
                <div class="flex justify-between">
                
    
                </div>
                </div>
        </div>
</div>

<!-- card 3 -->
<div class="col-span-1">
<div class="max-w-full pt-5">
                <a href="{{url(('/detail'))}}"><img src="{{ asset('assets/img/pic_profile_order.svg') }}" alt="Pic" class="w-full h-auto"></a>
                <div class="py-2">
                    <div class="flex flex-wrap justify-between">
                <h1 class="text-white text-sm md:text-lg lg:text-xl xl:text-2xl font-medium">Classic Polo Shirt</h1>
                <div class=" w-10 md:w-20 lg:w-28  flex pt-1">
                <svg class="w-4 lg:w-10 h-4 lg:h-10 flex-1  text-white" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 384 512"><path d="M0 48V487.7C0 501.1 10.9 512 24.3 512c5 0 9.9-1.5 14-4.4L192 400 345.7 507.6c4.1 2.9 9 4.4 14 4.4c13.4 0 24.3-10.9 24.3-24.3V48c0-26.5-21.5-48-48-48H48C21.5 0 0 21.5 0 48z"/></svg>
                <svg class="w-4 lg:w-10 h-4 lg:h-10 text-white flex-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
                </div>
                </div>
                <p class="text-white text-[11px] md:text-sm lg:text-lg xl:text-xl font-light" >Rp 128.000</p>
                
                <div class="flex">
                    <!-- size baju -->
                <p class="text-white pt-2 text-xs md:text-sm">L</p>
                    <!-- pembatas -->
                <p class="text-white text-2xl md:text-3xl pl-1 pr-1 font-light">I</p>
                    <!-- warna baju -->
                <p class="text-white pt-2 text-xs md:text-sm">Deep purple</p>
                </div>
                <div class="flex justify-between">
                
    
                </div>
                </div>
        </div>
</div>

<!-- card 4 -->
<!-- <div class="col-span-1">
<div class="max-w-full pt-5">
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
                <p class="text-white text-[11px] md:text-sm font-light">Rp 128.000</p>
                
                <div class="flex">
                    size baju 
                <p class="text-white pt-2 text-xs md:text-sm">L</p>
                    pembatas 
                <p class="text-white text-2xl pl-1 pr-1 font-light">I</p>
                    warna baju 
                <p class="text-white pt-2 text-xs md:text-sm">Deep purple</p>
                </div>

                <div class="flex justify-between">
                <form class="mt-2">
    <div class="relative flex items-center max-w-[5rem]">
        <button type="button" id="decrement-button"  class="bg-white dark:bg-white dark:hover:bg-white dark:border-white hover:bg-white border border-white rounded-s-lg p-1 h-6 active:bg-gray-200">
            <svg class="w-2 h-2 text-gray hover:text-dark dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h16"/>
            </svg>
        </button>
        <input type="text" id="quantity-input"  class="bg-white border-white h-6 text-center text-black text-sm block w-full font-Font-Products py-2.5 dark:bg-white" placeholder="0" readonly required />
        <button type="button" id="increment-button" class="bg-white dark:bg-white dark:hover:bg-white dark:border-white hover:bg-white border border-white rounded-e-lg p-1 h-6 active:bg-gray-200">
            <svg class="w-3 h-3 text-gray hover:text-dark dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
            </svg>
        </button>
    </div>
</form>
                <button class="text-dark text-xs font-Font-Products bg-white h-6 w-16 mt-2 border-white rounded-lg">
                    Buy
                </button>
                </div>
</div>
</div>
</div> -->


</div>

<div class="border border-white w-full h-0"></div>



<!-- Your Might Also like -->

<h1 class="text-white text-lg lg:text-2xl pt-6 ps-6">You Might Also Like</h1>




</div>
        </div>
    </div>
</div>








@endsection