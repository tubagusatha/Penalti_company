@extends("layout.app")
@section("main")
<div class="bg-black text-center flex justify-center items-center h-[10vh]">
    <h1 class="text-white font-Futura font-medium text-2xl">A heart full of pride</h1>
    {{-- <div>
      <form class="pr-1 m-5" action="{{ url('/search/product') }}" method="GET">
          <label for="products-search" class="sr-only">Search</label>
          <div class="relative w-full mt-1 sm:w-full xl:w-full">
              <input type="text" name="search" id="products-search" class="bg-gray-900 border border-gray-300 text-white sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Search for products">
          </div>                
      </form>
  </div> --}}

</div>

<div id="indicators-carousel" class="relative w-full h-[90vh]" data-carousel="static">
    <!-- Carousel wrapper -->
    <div class="relative h-[90vh] overflow-hidden">

         <!-- Item 1 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
        <div class="absolute z-30 top-[40vh] text-center left-[32vw] md:top-[32vh]">
              <h1 class="text-[6vw] w-full text-white font-Font-Products">New Arrivals</h1>
              <button class="bg-white opacity-80 font-bold px-4 py-2 rounded-md">Shop now</button>
    </div>
            <img src="{{ asset('assets/img/landing1.png') }}" class="w-full object-cover  h-full" alt="...">
        </div>

        <!-- Item 2 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="" class="w-full" alt="..">
        </div>
        <!-- Item 3 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 4 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 5 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
    </div>
    <!-- Slider indicators -->
    <div id="slider" class="absolute z-30 flex -translate-x-1/2 space-x-3 rtl:space-x-reverse bottom-5 left-1/2">
        <button type="button" class="w-2 h-2 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
        <button type="button" class="w-2 h-2 bg-transparent rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
        <button type="button" class="w-2 h-2  rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
        <button type="button" class="w-2 h-2 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
        <button type="button" class="w-2 h-2 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
    </div>
    <!-- Slider controls -->
    <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
            </svg>
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
            </svg>
            <span class="sr-only">Next</span>
        </span>
    </button>
    
</div>


    @include('layout.nav')
<div class="w-full relative md:p-6 bg-black">
  <div class="relative overflow-hidden h-[80vh]">
    <img style="object-position: 65% 10%;" class="object-cover w-full h-full" src="{{ asset('assets/img/landing2.png') }}" alt="">
    <div class="absolute z-20 top-[36vh]  left-[7vw] md:top-[35vh]">
              <h1 class="text-[4vw] sm:text-[3vw] lg:text-[3vw] xl:text-[2vw] sm:w-[600px] w-[325px] max-w-[60vw]  uppercase text-white font-Font-Products">Striped jacquard t-shirt x casa josephine</h1>
              <button class="bg-white font-bold opacity-80 px-4 py-2 rounded-md">Shop now</button>
    </div>
  </div>
</div>

<div class="w-full px-10 p-6 h-min bg-black">
  <div class="block md:flex md:gap-32">
    @foreach ($products as $product)
    @if ($product->show_products == true)
    <div class="relative w-full mb-12 md:mb-0">
      <a href="{{url("/detail/$product->id")}}"> <img class="w-full" src="{{$product->gallery()->exists() ? ($product->gallery->first()->url_image) : 'data:image/gif;base64,R0lGODlhAQABAIAAAMLCwgAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==' }}" alt="">
      <h1 class="text-white mb-1 mt-4 font-semibold text-3xl">{{$product->name_products}}</h1>

      <p class="text-white  mb-3 text-xl">{{number_format($product->prices_products)}}</p>
      <button class="px-3 text-sm  py-2 font-semibold rounded-md border border-white text-dark hover:text-white bg-white hover:bg-black">Shop Now</button>
    </a>
    </div>
    @else
    @endif
    @endforeach
  </div>
</div>

<div class="w-full bg-black  h-min p-0 md:p-6 px-10">
  <div class="h-[80vh] overflow-hidden w-full">
    <img style="object-position: 65% 10%;" class="object-cover mb-6 h-full w-full" src="{{ asset('assets/img/landing3.png') }}" alt="">
  </div>
  <div class=" mt-6 flex-col pb-6 flex items-center justify-center">
    <h1 class=" text-white mb-3 text-center uppercase font-Font-Products  text-3xl">Striped jacquard t-shirt x <br>casa josephine</h1>
    <button class="px-3 text-sm  py-2 font-semibold rounded-md border border-white text-dark hover:text-white bg-white hover:bg-black"><a class="" href="{{url(('/payment_detail'))}}">Shop now</a></button>
    </div>
</div>

<div class="  h-min p-6 px-10">
  <div class="">
  <h1 class="text-2xl mb-8 mt-5 ml-3 font-bold">Most Wanted</h1>
  <div class="w-full flex mb-5 justify-center items-center">
    <button class="relative">
      <img class="" src="{{ asset('assets/img/Button-baju.svg')}}" alt="">
      <img class="absolute right-[50px]" src="{{ asset('assets/img/segitiga.svg')}}" alt="">
    </button>
    <button><img src="{{ asset('assets/img/Button-celana.svg')}}" alt=""></button>
  </div>
  <div class="flex flex-wrap gap-2 md:mt-0 mb-3 justify-evenly items-center">
    <div class="relative w-[302px] md:mt-0 mb-3">
    <button><img class="absolute bottom-[80px] right-[150px]" src="{{ asset('assets/img/plus.svg')}}" alt=""></button>
      <img src="{{ asset('assets/img/baju.png') }}" alt="">
      <h1 class="font-semibold mt-2 text-[2vw] sm:text-[1vw] md:text-[1vw]">Regular Fit Jacquard-knit Polo Shirt</h1>
      <p class="font-semibold">Rp 130.000</p>
      <button class="absolute mr-1 right-0 mt-1 md:right-[20px]  bottom-[10px]"><img class="w-[5vw] sm:w-[3vw] md:w-[2vw] lg:w-[2vw] xl:w-[1.5vw] 2xl:w-[1.5vw]" src="{{ asset('assets/img/vectorsave-black.svg') }}" alt=""></button>
    </div>
    <div class="relative w-[302px] md:mt-0 mb-3">
    <button><img class="absolute bottom-[80px] right-[150px] " src="{{ asset('assets/img/plus.svg')}}" alt=""></button>
      <img src="{{ asset('assets/img/baju.png') }}" alt="">
      <h1 class="font-semibold mt-2 text-[2vw] sm:text-[1vw] md:text-[1vw]">Regular Fit Jacquard-knit Polo Shirt</h1>
      <p class="font-semibold">Rp 130.000</p>
      <button class="absolute mr-1 right-0 mt-1 md:right-[20px]  bottom-[10px]"><img class="w-[5vw] sm:w-[3vw] md:w-[2vw] lg:w-[2vw] xl:w-[1.5vw] 2xl:w-[1.5vw]" src="{{ asset('assets/img/vectorsave-black.svg') }}" alt=""></button>
    </div>
    <div class="relative w-[302px] md:mt-0 mb-3">
    <button><img class="absolute bottom-[80px] right-[150px]" src="{{ asset('assets/img/plus.svg')}}" alt=""></button>
      <img src="{{ asset('assets/img/baju.png') }}" alt="">
      <h1 class="font-semibold mt-2 text-[2vw] sm:text-[1vw] md:text-[1vw]">Regular Fit Jacquard-knit Polo Shirt</h1>
      <p class="font-semibold">Rp 130.000</p>
      <button class="absolute mr-1 right-0 mt-1 md:right-[20px]  bottom-[10px]"><img class="w-[5vw] sm:w-[3vw] md:w-[2vw] lg:w-[2vw] xl:w-[1.5vw] 2xl:w-[1.5vw]" src="{{ asset('assets/img/vectorsave-black.svg') }}" alt=""></button>
    </div>
    <div class="relative w-[302px] md:mt-0 mb-3">
    <button><img class="absolute bottom-[80px] mt-1 right-[150px]" src="{{ asset('assets/img/plus.svg')}}" alt=""></button>
      <img src="{{ asset('assets/img/baju.png') }}" alt="">
      <h1 class="font-semibold mt-2 text-[2vw] sm:text-[1vw] md:text-[1vw]">Regular Fit Jacquard-knit Polo Shirt</h1>
      <p class="font-semibold">Rp 130.000</p>
      <button class="absolute mr-1 right-0 md:right-[20px]  bottom-[10px]"><img class="w-[5vw] sm:w-[3vw] md:w-[2vw] lg:w-[2vw] xl:w-[1.5vw] 2xl:w-[1.5vw]" src="{{ asset('assets/img/vectorsave-black.svg') }}" alt=""></button>
    </div>
  </div>
  </div>
</div>

@include('components.footer')




@endsection
