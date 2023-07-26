<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $category = Category::all();
        return response()->json([
            'status'=>200,
            'category'=>$category,
        ]);
    }

    public function allcategory()
    {
        $category = Category::where('status','0')->get();
        return response()->json([
            'status'=>200,
            'category'=>$category,
        ]);
    }
}
