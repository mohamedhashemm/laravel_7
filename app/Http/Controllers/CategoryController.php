<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Model\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class CategoryController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }


    public function index()
    {
        $category = DB::table('categories')->select('cate_image', 'id', 'description_' . app()->getLocale() . ' as description', 'title_' . app()->getLocale() . ' as title', 'parent_id', 'created_at')->get();
        return view('Category',['ahmed' => $category]);
    }

    public function show($category_id)
    {
        $category = Category::findOrFail($category_id);
        return view('category.show', ['category' => $category]);
    }
    public function delete($category_id)
    {
        $category = Category::findOrFail($category_id);
        if (File::exists(public_path('categories/image/' . $category->cate_image))) {
            File::delete(public_path('categories/image/' . $category->cate_image));
        } else {
            dd('File does not exists.');
        }
        $category->delete();
        return redirect()->route('admin.home')->with('danger','Delated Category ID -> ' . $category_id . ' success');
    }

    // public function show($category_id) {
    //     $category = Category::findOrFail($category_id);

    //     $children = DB::table('categories')

    //         ->select('id','description_'.app()->getLocale(). ' as description' ,'title_'.app()->getLocale(). ' as title','parent_id','created_at')
    //         ->get();

    //     return view('category.show', [
    //         'category' => $category,
    //         'children' => $children,
    //     ]);
    // }

    // create new categories
    public function create()
    {
        $category = DB::table('categories')->select('id', 'title_en')->get();
        return view("category.create", ["category" => $category]);
    }

    // save category
    public function save(CategoryRequest $request)
    {
        $imageName = "";
        if ($request->hasFile('cate_image')) {
            $image = $request->cate_image;
            $imageName = time() . "_" . rand(0, 1000) . "." . $image->extension();
            $image->move(public_path("categories/image"), $imageName);
        }

        Category::create([
            "cate_image" => $imageName,
            "id" => $request->id,
            "title_en" => $request->title_en,
            "title_ar" => $request->title_ar,
            "description_en" => $request->description_en,
            "description_ar" => $request->description_ar,
            "parent_id" => $request->parent_id,

        ]);
        return redirect()->route('admin.home')->with('success', 'Created Category ID -> ' . $request->id . ' success');
    }

    // edit category
    public function edit($cate_id)
    {
        $allcate = Category::all();
        $category = Category::findOrFail($cate_id);
        return view('category.edit', ["category" => $category , "allcate" => $allcate]);
    }

    // update category
    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'id' => 'required|max:11',
            "title_en" => "required|min:5|max:255",
            "title_ar" => "required|min:5|max:255",
            "description_en" => "required|min:10|max:255",
            "description_ar" => "required|min:10|max:255",
            'parent_id' => 'required|max:11',
            'cate_image' => 'required|image|nullable|mimes:jpg,png,jpeg,gif|max:2048'
        ]);
        $update=Category::findOrFail($request->old_id);
        //delete old image
        if (File::exists(public_path('categories/image/' . $update->cate_image))) {
            File::delete(public_path('categories/image/' . $update->cate_image));
        } else {
            dd('File does not exists.');
        }
        $imageName = "";
        if ($request->hasFile('cate_image')) {
            $image = $request->cate_image;
            $imageName = time() . "_" . rand(0, 1000) . "." . $image->extension();
            $image->move(public_path("categories/image"), $imageName);
        }

        $update->update([
            "cate_image" => $imageName,
            "id" => $request->old_id,
            "title_en" => $request->title_en,
            "title_ar" => $request->title_ar,
            "description_en" => $request->description_en,
            "description_ar" => $request->description_ar,
            "parent_id" => $request->parent_id,

        ]);
        return redirect()->route('admin.home')->with('warning', 'updated Category ID -> ' . $request->old_id . ' success');
    }
}
