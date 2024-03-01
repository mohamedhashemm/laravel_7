<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Model\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    public function index()
    {
        $product = DB::table('products')->select('cate_image', 'id', 'description_' . app()->getLocale() . ' as description', 'title_' . app()->getLocale() . ' as title', 'price', 'quantity', 'created_at')->get();
        return view('product', ['mohamed' => $product]);
    }
    
    public function show($product_id)
    {
        $product = Product::findOrFail($product_id);
        return view('product.show', ['product' => $product]);
    }
    public function delete($product_id)
    {
        $product = Product::findOrFail($product_id);
        if (File::exists(public_path('products/image/' . $product->cate_image))) {
            File::delete(public_path('products/image/' . $product->cate_image));
        } else {
            dd('File does not exists.');
        }
        $product->delete();
        return redirect()->route('admin.home');
    }

    // create new products
    public function create()
    {
        return view("product.create");
    }

    // save new products
    public function save(ProductRequest $request)
    {
        // $validatedData = $request->validate([
        //     'id' => 'required|unique:products|max:11',
        //     "title_en" => "required|min:5|max:255",
        //     "title_ar" => "required|min:5|max:255",
        //     "description_en" => "required|min:10|max:255",
        //     "description_ar" => "required|min:10|max:255",
        //     'price' => 'required|max:11',
        //     'quantity' => 'required|max:11',
        //     'cate_image' => 'required|image|nullable|mimes:jpg,png,jpeg,gif|max:2048'
        // ]);

        $imageName = "";
        if ($request->hasFile('cate_image')) {
            $image = $request->cate_image;
            $imageName = time() . "_" . rand(0, 1000) . "." . $image->extension();
            $image->move(public_path("products/image"), $imageName);
        }

        Product::create([
            "cate_image" => $imageName,
            "id" => $request->id,
            "title_en" => $request->title_en,
            "title_ar" => $request->title_ar,
            "description_en" => $request->description_en,
            "description_ar" => $request->description_ar,
            "price" => $request->price,
            "quantity" => $request->quantity,

        ]);
        return redirect()->route('admin.home')->with('success_product', 'Created product ID -> ' . $request->id . ' success');
    }

    // edit product
    public function edit($product_id)
    {
        $allproduct = Product::all();
        $product = Product::findOrFail($product_id);
        return view('product.edit', ["product" => $product, "allproduct" => $allproduct]);
    }

    // update product
    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'id' => 'required|max:11',
            "title_en" => "required|min:5|max:255",
            "title_ar" => "required|min:5|max:255",
            "description_en" => "required|min:10|max:255",
            "description_ar" => "required|min:10|max:255",
            'price' => 'required|max:11',
            'quantity' => 'required|max:11',
            'cate_image' => 'required|image|nullable|mimes:jpg,png,jpeg,gif|max:2048'
        ]);
        $update = Product::findOrFail($request->old_id);
        if (File::exists(public_path('products/image/' . $update->cate_image))) {
            File::delete(public_path('products/image/' . $update->cate_image));
        } else {
            dd('File does not exists.');
        }
        $image = $update->cate_image;
        $imageName = "";
        if ($request->hasFile('cate_image')) {
            $image = $request->cate_image;
            $imageName = time() . "_" . rand(0, 1000) . "." . $image->extension();
            $image->move(public_path("products/image"), $imageName);
        }
        $update->update([
            "cate_image" => $imageName,
            "id" => $request->old_id,
            "title_en" => $request->title_en,
            "title_ar" => $request->title_ar,
            "description_en" => $request->description_en,
            "description_ar" => $request->description_ar,
            "price" => $request->price,
            "quantity" => $request->quantity,
        ]);
        return redirect()->route('admin.home')->with('warning_product', 'updated Product ID -> ' . $request->old_id . ' success');
    }
}
