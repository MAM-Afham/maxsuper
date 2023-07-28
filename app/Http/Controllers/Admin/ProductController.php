<?php

namespace App\Http\Controllers\Admin;

use App\Models\Brand;
use App\Models\category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductFormRequest;
use App\Models\Product;

class ProductController extends Controller
{
   public function index()
   {
     return view('admin.products.index');
   }
   public function create()
   {
    $brands=Brand::all();
    $categories=category::all();
    return view('admin.products.create',compact('categories','brands'));
   }
   public function store(ProductFormRequest $request)
   {
    $validatedData =$request->validated();
    $category=category::findOrFail($validatedData['category_id']);

   $product= $category->products()->create([

        'category_id' => $validatedData['category_id'],
        'name' => $validatedData['name'],
        'slug' => $validatedData['slug'],
        'slug' => Str::slug($validatedData['slug']),
        'brand' => $validatedData['brand'],
        'small_description' => $validatedData['small_description'],
        'description' => $validatedData['description'],
        'original_price' => $validatedData['original_price'],
        'selling_price' => $validatedData['selling_price'],
        'quantity' => $validatedData['quantity'],
        'trending' => $validatedData['trending'],
        'staus' => $validatedData['status'],
        'meta_title' => $validatedData['meta_title'],
        'meta_keyword' => $validatedData['meta_keyword'],
        'meta_description' => $validatedData['meta_description'],

    ]);

       return $product->id;

   }
}
