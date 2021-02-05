<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
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

}
