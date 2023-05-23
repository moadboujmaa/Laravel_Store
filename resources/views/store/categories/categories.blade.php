<x-app-layout>
  <div class="grid grid-cols-2 gap-4 mx-auto my-5 max-w-7xl">
    @foreach ($categories as $category)
    @if (count($category->products)>0)
      <div class="w-full p-3 mb-4 border-2 border-orange-500 rounded-sm shadow-lg grid-span-1">
        <div class="w-full">
          <h1 class="pb-4 text-2xl font-bold text-center text-black">{{ $category->name }}</h1>
        </div>
        <div class="grid grid-cols-2 gap-3">
          @for ($i = 0; $i < 2; $i++)
            <div class="max-w-sm my-2 bg-white border-2 rounded-md shadow-lg">
              <img class="w-full rounded-t-md" src={{ $category->products[$i]->images[0]->image_path }} alt="product_image" />
              <div class="p-3">
                  <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">{{ $category->products[$i]->name }}</h5>
                  <div class="flex items-center justify-between mb-4">
                    <div class="flex items-center justify-start gap-2 text-2xl font-semibold text-gray-800">
                      <img src={{ asset('icons/dollar-bill.png') }} alt="dollar" class="w-9">
                      <u>{{ $category->products[$i]->price }}DH</u>
                    </div>
                    <div class="flex items-center justify-start gap-2 {{ $category->products[$i]->stock < 20 ? 'text-red-500' : 'text-green-600' }} font-semibold text-lg">
                      @if ($category->products[$i]->stock < 20)
                        <img src={{ asset('icons/boxes-red.png') }} class="w-5" alt="">
                      @else
                        <img src={{ asset('icons/boxes.png') }} class="w-5" alt="">
                      @endif
                      <p>{{ $category->products[$i]->stock }}</p>
                    </div>
                  </div>
                  <div class="grid grid-cols-4 gap-2">
                    @auth
                      <button type="button" onclick="addToCartRequest({{ auth()->user()->id }}, {{ $category->products[$i]->id }})" class="flex items-center justify-center col-span-3 gap-3 px-3 py-2 text-sm font-semibold text-center text-white bg-orange-500 rounded-sm">
                        <img src={{ asset('icons/cart-white.png') }} alt="cart" class="w-5">
                        <p>Add To Cart</p>
                      </button>
                    @else
                      <a href={{ route('login') }}  class="col-span-3 gap-3 px-3 py-2 text-sm font-semibold text-center text-white bg-orange-500 rounded-sm">
                        <button type="button" class="flex items-center justify-center w-full gap-2">
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
          @endfor
        </div>
        <div class="w-full text-right">
          <a href={{ route('store.showCategory', $category->id ) }} class="font-semibold text-orange-500 hover:underline">See more products >></a>
        </div>
      </div>
    @endif
    @endforeach
  </div>
</x-app-layout>