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
    public function EloquentLists(){
        $users = User::orderBy('name', 'ASC')
            ->lists('name', 'id');
        return view('query.lists', compact('users'));
    }
    public function EloquentFirstLast(){

        $first = User::first();
        $all = User::all();
        $last = $all->last();

        return view('query.first-last', compact(['first', 'last']));
    }
    public function EloquentPaginate(){

        $users = User::orderBy('id', 'desc')
            ->paginate();

        return view('query.paginate', compact('users'));
    }
}
