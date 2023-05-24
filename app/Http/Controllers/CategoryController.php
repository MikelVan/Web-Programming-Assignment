<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;

class CategoryController extends Controller
{
    public function index($category){
        $books = Category::where('name', $category)->first()->books;
        $categories = Category::all();

        return view('category', compact('category', 'books', 'categories'));
    }
}
