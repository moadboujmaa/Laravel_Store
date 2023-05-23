<x-admin-layout>
  <div class="w-full p-6 create">
    <header class="flex items-center justify-between py-4 pb-6 h-fit">
      <h1 class="text-3xl font-semibold text-white">Create Product</h1>
      <a href={{ route('admin.products.index') }} class="p-2 text-white bg-green-600 rounded-md hover:bg-green-700"> Products List</a>
    </header>
    <div class="flex items-center justify-center w-full pt-6 rounded-md h-fit">
      <form class="bg-gray-00 w-96 h-fit" method="POST" action="{{ route('admin.products.store') }}" enctype="multipart/form-data" >
        @csrf
        {{-- product name --}}
        <div class="mb-6">
          <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Products Name</label>
          <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
          @error('name')
            <span class="text-red-500">{{ $message }}</span>
          @enderror
        </div>
        
        {{-- description --}}
        <div class="mb-6">          
          <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Description</label>
          <textarea id="description" name="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your thoughts here..."></textarea>
          @error('description')
            <span class="text-red-500">{{ $message }}</span>
          @enderror
        </div>

        {{-- Images --}}
        <div class="mb-6">
          <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="avatar">Upload multiple files</label>
          <input id="avatar" name="avatar[]" class="block w-full text-sm border border-gray-200 rounded-md shadow-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 file:bg-transparent file:border-0 file:bg-gray-100 file:mr-4 file:py-3 file:px-4 dark:file:bg-gray-700 dark:file:text-gray-400 " id="multiple_files" type="file" multiple>
          @error('avatar') 
            <span class="text-red-500">{{ $message }}</span>
          @enderror
        </div>
        
        {{-- price --}}
        <div class="mb-6">
          <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Price</label>
          <input type="number" name="price" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
          @error('price')
            <span class="text-red-500">{{ $message }}</span>
          @enderror
        </div>
        
        {{-- stock --}}
        <div class="mb-6">
          <label for="stock" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Stock Of Product</label>
          <input type="number" name="stock" id="stock" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
          @error('stock')
            <span class="text-red-500">{{ $message }}</span>
          @enderror
        </div>
        {{-- category --}}
        <div class="mb-6">
          <label for="category_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Category</label>
          <select name="category_id" id="category_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            @foreach ($categories as $categorie)
              <option value="{{ $categorie->id }}">{{ $categorie->name }}</option>
            @endforeach
          </select>
          @error('category_id')
            <span class="text-red-500">{{ $message }}</span>
          @enderror
        </div>
        <button type="submit" class="text-white w-full bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
      </form>
    </div>
  </div>
</x-admin-layout>