<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $data = Product::all();
        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";

        return view('product',['products'=>$data]);
    }
}
