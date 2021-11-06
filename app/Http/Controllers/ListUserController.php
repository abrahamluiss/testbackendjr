<?php

namespace App\Http\Controllers;

use App\Models\UserLudik;
use Illuminate\Http\Request;

class ListUserController extends Controller
{
    public function index(Request $request)
    {
        $users = UserLudik::get();
        // dd(json_encode($users));
        return view('listusers', compact('users'));
    }
}
