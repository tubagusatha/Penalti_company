<nav class="bg-black  w-full z-30 sticky top-0 start-0 ">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
  <a href="{{url(('/'))}}" class="flex items-center space-x-3 rtl:space-x-reverse">
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
            <li>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Profil</a>
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
    <ul class="flex flex-col  p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-black md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0  ">
      <li>
        <a href="{{url(('/'))}}" class="block py-2 px-3 text-white rounded md:bg-transparent md:p-0 " aria-current="page">Home</a>
      </li>
      <li>
        <a href="{{url(('/detail/tshirt'))}}" class="block py-2 px-3 text-white rounded md:bg-transparent  md:p-0">Tshirt</a>
      </li>
      <li>
        <a href="{{url(('/detail/shirt'))}}" class="block py-2 px-3 text-white rounded md:bg-transparent  md:p-0">Shirt</a>
      </li>
      <li>
        <a href="{{url(('/detail/pants'))}}" class="block py-2 px-3 text-white rounded md:bg-transparent  md:p-0">Pants</a>
      </li>
      <li>
        <a href="{{url(('/detail/accessories'))}}" class="block py-2 px-3 text-white rounded md:bg-transparent  md:p-0">Accessories</a>
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
            <div id="registration-form" class="">
                <form class="space-y-4" action="{{route('register')}}" method="POST">
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
                      <input type="text" name="number" id="number" class=" bg-transparent text-white text-sm block w-full p-2" placeholder="Your Number" required />
                    </div>
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-white">Password</label>
                        <input type="password" name="password" id="password" placeholder="••••••••" class=" bg-transparent bg-[#464646] text-white text-sm block w-full p-2 " required />
                    </div>
                    <div>
                        <label for="password_confirmation" class="block mb-2 text-sm font-medium text-white">Verifikasi Password</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" placeholder="••••••••" class=" bg-transparent text-white text-sm block w-full p-2 " required />
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
                    <div class="flex justify-between items-center">
                      <!-- Bagian kiri dengan ingat saya -->
                      <div class="flex items-center">
                        <div class="flex items-center h-5">
                          <input id="remember_token" name="remember_token" type="checkbox" value="1" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" />
                        </div>
                        <label for="remember_token" class="ms-2 text-sm font-medium text-white-900 dark:text-white">Remember me</label>
                      </div>
                      <!-- Bagian kanan dengan forgot password -->
                      <a href="#" class="text-sm text-white hover:underline">Forgot Password?</a>
                    </div>
                    
                    </div>
                    <div class="w-full text-center mt-3 mb-3">
                    <button type="submit" class=" bg-white  font-medium rounded-sm text-sm px-5 py-2 text-center">Sign In</button>
                    </div>
                    <div class="text-sm text-center font-medium text-gray-500 dark:text-gray-300">
                        Don't have account ? <a href="#" data-modal-target="modal-register" data-modal-toggle="modal-register" class="text-[#CF082D] underline ">Sign Up</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> 
