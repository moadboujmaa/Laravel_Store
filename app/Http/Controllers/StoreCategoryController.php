<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class StoreCategoryController extends Controller
{
    public function index() {
        $categories = Category::all();
        return view('store.categories.categories', compact('categories'));
    }
    public function showCategory(Category $category) {
        return view('store.categories.showCategory', compact('category'));
    }
}
