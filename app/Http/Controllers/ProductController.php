<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\ProductImage;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function index() {
        $products = Product::all();
        return view('admin.products.index', compact('products'));
    }

    public function create() {
        $categories = Category::all();
        return view('admin.products.create', compact('categories'));
    }
    public function store(Request $request) {
        $request->validate([
            'name' => 'required|string|max:50',
            'description' => 'required|string|max:1000',
            'avatar' => 'required|array',
            'avatar.*' => 'file',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'category_id' => 'required|integer',
        ]);

        $files = $request->file('avatar');
        $product = Product::create([
            'id' => 15,
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'stock' => $request->stock,
            'category_id' => $request->category_id,
        ]);

        foreach ($files as $file) {
            $uploadedFile = $file;
            $result = Cloudinary::upload($uploadedFile->getRealPath());
            $imageUrl = $result->getSecurePath();

            ProductImage::create([
                'product_id' => $product->id,
                'image_path' => $imageUrl,
            ]);
        }
        return to_route('admin.products.index');
    }
    public function edit(Product $product) { 

    }
    public function destroy(Category $category) {
        $category->delete();
        return back();
    }
}
