<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::query();

        // Проверка и фильтрация по цветам
        if ($request->has('colors') && !empty($request->input('colors'))) {
            $colors = $request->input('colors');
            $products->whereIn('color', $colors);
        }

        // Проверка и фильтрация по брендам
        if ($request->has('brands') && !empty($request->input('brands'))) {
            $brands = $request->input('brands');
            $products->whereIn('brand', $brands);
        }

        $products = $products->get();

        if ($request->ajax()) {
            return response()->json($products);
        }

        return view('index', compact('products'));
    }
}

