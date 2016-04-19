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
    public function EloquentGetCustom(){
        $users = User::where('gender', '=', 'f')
            ->get(array('id', 'name', 'biography'));
        $titulo = 'Lista los usuarios (GET Custom - con Array)';
        return view('query.method', compact('users', 'titulo'));
    }
    public function EloquentDelete($id){
        $user = User::find($id);
        $user->delete();
        return view('page.delete');
    }
}
