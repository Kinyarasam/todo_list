<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TasksController extends Controller
{
    public function index() 
    {
    //     return view('home', compact('task'));
    //     $Tasks=Tasks::all;
        return Task::orderBy('created_at', 'asc')->get();
    }

    public function create($id)
    {
        

    }

    public function show($id) 
    {
        return Task::findorFail($id);
    }

    public function store(Request $request) 
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
        ]);

        // Task::create([
        //     'title' =>$request->title,
        //     'description' => $request->description,
        // ]);
        
        $task = new Task;
        $task->title = $request->input('title');
        $task->description = $request->input('description');
        $task->save();
        // return $task; //return stored value if is operation is success-full.
        return redirect()->route('home');
    }

    public function edit($task) 
    {
        // $task = Task::findorFail($task);
        // return view('pages.edit');
    }

    public function update(Request $request, $task_id)
    {
        // public function editPost($post_id)
        // {
        //     $post = Blog::find($post_id);
        //     return view('edit_form', ['post' => $post]);
        // }

        $this->validate($request, [
            'title'=>'required',
            'description'=>'required',
        ]);

        $task = Task::findorFail($task_id);
        $task->title = $request->input('title');
        $task->description = $request->input('description');
        $task->save();
        return $task;
    }

    public function destroy(Task $task)
    {
    //     $task = Task::findorFail($id);
    //     if($task->delete()) {
            
            $task->delete();
            return redirect()->route('home');
        // }   
    }
}
