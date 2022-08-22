<?php

namespace App\Http\Controllers\Pos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Supplier;
use App\Models\Unit;

use Auth;
use Illuminate\Support\Carbon;


class ProductController extends Controller
{
    public function ProductAll(){
        $product = Product::latest()->get();
        return view('backend.supplier.product.product_all',compact('product'));
     }
     public function ProductAdd(){
        $supplier = Supplier::all();
        $category = Category::all();
        $unit= Unit::all();
        return view('backend.supplier.product.product_add',compact('supplier','category','unit'));

     }

    
}
