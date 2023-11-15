<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $bestSellingBooks = Book::with('categories')->get();
        return view('client.home',compact('bestSellingBooks'));
    }
}
