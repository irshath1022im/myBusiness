<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MY BUSINESS</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    @livewireStyles
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body>
    
  

<div class="container">
    
    @yield('content')

</div>

@livewireScripts
<script src="{{ asset('js/app.js') }}"></script>

</body>
</html>