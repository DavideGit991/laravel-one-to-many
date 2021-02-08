<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Typology;
use App\Task;

class TypologyController extends Controller
{
    public function index()
    {
        $type = Typology::all();

        return view('pages.type-index',compact('type'));
    }

    public function show($id)
    {
        $type = Typology::findOrFail($id);

        return view('pages.type-show',compact('type'));
    }

    // CREATE
    public function create()
    {
        $tasks=Task::all();

        return view('pages.type-create',compact('tasks'));
    }

    public function store(Request $req)
    {
        $data=$req->all();
        // dd($data);
        $newtype=typology::make($data);
        $newtype->save();

        $tasks=Task::findOrFail($data['tasks']);
        $newtype->tasks()->attach($tasks);

        return redirect()-> route('type-show',$newtype->id);
    }

    // update
    
}