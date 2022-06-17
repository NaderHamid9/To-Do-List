<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::latest()->get();
        $doneTask=Task::all()->where('isdone','=',0);


        return view('index' , ['tasks'=>$tasks],compact('doneTask'));
    }



    public function store(Request $request)
    {
        $request->validate(['task' => 'min:1|max:20|required']);

//        Task::create([
//            'task'=>$request->task,
//        ]);

        $task = new Task();
        $task->task=$request->input('task');

        $task->save();
        return to_route('tasks.index')->with('msg', 'New Task Added !');
//        return redirect()->route('tasks.index');

    }

    public function check($id){
        $task = new Task();
        $task = Task::find($id);
        $task->isdone = 0;

        $task->save();
        return to_route('tasks.index',['tasks'=>$task]);



    }

    public function uncheck($id){
        $task = new Task();
        $task = Task::find($id);
        $task->isdone = 1;

        $task->save();
        return to_route('tasks.index');


    }
    public function edit($id){
        $tasks = Task::find($id);
        return view('edit', [ 'tasks' => $tasks ]);
    }

    public function update(Request $request,$id){
        $task = new Task();
        $task = Task::find($id);
        $task->task=$request->input('task');

        $task->save();

        return to_route('tasks.index')->with('msg', 'Task updated successfully');




    }
}
