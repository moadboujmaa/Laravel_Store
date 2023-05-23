<x-app-layout>
  <div class="mx-auto my-2 max-w-7xl">
    <div class="w-full py-3 text-center">
      <p class="text-3xl font-semibold text-orange-500">{{ $category->name }} Category</p>
    </div>
    <div class="flex flex-wrap items-start justify-around mx-auto my-5 max-w-7xl">
      @foreach ($category->products as $product)
      @php
        $limitedText = Str::words($product->description, 9, '...');
      @endphp
      <div class="max-w-sm my-2 bg-white border-2 rounded-md shadow-lg">
        @if (count($product->images) === 0)
          <img class="w-full rounded-t-md" src={{ asset('/images/image.404.png') }} alt="product_image" />
        @else
          <img class="w-full rounded-t-md" src={{ $product->images[0]->image_path }} alt="product_image" />
        @endif
        <div class="p-3">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">{{ $product->name }}</h5>
            <p class="mb-3 font-normal text-gray-600">{{ $limitedText }}</p>
            <a href="{{ route('store.showCategory', $product->category->id) }}">
              <p class="px-2 mb-3 text-sm font-semibold text-orange-900 bg-orange-200 rounded-full w-fit hover:underline">{{ $product->category->name }}</p>
            </a>
            <div class="flex items-center justify-between mb-4">
              <div class="flex items-center justify-start gap-2 text-2xl font-semibold text-gray-800">
                <img src={{ asset('icons/dollar-bill.png') }} alt="dollar" class="w-9">
                <u>{{ $product->price }}DH</u>
              </div>
              <div class="flex items-center justify-start gap-2 {{ $product->stock < 20 ? 'text-red-500' : 'text-green-600' }} font-semibold text-lg">
                @if ($product->stock < 20)
                  <img src={{ asset('icons/boxes-red.png') }} class="w-5" alt="">
                @else
                  <img src={{ asset('icons/boxes.png') }} class="w-5" alt="">
                @endif
                <p>{{ $product->stock }}</p>
              </div>
            </div>
            <div class="grid grid-cols-4 gap-3">
              {{-- href={{ route('store.cart.store', [auth()->user()->id, $product->id] ) }} --}}
              @auth
                <button type="button" onclick="addToCartRequest({{ auth()->user()->id }}, {{ $product->id }})" class="flex items-center justify-center col-span-3 gap-3 px-3 py-2 text-sm font-semibold text-center text-white bg-orange-500 rounded-sm">
                  <img src={{ asset('icons/cart-white.png') }} alt="cart" class="w-5">
                  <p>Add To Cart</p>
                </button>
              @else
                <a href={{ route('login') }}  class="flex items-center justify-center col-span-3 gap-3 px-3 py-2 text-sm font-semibold text-center text-white bg-orange-500 rounded-sm">
                  <button type="button">
                    <img src={{ asset('icons/cart-white.png') }} alt="cart" class="w-5">
                    <p>Add To Cart</p>
                  </button>
                </a>
              @endauth
              <a href="#" class="flex items-center justify-center w-full h-full col-span-1 text-orange-500 border-2 border-orange-500 rounded-sm">
                <img src={{ asset('icons/heart.png') }} alt="heart" class="w-5">
              </a>
            </div>
          </div>
      </div>
      @endforeach                 
    </div>
  </div>
</x-app-layout>