<!Doctype html>
<html>
    <head>
        @include('includes.header')
        <title>edit</title>

    </head>
    <body>
        
        
        <div class="bg-blue-500">
            <nav class="flex justify justify-between">
                <ul class="flex">
                    <li class="m-2 bg-gray-200 p-2 rounded shadow-xl">
                        <a href="{{ route('home') }}">Home</a>
                    </li>
                   
                    <li class="m-2 bg-gray-200 p-2 rounded shadow-xl">
                        <a href="">Contact</a>
                    </li>
        
                    <li class="m-2 bg-gray-200 p-2 rounded shadow-xl">
                        <a href="">about</a>
                    </li>
                </ul>
                
               
        
                <ul class="flex">           
                    @auth
                        <li class="m-2 bg-gray-200 p-2 rounded shadow-xl">
                            <a href="">{{ auth()->user()->username }}</a>
                        </li>
        
                        <li class="m-2 bg-gray-200 p-2 rounded shadow-xl">
                            <a href="">Logout</a>
                        </li>
                    @endauth
        
                    @guest
                        <li class="m-2 bg-gray-200 p-2 rounded shadow-xl">
                            <a href="{{ route('register') }}">Register</a>
                        </li>
                        <li class="m-2 bg-gray-200 p-2 rounded shadow-xl">
                            <a href="{{ route('login') }}">Login</a>
                        </li>
                    @endguest
                </ul>
            </nav>
        </div>
            
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
                                <i>update Task</i>
                            </button>
                        </div>
        
                    </form>
        
                
                </div>
            </div>
    </body>

</html>

