<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        try {
            //$user = DB::table('users')->select('email')->get();
            //$user = User::select('email')->get();
            $user = User::with('profile')->get();
            return $user;
        }catch (Exception $th) {
            return "Something went wrong. Please try again.";
        }
    }


    public function profile()
    {
        try {
            $user = Profile::with('user')->get();
            return $user;
        }catch (Exception $th) {
            return "Something went wrong. Please try again.";
        }
    }
}
