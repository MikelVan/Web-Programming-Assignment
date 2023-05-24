<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Publisher;
use App\Models\Category;

class PublisherController extends Controller
{
    public function index(){
        $publishers = Publisher::all();
        $categories = Category::all();
        return view('publisher', compact('publishers', 'categories'));
    }

    public function detail(Publisher $publisher){
        $books = $publisher->books;
        $categories = Category::all();
        return view('publisher-detail', compact('publisher', 'books', 'categories'));
    }
}
