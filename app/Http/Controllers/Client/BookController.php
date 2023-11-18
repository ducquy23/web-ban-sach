<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function bookDetail(Request $request,$id) {
        return view('client.productdetail');
    }
}
