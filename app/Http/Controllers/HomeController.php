<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Good;

class HomeController extends Controller
{
    public function index() {

        $categories = Category::all();
        $goods = Good::with('category')->get();
        return view('index', compact('categories', 'goods'));
    }
}
