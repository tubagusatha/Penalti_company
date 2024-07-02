@extends('layout.app')

@include('layout.nav')

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
            <div class="grid grid-cols-2 gap-2 md:grid-cols-4 md:gap-4 px-5 bg-black">
                @foreach($products as $product)
                @if ($product->show_products == true)
                <div class="col-span-1">
                    <div class="max-w-full px-2 mb-7">
                        <a href="{{url("/detail/$product->id")}}"><img class="w-full" src="{{$product->gallery()->exists() ? ('http://127.0.0.1:8000/'.$product->gallery->first()->url_image) : 'data:image/gif;base64,R0lGODlhAQABAIAAAMLCwgAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==' }}" alt=""></a>
                    <div class="py-2">
                    <h1 class="text-white font-Font-Products sm:text-[18px] md:text-[20px] lg:text-[26px]">{{$product->name_products}}</h1>
                    <p class="text-white font-light text-[12px] md:text:[16px] lg:text-[18px]">
                    Rp. {{$product->prices_products}}</p>
                    </div>
                    </div>
                </div>
    @else
    @endif
    @endforeach
            </div>
        </div> 
    </div>

@include('components.footer')
@endsection
