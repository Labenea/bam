<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $prod = Product::all()->take(2);
        return view("main.pages.home", ["prod" => $prod]);
    }
}
