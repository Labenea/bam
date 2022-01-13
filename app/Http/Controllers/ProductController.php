<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view("main.pages.product");
    }

    public function productDetail($slug)
    {
        return view("main.pages.product-detail");
    }
}
