<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Resources\CategoryResource;
use App\Http\Resources\InvoiceResource;
use App\Http\Resources\ProductResource;
use App\Http\Resources\userResource;
use App\Invoice;
use App\Product;
use App\User;

class AllController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function allProducts()
    {
        $products = Product::all();
        return ProductResource::collection($products);

    }

    public function categories()
    {
        $categories = Category::all();
        return CategoryResource::collection($categories);
    }


    public function singleProduct($id)
    {
        $product = Product::find($id);
        return new ProductResource($product);
    }

    public function userInvoice($id)
    {
        $user=User::find($id);
        $invoices=Invoice::where('user_id','=',$id)->latest()->first();
        return new InvoiceResource ($invoices);
    }

    public function singleUser($id)
    {
        $user = User::find($id);
        return new userResource($user);
    }

    public function allUsers()
    {
        $users = User::all();
        return userResource::collection($users);

    }
}
