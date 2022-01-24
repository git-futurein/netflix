<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){

        return view('frontend.index', [
            'banners' => Banner::latest()->get(),
            'categories' => Category::all(),
            'books' => Book::latest()->get(),
        ]);
    }
}
