<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use App\Models\Level;
use Illuminate\Http\Request;

class ClassesController extends Controller
{
    //
    public function index(){
        $classTypes = Classes::with('level')->get();
        return view('classes.index', compact('classTypes'), [
            'title' => 'Classes',
        ]);

    }

    public function create(){
        $levelTypes = Level::pluck('name', 'id');
        return view('classes.create', compact('levelTypes'),[
            'title'=>'Create',
        ]);
    }

    public function store(Request $request)
    {
        $mclass = new Classes();
        $mclass->name = $request->input('name');
        $mclass->levels_id = $request->input('levels_id');
        $mclass->save();
        return redirect('/classes')->with('msg','Record created successfully');
    }
}
