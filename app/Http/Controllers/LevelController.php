<?php

namespace App\Http\Controllers;

use App\Models\Level;
use Illuminate\Http\Request;

class LevelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $levels = Level::all();

        return view('levels.index',[
            'title' => 'Levels',
            'levels' => $levels,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('levels.create',[
            'title' => 'Create',
        ]);
    }

    public function store(Request $request)
    {
        $level = new Level;
        $level->name = request('name');
        $level->save();
        return redirect('/levels');
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        $level = Level::find($id);
        return view('levels.edit',[
            'title' => 'Edit Level',
            'level' => $level,
        ]);
    }

    public function update(Request $request, $id)
    {
        $level = Level::find($id);
        $level->name = request('name');
        $level->save();
        return redirect('/levels');
    }

    public function destroy($id)
    {
        $level = Level::find($id);
        $level->delete();
        return redirect('/levels');
    }
}
