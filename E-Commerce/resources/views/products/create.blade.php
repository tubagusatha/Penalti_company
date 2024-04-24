<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        
        <div>
            @if($errors->any())
            <div class="md-5" role="alert">
                <div class="bg-red-500 text-white font-bold-rounded-t px-4 py-2">
                    There is something wrong !!
                </div>
                <div class="border border-t-0 border-red-400 rounded-b bg-reed-100 px-4 py-5 text-red-700">
                    <p>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </p>
                </div>
            </div>
            @endif
    <form action="{{url('/indexProduct')}}" class="w-full" method="POST" enctype="multipart/form-data">
        @csrf
    <div class="px-4 py-5 bg-white sm:p-6">
        <div class="flex-wrap -mx-3 mb-6">
            <div class="w-full px-3 ">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Name</label>
                <input type="text" placeholder="Product Name" value="{{old('name_products')}}" name="name_products" class="block w-full bg-gray-200 text-gray-700 border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:bg-gray-500 ">
            </div>
        </div>
        <div class="flex-wrap -mx-3 mb-6 ">
            <div class="w-full px-3 ">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Description</label>
                <textarea id="description_products" name="description_products" class="block w-full bg-gray-200 text-gray-700 border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:bg-gray-500 ">{!! old('description_products') !!}</textarea>
            </div>
        </div>
        <div class="flex-wrap -mx-3 mb-6 ">
            <div class="w-full px-3 ">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Price</label>
                <input type="number" placeholder="Product Price" value="{{old('prices_products')}}" name="prices_products" class="block w-full bg-gray-200 text-gray-700 border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:bg-gray-500 ">
            </div>
        </div>
        <div class="flex-wrap -mx-3 mb-6 ">
            <div class="w-full px-3 ">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Qty</label>
                <input type="number" placeholder="Product Quantity" value="{{old('qty')}}" name="qty" class="block w-full bg-gray-200 text-gray-700 border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:bg-gray-500 ">
            </div>
        </div>
        <div class="flex-wrap -mx-3 mb-6 ">
            <div class="w-full px-3 text-right">
                <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded shadow-lg ">Submit</button>
            </div>
        </div>
        </div>
    </form>
        </div>
        </div>

    </div>