<?php

namespace App\Http\Controllers;

use App\Models\UserLudik;
use Illuminate\Http\Request;

class ListUserController extends Controller
{
    public function index(Request $request)
    {
        $users = UserLudik::withCount('partidas')
        ->where('Acepto', '=', true)
        ->limit(10)
        ->get();
        // dd(json_encode($users));
        return view('listusers', compact('users'));
    }
}
