@extends('layout.app')
<footer class="bg-[#222222]">
    <div class="mx-auto w-full max-w-screen-xl">
      <div class="grid grid-cols-2 gap-8 px-4 py-6 lg:py-8 md:grid-cols-4">
        <div>
            <h2 class="mb-6 text-sm font-semibold uppercase text-white">Pinalti Company</h2>
        </div>
        <div>
            <h2 class="mb-6 text-sm font-semibold  uppercase text-white">Shop</h2>
            <ul class="text-gray-500 dark:text-gray-400 font-medium">
                @if($categories->isEmpty())
    <li class="mb-4">
        <a href="#" class="hover:underline">No Categories Found</a>
    </li>
@else
    @foreach($categories as $category)
        <li class="mb-4">
            <a href="{{ url("/menu_item/" . $category->id) }}"" class="hover:underline">{{ $category->name_category }}</a>
        </li>
    @endforeach
@endif
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
</footer>