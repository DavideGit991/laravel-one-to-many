<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Employee;
use App\Typology;
use App\Task;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();

        return view('pages.tasks-index',compact('tasks'));
    }

    public function show($id)
    {
        $task = Task::findOrFail($id);

        return view('pages.task-show',compact('task'));
    }
    // create
    public function create()
    {
        $emps=Employee::all();
        $type=Typology::all();

        return view('pages.task-create', compact('emps','type'));
    }
    public function store(Request $req)
    {
        Validator::make($req->all(),[

            'title' =>'required|min:3|max:100',

            'description'=> 'required|min:10',

            'priority'=> 'required|integer|between:1,5'


            ]) ->validate();
        $newtask = Task::make([
            'title'=> $req->title,
            'description'=> $req->description,
            'priority'=> $req->priority,

        ]);
        $emp = Employee::findOrFail($req->get('employee_id'));
        $newtask->employee()->associate($emp);


        $type = Typology::findOrFail($req->get('typologies'));

        $newtask->save();

        $newtask->typologies()->attach($type);

        return redirect()->route('task-index');
    }

    // update
    public function edit($id)
    {
        $task=Task::findOrFail($id);
        $emps=Employee::all();
        $types=Typology::all();

        return view('pages.task-edit',compact('emps','types','task'));
    }

    public function update(Request $req, $id)
    {
        Validator::make($req->all(),[

            'title' =>'required|min:3|max:100',

            'description'=> 'required|min:10',

            'priority'=> 'required|integer|between:1,5'


            ]) ->validate();
        // $data=$req->all();
        $task = Task::findOrFail($id);
        $task -> update($req->all());

        $emp = Employee::findOrFail($req->get('employee_id'));
        $task->employee()->associate($emp);


        $type = Typology::findOrFail($req->get('typologies'));
        $task->typologies()->sync($type);

        return redirect()->route('task-index');
    }


    // delete
    public function delete($id)
    {
        Task::destroy($id);
        return redirect()->back();
    }
    // restore
    public function restore($id)
    {
        Task::where('id', $id)->restore();
        return redirect()->route('task-index');
    }

}
