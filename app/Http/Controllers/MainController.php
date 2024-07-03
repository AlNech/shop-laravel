<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class MainController extends BaseController
{
    public function index() {
        return view('index');
    }

    public function categories() {
        return view('categories');
    }

    public function category($category) {
        return view('category', compact('category'));
    }

    public function product($product = null) {
        return view('product', ['product' => $product]);
    }
}
