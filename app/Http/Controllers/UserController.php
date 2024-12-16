<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        try {
            $user = DB::table('users')->select('email')->get();
            return $user;
        }catch (Exception $th) {
            return "Something went wrong. Please try again.";
        }
    }
}
