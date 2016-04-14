<?php

namespace EloquentORM\Http\Controllers;

use Illuminate\Http\Request;

use EloquentORM\Http\Requests;
use EloquentORM\Http\Controllers\Controller;

class PageController extends Controller
{
    public function home(){
        return view('page.home');
    }
}
