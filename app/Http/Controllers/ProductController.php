<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $data =  Category::where("enabled", true)->get();
        return view("main.pages.category", ["data" => $data]);
    }

    public function productDetail($slug)
    {
        $data = Product::where("code", $slug)->get()->first();

        return view("main.pages.product-detail", ["data" => $data]);
    }

    public function productList($slug)
    {
        $categoryId = Category::where("category", $slug)->get()->first();
        $count = Product::where("category_id", $categoryId->id)->count();
        if ($count == 0) {
            return view("main.pages.coming-soon");
        } else {
            $data = Product::where("category_id", $categoryId->id)->paginate(20);
            return view("main.pages.product", ["data" => $data]);
        }
    }
}
