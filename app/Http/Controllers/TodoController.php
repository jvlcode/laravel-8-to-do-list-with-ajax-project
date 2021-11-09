<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index(){
        $todos = Todo::all();
        return view('index',['todos'=>$todos]);
    }
    public function add(Request $request){
        if($request->ajax()){
            $todo = new Todo;
            $todo->title = $request->title;
            $todo->save();
            $last_todo = Todo::where('id',$todo->id)->get();
            return view('ajaxData',['todos'=>$last_todo]);
        }
    }
    public function update(Request $request, $id){
        if($request->ajax()){
            $todo = Todo::find($id);
            $todo->title = $request->title;
            $todo->save();
            return "OK";
        }
    }
    public function delete(Request $request,$id){
        if($request->ajax()){
            $todo = Todo::find($id);
            $todo->delete();
            return "OK";
        }
    }
    public function done(Request $request,$id){
        if($request->ajax()){
            $todo = Todo::find($id);
            $todo->status = 2;
            $todo->save();
            return "OK";
        }
    }


}
