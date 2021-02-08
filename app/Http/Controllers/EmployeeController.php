<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\Typology;
use App\Task;

class EmployeeController extends Controller
{
    public function index()
    {
        $emps = Employee::all();

        return view('pages.emps-index',compact('emps'));
    }

    public function show($id)
    {
        $emp = Employee::findOrFail($id);

        return view('pages.emp-show',compact('emp'));
    }

    // function create
    public function create()
    {
        return view('pages.emp-create');
    }

    public function store(Request $res)
    {
        Employee::create($res->all());
        return redirect()->route('emp-index');
    }
}
