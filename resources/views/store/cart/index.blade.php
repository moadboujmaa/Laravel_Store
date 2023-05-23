<x-app-layout>
  <div class="py-5 mx-auto max-w-7xl">
    @php
      $cart_items = auth()->user()->cart_items;
      $total = 0;
    @endphp
    @if (count($cart_items) === 0)
      <div class="text-center">
        <p class="mt-10 text-4xl font-semibold text-gray-500">No products added yet</p>
        <a href={{ route('store.products') }} class="text-orange-500 underline">See all products</a>
      </div>
    @else
      <table class="w-full text-sm text-left text-gray-500 ">
        <thead class="text-xs text-gray-700 uppercase bg-gray-300">
          <tr>
            <th scope="col" class="px-6 py-3">
              Image
            </th>
            <th scope="col" class="px-6 py-3">
              Name
            </th>
            <th scope="col" class="px-6 py-3">
              Price
            </th>
            <th scope="col" class="px-6 py-3">
              Category
            </th>
            <th scope="col" class="px-6 py-3">
              Actions
            </th>
          </tr>
        </thead>
        <tbody class="">
          @foreach ($cart_items as $cart_item)
            @php
              $total = $total + $cart_item->product->price
            @endphp
            <tr class="bg-gray-200 border-b ">
              {{-- {{ dd($cart_item->id) }} --}}
                <td class="px-6 py-4">
                  @if (count($cart_item->product->images) == 0)
                    <img src={{ asset('/images/404.image.png') }} class="w-8" alt="404.image">
                  @else
                    <img src={{ $cart_item->product->images[0]->image_path }} class="w-14" alt="product_image">
                  @endif
                </td>
                <td class="px-6 py-4">
                  {{ $cart_item->product->name }}
                </td>
                <td class="px-6 py-4">
                  {{ $cart_item->product->price }}
                </td>
                <td class="px-6 py-4">
                  {{ $cart_item->product->category->name }}
                </td>
                <td class="flex items-center justify-start gap-4 px-6 py-4">
                  <p class="w-6 h-6 text-xl font-bold text-center text-orange-500 bg-gray-400 rounded-full cursor-pointer" onclick="decrementItems({{ $cart_item->id }})">-</p>
                  {{ $cart_item->items }}
                  <p class="w-6 h-6 text-xl font-bold text-center text-orange-500 bg-gray-400 rounded-full cursor-pointer" onclick="incrementItems({{ $cart_item->id }})">+</p>
                </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    @endif
    <div class="flex items-center justify-between py-5">
      <p class="text-xl font-semibold text-gray-900">{{ $total }}dh</p>
      <a href={{ route('order.store') }} class="btn">Pass an order</a>
    </div>
  </div>
</x-app-layout>

{{-- @foreach ($cart_items as $cart_item)
  @php
    $limitedText = Str::words($cart_item->items, 9, '...');
  @endphp
  <div class="flex items-center justify-between p-2 rounded-md shadow-lg">
    @if (count($cart_item->product->images) == 0)
      <img src={{ asset('/images/404.image.png') }} class="w-8" alt="404.image">
    @else
      <img src={{ $cart_item->product->images[0]->image_path }} class="w-14" alt="product_image">
    @endif
    <p>{{ $cart_item->product->name }}</p>
    <p>{{ $cart_item->product->price }}</p>
    <p>{{ $cart_item->product->category->name}}</p>
  </div>
@endforeach --}}