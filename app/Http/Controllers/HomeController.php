<?php

namespace App\Http\Controllers;
use App\Models\Product;
class HomeController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function index()
    {
        $products = Product::all();
        return view('home', compact('products'));
    }
}
