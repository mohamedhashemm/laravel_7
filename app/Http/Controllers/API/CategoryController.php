<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;
use App\Model\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    // all data API
    public function index()
    {
        $categories = CategoryResource::collection(Category::all());
        $data = [
            "msg" => "This all data",
            "status" => 200,
            "data" => $categories
        ];
        return response()->json($data);
    }

    // show one record in data API
    public function show($id)
    {
        $category = Category::find($id);
        if ($category) {
            $data = [
                "msg" => "Return one record DB",
                "status" => 200,
                "data" => new CategoryResource($category)
            ];
            return response()->json($data);
        } else {
            $data = [
                "msg" => "NO such ID",
                "status" => 201,
                "data" => null
            ];
            return response()->json($data);
        }
    }

    // created data API
    public function create(Request $request)
    {

        // validate check value
        $validator = Validator::make($request->all(), [
            'id' => 'required|unique:categories|max:11',
            "title_en" => "required|min:5|max:255",
            "title_ar" => "required|min:5|max:255",
            "description_en" => "required|min:10|max:255",
            "description_ar" => "required|min:10|max:255",
            'parent_id' => 'required|max:11',
            'cate_image' => 'required|image|nullable|mimes:jpg,png,jpeg,gif|max:2048'
        ]);

        // show errors validator check
        if ($validator->fails()) {
            $data = [
                "msg" => "please check value requires",
                "status" => 203,
                "data" => $validator->errors()
            ];
            return response()->json($data);
        }

        //image upload
        $imageName = "";
        if ($request->hasFile('cate_image')) {
            $image = $request->cate_image;
            $imageName = time() . "_" . rand(0, 1000) . "." . $image->extension();
            $image->move(public_path("categories/image"), $imageName);
        }

        // insert new category
        $category = Category::create([
            "cate_image" => $imageName,
            "id" => $request->id,
            "title_en" => $request->title_en,
            "title_ar" => $request->title_ar,
            "description_en" => $request->description_en,
            "description_ar" => $request->description_ar,
            "parent_id" => $request->parent_id,
        ]);

        $data = [
            "msg" => "created API success",
            "status" => 200,
            "data" => $category
        ];
        return response()->json($data);
    }

    // delete one Record API in data
    public function delete(Request $request)
    {
        $delete = Category::find($request->id);
        //delete old image
        if (File::exists(public_path('categories/image/' . $delete->cate_image))) {
            File::delete(public_path('categories/image/' . $delete->cate_image));
        } else {
            dd('File does not exists.');
        }
        $delete->delete();
            $data = [
                "msg" => "Deleted ID:$request->id success",
                "status" => 205,
                "data" => null
            ];
            return response()->json($data);
    }

    // update one record in data
    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id' => 'required|max:11',
            "title_en" => "required|min:5|max:255",
            "title_ar" => "required|min:5|max:255",
            "description_en" => "required|min:10|max:255",
            "description_ar" => "required|min:10|max:255",
            'parent_id' => 'required|max:11',
            'cate_image' => 'required|image|nullable|mimes:jpg,png,jpeg,gif|max:2048'
        ]);
        // show errors validator check
        if ($validator->fails()) {
            $data = [
                "msg" => "please check value requires",
                "status" => 203,
                "data" => $validator->errors()
            ];
            return response()->json($data);
        }
        $update = Category::findOrFail($request->old_id);
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

        // insert update data
        $update->update([
            "cate_image" => $imageName,
            "id" => $request->old_id,
            "title_en" => $request->title_en,
            "title_ar" => $request->title_ar,
            "description_en" => $request->description_en,
            "description_ar" => $request->description_ar,
            "parent_id" => $request->parent_id,

        ]);
        $data = [
            "msg" => "Updated $request->old_id success",
            "status" => 200,
            "data" => $update
        ];
        return response()->json($data);
    }
}
