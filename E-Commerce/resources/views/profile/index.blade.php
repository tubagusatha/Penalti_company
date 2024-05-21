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
                            <div>{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</div>
                            <div class="font-medium truncate">{{ Auth::user()->email }}</div>
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
                                <a href="{{ url('/profile') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Profil</a>
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
                    <a href="{{ url('/') }}" class="block py-2 px-3 text-white rounded md:bg-transparent md:p-0">Home</a>
                </li>
                @foreach($categories as $category)
                    <li>
                        <a href="{{ url('/menu_item/' . $category->id) }}" class="block py-2 px-3 text-white rounded md:bg-transparent md:p-0">{{ $category->name_category }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</nav>


@section('main')
<div class="container max-w-full sm:max-w-full">
    <div class="flex flex-wrap">
        <!-- top profile -->
        <div class="w-full p-5 bg-black flex items-center">
            <img src="{{ asset('assets/img/pic.svg') }}" alt="" class="mr-4">
            <div class="">
                <div class="font-bold text-2xl  md:text-4xl text-white">
                    {{Auth::user()->firstname}} {{Auth::user()->lastname}}
                </div>
                <div class="flex">
                    
                    <div><img src="{{asset('assets/img/pen.svg')}}" alt="" class="pt-2 pr-2 md:w-6"></div>
                    <div class="pt-0.5 underline"><a href="" class="text-sm md:text-lg text-center font-light text-gray">Ubah Profile</a></div>
                    
                </div>
            </div>
        </div> 
    </div>




<div class="mb-4 border-b border-gray-200 dark:border-gray-700">
    <ul class="grid grid-cols-3 -mb-px text-sm md:text-lg font-medium text-center" id="default-tab" data-tabs-toggle="#default-tab-content" role="tablist">
        <li class="me-2" role="presentation">
            <button class="inline-block p-4 border-b-2 rounded-t-lg md:text-lg" id="profile-tab" data-tabs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Profile</button>
        </li>
        <li class="me-2" role="presentation">
            <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 md:text-lg" id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab" aria-controls="dashboard" aria-selected="false">My Order</button>
        </li>
        <li class="me-2" role="presentation">
            <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 md:text-lg" id="settings-tab" data-tabs-target="#settings" type="button" role="tab" aria-controls="settings" aria-selected="false">Manage-Address</button>
        </li>
    </ul>
</div>
<div id="default-tab-content">
    <div class="hidden   bg-white dark:bg-gray-800" id="profile" role="tabpanel" aria-labelledby="profile-tab">

    

<main class="container mx-auto px-2">
    <section class="flex flex-col space-y-4">

    <div class="mx-10">
        <h4 class="text-lg md:text-xl font-semibold">Profil saya</h4>
        <p class="font-light text-xs md:text-2xl text-slate-500">Kelola informasi profil Anda untuk mengontrol, melindungi dan mengamankan akun</p>
    </div>

    <!-- Garis panjang di bawah "Profil saya" -->
    <hr class="mt-3 mx-4 border-slate-400">

    <div class="md:flex md:flex-row-reverse">
    <div class="container sm:mx-w-full mx-1/2 pt-5">
    <div class="flex flex-col items-center justify-center">
    <img src="{{ asset('assets/img/pic.svg') }}" alt="" class="w-24">
    <div class="mt-6">
        <label for="upload" class="text-xs border font-semibold text-dark bg-white py-2 px-4 border-gray rounded-md cursor-pointer">Pilih Gambar</label>
        <input type="file" id="upload" class="hidden">
    </div>
    <div class="text-sm mt-6">
        <p class="text-gray font-light">Ukuran gambar: maks. 1 MB</p>
        <p class="text-gray font-light">Format gambar: JPEG, PNG</p>
    </div>
</div>

</div>

    <div class="md:flex md:flex-row-reverse"> 
    <div class="grid grid-cols-2 gap-4 sm:mx-w-full mx-1/2 pt-10 justify-end">
        <!-- usn -->
        <div class="text-md text-gray text-end mr-3" >Username</div>
        <p class="text-md text-start text-dark">{{Auth::user()->firstname}} {{Auth::user()->lastname}}</p>
        <!-- email -->
        <div class="text-md text-end text-gray mr-3">Email Address</div>

        <p class="text-md text-dark">{{Auth::user()->email}}<br><button data-modal-target="ganti-email" data-modal-toggle="ganti-email" type="button" class="text-white font-Font-Products bg-black border border-white font-medium rounded-lg text-sm px-2 sm:px-4 py-2 text-center"><a href="#" class="text-xs text-dark font-light underline">Ubah</a></button></p>
        

        <!-- modal email -->

        <div id="ganti-email" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden transition duration-300 ease-in-out fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full  max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-[#151515] p-12 rounded-lg shadow ">
        <div class="">
        <h1 class=" text-center font-bold text-3xl mb-8 text-white">Ubah Email</h1>
        <div>
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
                        <label for="email" class="block mb-2 text-sm font-medium text-white">Email baru</label>
                        <input type="email" name="email" id="email" class="bg-[#464646] border border-[#464646] bg-transparent text-white text-sm block w-full p-2.5" placeholder="Your Email" required />
                    </div>
                    


                    
                    </div>
                    <div class="w-full text-center mt-3 mb-3">
                    <button type="submit" class=" bg-white  font-medium rounded-sm text-sm px-5 py-2 text-center">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

        <!-- end modal email -->

        <!-- mobile num -->
        <div class="text-md text-end text-gray mr-3">Mobile Number</div>
        <p class="text-md text-start text-dark">{{Auth::user()->number}} <a href="#" class="text-xs text-dark font-light underline"> <br>Ubah </a></p>

        

        <!-- jenis kelamin -->
        <div class="text-md text-gray text-end mr-3">Jenis Kelamin</div>
        <div class="flex flex-wrap">
    <div class="flex items-center me-4 mt-0.5">
        <input id="red-radio" type="radio" value="" name="colored-radio" class="w-4 h-4 text-red-600 bg-gray-100 border-gray-300 focus:ring-red-500 dark:focus:ring-red-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
        <label for="red-radio" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Pria</label>
    </div>
    <div class="flex items-center me-4 mt-0.5">
        <input id="green-radio" type="radio" value="" name="colored-radio" class="w-4 h-4 text-red-600 bg-gray-100 border-gray-300 focus:ring-red-500 dark:focus:ring-red-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
        <label for="green-radio" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Wanita</label>
    </div>
    <div class="flex items-center me-4 mt-3">
        <input checked id="purple-radio" type="radio" value="" name="colored-radio" class="w-4 h-4 text-red-600 bg-gray-100 border-gray-300 focus:ring-red-500 dark:focus:ring-red-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
        <label for="purple-radio" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Tidak ingin beritahu</label>
    </div>
    
    
</div>

<!-- tanggal lahir -->
<div class="text-md text-end text-gray pt-3.5 mr-3">Tanggal lahir</div>
<div class="relative max-w-sm pt-3">
  <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pt-5 pointer-events-none p-2">
    <svg class="w-3 h-3 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
      <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
    </svg>
  </div>
  <input datepicker type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm  focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date">
</div>

<div class="text-md text-end text-gray"></div>
<div class="button" style="margin-top: 1rem;">
                    <a href="#" class="text-xs font-semibold text-white bg-red py-2 px-4 rounded-sm hover:shadow-lg hover:opacity-80 transition duration-300 ease-in-out">Simpan</a>
                </div>



      </div>

      </div>

      </div>
      
      </section>
      </main>

    </div>

    
    <div class="hidden p-4  bg-white dark:bg-gray-800" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">


    <div class="container-1">
        <div class="px-10 py-10">
        <h4 class="text-dark text-lg font-semibold text-center">You don't have any order yet</h4>
        <div class="button" style="margin-top: 2rem; text-align: center;">
        <a href="#" class="text-xs font-semibold text-white items-center bg-dark py-2 px-4 hover:shadow-lg hover:opacity-80 transition duration-300 ease-in-out">Start Shopping</a>
        </div>
        </div>
    </div>



<div class="md:hidden">
        <div class="container-2">
            <h4 class="text-lg text-dark text-center">Order</h4>
            <div class="flex flex-wrap pt-5">
                <img src="{{ asset('assets/img/pic_profile_order.svg') }}" alt="" class="w-[120px] h-[120px]">
                <div>
                <h3 class="text-dark text-md underline">Classic Polo Shirt</h3>
                <p class="text-dark text-sm font-light pt-1">Size L</p>
                <p class="text-dark text-sm font-light pt-1">Color : Deep Purple</p>
                <p class="text-dark text-sm font-light pt-1">16 March 2024</p>
                <p class="text-dark text-sm font-light pt-1">Rp 160.000</p>
                </div>
                <div class="py-8 pl-14">
                    <p class="text-dark text-sm font-light pt-1">S.id.Tracking</p>
                    <p class="text-dark text-sm font-light text-center py-10">Qty 2</p>
                </div>
            </div>
        </div>
    </div>

    <div class="hidden md:block">
    <div class="container-3">
        <div class="flex flew-wrap justify-between p-5">
            <div class="">
                <h1 class="text-dark text-lg font-semibold pb-5">Order</h1>
                <div class="flex">
                <img src="{{ asset('assets/img/pic_profile_order.svg') }}" alt="Image" class="">
                <div class="mt-5 pl-3">
                <p class="text-dark text-md font-light underline">Classic Polo Shirt</p>
                <p class="text-dark text-sm font-light pt-3">Size : L</p>
                <p class="text-dark text-sm font-light pt-1">Color : Deep purple</p>
                </div>
                </div>
            </div>
            <div class="">
                <h1 class="text-dark text-lg font-semibold pb-5">Amount</h1>
                <p class="text-center">1</p>
            </div>
            <div class="">
                <h1 class="text-dark text-lg font-semibold pb-5">Price</h1>
                <p class="text-center">120.000</p>
            </div>
            <div class="">
                <h1 class="text-dark text-lg font-semibold pb-5">Order date</h1>
                <p class="text-dark text-sm text-center">16 March 2024</p>
            </div>
            <div class="">
                <h1 class="text-dark text-lg font-semibold pb-5">Tracking</h1>
                <a href="" class="underline text-center">S.id.Tracking</a>
            </div>
        </div>
    </div>
    </div>

    </div>
    <!-- Manage_Address -->
    
    <div class="hidden p-4  bg-white dark:bg-gray-800" id="settings" role="tabpanel" aria-labelledby="settings-tab">
        <div class="container-3">
            
        <div class="w-full pb-5" style="cursor: pointer" >
            <a data-modal-target="modal-address" data-modal-toggle="modal-address"  class="border-dashed border-2 h-40 border-dark items text-center items-center justify-center flex shadow-xl shadow-slate-300">+ Add New Address</a>
        </div>

        <!-- modal add address -->
        

<!-- Modal toggle -->

<!-- Main modal -->
<div id="modal-address" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-third  shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5  rounded-t">
                <h3 class="text-2xl font-semibold font-sans text-white pt-2">
                    Add Address
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="default-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"
                        data-modal-toggle="modal-address"/>
                    </svg>
                </button>
            </div>
            <!-- Modal body -->
            <form class="px-6 py-3 md:p-5">
                <div class="grid gap-4 mb-4 grid-cols-4">
                    <div class="col-span-4">
                        <label for="name" class="block mb-2 text-md font-medium text-white ">Address Label</label>
                        <input type="text" name="address" id="name" class="bg-transparent bg-[#464646] text-white text-sm block w-full p-2" placeholder="example: Home, Apartment, etc" required="">
                    </div>
                    <div class="col-span-4">
                        <label for="name" class="block mb-2 text-md font-medium text-white ">Recipient Name</label>
                        <input type="text" name="address" id="name" class="bg-transparent bg-[#464646] text-white text-sm block w-full p-2" placeholder="enter name" required="">
                    </div>
                    <div class="col-span-4">
                        <label for="name" class="block mb-2 text-md font-medium text-white ">Recipient’s Mobile Number</label>
                        <input type="text" name="address" id="name" class="bg-transparent bg-[#464646] text-white text-sm block w-full p-2" placeholder="Type mobile number here" required="">
                    </div>
                    <div class="col-span-4">
                        <label for="name" class="block mb-2 text-md font-medium text-white ">Address</label>
                        <input type="text" name="address" id="name" class="bg-transparent bg-[#464646] text-white text-sm block w-full p-2" placeholder="type address" required="">
                    </div>
                    <div class="col-span-2">
                        <label for="name" class="block mb-2 text-md font-medium text-white ">State</label>
                        <input type="text" name="address" id="name" class="bg-transparent bg-[#464646] text-white text-sm block w-full p-2" placeholder="Type state here" required="">
                    </div>
                    <div class="col-span-2">
                        <label for="name" class="block mb-2 text-md font-medium text-white ">City</label>
                        <input type="text" name="address" id="name" class="bg-transparent bg-[#464646] text-white text-sm block w-full p-2" placeholder="Type city here" required="">
                    </div>
                    <div class="col-span-2">
                        <label for="name" class="block mb-2 text-md font-medium text-white ">Subdistrict</label>
                        <input type="text" name="address" id="name" class="bg-transparent bg-[#464646] text-white text-sm block w-full p-2" placeholder="Type subdistrict here" required="">
                    </div>
                    <div class="col-span-2">
                        <label for="name" class="block mb-2 text-md font-medium text-white ">Postcode</label>
                        <input type="text" name="address" id="name" class="bg-transparent bg-[#464646] text-white text-sm block w-full p-2" placeholder="Type postcode here" required="">
                    </div>

                </div>
                <div class="bg-red">
                <button type="submit" class="text-white w-full items-center justify-center font-medium text-sm px-5 py-2.5 text-center">
                    + Add Address
                </button>
                </div>
            </form>
        </div>
    </div>
</div> 


<div class="w-full py-5">
    <div class="border h-50 border-gray relative">
        <div class="absolute top-0 right-0 py-3 px-3">
            <a style="font-size: xx-small;" class="font-light items-end justify-end text-white bg-red py-1 px-3 hover:shadow-lg hover:opacity-80">PRIMARY</a>
        </div>

        <div class="py-3 px-3">
            <h1 class="text-sm md:text-lg text-dark font-semibold">Home</h1>
            <h2 class="text-sm md:text-lg text-dark font-medium">Hendra Mustafa</h2>
            <h3 class="text-sm md:text-lg text-dark font-light">Jl. Benesari, Banjar Pengabetan</h3>
            <h3 class="text-sm md:text-lg text-dark font-light">Jawa Timur, Surabaya, Wonokromo, 61432</h3>

            <div class="pt-14 justify-between flex">
            <a href="" class="text-md text-dark font-light">EDIT</a>
            <a href="" class="text-md text-dark font-light"><img src="{{ asset(('assets/img/trash.svg'))}}" class="pl-80" alt="Trash"></a>
            
            </div>
        </div>

        
        
    </div>
</div>

<div class="w-full py-5">
    <div class="border h-50 border-gray relative">

        <div class="py-3 px-3">
            <h1 class="text-sm md:text-lg text-dark font-semibold">Home</h1>
            <h2 class="text-sm md:text-lg text-dark font-medium">Hendra Mustafa</h2>
            <h3 class="text-sm md:text-lg text-dark font-light">Jl. Benesari, Banjar Pengabetan</h3>
            <h3 class="text-sm md:text-lg text-dark font-light">Jawa Timur, Surabaya, Wonokromo, 61432</h3>

            <div class="pt-14 justify-between flex">
            <a href="" class="text-md text-dark font-light">EDIT</a>
            <a href="" class="text-md text-dark font-light"><img src="{{ asset(('assets/img/trash.svg'))}}" class="pl-80" alt="Trash"></a>
            
            </div>
        </div>

        
        
    </div>
</div>

<div class="w-full py-5">
    <div class="border h-50 border-gray relative">

        <div class="py-3 px-3">
            <h1 class="text-sm md:text-lg text-dark font-semibold">Home</h1>
            <h2 class="text-sm md:text-lg text-dark font-medium">Hendra Mustafa</h2>
            <h3 class="text-sm md:text-lg text-dark font-light">Jl. Benesari, Banjar Pengabetan</h3>
            <h3 class="text-sm md:text-lg text-dark font-light">Jawa Timur, Surabaya, Wonokromo, 61432</h3>

            <div class="pt-14 justify-between flex">
            <a href="" class="text-md text-dark font-light">EDIT</a>
            <a href="" class="text-md text-dark font-light"><img src="{{ asset(('assets/img/trash.svg'))}}" class="pl-80" alt="Trash"></a>
            
            </div>
        </div>

        
        
    </div>
</div>

<div class="w-full py-5">
    <div class="border h-50 border-gray relative">
        <div class="py-3 px-3">
            <h1 class="text-sm md:text-lg text-dark font-semibold">Home</h1>
            <h2 class="text-sm md:text-lg text-dark font-medium">Hendra Mustafa</h2>
            <h3 class="text-sm md:text-lg text-dark font-light">Jl. Benesari, Banjar Pengabetan</h3>
            <h3 class="text-sm md:text-lg text-dark font-light">Jawa Timur, Surabaya, Wonokromo, 61432</h3>

            <div class="pt-14 justify-between flex">
            <a href="" class="text-md text-dark font-light">EDIT</a>
            <a href="" class="text-md text-dark font-light"><img src="{{ asset(('assets/img/trash.svg'))}}" class="pl-80" alt="Trash"></a>
            
            </div>
        </div>

        
        
    </div>
</div>

    </div>
</div>

    


<script src="../path/to/flowbite/dist/datepicker.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/datepicker.min.js"></script>
@endsection
