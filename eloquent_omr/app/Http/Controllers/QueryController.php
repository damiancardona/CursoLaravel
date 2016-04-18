<?php

namespace EloquentORM\Http\Controllers;

use Illuminate\Http\Request;

use EloquentORM\Http\Requests;
use EloquentORM\Http\Controllers\Controller;
use EloquentORM\User;

class QueryController extends Controller
{
    public function EloquentAll(){
        $users = User::all();
        $titulo = 'Todos los usuarios (ALL)';
        return view('query.method', compact('users', 'titulo'));
    }
    public function EloquentGet($gender){
        $users = User::where('gender', '=', $gender)->get();
        $titulo = 'Lista los usuarios (GET)';
        return view('query.method', compact('users', 'titulo'));
    }
}
