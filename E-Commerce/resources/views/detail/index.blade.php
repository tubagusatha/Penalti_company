@extends("layout.app")
<nav class="bg-black  w-full z-30 sticky top-0 start-0 ">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
    <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
        <span class="self-center mr-1 sm:mr-0 text-xl font-Font-Products font-bold whitespace-nowrap text-white">Pinalti Company</span>
    </a>
    <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
      <div class="gap-1 sm:gap-6 sm:flex flex">
        @guest
      <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" type="button" class="text-white font-Font-Products bg-black border border-white font-medium rounded-lg text-sm px-2 sm:px-4 py-2 text-center"><a>Sign In</a></button>
      <button data-modal-target="modal-register" data-modal-toggle="modal-register" type="button" class="text-black bg-white font-Font-Products font-medium rounded-lg text-sm px-2 sm:px-4 py-2 text-center"><a>Sign up</a></button>
  @else
      <!-- Dropdown menu -->
      <button id="dropdownUserAvatarButton" data-dropdown-toggle="dropdownAvatar" class="flex text-sm bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" type="button">
          <span class="sr-only">Open user menu</span>
          <img class="w-8 h-8 rounded-full" src="/docs/images/people/profile-picture-3.jpg" alt="user photo">
      </button>
    
      <div id="dropdownAvatar" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
          <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
              <div>{{Auth::user()->firstname}} {{Auth::user()->lastname}}</div>
              <div class="font-medium truncate">{{Auth::user()->email}}</div>
          </div>
          <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownUserAvatarButton">
            @auth
      @if(auth()->user()->isAdmin())
          <li>
              <a href="{{ url('admin_panel') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
          </li>
      @endif
  @endauth
  
              <li>
                  <a href="{{url('/profile')}}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Profil</a>
              </li>
              <li>
                  <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">My Order</a>
              </li>
              <li>
                  <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Manage Address</a>
              </li>
          </ul>
          <div class="py-2">
              <form id="logout-form" action="{{ route('logout') }}" method="POST">
                  @csrf
                  <button type="submit" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Log Out</button>
              </form>
          </div>    
      </div>
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
  
      <ul class="flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-black md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0">
        <li>
            <a href="{{url(('/'))}}" class="block py-2 px-3 text-white rounded md:bg-transparent  md:p-0">Home</a>
          </li>
        @foreach($categories as $category)
        <li>
            <a href="{{ url("/menu_item/" . $category->id) }}" class="block py-2 px-3 text-white rounded md:bg-transparent md:p-0">{{ $category->name_category }}</a>
        </li>
        @endforeach
    </ul>
    
  </div>
  
    </div>
</nav>

@section('main')


<div class="bg-dark">
  <div class="lg:flex">
<div class="w-auto lg:w-1/2 ps-6 pe-6">
    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-2 gap-2">
        <div class="col-span-1">
        <img src="{{asset(('assets/img/detailpic1.svg'))}}" alt="">
        </div>
        <div class="col-span-1">
        <img src="{{asset(('assets/img/detailpic2.svg'))}}" alt="">
        </div>
        <div class="col-span-1">
        <img src="{{asset(('assets/img/detailpic3.svg'))}}" alt="">
        </div>
        <div class="col-span-1">
        <img src="{{asset(('assets/img/detailpic4.svg'))}}" alt="">
        </div>
        <div class="col-span-1">
        <img src="{{asset(('assets/img/detailpic5.svg'))}}" alt="">
        </div>
        <div class="col-span-1">
        <img src="{{asset(('assets/img/detailpic6.svg'))}}" alt="">
        </div>
    </div>
    </div>
    

    <div class="p-6 lg:w-1/2 ">
    <div class="flex flex-wrap">
<div class="w-full">
    <div class="">
    <div class="flex justify-between">
        <div class="flex-initial w-auto">
        <h1 class="text-white text-xl md:text-3xl lg:text-5xl" >Athletics Frencs Terry Hoodie</h1>
        </div>
    <div class=" flex-initial w-10 md:w-20 lg:hidden">
    <svg class="w-6 h-6 md:w-10 md:h-10 text-white" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 384 512"><path d="M0 48C0 21.5 21.5 0 48 0l0 48V441.4l130.1-92.9c8.3-6 19.6-6 27.9 0L336 441.4V48H48V0H336c26.5 0 48 21.5 48 48V488c0 9-5 17.2-13 21.3s-17.6 3.4-24.9-1.8L192 397.5 37.9 507.5c-7.3 5.2-16.9 5.9-24.9 1.8S0 497 0 488V48z"/></svg>
    </div>
</div>
        <h2 class="text-white font-light text-md md:text-lg pt-1">$89.899</h2>
        
        </div>
        </div>
        
        <!-- star rating -->

<div class="flex items-center pt-2">
    <svg class="w-3 h-3 md:w-6 md:h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
    </svg>
    <svg class="w-3 h-3 md:w-4 md:h-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
    </svg>
    <svg class="w-3 h-3 md:w-4 md:h-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
    </svg>
    <svg class="w-3 h-3 md:w-4 md:h-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
    </svg>
    <svg class="w-3 h-3 md:w-4 md:h-4 text-gray dark:text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
    </svg>
</div>

</div>

<!-- end star rating -->

<!-- choose color -->
<div class="pt-8">
    <h1 class="text-white text-md md:text-xl">Color: Cream</h1>
    <div class=" flex pt-3">
        <div class="grid grid-cols-5 gap-2 ">
            <div class="col-span-1 md:w-16">
    <img src="{{asset(('assets/img/Rectangle.svg'))}}" alt="">
            </div>
            <div class="col-span-1 md:w-16">
    <img src="{{asset(('assets/img/Rectangle.svg'))}}" alt="">
            </div>
            <div class="col-span-1 md:w-16">
    <img src="{{asset(('assets/img/Rectangle.svg'))}}" alt="">
            </div>
            <div class="col-span-1 md:w-16">
    <img src="{{asset(('assets/img/Rectangle.svg'))}}" alt="">
            </div>
            <div class="col-span-1 md:w-16">
    <img src="{{asset(('assets/img/Rectangle.svg'))}}" alt="">
            </div>
    </div>
    </div>
</div>
<!-- end choose color -->

<!-- select size -->
<div class="pt-3">
    <div class="justify-between flex">
    <h1 class="text-white text-md md:text-lg "  >Select size</h1>
    <a  data-modal-target="default-modal" data-modal-toggle="default-modal" class="text-white text-md md:text-lg font-semibold underline" style="cursor: pointer;">Size & Fit Guide</a>
    </div>


<!-- Modal toggle -->

<!-- Main modal -->
<div id="default-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-auto max-w-auto">
        <!-- Modal content -->
        <div class="relative bg-black rounded-md shadow dark:bg-black-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-bold text-white dark:text-white">
                    Panduan Pakaian
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="default-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor " stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                </button>
            </div>
            <!-- Modal body -->
            <div class="bg-black">
            <img class="mx-auto w-full h-90" src="{{asset(('assets/img/sizebaju.svg'))}}" alt="">
            </div>
            <!-- Modal footer -->
            <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                <button data-modal-hide="default-modal" type="button" class="text-white bg-black hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Oke Ngerti</button>
            </div>
        </div>
    </div>
</div>
<div class="grid grid-cols-4 md:grid-cols-5 gap-2 pt-1">
    <li>
        <input type="radio" id="size-xs" name="size" value="XS" class="hidden peer" required>
        <label for="size-xs" class="text-white hover:text-black text-md lg:text-xl text-center justify-center items-center flex border w-26 lg:h-14 col-span-1 peer-checked:bg-white peer-checked:text- peer-checked:border-blue-600 hover:text-gray-600 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700 dark:peer-checked:text-gray-300">
            XS
        </label>
    </li>
    <li>
        <input type="radio" id="size-s" name="size" value="S" class="hidden peer">
        <label for="size-s" class="text-white hover:text-black text-md lg:text-xl text-center justify-center items-center flex border w-26 lg:h-14 col-span-1 peer-checked:bg-white peer-checked:text-gray-600 peer-checked:border-blue-600 hover:text-gray-600 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700 dark:peer-checked:text-gray-300">
            S
        </label>
    </li>
    <li>
        <input type="radio" id="size-m" name="size" value="M" class="hidden peer">
        <label for="size-m" class="text-white hover:text-black text-md lg:text-xl text-center justify-center items-center flex border w-26 lg:h-14 col-span-1 peer-checked:bg-white peer-checked:text-gray-600 peer-checked:border-blue-600 hover:text-gray-600 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700 dark:peer-checked:text-gray-300">
            M
        </label>
    </li>
    <li>
        <input type="radio" id="size-l" name="size" value="L" class="hidden peer">
        <label for="size-l" class="text-white hover:text-black text-md lg:text-xl text-center justify-center items-center flex border w-26 lg:h-14 col-span-1 peer-checked:bg-white peer-checked:text-gray-600 peer-checked:border-blue-600 hover:text-gray-600 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700 dark:peer-checked:text-gray-300">
            L
        </label>
    </li>
    <li>
        <input type="radio" id="size-xl" name="size" value="XL" class="hidden peer">
        <label for="size-xl" class="text-white hover:text-black text-md lg:text-xl text-center justify-center items-center flex border w-26 lg:h-14 col-span-1 peer-checked:bg-white peer-checked:text-gray-600 peer-checked:border-blue-600 hover:text-gray-600 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700 dark:peer-checked:text-gray-300">
            XL
        </label>
    </li>
    <li>
        <input type="radio" id="size-2xl" name="size" value="2XL" class="hidden peer">
        <label for="size-2xl" class="text-white hover:text-black text-md lg:text-xl text-center justify-center items-center flex border w-26 lg:h-14 col-span-1 peer-checked:bg-white peer-checked:text-gray-600 peer-checked:border-blue-600 hover:text-gray-600 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700 dark:peer-checked:text-gray-300">
            2XL
        </label>
    </li>
</div>

    

    <form class="mt-4">
    <div class="relative flex items-center max-w-[8rem]">
        <button type="button" id="decrement-button" data-input-counter-decrement="quantity-input" class="bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 hover:bg-gray-200 border border-gray-300 rounded-s-lg p-3 h-11 focus:ring-gray-100 dark:focus:ring-gray-700 focus:ring-2 focus:outline-none">
            <svg class="w-3 h-3 text-gray-900 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h16"/>
            </svg>
        </button>
        <input type="text" id="quantity-input" data-input-counter aria-describedby="helper-text-explanation" class="bg-gray-50 border-x-0 border-gray-300 h-11 text-center text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full py-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="0" required />
        <button type="button" id="increment-button" data-input-counter-increment="quantity-input" class="bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 hover:bg-gray-200 border border-gray-300 rounded-e-lg p-3 h-11 focus:ring-gray-100 dark:focus:ring-gray-700 focus:ring-2 focus:outline-none">
            <svg class="w-3 h-3 text-gray-900 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
            </svg>
        </button>
    </div>
</form>

</div>
<!-- end select size -->

<!-- Button add -->

<div class="w-full pt-3">
    <a href="#" class="text-white text-md bg-darkred text-center border border-darkred h-10 items-center justify-center flex">Add to cart</a>
</div>


<!-- masi ragu ragu -->
<!-- end Button -->



<!-- deskipsi -->
<div class=" pt-5 md:px-0 md:pt-0">

<div id="accordion-flush" data-accordion="collapse" data-active-classes="bg-transparent dark:bg-gray text-white dark:text-white" data-inactive-classes="text-gray-500 dark:text-gray-400">
  <h2 id="accordion-flush-heading-1">
    <button type="button" class="flex items-center justify-between w-full py-5 font-semibold rtl:text-right text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400 gap-3" data-accordion-target="#accordion-flush-body-1" aria-expanded="true" aria-controls="accordion-flush-body-1">
      <span>Description</span>
      <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
      </svg>
    </button>
  </h2>
  <div id="accordion-flush-body-1" class="hidden" aria-labelledby="accordion-flush-heading-1">
    <div class="py-5 border-b border-white dark:border-gray-700">
      <p class="mb-2 text-gray-500 dark:text-gray-400">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,  when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
    </div>
  </div>
  <h2 id="accordion-flush-heading-2">
    <button type="button" class="flex items-center justify-between w-full py-5 font-semibold rtl:text-right text-white border-b border-gray-200 dark:border-gray-700 dark:text-gray-400 gap-3" data-accordion-target="#accordion-flush-body-2" aria-expanded="false" aria-controls="accordion-flush-body-2">
      <span>Product Details</span>
      <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
      </svg>
    </button>
  </h2>
  <div id="accordion-flush-body-2" class="hidden" aria-labelledby="accordion-flush-heading-2">
    <div class="py-5 border-b border-white dark:border-gray-700">
      <p class="mb-2 text-gray-500 dark:text-gray-400">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eaque impedit ullam suscipit, iste natus quisquam at hic optio, provident repellat animi autem adipisci eius nemo! Dignissimos voluptatum repellat fugit possimus?</p>
      
    </div>
  </div>
  <div class="py-6 flex flex-wrap" style="cursor: pointer">
    <div class="flex w-10">
    <svg class="w-6 h-6 md:w-10 md:h-10 text-white" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 384 512"><path d="M0 48C0 21.5 21.5 0 48 0l0 48V441.4l130.1-92.9c8.3-6 19.6-6 27.9 0L336 441.4V48H48V0H336c26.5 0 48 21.5 48 48V488c0 9-5 17.2-13 21.3s-17.6 3.4-24.9-1.8L192 397.5 37.9 507.5c-7.3 5.2-16.9 5.9-24.9 1.8S0 497 0 488V48z"/></svg>
    </div>
    <p class="text-white text-md font-semibold ">Add to Favorite</p>
    
  </div>
  <div class="border-b border-white"></div>

</div>

</div>

</div>
</div>

<!-- saran -->

<div class="p-6 pt-10 ">
    <h1 class="text-white text-lg lg:text-2xl">You Might Also Like</h1>
    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-2 pt-5">
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
                    <p class="text-white text-[11px] md:text-xs font-light">Rp 128.000</p>
                    </div>
                    </div>
                </div>
    </div>
</div>
    
</div>

@include("components.footer")
@endsection