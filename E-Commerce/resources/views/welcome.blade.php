@extends("layout.app")
@section("main")
<div class="bg-black text-center flex justify-center items-center h-[10vh]">
    <h1 class="text-white font-Futura font-medium text-2xl">A heart full of pride</h1>
</div>
<div id="indicators-carousel" class="relative w-full h-[90vh]" data-carousel="static">
    <!-- Carousel wrapper -->
    <div class="relative h-[90vh] overflow-hidden">

         <!-- Item 1 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
            <img src="{{ asset('assets/img/landing1.png') }}" class="w-full object-cover  h-full" alt="...">
        </div>

        <!-- Item 2 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="/components/image 11.jpg" class="w-full" alt="..">
        </div>
        <!-- Item 3 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="/components/image333.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 4 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="/components/image 11.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 5 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="/components/image333.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
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
    <div class="absolute z-30 top-[40vh] text-center left-[32vw] md:top-[32vh]">
              <h1 class="text-[6vw] w-full text-white font-Font-Products">New Arrivals</h1>
              <button class="bg-white opacity-80 font-bold px-4 py-2 rounded-md">Shop now</button>
    </div>
</div>


<nav class="bg-black  w-full z-30 sticky top-0 start-0 ">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
  <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
      <span class="self-center mr-1 sm:mr-0 text-xl font-Font-Products font-bold whitespace-nowrap text-white">Pinalti Company</span>
  </a>
  <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
    <div class="gap-1 sm:gap-6 sm:flex flex">
      @guest
    <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" type="button" class="text-white font-F  ont-Products bg-black border border-white font-medium rounded-lg text-sm px-2 sm:px-4 py-2 text-center"><a >Login</a></button>
    <button data-modal-target="modal-register" data-modal-toggle="modal-register" type="button" class="text-black bg-white font-Font-Products font-medium rounded-lg text-sm px-2 sm:px-4  py-2 text-center"><a>Sign up</a></button>
    @else
    <h1>terlogin</h1>
    @endguest 
    </div>
      <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
        </svg>
    </button>
  </div>
  <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
    <ul class="flex flex-col  p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-black md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0  ">
      <li>
        <a href="#" class="block py-2 px-3 text-white rounded md:bg-transparent md:p-0 " aria-current="page">Home</a>
      </li>
      <li>
        <a href="#" class="block py-2 px-3 text-white rounded md:bg-transparent  md:p-0">Tshirt</a>
      </li>
      <li>
        <a href="#" class="block py-2 px-3 text-white rounded md:bg-transparent  md:p-0">Shirt</a>
      </li>
      <li>
        <a href="#" class="block py-2 px-3 text-white rounded md:bg-transparent  md:p-0">Pants</a>
      </li>
      <li>
        <a href="#" class="block py-2 px-3 text-white rounded md:bg-transparent  md:p-0">Accessories</a>
      </li>
    </ul>
  </div>
  </div>
</nav>

<div id="modal-register" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden transition duration-300 ease-in-out fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full  max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-[#151515] p-12 rounded-lg shadow ">
        <div class="">
        <h1 class=" text-center font-bold text-3xl mb-8 text-white">Sign Up</h1>
        <div>
          <a href="flex items-center">
            <div class="px-6 sm:px-0 max-w-sm">
    <button type="button" class=" w-full  bg-white hover:bg-[#4285F4]/90 focus:ring-4 focus:outline-none focus:ring-[#4285F4]/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center justify-between mr-2 mb-2"><img class="w-4 h-4 mr-1" src="{{ asset('assets/img/google-icon.svg') }}" alt=""> Sign up with Google<div></div></button>
</div>

<div class="flex mt-3 justify-center  items-center">
  <div class="border mr-3 w-1/2"></div>
  <h1 class="text-white  text-sm">OR</h1>
  <div class="border ml-3 w-1/2"></div>
</div>
</a>
        </div>
</div>
            <!-- Modal header -->
            <div class="flex items-center justify-center   rounded-t dark:border-gray-600">

                <!-- <button type="button" class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="authentication-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button> -->
            </div>
            <!-- Modal body -->
            <div class="">
                <form method="POST" class="space-y-4" action="{{ route('register') }}">
                  @csrf
                  <div class="w-full gap-3 flex">
                    <div>
                    <label for="firstname" class="block mb-2 text-sm font-medium text-white">First Name</label>
                    <input type="text" name="firstname" id="firstname" class="bg-transparent bg-[#464646] text-white text-sm block w-full p-2" placeholder="First Name">
                    </div>
                    <div>
                    <label for="lastname" class="block mb-2 text-sm font-medium text-white">Last Name</label>
                    <input type="text" name="lastname" id="lastname" class="bg-transparent bg-[#464646] text-white text-sm block w-full p-2" placeholder="Last Name">
                    </div>
                  </div>
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-white">Email Address</label>
                        <input type="email" name="email" id="email" class=" bg-transparent text-white text-sm block w-full p-2" placeholder="Your Email" required />
                    </div>
                    <div>
                      <label class="block mb-2 text-sm font-medium text-white" for="number">Mobile Number</label>
                      <input type="text" name="number" id="number" class=" bg-transparent text-white text-sm block w-full p-2" placeholder="Your Email" required />
                    </div>
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-white">Password</label>
                        <input type="password" name="password" id="password" placeholder="••••••••" class=" bg-transparent bg-[#464646] text-white text-sm block w-full p-2 " required />
                    </div>
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-white">Verifikasi Password</label>
                        <input type="password" name="password" id="password" placeholder="••••••••" class=" bg-transparent text-white text-sm block w-full p-2 " required />
                    </div>
                    <div class="w-full text-center">
                    <button type="submit" class=" bg-white  font-medium rounded-sm text-sm px-5 py-2 text-center">Create an account</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> 

<!-- Main modal -->
<div id="authentication-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden transition duration-300 ease-in-out fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full  max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-[#151515] p-12 rounded-lg shadow ">
        <div class="">
        <h1 class=" text-center font-bold text-3xl mb-8 text-white">Sign In</h1>
        <div>
          <a href="flex items-center">
            <div class="px-6 sm:px-0 max-w-sm">
    <button type="button" class=" w-full  bg-white hover:bg-[#4285F4]/90 focus:ring-4 focus:outline-none focus:ring-[#4285F4]/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center justify-between mr-2 mb-2"><img class="w-4 h-4 mr-1" src="{{ asset('assets/img/google-icon.svg') }}" alt=""> Sign up with Google<div></div></button>
</div>

<div class="flex mt-3 justify-center  items-center">
  <div class="border mr-3 w-1/2"></div>
  <h1 class="text-white  text-sm">OR</h1>
  <div class="border ml-3 w-1/2"></div>
</div>
</a>
        </div>
</div>
            <!-- Modal header -->
            <div class="flex items-center justify-center   rounded-t dark:border-gray-600">

                <!-- <button type="button" class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="authentication-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button> -->
            </div>
            <!-- Modal body -->
            <div class="">
                <form class="space-y-4" action="{{route('login')}}" method="POST">
                  @csrf
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-white">Email</label>
                        <input type="email" name="email" id="email" class="bg-[#464646] border border-[#464646] bg-transparent text-white text-sm block w-full p-2.5" placeholder="Your Email" required />
                    </div>
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-white">Password</label>
                        <input type="password" name="password" id="password" placeholder="••••••••" class="bg-[#464646] bg-transparent border border-[#464646] text-white text-sm block w-full p-2.5 " required />
                    </div>
                    <div class="flex justify-between">
                        <div class="flex items-start">
                            <label for="remember" class="ms-2 text-sm font-medium text-white bg-transparent ">Remember me</label>
                        </div>
                        <a href="#" class="text-sm text-white hover:underline ">Forgot Password?</a>
                    </div>
                    <div class="w-full text-center">
                    <button type="submit" class=" bg-white  font-medium rounded-sm text-sm px-5 py-2 text-center">Sign In</button>
                    </div>
                    <div class="text-sm text-center font-medium text-gray-500 dark:text-gray-300">
                        Don't have account ? <a href="#" class="text-[#CF082D] underline ">Register</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> 

<div class="w-full relative md:p-6 bg-black">
  <div class="relative overflow-hidden h-[80vh]">
    <img style="object-position: 65% 10%;" class="object-cover w-full h-full" src="{{ asset('assets/img/landing2.png') }}" alt="">
    <div class="absolute z-20 top-[36vh]  left-[7vw] md:top-[35vh]">
              <h1 class="text-[4vw] sm:text-[3vw] lg:text-[3vw] xl:text-[2vw] sm:w-[600px] w-[325px] max-w-[60vw]  uppercase text-white font-Font-Products">Striped jacquard t-shirt x casa josephine</h1>
              <button class="bg-white font-bold opacity-80 px-4 py-2 rounded-md">Shop now</button>
    </div>
  </div>
</div>

<div class="w-full px-10 p-6 h-min bg-black ">
  <div class="block md:flex md:gap-32">
    <div class="relative w-full mb-12 md:mb-0">
      <img class="w-full" src="{{ asset('assets/img/foto1.png') }}" alt="">
      <h1 class="text-white mb-1 mt-4 font-semibold text-3xl">Classic Polo Shirt</h1>
      <p class="text-white  mb-3 text-xl">Rp 128.000</p>
      <button class="px-3 text-xs py-1.5 font-semibold rounded-sm bg-white">Buy Now</button>
      <button class="absolute right-[7vw] md:right-[20px] xl:bottom-[60px] bottom-[50px]"><img class="w-[7vw] sm:w-[5vw] md:w-[5vw] lg:w-[3vw] xl:w-[2vw] 2xl:w-[1vw]" src="{{ asset('assets/img/vectorsave.svg') }}" alt=""></button>
    </div>
    <div class="relative w-full">
      <img class="w-full" src="{{ asset('assets/img/foto2.png') }}" alt="">
      <h1 class="text-white mb-1 mt-4 font-semibold text-3xl">Classic Polo Shirt</h1>
      <p class="text-white  mb-3 text-xl">Rp 128.0000</p>
      <button class="px-3 text-xs py-1.5 font-semibold rounded-sm bg-white"><a href="">Buy Now</a></button>
      <button class="absolute right-[7vw] md:right-[20px] xl:bottom-[60px] bottom-[50px]"><img class="w-[7vw] sm:w-[5vw] md:w-[5vw] lg:w-[3vw] xl:w-[2vw] 2xl:w-[1vw]" src="{{ asset('assets/img/vectorsave.svg') }}" alt=""></button>
    </div>
  </div>
</div>

<div class="w-full bg-black  h-min p-0 md:p-6 px-10">
  <div class="h-[80vh] overflow-hidden w-full">
    <img style="object-position: 65% 10%;" class="object-cover mb-6 h-full w-full" src="{{ asset('assets/img/landing3.png') }}" alt="">
  </div>
  <div class=" mt-6 flex-col pb-6 flex items-center justify-center">
    <h1 class=" text-white mb-3 text-center uppercase font-Font-Products  text-3xl">Striped jacquard t-shirt x <br>casa josephine</h1>
    <button class="px-3 text-xs  py-1.5 font-semibold rounded-sm bg-white"><a class=" " href="">Shop now</a></button>
    </div>
</div>

<div class="w-full h-min p-6 px-10">
  <div class="">
  <h1 class="text-2xl mb-8 mt-5 ml-3 font-bold">Most Wanted</h1>
  <div class="w-full flex mb-5 justify-center items-center">
    <button class="relative">
      <img class="" src="{{ asset('assets/img/Button-baju.svg')}}" alt="">
      <img class="absolute right-[50px]" src="{{ asset('assets/img/segitiga.svg')}}" alt="">
    </button>
    <button><img src="{{ asset('assets/img/Button-celana.svg')}}" alt=""></button>
  </div>
  <div class=" md:flex gap-2 md:mt-0 mb-3 justify-evenly items-center">
    <div class="relative md:mt-0 mb-3">
      <button><img class="absolute bottom-[80px] right-1/2" src="{{ asset('assets/img/plus.svg')}}" alt=""></button>
      <img src="{{ asset('assets/img/baju.png') }}" alt="">
      <h1 class="font-semibold mt-2 text-[2vw] sm:text-[1vw] md:text-[1vw]">Regular Fit Jacquard-knit Polo Shirt</h1>
      <p class="font-semibold">Rp 130.000</p>
      <button class="absolute mr-1 right-0 md:right-[20px]  bottom-[10px]"><img class="w-[5vw] sm:w-[3vw] md:w-[2vw] lg:w-[2vw] xl:w-[1.5vw] 2xl:w-[1.5vw]" src="{{ asset('assets/img/vectorsave-black.svg') }}" alt=""></button>
    </div>
    <div class="relative md:mt-0 mb-3">
    <button><img class="absolute bottom-[80px] right-1/2" src="{{ asset('assets/img/plus.svg')}}" alt=""></button>
      <img src="{{ asset('assets/img/baju.png') }}" alt="">
      <h1 class="font-semibold mt-2 text-[2vw] sm:text-[1vw] md:text-[1vw]">Regular Fit Jacquard-knit Polo Shirt</h1>
      <p class="font-semibold">Rp 130.000</p>
      <button class="absolute mr-1 right-0 md:right-[20px]  bottom-[10px]"><img class="w-[5vw] sm:w-[3vw] md:w-[2vw] lg:w-[2vw] xl:w-[1.5vw] 2xl:w-[1.5vw]" src="{{ asset('assets/img/vectorsave-black.svg') }}" alt=""></button>
    </div>
    <div class="relative md:mt-0 mb-3">
    <button><img class="absolute bottom-[80px] right-1/2" src="{{ asset('assets/img/plus.svg')}}" alt=""></button>
      <img src="{{ asset('assets/img/baju.png') }}" alt="">
      <h1 class="font-semibold mt-2 text-[2vw] sm:text-[1vw] md:text-[1vw]">Regular Fit Jacquard-knit Polo Shirt</h1>
      <p class="font-semibold">Rp 130.000</p>
      <button class="absolute mr-1 right-0 md:right-[20px]  bottom-[10px]"><img class="w-[5vw] sm:w-[3vw] md:w-[2vw] lg:w-[2vw] xl:w-[1.5vw] 2xl:w-[1.5vw]" src="{{ asset('assets/img/vectorsave-black.svg') }}" alt=""></button>
    </div>
    <div class="relative md:mt-0 mb-3">
    <button><img class="absolute bottom-[80px] right-1/2" src="{{ asset('assets/img/plus.svg')}}" alt=""></button>
      <img src="{{ asset('assets/img/baju.png') }}" alt="">
      <h1 class="font-semibold mt-2 text-[2vw] sm:text-[1vw] md:text-[1vw]">Regular Fit Jacquard-knit Polo Shirt</h1>
      <p class="font-semibold">Rp 130.000</p>
      <button class="absolute mr-1 right-0 md:right-[20px]  bottom-[10px]"><img class="w-[5vw] sm:w-[3vw] md:w-[2vw] lg:w-[2vw] xl:w-[1.5vw] 2xl:w-[1.5vw]" src="{{ asset('assets/img/vectorsave-black.svg') }}" alt=""></button>
    </div>
  </div>
  </div>
</div>



<footer class="bg-[#222222]">
    <div class="mx-auto w-full max-w-screen-xl">
      <div class="grid grid-cols-2 gap-8 px-4 py-6 lg:py-8 md:grid-cols-4">
        <div>
            <h2 class="mb-6 text-sm font-semibold uppercase text-white">Pinalti Company</h2>
        </div>
        <div>
            <h2 class="mb-6 text-sm font-semibold  uppercase text-white">Shop</h2>
            <ul class="text-gray-500 dark:text-gray-400 font-medium">
                <li class="mb-4">
                    <a href="#" class="hover:underline">Shirt</a>
                </li>
                <li class="mb-4">
                    <a href="#" class="hover:underline">Tshirt</a>
                </li>
                <li class="mb-4">
                    <a href="#" class="hover:underline">Pants</a>
                </li>
                <li class="mb-4">
                    <a href="#" class="hover:underline">Accesories</a>
                </li>
            </ul>
        </div>
        <div>
            <h2 class="mb-6 text-sm font-semibold  uppercase text-white">Tentang Pinalti</h2>
            <ul class="text-gray-500 dark:text-gray-400 font-medium">
                <li class="mb-4">
                    <a href="#" class="hover:underline">Cara Pesan</a>
                </li>
                <li class="mb-4">
                    <a href="#" class="hover:underline">Hubungi Kami</a>
                </li>
                <li class="mb-4">
                    <a href="#" class="hover:underline">Pusat Bantuan</a>
                </li>
                <li class="mb-4">
                    <a href="#" class="hover:underline">Tentang Kami</a>
                </li>
            </ul>
        </div>
        <div>
            <h2 class="mb-6 text-sm font-semibold  uppercase text-white">Follow Us</h2>
            <ul class="text-gray-500 flex gap-3 dark:text-gray-400 font-medium">
                <li class="mb-4">
                    <a href="#" class=""><img class="w-7 " src="{{ asset('assets/img/instagram.svg')}}" alt=""></a>
                </li>
                <li class="mb-4">
                <a href="#" class=""><img class="w-7 " src="{{ asset('assets/img/twitter.svg')}}" alt=""></a>
                </li>
                <li class="mb-4">
                <a href="#" class=""><img class="w-7 " src="{{ asset('assets/img/youtube.svg')}}" alt=""></a>
                </li>
                <li class="mb-4">
                <a href="#" class=""><img class="w-7 " src="{{ asset('assets/img/facebook.svg')}}" alt=""></a>
                </li>
            </ul>
        </div>
    </div>
    <div class="px-4 py-6 bg-[#222222] md:flex md:items-center md:justify-between">
        <span class="text-sm text-gray-500 dark:text-gray-300 sm:text-center">© 2023 <a href="https://flowbite.com/">Flowbite™</a>. All Rights Reserved.
        </span>
        <div class="flex mt-4 sm:justify-center md:mt-0 space-x-5 rtl:space-x-reverse">
            <a href="#" class="text-gray-400 hover:text-gray-900 dark:hover:text-white">
                  <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 8 19">
                        <path fill-rule="evenodd" d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z" clip-rule="evenodd"/>
                    </svg>
                  <span class="sr-only">Facebook page</span>
              </a>
              <a href="#" class="text-gray-400 hover:text-gray-900 dark:hover:text-white">
                  <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 21 16">
                        <path d="M16.942 1.556a16.3 16.3 0 0 0-4.126-1.3 12.04 12.04 0 0 0-.529 1.1 15.175 15.175 0 0 0-4.573 0 11.585 11.585 0 0 0-.535-1.1 16.274 16.274 0 0 0-4.129 1.3A17.392 17.392 0 0 0 .182 13.218a15.785 15.785 0 0 0 4.963 2.521c.41-.564.773-1.16 1.084-1.785a10.63 10.63 0 0 1-1.706-.83c.143-.106.283-.217.418-.33a11.664 11.664 0 0 0 10.118 0c.137.113.277.224.418.33-.544.328-1.116.606-1.71.832a12.52 12.52 0 0 0 1.084 1.785 16.46 16.46 0 0 0 5.064-2.595 17.286 17.286 0 0 0-2.973-11.59ZM6.678 10.813a1.941 1.941 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.919 1.919 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Zm6.644 0a1.94 1.94 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.918 1.918 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Z"/>
                    </svg>
                  <span class="sr-only">Discord community</span>
              </a>
              <a href="#" class="text-gray-400 hover:text-gray-900 dark:hover:text-white">
                  <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 17">
                    <path fill-rule="evenodd" d="M20 1.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.344 8.344 0 0 1-2.605.98A4.13 4.13 0 0 0 13.85 0a4.068 4.068 0 0 0-4.1 4.038 4 4 0 0 0 .105.919A11.705 11.705 0 0 1 1.4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 4.1 9.635a4.19 4.19 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 0 14.184 11.732 11.732 0 0 0 6.291 16 11.502 11.502 0 0 0 17.964 4.5c0-.177 0-.35-.012-.523A8.143 8.143 0 0 0 20 1.892Z" clip-rule="evenodd"/>
                </svg>
                  <span class="sr-only">Twitter page</span>
              </a>
              <a href="#" class="text-gray-400 hover:text-gray-900 dark:hover:text-white">
                  <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 .333A9.911 9.911 0 0 0 6.866 19.65c.5.092.678-.215.678-.477 0-.237-.01-1.017-.014-1.845-2.757.6-3.338-1.169-3.338-1.169a2.627 2.627 0 0 0-1.1-1.451c-.9-.615.07-.6.07-.6a2.084 2.084 0 0 1 1.518 1.021 2.11 2.11 0 0 0 2.884.823c.044-.503.268-.973.63-1.325-2.2-.25-4.516-1.1-4.516-4.9A3.832 3.832 0 0 1 4.7 7.068a3.56 3.56 0 0 1 .095-2.623s.832-.266 2.726 1.016a9.409 9.409 0 0 1 4.962 0c1.89-1.282 2.717-1.016 2.717-1.016.366.83.402 1.768.1 2.623a3.827 3.827 0 0 1 1.02 2.659c0 3.807-2.319 4.644-4.525 4.889a2.366 2.366 0 0 1 .673 1.834c0 1.326-.012 2.394-.012 2.72 0 .263.18.572.681.475A9.911 9.911 0 0 0 10 .333Z" clip-rule="evenodd"/>
                  </svg>
                  <span class="sr-only">GitHub account</span>
              </a>
              <a href="#" class="text-gray-400 hover:text-gray-900 dark:hover:text-white">
                  <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 0a10 10 0 1 0 10 10A10.009 10.009 0 0 0 10 0Zm6.613 4.614a8.523 8.523 0 0 1 1.93 5.32 20.094 20.094 0 0 0-5.949-.274c-.059-.149-.122-.292-.184-.441a23.879 23.879 0 0 0-.566-1.239 11.41 11.41 0 0 0 4.769-3.366ZM8 1.707a8.821 8.821 0 0 1 2-.238 8.5 8.5 0 0 1 5.664 2.152 9.608 9.608 0 0 1-4.476 3.087A45.758 45.758 0 0 0 8 1.707ZM1.642 8.262a8.57 8.57 0 0 1 4.73-5.981A53.998 53.998 0 0 1 9.54 7.222a32.078 32.078 0 0 1-7.9 1.04h.002Zm2.01 7.46a8.51 8.51 0 0 1-2.2-5.707v-.262a31.64 31.64 0 0 0 8.777-1.219c.243.477.477.964.692 1.449-.114.032-.227.067-.336.1a13.569 13.569 0 0 0-6.942 5.636l.009.003ZM10 18.556a8.508 8.508 0 0 1-5.243-1.8 11.717 11.717 0 0 1 6.7-5.332.509.509 0 0 1 .055-.02 35.65 35.65 0 0 1 1.819 6.476 8.476 8.476 0 0 1-3.331.676Zm4.772-1.462A37.232 37.232 0 0 0 13.113 11a12.513 12.513 0 0 1 5.321.364 8.56 8.56 0 0 1-3.66 5.73h-.002Z" clip-rule="evenodd"/>
                </svg>
                  <span class="sr-only">Dribbble account</span>
              </a>
        </div>
      </div>
    </div>
</footer>

@endsection