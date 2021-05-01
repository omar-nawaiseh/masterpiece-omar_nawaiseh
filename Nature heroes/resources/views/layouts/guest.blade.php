<!DOCTYPE html>
<html >
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Nature Heroes</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" href="./css/login.css">
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('main/images/default-logo.png') }}">

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body>
        
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>


        
        <script src="./js/login.js"></script>
     <script src="https://kit.fontawesome.com/e75072346e.js" crossorigin="anonymous"></script>
    </body>
</html>
