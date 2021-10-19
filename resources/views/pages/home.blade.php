@extends('layouts.default')
@section('content')
    
    <div class="bg-blue-400 text-sm justify-center h-screen">
        
        <div class="flex justify-center">

            <form action="{{ url('tasks') }}" method="POST" class="bg-blue-100 shadow-xl rounded w-4/12 mb-4 mt-4 pt-2 pb-2 p-4">
                @csrf
                <div>
                    <label for="task"><span class="font-md font-bold">Task:</span></label>
                    <input type="text" name="title" id="task-title" placeholder="Title" value="" class="rounded-xl p-4">
                    <input type="text" name="description" id="task-description" placeholder="Add a Description" value="" class="rounded-xl mt-4 p-4 w-full">
                </div>

                <div>
                    <button type="submit" class="rounded-xl p-2 shadow-md ml-8 mt-2 bg-blue-800 text-sm text-white" >
                        <i>Add Task</i>
                    </button>
                </div>

            </form>

           
        </div>
        <div>
            {{-- Tasks
            @foreach ($tasks as $task)
               {{  $task->title }}
            @endforeach --}}
        </div>
        {{-- @if (count($task->id) == 0) --}}
            <div class="flex justify-center ">
                <div class="flex block">
                    current Tasks
                </div>
                <div>
                    <table class="bg-blue-200 rounded-lg overflow-hidden w-full shadow-xl">
                        <thead>
                            <th class="">Task</th>
                        </thead>

                        <tbody class="border-2 border-gray-500">
                            @foreach ( $tasks as $task )
                                <tr class="bg-blue-200 p-2 w-4/12 w-full min-w-32 border-2 border-blue-800">
                                    <td  class="border-blue-800 border-bottom-2 rounded p-2">
                                        <div class="flex flex-col" >

                                            <span class="text-sm">title: </span><span class="font-bold">{{ $task->title }}</span>
                                        </div>
                                    </td>
                                    <td class="border-blue-800 border-bottom-2 rounded p-2">    
                                        <div class="flex flex-col">
                                            <span class="text-sm">description: </span><span class="font-bold">{{ $task->description }}</span>
                                        </div>
                                    </td>

                                    <td>
                                        {{-- <form action="{{ url('task/'.$task->id) }}" method="POST">
                                        <form action="{{ route('tasks.edit', $tasks) }}" method="post">
                                            @csrf                                            
                                            <button type="submit" class="rounded-xl p-2 shadow-md bg-gray-500 text-sm text-white" >Edit Task</button>
                                        </form> --}}
                                    </td>

                                    <td>
                                        {{-- <form action="{{ url('task/'.$task->id) }}" method="POST"> --}}
                                        <form action="{{ route('tasks.destroy', $task) }}" method="post">
                                            @csrf
                                            {{-- {{ method_field('DELETE') }} --}}
                                                @method('DELETE')
                                            <button type="submit" class="rounded-xl p-2 shadow-md bg-gray-500 text-sm text-white" >delete Task</button>
                                        </form>
                                    </td>
                                   
                                </tr>
                                
                            @endforeach
                            
                        </tbody>

                    </table>
                </div>
            </div>
            
        {{-- @else 
            
        @endif --}}

    </div>
   
@endsection