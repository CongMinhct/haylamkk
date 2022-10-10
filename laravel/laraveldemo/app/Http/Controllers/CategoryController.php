<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(){
        //khai bao mang ket hop luu toan bo du lieu tuy van
        $categories = Category::all();
        return view('admin.listCategory', compact("categories"));
    }
}
