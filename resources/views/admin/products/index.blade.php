<x-admin-layout>
  <div class="w-full p-5 content">
    <header class="flex items-center justify-between py-4 pb-6 h-fit">
      <h1 class="text-3xl font-semibold text-white">Manage Products</h1>
      <a href={{ route('admin.products.create') }} class="p-2 text-white bg-green-600 rounded-md hover:bg-green-700">Create Product</a>
    </header>
    <div class="overflow-x-auto shadow-md sm:rounded-lg">
      <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
          <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
              <tr>
                  <th scope="col" class="px-6 py-3">
                      id
                  </th>
                  <th scope="col" class="px-6 py-3">
                      Name
                  </th>
                  <th scope="col" class="px-6 py-3">
                      Description
                  </th>
                  <th scope="col" class="px-6 py-3">
                      Price
                  </th>
                  <th scope="col" class="px-6 py-3">
                      Stock
                  </th>
                  <th scope="col" class="px-6 py-3">
                      Category
                  </th>
                  <th scope="col" class="px-6 py-3">
                      Actions
                  </th>
              </tr>
          </thead>
          <tbody>
            {{--
              'name',
              'description',
              'price',
              'stock',
              'category_id', 
            --}}
            @foreach ($products as $product)
              <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                  <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $product->id }}
                  </th>
                  <td class="px-6 py-4">
                    {{ $product->name }}
                  </td>
                  <td class="px-6 py-4">
                    {{ $product->description }}
                  </td>
                  <td class="px-6 py-4">
                    {{ $product->price }}
                  </td>
                  <td class="px-6 py-4">
                    {{ $product->stock }}
                  </td>
                  <td class="px-6 py-4">
                    {{ $product->category->name }}
                  </td>
                  <td class="px-6 py-4">
                    <a href={{ route('admin.products.edit', $product->id) }} class="pr-2 font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    <form action={{ route('admin.products.destroy', $product->id) }} onsubmit="return confirm('Are you sure ?');" method="POST" class="inline">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="font-medium text-red-600 dark:text-red-500 hover:underline">
                        Delete
                      </button>
                    </form>
                  </td>
              </tr>
            @endforeach
          </tbody>
      </table>
    </div>
  </div>
</x-admin-layout>