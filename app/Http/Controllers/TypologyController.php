<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Typology;

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
}