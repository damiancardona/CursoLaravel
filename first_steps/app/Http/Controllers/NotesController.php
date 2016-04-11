<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use \App\Note;
use Illuminate\Support\Facades\Redirect;

class NotesController extends Controller
{
    public function index()
    {
        $notes = Note::paginate(20);
        return view('notes/list', compact('notes'));
    }

    public function create(){
        return view('notes/create');
    }

    public function store(Request $request){

        $this->validate(request(), [
            'note'  =>  ['required', 'max:60' ]
        ]);

        $data = $request->only('note');

        Note::create($data);

        return redirect()->to('notes');
    }

    public function show($note){
        $note = Note::find($note);
        return view('notes/details', compact('note'));
    }
}

