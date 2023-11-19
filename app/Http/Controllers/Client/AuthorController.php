<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Author;
use App\Models\Category;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index() {
        $authors =  Author::withCount('books')->get();
        $authorsWithBooks = Author::with('books')->get();
        $categories = Category::all();
        return view('client.authors',compact('authors','authorsWithBooks','categories '));
    }
}
