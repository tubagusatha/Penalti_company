@extends('layout.app')
@extends('layout.nav')

@section('main')

<script>
    document.addEventListener("DOMContentLoaded", function() {
      const sections = document.querySelectorAll('.section');

      sections.forEach(section => {
        const header = section.querySelector('.section-header');
        const content = section.querySelector('.section-content');

        header.addEventListener('click', () => {
          content.classList.toggle('hidden');
          const icon = header.querySelector('.icon');
          if (content.classList.contains('hidden')) {
            icon.textContent = 'expand_more';
          } else {
            icon.textContent = 'expand_less';
          }
        });
      });
    });
  </script>

<script>
        function toggleSection(sectionId) {
            const icon = document.getElementById(`${sectionId}-icon`);
            icon.classList.toggle('rotate-180');
        }
    </script>

<div class="container lg:pl-4 lg:pr-4 lg:pt-3 xl:p-10 w-full bg-dark" style="max-width: 1800px;">
    <div class="title">
        <div class="bg-dark pl-4 pb-4 lg:pb-5">
            <h1 class="text-white text-4xl font-bold">Payment Details</h1>
        </div>
    </div>

    <div class="main w-full lg:grid lg:grid-cols-10 xl:grid-cols-9">
        <div class="bg-dark col-span-4 mt-5">
            <h1 class="text-white text-xl font-semibold ps-4">Checkout</h1>

            <div class="p-3">
                <div class=" mb-3 bg-white rounded-lg shadow-md p-4">
                    <div class="section">
                        <div class="section-header flex justify-between items-center cursor-pointer" onclick="toggleSection('shipping-address')">
                            <h2 class="text-lg font-semibold">Shipping Address</h2>
                            <svg id="shipping-address-icon" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 transition-transform rotate-180" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </div>
                        <div class="section-content">
                            <div class="space-y-4 mt-4">
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
                                            
                                          
                                            <form action="{{ route('address.store', $a->id) }}" method="POST">
                                              @csrf
                                              @method("PATCH")
                                              <button type="submit" class="text-md text-dark font-light" style="border: none; background: none; padding: 0;">
                                                <button class="text-dark text-sm">EDIT</button>
                                              </button>
                                            </form>
                                          
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
                    </div>
                </div>

                <div class="containercheckout mb-3 bg-white rounded-lg shadow-md p-4">
                    <div class="section">
                        <div class="section-header flex justify-between items-center cursor-pointer" onclick="toggleSection('shipping-address2')">
                            <span class="text-lg font-semibold">Delivery Options</span>
                            <svg id="shipping-address2-icon" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 transition-transform rotate-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </div>
                        <div class="section-content hidden mt-4">
                            <p class="text-gray-700">Delivery options content goes here.</p>
                        </div>
                    </div>
                </div>

                <div class="containercheckout bg-white rounded-lg shadow-md p-4">
                    <div class="section">
                        <div class="section-header flex justify-between items-center cursor-pointer" onclick="toggleSection('shipping-address3')">
                            <span class="text-lg font-semibold">Payment Method</span>
                            <svg id="shipping-address3-icon" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 transition-transform rotate-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </div>
                        <div class="section-content hidden mt-4">
                            <p class="text-dark">Payment method content goes here.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="col-span-1 vertical-line mx-auto my-auto bg-white hidden lg:block" style="width: 2px; height: 70%;"></div>

        <!-- Order Details -->
        <div class="bg-dark col-span-4 xl:col-span-4 md:mt-5">
            <h1 class="text-white text-xl font-Font-Products ps-4">Order Details<h1>
            <div class="bg-dark flex items-center justify-center p-3 ">
                <div class="bg-white p-6 rounded-lg shadow-md w-full">
                    <div class="flex items-center mb-6">
                        <img src="{{ asset('assets/img/pic_profile_order.svg') }}" alt="Classic Polo Shirt" class="w-30 h-auto object-cover rounded-lg">
                        <div class="ml-4 w-100">
                            <h2 class="text-lg font-semibold">Classic Polo Shirt</h2>
                            <p class="text-gray-600">Size: L</p>
                            <p class="text-gray-600">Color: Deep Purple</p>
                            <p class="text-gray-900 font-bold">Rp 128.000</p>
                            
                        </div>
                        <form class="mt-2 ml-12 md:ml-96 lg:ml-2 xl:ml-20">
          <div class="relative flex items-center max-w-[5rem]">
            <button type="button" id="decrement-button"  class="bg-white dark:bg-white dark:hover:bg-white dark:border-white hover:bg-white border border-white rounded-s-lg p-1 h-6 active:bg-gray-200">
                <svg class="w-2 h-2 text-gray hover:text-dark dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h16"/>
                </svg>
            </button>
            <input type="text" id="quantity-input"  class="bg-white border-white h-6 text-center text-black text-sm block w-12 font-Font-Products py-2.5 dark:bg-white" placeholder="0" readonly required />
            <button type="button" id="increment-button" class="bg-white dark:bg-white dark:hover:bg-white dark:border-white hover:bg-white border border-white rounded-e-lg p-1 h-6 active:bg-gray-200">
                <svg class="w-3 h-3 text-gray hover:text-dark dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
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
                    </div>
                    <div class="flex items-center mb-6">
                        <img src="{{ asset('assets/img/pic_profile_order.svg') }}" alt="Classic Polo Shirt" class="w-30 h-auto object-cover rounded-lg">
                        <div class="ml-4">
                            <h2 class="text-lg font-semibold">Classic Polo Shirt</h2>
                            <p class="text-gray-600">Size: L</p>
                            <p class="text-gray-600">Color: Deep Purple</p>
                            <p class="text-gray-900 font-bold">Rp 128.000</p>
                        </div>
                        <form class="mt-2 ml-12 md:ml-96 lg:ml-2 xl:ml-20">
        <div class="relative flex items-center max-w-[5rem]">
            <button type="button" id="decrement-button"  class="bg-white dark:bg-white dark:hover:bg-white dark:border-white hover:bg-white border border-white rounded-s-lg p-1 h-6 active:bg-gray-200">
                <svg class="w-2 h-2 text-gray hover:text-dark dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h16"/>
                </svg>
            </button>
            <input type="text" id="quantity-input"  class="bg-white border-white h-6 text-center text-black text-sm block w-12 font-Font-Products py-2.5 dark:bg-white" placeholder="0" readonly required />
            <button type="button" id="increment-button" class="bg-white dark:bg-white dark:hover:bg-white dark:border-white hover:bg-white border border-white rounded-e-lg p-1 h-6 active:bg-gray-200">
                <svg class="w-3 h-3 text-gray hover:text-dark dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                </svg>
            </button>
        </div>
    </form>
                    </div>
                    <div class="flex items-center mb-6">
                        <img src="{{ asset('assets/img/pic_profile_order.svg') }}" alt="Classic Polo Shirt" class="w-30 h-auto object-cover rounded-lg">
                        <div class="ml-4">
                            <h2 class="text-lg font-semibold">Classic Polo Shirt</h2>
                            <p class="text-gray-600">Size: L</p>
                            <p class="text-gray-600">Color: Deep Purple</p>
                            <p class="text-gray-900 font-bold">Rp 128.000</p>
                        </div>
                        <form class="mt-2 ml-12 md:ml-96 lg:ml-2 xl:ml-20">
        <div class="relative flex items-center max-w-[5rem]">
            <button type="button" id="decrement-button"  class="bg-white dark:bg-white dark:hover:bg-white dark:border-white hover:bg-white border border-white rounded-s-lg p-1 h-6 active:bg-gray-200">
                <svg class="w-2 h-2 text-gray hover:text-dark dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h16"/>
                </svg>
            </button>
            <input type="text" id="quantity-input"  class="bg-white border-white h-6 text-center text-black text-sm block w-12 font-Font-Products py-2.5 dark:bg-white" placeholder="0" readonly required />
            <button type="button" id="increment-button" class="bg-white dark:bg-white dark:hover:bg-white dark:border-white hover:bg-white border border-white rounded-e-lg p-1 h-6 active:bg-gray-200">
                <svg class="w-3 h-3 text-gray hover:text-dark dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                </svg>
            </button>
        </div>
    </form>
                    </div>
                    <div class="border-t border-gray-300 mt-4 pt-4">
                        <div class="flex justify-between text-gray-700">
                            <span>Subtotal</span>
                            <span>Rp 128.000</span>
                        </div>
                        <div class="flex justify-between text-gray-700 mt-2">
                            <span>Shipping</span>
                            <span>Rp 28.000</span>
                        </div>
                        <div class="flex justify-between text-lg font-semibold text-gray-900 mt-4">
                            <span>Total</span>
                            <span>Rp 256.000</span>
                        </div>
                    </div>
                    <button class="mt-6 w-full bg-darkred text-white py-2 rounded-lg font-semibold hover:bg-darkred">
                        Confirm Your Order
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>


    @endsection