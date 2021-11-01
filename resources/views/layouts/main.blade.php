<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Todo</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="bg-gray-100">
    <header>
        <div class="container mx-auto p-4">
            <h1 class="text-2xl font-bold text-center">Laravel Todo List</h1>
        </div>
    </header>
    <main class="p-4">
        @yield('content')
    </main>
</body>
</html>