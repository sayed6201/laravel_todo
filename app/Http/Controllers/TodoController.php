<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TodoController extends Controller
{
    //
    public function index(){
        $tasks=Todo::all();
        $completes = Todo::onlyTrashed()->get();
        return view('app.index',compact('tasks','completes'));

    }

    public function create(Request $request){

        if(!empty($request->get('task'))){
            $data=new Todo;
            $data->task=$request->get('task');
            $data->description=$request->get('description');
            $data->save();
            $tasks=Todo::all();
            $completes = Todo::onlyTrashed()->get();
            return view('app.index',compact('tasks','completes'));
        }else{
            $tasks=Todo::all();
            $completes = Todo::onlyTrashed()->get();
            return view('app.index',compact('tasks','completes'));
        }

    }

    public function edit($id){
        $data=Todo::find($id);
        $tasks=Todo::all();
        $completes = Todo::onlyTrashed()->get();
        return view('app.index',compact('tasks','completes','data'));
//        return $this->index2($data);
    }

    public function update(Request $request,$id){

        if(!empty($request->get('task'))){
            $data=Todo::find($id);
            $data->task=$request->get('task');
            $data->description=$request->get('description');
            $data->save();
            $tasks=Todo::all();
            $completes = Todo::onlyTrashed()->get();
            return view('app.index',compact('tasks','completes'));
        }else{
            $tasks=Todo::all();
            $completes = Todo::onlyTrashed()->get();
            return view('app.index',compact('tasks','completes'));
        }

    }

    public function delete($id){

            $data=Todo::find($id)->forceDelete();
            $tasks=Todo::all();
            $completes = Todo::onlyTrashed()->get();
            return view('app.index',compact('tasks','completes'));

    }

    public function clear($id){

        $data=Todo::onlyTrashed()->find($id)->forceDelete();
        $tasks=Todo::all();
        $completes = Todo::onlyTrashed()->get();
        return view('app.index',compact('tasks','completes'));

    }

    public function complete($id){

        $data=Todo::find($id)->delete();
        $tasks=Todo::all();
        $completes = Todo::onlyTrashed()->get();
        return view('app.index',compact('tasks','completes'));

    }

}
