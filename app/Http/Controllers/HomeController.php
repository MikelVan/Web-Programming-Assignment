<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Book;
use App\Models\Category;

class HomeController extends Controller
{
    public function index(){
        $books = Book::all();
        $categories = Category::all();
        return view('home', compact('books', 'categories'));
    }

    public function detail(Book $book){
        $categories = Category::all();
        return view('book-detail', compact('book', 'categories'));
    }
}
