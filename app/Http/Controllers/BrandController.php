<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BrandController extends Controller
{
    public function index()
    {
        $brand = DB::table('brands')->select('id', 'brandName', 'brandImage')->get();
        return $brand;
    }


    public function createBrand(Request $request)
    {
        $brand = DB::table('brands')->insert(
            //$request->input()
            [
                'brandName' => $request->brandName,
                'brandImage' => $request->brandImage
            ]
        );
        return $brand;
    }

    public function updateBrand(Request $request)
    {
        $brand = DB::table('brands')->where('id','=' , 2)->update(
            $request->input()
        );
        return $brand;
    }
    
}
