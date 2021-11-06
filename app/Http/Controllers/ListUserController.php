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
    public function userswin(Request $request)
    {
        $costume = $request->input('costume');

        $users = UserLudik::withSum('partidas', 'puntos')
        ->where('idDisfraz', $costume)
        ->orderByDesc('partidas_sum_puntos')
        ->limit(10)
        ->get();
        return view('userswin', compact('users'));
    }
    public function userstime(Request $request)
    {
        $name = $request->input('name');

        if($name==NULL){
            return "Nulo";
        }else{

            $user = UserLudik::where('Nombre', $name)->first()
            ->partidas()->selectRaw('SUM(DATEDIFF(fechaFin , fechaInicio)) AS minutos')->first();
            // dd(json_encode($user));
            return view('userstime', compact('user', 'name'));
        }
    }
}
