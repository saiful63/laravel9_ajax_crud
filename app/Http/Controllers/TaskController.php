<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(Task $task){
        $tasks = $task->latest()->paginate('3');
        return view('tasks',compact('tasks'));
    }

    public function addTask(Request $request,Task $task){

      $request->validate(
            [
                'name'=>'required',
                'description'=>'required',

            ],
            [
                'name.required'=>'Name is mandatory',
                'name.unique'=>'Name already exists',
                'description.required'=>'Description is mandatory',
            ]
        );

      $t_execute = $task->create([
        'name'=>$request->name,
        'description'=>$request->description,
      ]);

    // $task = new Task();
    // $task->name = $request->name;
    // $task->description = $request->description;
    // $task->save();

      if($t_execute){
        return response()->json([
            'status'=>'success',
        ]);
      }
    }


    public function updateTask(Request $request,Task $task){

      $request->validate(
            [
                'name'=>'required',
                'description'=>'required',

            ],
            [
                'name.required'=>'Name is mandatory',
                'name.unique'=>'Name already exists',
                'description.required'=>'Description is mandatory',
            ]
        );

      $t_execute = $task->where('id',$request->id)->update([
        'name'=>$request->name,
        'description'=>$request->description,
      ]);

      if($t_execute){
        return response()->json([
            'status'=>'success',
        ]);
      }
    }


   
     public function deleteTask(Request $request,Task $task){


      $t_execute = $task->find($request->delete_id)->delete();

      if($t_execute){
        return response()->json([
            'status'=>'success',
        ]);
      }
    }
}
