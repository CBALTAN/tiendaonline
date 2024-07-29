<?php

namespace App\Http\Controllers;
use App\Http\Requests\RegistoRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

use Illuminate\Http\Request;

class RegistroController extends Controller
{
    //
    public function show(){
        if(Auth::check()){
            return redirect('/home');
        }
        return view('auth.registro');
    }

    public function registro(RegistoRequest $request){
        $user = User::create($request->validated());
        return redirect('/login')->with('success','Cuenta Creada con Exito');
    }
}
