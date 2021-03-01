<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Forum</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="">
    <div class="w-full min-h-screen bg-gray-50 dark:bg-gray-900 font-normal text-md">
        @yield('content')
    </div>
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>