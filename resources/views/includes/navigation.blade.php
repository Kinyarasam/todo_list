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