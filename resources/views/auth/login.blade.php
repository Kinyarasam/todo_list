<!DOCTYPE html>
<html lang="en">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
<head>

    @extends('includes.header')
    <title>Login</title>
    
</head>
<body>
<div class="bg-blue-200 h-screen">
    
    @include('includes.navigation')

    @yield('content')
    <div class="flex justify-center mt-24">
        <form action="" method="POST" class="w-4/12 font-sm p-6 mt-8 bg-blue-400  rounded-xl shadow-xl ">
            @csrf
            <div class="mb-4 flex flex-col justify items-center">
                <label for="email" class=" text-sm font-bold">Email:</label>
                <input type="email" name="email" placeholder="email" class="rounded-xl mt-4 p-4 w-full">

                @error('email')
                    <div class="text-red-500 font-bold mt-1 text-sm">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-4 flex flex-col justify items-center">
                <label for="password" class=" text-sm font-bold">Password:</label>
                <input type="password" name="password" placeholder="password"  class="rounded-xl mt-4 p-4 w-full">

                @error('password')
                    <div class="text-red-500 font-bold mt-1 text-sm">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="flex justify-center">
                <button type="submit" class="p-2 bg-gray-600 shadow-xl text-white font-bold rounded-xl">Login</button>
            </div>

        </form>
    </div>
    
    
    @include('includes.footer')

</body>

</div>
   
</html>