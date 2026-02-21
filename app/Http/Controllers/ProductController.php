<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
            [
                "name" => "iPhone 15",
                "price" => 55000,
                "description" => "Latest Apple smartphone"
            ],
            [
                "name" => "Samsung Galaxy S24",
                "price" => 48000,
                "description" => "Flagship Samsung device"
            ],
            [
                "name" => "Sony Headphones",
                "price" => 12000,
                "description" => "Noise cancelling headphones"
            ]
        ];

        return view('products', compact('products'));
    }
}