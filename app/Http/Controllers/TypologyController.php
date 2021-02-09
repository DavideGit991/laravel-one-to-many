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

        $newtype=typology::make($data);
        $newtype->save();

        $tasks=Task::findOrFail($data['tasks']);
        $newtype->tasks()->attach($tasks);

        return redirect()-> route('type-show',$newtype->id);
    }

    // update
    public function edit($id)
    {
        $type = Typology::findOrFail($id);
        $tasks=Task::all();
        return view('pages.type-edit',compact('type','tasks'));
    }

    public function update(Request $req,$id)
    { 
        $data = $req->all();
        
        $typeupdate= Typology::findOrFail($id);
        $typeupdate->update($data);
        $typeupdate->save();
        
        $tasks=Task::findOrFail($data['tasks']);
        $typeupdate->tasks()->sync($tasks);

        return redirect()->route('type-show', $typeupdate->id);
    }
}