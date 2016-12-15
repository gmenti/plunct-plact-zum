<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the home page application.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home', [
			'products' => Product::all(),
		]);
    }
}
