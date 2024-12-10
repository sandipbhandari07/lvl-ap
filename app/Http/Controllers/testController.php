<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\test;

class testController extends Controller
{

    public function index() {
        $tests = test::all();
        return view("test.index",["tests"=> $tests]);
    }
    public function create() {
        return view("test.create");
    }

    public function store(Request $request) {
    $data = $request->validate([
        "name"=> "required",
        "status"=>"required",
        "descriptions" => "required",
        "date"=> "required",
    ]);

    $newTest = test::create($data);
    return redirect(route("test.index"));

    }
    public function edit(test $test) {
        return view('test.edit',['test'=> $test]);
    }
    public function update(test $test, Request $request){
        $data = $request->validate([
            "name"=> "required",
        "status"=>"required",
        "descriptions" => "required",
        "date"=> "required",
        ]);

        $test->update($data);

        return redirect(route('test.index'))->with('success', 'test Updated Succesffully');

    }

    public function destroy(test $test){
        $test->delete();
        return redirect(route('test.index'))->with('success', 'test deleted Succesffully');
    }
}
