<x-admin-layout>
  {{-- {{ dd($categry) }} --}}
  <div class="w-full p-5 content">
    <header class="flex items-center justify-between py-4 pb-6 h-fit">
      <h1 class="text-3xl font-semibold text-white">Edit Category</h1>
      <a href={{ route('admin.categories.index') }} class="p-2 text-white bg-green-600 rounded-md hover:bg-green-700">Categories List</a>
    </header>
    <div class="flex items-center justify-center w-full py-10 rounded-md h-fit">
      <form class="bg-gray-00 w-96 h-fit" method="POST" action="{{ route('admin.categories.update', $category->id) }}" enctype="multipart/form-data" >
        @csrf
        @method('put')
        <div class="mb-6">
          <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category Name</label>
          <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ $category->name }}" required>
          @error('name')
            <span class="text-red-500">{{ $message }}</span>
          @enderror
        </div>
        <div class="mb-6">
          <label for="avatar" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category Banner</label>
          <input type="file" name="avatar" id="avatar" class="block w-full text-sm border border-gray-200 rounded-md shadow-sm file:p-1 focus:z-10 focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 file:bg-transparent file:border-0 file:bg-gray-100 file:mr-4 file:py-3 file:px-5 dark:file:bg-gray-700 dark:file:text-gray-400">
          @error('avatar')
            <span class="text-red-500">{{ $message }}</span>
          @enderror
        </div>
        <button type="submit" class="text-white w-full bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
      </form>
    </div>
  </div>
</x-admin-layout>