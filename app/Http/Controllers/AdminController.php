<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard()
    {
        return redirect(route("admin-products"));
    }

    public function products()
    {
        $cat = Category::all();
        $prod = Product::all();
        return view("admin.pages.products", ["data" => $prod, "cat" => $cat]);
    }

    public function newProduct(Request $request)
    {
        $cat = Category::where("enabled", true)->get();
        return view("admin.pages.new-product", ["cat" => $cat]);
    }

    public function deleteProduct($id)
    {
        Product::destroy($id);
        return redirect(route("admin-products"))->with("status", ["Product has been deleted", "success"]);
    }

    public function saveProduct(Request $request)
    {
        $size = Product::where("code", $request->post("productCode"))->count();

        if ($size == 0) {
            $validatedData = $request->validate([
                'imageForm' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
                'title' => 'required',
                'productCode' => 'required',
                'category' => 'required',
                'specification' => 'required',
            ]);

            if ($validatedData) {
                $file = $request->file('imageForm')->getClientOriginalName();
                $filename = pathinfo($file, PATHINFO_FILENAME);
                $extension = pathinfo($file, PATHINFO_EXTENSION);
                $fullname = $filename . time() . '.' . $extension;
                $path = $request->file('imageForm')->storeAs('public/images', $fullname);
                $data = array(
                    "image" => $path,
                    "specification" => $request->post("specification"),
                    "code" => $request->post("productCode"),
                    "name" => $request->post("title"),
                    "category_id" => $request->post("category"),
                );
                Product::create($data);
                return redirect(route("admin-products"))->with("status", ["New Product has been created", "success"]);
            } else {
                return redirect(route("add-product"))->with("status", ["Failed please try again", "danger"]);
            }
        } else {
            return redirect(route("add-product"))->with("status", ["Product Code already exist", "danger"]);
        }
    }

    public function categories()
    {
        $data = Category::all();
        return view('admin.pages.categories', ["data" => $data]);
    }

    public function newCategories(Request $request)
    {
        $validatedData = $request->validate([
            'categoryImage' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',

        ]);

        $file = $request->file('categoryImage')->getClientOriginalName();
        $filename = pathinfo($file, PATHINFO_FILENAME);
        $extension = pathinfo($file, PATHINFO_EXTENSION);
        $fullname = $filename . time() . '.' . $extension;
        $path = $request->file('categoryImage')->storeAs('public/images', $fullname);

        $data = array(
            "category" => $request->post("categoryName"),
            "enabled" => true,
            "cat_img" => $path,
        );
        Category::create($data);


        return redirect(route("admin-categories"))->with("status", "New Category has been created");
    }
}
