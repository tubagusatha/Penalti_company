@extends('layout.app')
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

<div class="container max-w-full sm:max-w-full">
        <!-- top profile -->
        <div class="max-w-full bg-dark">
            <div class="text-center py-10 px-5 items-center justify-center flex-col">
            
                <h1 class="text-white text-2xl">{{$categoryz->name_category}}</h1>

            
            <p class="text-white text-sm xl:text-lg py-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, temporibus! Quod numquam dicta dolore assumenda et, obcaecati saepe ducimus cum.</p>
            </div>
            </div>
            </div>
            <div class="grid grid-cols-2 gap-2 md:grid-cols-4 md:gap-4 px-5">
                @foreach($products as $product)
                @if ($product->show_products == true)
                <div class="col-span-1">
                    <div class="max-w-full px-2">
                        <a href=""><img class="w-full" src="{{$product->gallery()->exists() ? ('http://127.0.0.1:8000/'.$product->gallery->first()->url_image) : 'data:image/gif;base64,R0lGODlhAQABAIAAAMLCwgAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==' }}" alt=""></a>
                    <div class="py-2">
                    <h1 class="text-black text-sm">{{$product->name_products}}</h1>
                    <p class="text-black text-[9px]">{{$product->prices_products}}</p>
                    </div>
                    </div>
                </div>
    @else
    @endif
    @endforeach
            </div>
        </div> 
    </div>


@endsection
