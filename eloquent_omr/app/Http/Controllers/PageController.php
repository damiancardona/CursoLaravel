<?php

namespace EloquentORM\Http\Controllers;

use Illuminate\Http\Request;

use EloquentORM\User;

use EloquentORM\Http\Requests;
use EloquentORM\Http\Controllers\Controller;

class PageController extends Controller
{
    public function home(){
        $users = User::orderBy('id', 'DESC')
        ->limit(10)
        ->get();
        return view('page.home', compact('users'));
    }
}
