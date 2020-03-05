<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductController extends Controller
{
    /**
     * @param $slug
     * @return Factory|View
     */
    public function show($slug): View
    {
        $product = Product::where('slug', $slug)->first();

        if($product === null) {
            abort(404);
        }

        return view('product', compact('product'));
    }

    public function search(Request $request)
    {
        $input = $request->get('q');
        $result = Product::search($input)->paginate(9);

        return view('search', compact('input', 'result'));
    }
}
