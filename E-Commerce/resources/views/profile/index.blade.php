@extends('layout.app')
@include('layout.nav')

@section('main')
<div class="container max-w-full sm:max-w-full">
    <div class="flex flex-wrap">
        <!-- top profile -->
        <div class="w-full p-5 bg-black flex items-center">
         @if($user_gallery->isNotEmpty())
        @php
            $firstGallery = $user_gallery->last();
        @endphp
        <img src="{{ asset($firstGallery->url_image) }}" alt="userImage" class="w-24 mr-4 rounded">
    @else
        <img class="w-24 mr-4 rounded" src="data:image/gif;base64,R0lGODlhAQABAIAAAMLCwgAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="">

    @endif
            <div class="">
                <div class="font-bold text-2xl  md:text-4xl text-white">
                    {{Auth::user()->firstname}} {{Auth::user()->lastname}}
                </div>
                <div class="text-base text-gray-900 text-white">
                    {{Auth::user()->email}}
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
            <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 md:text-lg" id="settings-tab" data-tabs-target="#settings" type="button" role="tab" aria-controls="settings" aria-selected="false">Address</button>
        </li>
    </ul>
</div>
<div id="default-tab-content">
    <div class="hidden mb-5 bg-white dark:bg-gray-800" id="profile" role="tabpanel" aria-labelledby="profile-tab">

    

<main class="container mx-auto px-2">
    <section class="flex flex-col space-y-4">

    <div class="mx-10">
        <h4 class="text-lg md:text-xl font-semibold">Profil saya</h4>
        <p class="font-light text-xs md:text-2xl text-slate-500">Kelola informasi profil Anda untuk mengontrol, melindungi dan mengamankan akun</p>
    </div>
    
    <hr class="mt-3 mx-4 border-slate-400">


    <!-- Pesan Kesalahan -->
    @if (session('error'))
<div id="errorMessage" class="px-4 py-2 bg-red-500 text-white ">
    {{ session('error') }}
</div>
@endif

<!-- Pesan Sukses -->
@if (session('success'))
<div id="successMessage" class="px-4 py-2 bg-green-500 text-white mb-4">
    {{ session('success') }}
</div>
@endif

<!-- JavaScript untuk mengatur pesan kesalahan -->
<script>
    setTimeout(function() {
        var errorMessage = document.getElementById('errorMessage');
        if (errorMessage) {
            errorMessage.style.display = 'none';
        }
    }, 5000); 
    
    setTimeout(function() {
        var successMessage = document.getElementById('successMessage');
        if (successMessage) {
            successMessage.style.display = 'none';
        }
    }, 5000);// Mengatur pesan kesalahan agar hilang setelah 5 detik
</script>
    <div class="md:flex md:flex-row-reverse">
        <div class="container sm:mx-w-full mx-1/2 pt-5">
            <div class="flex flex-col items-center justify-center">
                
                @if($user_gallery->isNotEmpty())
                @php
                    $firstGallery = $user_gallery->last();
                @endphp
                <img src="{{ asset($firstGallery->url_image) }}" alt="userImage" class="w-24 rounded">
            @else
                <img class="w-24 rounded" src="data:image/gif;base64,R0lGODlhAQABAIAAAMLCwgAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="">
        
            @endif
            
            
            
        
        <!-- Modal toggle -->
        @if($user_gallery->isNotEmpty())
        <a data-modal-target="popup-modal" data-modal-toggle="popup-modal" class="inline-flex justify-center p-1 text-red-500 rounded cursor-pointer hover:text-red-900 hover:bg-red-100 dark:text-red-400 dark:hover:bg-red-700 dark:hover:text-white mt-1">
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
        </a>
        
            
            <div id="popup-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative p-4 w-full max-w-md max-h-full">
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="popup-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
        
                        <div class="p-4 md:p-5 text-center">
                            <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                            </svg>
                            <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure you want to delete this product?</h3>
                            @foreach($user_gallery as $image)
                            <form action="{{ route('gallery.destroy', ['image_id' => $image->id]) }}" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center" method="POST">
                                @csrf
                                @method('DELETE')
                                <button data-modal-hide="popup-modal" type="submit" >Yes, I'm sure</button>
                            </form>
                            @endforeach
                            <button data-modal-hide="popup-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">No, cancel</button>
                        </div>
                    </div>
                </div>
            </div>
            
        <button data-modal-target="crud-modal-update" data-modal-toggle="crud-modal-update" class="border mt-1 text-dark bg-white py-2 px-4 border-gray rounded-md" type="button">
            Update Gambar
          </button>
        @else
        <button data-modal-target="crud-modal" data-modal-toggle="crud-modal" class="border mt-1 text-dark bg-white py-2 px-4 border-gray rounded-md" type="button">
            Pilih Gambar
          </button>
        
        @endif
          
          <!-- Main modal -->
          <div id="crud-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
              <div class="relative p-4 w-full max-w-md max-h-full">
                  <!-- Modal content -->
                  <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                      <!-- Modal header -->
                      <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                          <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                              Create New Profile
                          </h3>
                          <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="crud-modal">
                              <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                              </svg>
                              <span class="sr-only">Close modal</span>
                          </button>
                      </div>
                      <!-- Modal body -->
                      <form action="{{ route('profile.store', $user->id) }}" class="p-4 md:p-5" method="POST" enctype="multipart/form-data">
                        @csrf
                          <div class=" mb-4">
                              
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload profile</label>
                        <input name="files[]" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" accept="image/*" type="file" multiple>
        
                          </div>
                          <div class="flex justify-end">
                          <button type="submit" class="text-white  inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                              <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                              Add New Profile
                          </button>
                        </div>
                      </form>
                  </div>
              </div>
          </div> 
        
          <!-- Update modal -->
          <div id="crud-modal-update" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
              <div class="relative p-4 w-full max-w-md max-h-full">
                  <!-- Modal content -->
                  <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                      <!-- Modal header -->
                      <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                          <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                              Update Profile
                          </h3>
                          <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="crud-modal-update">
                              <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                              </svg>
                              <span class="sr-only">Close modal</span>
                          </button>
                      </div>
                      <!-- Modal body -->
                      <form action="{{ route('profile.update', $user->id) }}" class="p-4 md:p-5" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                          <div class=" mb-4">
                              
        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload profile</label>
        <input name="files[]" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" accept="image/*" type="file" multiple>
        
                          </div>
                          <div class="flex justify-end">
                          <button type="submit" class="text-white  inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                              <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                              Add Update Profile
                          </button>
                        </div>
                      </form>
                  </div>
              </div>
          </div> 
          
            {{-- <div class="mt-6">
        
                <label for="file_input" class="text-xs border font-semibold text-dark bg-white py-2 px-4 border-gray rounded-md cursor-pointer">Pilih Gambar</label>
                <input class="hidden" aria-describedby="file_input_help" id="file_input" accept="image/*" name="files[]" type="file" required>
            </div> --}}
            <div class="text-sm mt-3">
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

        <p class="text-md text-dark">{{Auth::user()->email}}<br><a style="cursor: pointer" data-modal-target="ganti-email" data-modal-toggle="ganti-email" class="text-xs text-dark font-light underline">Ubah</a></p>
        

        <!-- modal email -->

        <div id="ganti-email" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden transition duration-300 ease-in-out fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full  max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-[#151515] p-12 rounded-lg shadow ">
            <!-- Modal header -->
            <div class="flex items-center justify-center   rounded-t dark:border-gray-600">

                <button type="button" class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="ganti-email">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button> 
            </div>
        <div class="">
        <h1 class=" text-center font-bold text-3xl mb-8 text-white">Ubah Email</h1>
        <div>
        </div>
        </div>
            
            <!-- Modal body -->
            <div class="">
                <form class="space-y-4" action="{{ route('profile.email.update', $user->id) }}" method="POST">
                    @csrf
                    @method("PATCH")
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-white">Email baru</label>
                        <input type="email" name="email" id="email" class="bg-[#464646] border border-[#464646] bg-transparent text-white text-sm block w-full p-2.5" placeholder="Your Email" required />
                    </div>
                    
                    <div class="w-full text-center mt-3 mb-3">
                        <button type="submit" class=" bg-white font-medium rounded-sm text-sm px-5 py-2 text-center">Save</button>
                    </div>
                </form>
            </div>
            
            </div>
        </div>
    </div>

        <!-- end modal email -->

        <!-- mobile num -->
        <div class="text-md text-end text-gray mr-3">Nomor Telepon</div>
        <p class="text-md text-start text-dark">{{Auth::user()->number}} <a style="cursor: pointer" data-modal-target="ganti-nomor" data-modal-toggle="ganti-nomor"  class="text-xs text-dark font-light underline"> <br>Ubah </a></p>

        {{-- Modal number  --}}

        <div id="ganti-nomor" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden transition duration-300 ease-in-out fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full  max-w-md max-h-full">
                <!-- Modal content -->
                <div class="relative bg-[#151515] p-12 rounded-lg shadow ">
                    <!-- Modal header -->
                    <div class="flex items-center justify-center   rounded-t dark:border-gray-600">
        
                        <button type="button" class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="ganti-nomor">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button> 
                    </div>
                <div class="">
                <h1 class=" text-center font-bold text-3xl mb-8 text-white">Ubah Nomor Telepon</h1>
                <div>
                </div>
                </div>
                    
                    <!-- Modal body -->
                    <div class="">
                        <form class="space-y-4" action="{{ route('profile.number.update', $user->id) }}" method="POST">
                            @csrf
                            @method("PATCH")
                            <div>
                                <label class="block mb-2 text-sm font-medium text-white" for="number">Nomor Telepon Baru</label>
                                <input type="text" name="number" id="number" class=" bg-transparent text-white text-sm block w-full p-2" placeholder="Your Number" required />
                            </div>
                            
                            <div class="w-full text-center mt-3 mb-3">
                                <button type="submit" class=" bg-white font-medium rounded-sm text-sm px-5 py-2 text-center">Save</button>
                            </div>
                        </form>
                    </div>
                    
                    </div>
                </div>
            </div>

            <!-- password -->
        <div class="text-md text-end text-gray mr-3">Password</div>
        <p class="text-md text-start text-dark">********<a style="cursor: pointer" data-modal-target="ganti-password" data-modal-toggle="ganti-password"  class="text-xs text-dark font-light underline"> <br>Ubah </a></p>

        {{-- Modal password  --}}

        <div id="ganti-password" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden transition duration-300 ease-in-out fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full  max-w-md max-h-full">
                <!-- Modal content -->
                <div class="relative bg-[#151515] p-12 rounded-lg shadow ">
                    <!-- Modal header -->
                    <div class="flex items-center justify-center   rounded-t dark:border-gray-600">
        
                        <button type="button" class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="ganti-password">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button> 
                    </div>
                <div class="">
                <h1 class=" text-center font-bold text-3xl mb-8 text-white">Ubah Password</h1>
                <div>
                </div>
                </div>
                    <!-- Modal body -->
<div class="">
    <form class="space-y-4" action="{{ route('profile.password.update', $user->id) }}" method="POST">
      @csrf
      @method("PATCH")
      <div>
        <label for="password" class="block mb-2 text-sm font-medium text-white">Ubah Password</label>
        <div class="relative">
          <input type="password" name="password" id="password" placeholder="••••••••" class="bg-transparent bg-[#464646] text-white text-sm block w-full p-2" required />
          <i class="uil uil-eye-slash absolute top-3 right-2 toggle" data-toggle="password"></i>
        </div>
      </div>
      <div>
        <label for="password_confirmation" class="block mb-2 text-sm font-medium text-white">Konfirmasi Password</label>
        <div class="relative">
          <input type="password" name="password_confirmation" id="password_confirmation" placeholder="••••••••" class="bg-transparent bg-[#464646] text-white text-sm block w-full p-2" required />
          <i class="uil uil-eye-slash absolute top-3 right-2 toggle" data-toggle="password_confirmation"></i>
        </div>
      </div>
      <div class="w-full text-center mt-3 mb-3">
        <button type="submit" class="bg-white font-medium rounded-sm text-sm px-5 py-2 text-center">Save</button>
      </div>
    </form>
  </div>
                    
                    </div>
                </div>
            </div>

            <script>
                // Function to toggle password visibility
                function togglePasswordVisibility(inputId, icon) {
                  console.log('togglePasswordVisibility called');
                  const input = document.getElementById(inputId);
                  if (input.type === 'password') {
                    input.type = 'text';
                    icon.classList.remove('uil-eye-slash');
                    icon.classList.add('uil-eye');
                  } else {
                    input.type = 'password';
                    icon.classList.remove('uil-eye');
                    icon.classList.add('uil-eye-slash');
                  }
                }
              
                // Add event listener to each toggle icon
                document.querySelectorAll('.toggle').forEach(toggle => {
                  toggle.addEventListener('click', function() {
                    console.log('Toggle icon clicked');
                    const inputId = this.getAttribute('data-toggle');
                    togglePasswordVisibility(inputId, this);
                  });
                });
              </script>

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
      </div>
    </main>
    </section>

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
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="modal-address">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"
                        data-modal-toggle="modal-address"/>
                    </svg>
                </button>
            </div>
            <!-- Modal body -->
            <form class="px-6 py-3 md:p-5" method="POST" action="{{route('address.store', $user->id) }}">
                @csrf
                <div class="grid gap-4 mb-4 grid-cols-4">
                    <div class="col-span-4">
                        <label for="address_label" class="block mb-2 text-md font-medium text-white ">Address Label</label>
                        <input type="text" name="address_label" id="address_label" class="bg-transparent bg-[#464646] text-white text-sm block w-full p-2" placeholder="example: Home, Apartment, etc" required="">
                    </div>
                    <div class="col-span-4">
                        <label for="recipient_name" class="block mb-2 text-md font-medium text-white ">Recipient Name</label>
                        <input type="text" name="recipient_name" id="recipient_name" class="bg-transparent bg-[#464646] text-white text-sm block w-full p-2" placeholder="enter name" required="">
                    </div>
                    <div class="col-span-4">
                        <label for="recipient_mobile_number" class="block mb-2 text-md font-medium text-white ">Recipient’s Mobile Number</label>
                        <input type="text" name="recipient_mobile_number" id="recipient_mobile_number" class="bg-transparent bg-[#464646] text-white text-sm block w-full p-2" placeholder="Type mobile number here" required="">
                    </div>
                    <div class="col-span-4">
                        <label for="address" class="block mb-2 text-md font-medium text-white ">Address</label>
                        <input type="text" name="address" id="address" class="bg-transparent bg-[#464646] text-white text-sm block w-full p-2" placeholder="type address" required="">
                    </div>
                    <div class="col-span-2">
                        <label for="state" class="block mb-2 text-md font-medium text-white ">State</label>
                        <input type="text" name="state" id="state" class="bg-transparent bg-[#464646] text-white text-sm block w-full p-2" placeholder="Type state here" required="">
                    </div>
                    <div class="col-span-2">
                        <label for="city" class="block mb-2 text-md font-medium text-white ">City</label>
                        <input type="text" name="city" id="city" class="bg-transparent bg-[#464646] text-white text-sm block w-full p-2" placeholder="Type city here" required="">
                    </div>
                    <div class="col-span-2">
                        <label for="subdistrict" class="block mb-2 text-md font-medium text-white ">Subdistrict</label>
                        <input type="text" name="subdistrict" id="subdistrict" class="bg-transparent bg-[#464646] text-white text-sm block w-full p-2" placeholder="Type subdistrict here" required="">
                    </div>
                    <div class="col-span-2">
                        <label for="postcode" class="block mb-2 text-md font-medium text-white ">Postcode</label>
                        <input type="text" name="postcode" id="postcode" class="bg-transparent bg-[#464646] text-white text-sm block w-full p-2" placeholder="Type postcode here" required="">
                    </div>
                    @php
                        $hasPrimaryAddress = App\Models\Address::where('user_id', auth()->id())->where('primary', true)->exists();
                    @endphp
                    <div class="col-span-2 items-center flex">
                        <label for="primary" class="inline-flex items-center cursor-pointer">
                            <input id="primary" type="checkbox" name="primary" value="1" class="sr-only peer" {{ $hasPrimaryAddress ? 'disabled' : '' }}>
                            <div class="relative w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                            <span class="ms-3 text-sm font-medium text-white dark:text-white">Primary Address</span>
                        </label>
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
@foreach ($addresses as $a)
<div class="w-full py-5">
    <div class="border rounded-lg p-4 shadow-sm bg-white">
        <div class="flex justify-between items-center mb-2">
            <span class="text-lg font-semibold">{{$a->address_label}}</span>
            @if ($a->primary == true)
            <span class="bg-red text-white text-xs font-medium px-2 py-1 rounded">PRIMARY</span>
            @endif
        </div>
        <div class="text-sm text-gray-700">
            <p>{{ $a->recipient_name }}</p>
            <p>{{ $a->address }}</p>
            <p>{{ $a->state }}, {{ $a->city }}, {{ $a->subdistrict }}, {{ $a->postcode }}</p>
        </div>
        <div class="flex justify-between items-center mt-4">
            <button class="text-dark text-sm">EDIT</button>

            <form action="{{ route('address.destroy', $a->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="text-md text-dark font-light" style="border: none; background: none; padding: 0;" onclick="return confirm('Are you sure you want to delete this address?')">
                    <img src="{{ asset('assets/img/trash.svg')}}" class="pl-80" alt="Trash">
                </button>
            </form>
    </div>
    </div>
</div>
@endforeach
        </div>
    </div>

   

@include('components.footer')

@endsection
