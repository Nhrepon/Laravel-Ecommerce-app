<?php

namespace App\Http\Controllers;

use Illuminate\Database\Query\JoinClause;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index(){
        $data = DB::table('products')->get();
        //$query = DB::table('users')->select('email');
        //$data = DB::table('products')->union($query)->get();
        return $data;
    }


    public function productList(){ 
        $products=DB::table('products')
        ->join('categories', function (JoinClause $join){
            $join->on('products.category_id', '=', 'categories.id')->where('products.price', '>', 5);
        })
        ->join('brands', function (JoinClause $join){
            $join->on('products.brand_id', '=', 'brands.id');
        })
        ->select('products.*', 'categories.categoryName', 'brands.brandName')
        ->where('products.title', 'LIKE', '%Macbook%')
        ->get();

        return $products;
        }
}
