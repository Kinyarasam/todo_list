<!DOCTYPE html>
<html lang="en">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
<head>

    @extends('includes.header')
    <title>Register</title>
    
</head>
<body>
<div class="bg-blue-200 h-screen">
    
    @include('includes.navigation')

    @yield('content')
    <div class="flex justify-center">
        <form action="" method="POST" class="w-4/12 font-sm p-6 mt-4 bg-blue-400  rounded-xl shadow-xl ">
            @csrf
            <div class="mb-1 flex flex-col justify items-center">
                <label for="username" class="sr-only text-sm font-bold">Username:</label>
                <input type="username" name="username" id="username" placeholder="Choose a Username" value="{{ old('username') }}" class="rounded-xl mt-2 p-2 w-full @error('username')border-2 border-red-500 @enderror">

                @error('username')
                    <div class="text-red-500 font-bold mt-1 text-sm">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-1 flex flex-col justify items-center">
                <label for="name" class="sr-only text-sm font-bold">Name:</label>
                <input type="name" name="name" id="name" placeholder="Enter your Name" value="{{ old('name') }}" class="rounded-xl mt-2 p-2 w-full @error('name')border-red-700 border-2 @enderror" >

                @error('name')
                    <div class="text-red-500 font-bold mt-1 text-sm">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-1 flex flex-col justify items-center">
                <label for="email" class="sr-only text-sm font-bold">Email:</label>
                <input type="email" name="email" id="email" placeholder="Enter your email address" value="{{ old('email') }}" class="rounded-xl mt-2 p-2 w-full @error('email') border-red-500 border-2 @enderror" >

                @error('email')
                    <div class="text-red-500 font-bold mt-1 text-sm">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-1 flex flex-col justify items-center">
                <label for="password" class="sr-only text-sm font-bold">Password:</label>
                <input type="password" name="password" id="password" placeholder="Choose a password" class="rounded-xl mt-2 p-2 w-full @error('password')border-red-500 border-2 @enderror" >

                @error('password')
                    <div class="text-red-500 font-bold font-bold mt-1 text-sm">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-1 flex flex-col justify items-center">
                <label for="password_confirmation" class="sr-only text-sm font-bold">Password confirmation:</label>
                <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Repeat your password" class="rounded-xl mt-2 p-2 w-full">
            </div>
            <div class="flex justify-center">
                <button type="submit" class="p-2 bg-gray-600 shadow-xl text-white font-bold rounded-xl">Register</button>
            </div>
            {{-- <div>
                <button>Register</button>
            </div> --}}

        </form>
    </div>
    
    
    @include('includes.footer')

</body>

</div>
   
</html>