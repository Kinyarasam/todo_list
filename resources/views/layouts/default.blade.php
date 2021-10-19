<!DOCTYPE html>
<html lang="en">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
<head>

    @include('includes.header')
    
</head>
<body>
<div class="bg-blue-200 h-9xl">
    
    @include('includes.navigation')

    @yield('content')
    
    @include('includes.footer')

</body>

</div>
   
</html>