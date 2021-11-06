<?php

namespace App\Http\Controllers;

use App\Models\UserLudik;
use Illuminate\Http\Request;

class ListUserController extends Controller
{
    public function index()
    {
        $users = UserLudik::withCount('partidas')
        ->where('Acepto', '=', true)
        ->limit(10)
        ->get();
        // dd(json_encode($users));
        return view('listusers', compact('users'));
    }
    public function registerusers(Request $request)
    {

        $date1 = $request->input('date1');
        $date2 = $request->input('date2');
        $letter = $request->input('letter');

        $count = UserLudik::whereBetween('fechaRegistro',
        [
            $date1,
            $date2
        ])->where('Nombre', 'LIKE', $letter . '%')->count();

        return view('registerusers', compact('count'));
    }
}
