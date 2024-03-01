<?php

namespace App\Http\Controllers;

use App\Model\Category;
use App\Model\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        return view('home');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {
        // $category=Category::all();
        // $product=Product::all();
        $category = DB::table('categories')->select('cate_image', 'id', 'description_' . app()->getLocale() . ' as description', 'title_' . app()->getLocale() . ' as title', 'parent_id', 'created_at')->get();
        $product = DB::table('products')->select('cate_image', 'id', 'description_' . app()->getLocale() . ' as description', 'title_' . app()->getLocale() . ' as title', 'price', 'quantity', 'created_at')->get();
        return view('adminHome', ['ahmed' => $category, 'mohamed' => $product]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function managerHome()
    {
        return view('managerHome');
    }
}
