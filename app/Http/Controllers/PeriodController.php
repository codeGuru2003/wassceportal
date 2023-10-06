<?php

namespace App\Http\Controllers;

use App\Models\Period;
use Illuminate\Http\Request;

class PeriodController extends Controller
{
    public function index(){
        $periods = Period::all();
        return view('periods.index',[
            'title' => 'Periods',
            'periods' => $periods,
        ]);
    }

    public function create()
    {
        return view('periods.create',[
            'title' => 'Create',
        ]);
    }
    public function store(Request $request){
        $subject = new Period();
        $subject->name = request('name');
        $subject->save();
        return redirect('/periods')->with('msg','Record created successfully');
    }

    public function edit($id)
    {
        $period = Period::find($id);
        return view('periods.edit',[
            'title' => 'Edit Period',
            'period' => $period,
        ]);
    }

    public function update(Request $request, $id)
    {
        $period = Period::find($id);
        $period->name = request('name');
        $period->save();
        return redirect('/periods')->with('msg','Record updated successfully');
    }

    public function destroy($id)
    {
        $period = Period::find($id);
        $period->delete();
        return redirect('/periods')->with('msg','Record deleted successfully');
    }

}
