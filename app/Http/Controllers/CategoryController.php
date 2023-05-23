<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;


class CategoryController extends Controller
{
    public function index() {
        $categories = Category::all();
        return view('admin.categories.index', compact('categories'));
    }
    public function create() {
        
        return view('admin.categories.create');
    }
    public function store(Request $request) {
        $request->validate([
            'name' => 'required|max:50',
            'avatar' => 'required|file|mimes:jpg,png,jpeg,jfif',
        ]);

        $uploadedFile = $request->file('avatar');
        $result = Cloudinary::upload($uploadedFile->getRealPath());
        $imageUrl = $result->getSecurePath();

        Category::create([
            'name' => $request->name,
            'avatar' => $imageUrl
        ]);

        return to_route('admin.categories.index');
    }
    public function edit(Request $request, Category $category) {
        return view('admin.categories.edit', compact('category'));
    }
    public function update(Request $request, Category $category) {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'avatar' => ['required', 'file', 'mimes:png,jpeg,jpg'],
        ]);
        $uploadedFile = $request->file('avatar');
        $result = Cloudinary::upload($uploadedFile->getRealPath());
        
        $imageUrl = $result->getSecurePath();
        $category->update([
            'name' => $request->name,
            'avatar' => $imageUrl,
        ]);
        return to_route('admin.categories.index');
    }
    public function destroy(Category $category) {
        $category->delete();
        return back();
    }
}
