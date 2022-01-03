<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;
use Illuminate\Support\Facades\Redirect;

class testController extends Controller
{
    //
    public function index(){
        $tests=Test::all();
        return view("testIndex",['tests'=>$tests]);
    }
    public function create(){
        return view('testCreate');
    }
    public function store(request $request){
        // echo $request->name;
        // echo $request->grade;
        Test::create([
            'name'=>$request->name,
            'grade'=>$request->grade
        ]);
        return Redirect::back()->withErrors(['msg'=>'Added Successfully']);
    }
    public function view($id){
        $test=Test::find($id);
        return view('testView',['test'=>$test]);
    }
    public function edit($id){

    }

    public function update($id,Request $request){

    }
    public function delete($id){
        $test=Test::find($id);
        $test->delete();
        return Redirect::back()->withErrors(['msg'=>'Deleted Successfully']);
    }
}
