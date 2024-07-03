<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="font-sans antialiased dark:bg-black dark:text-white/50">
    <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50 m-5">
        <button class="rounded-lg px-4 py-2 bg-green-500 text-white hover:bg-green-600 duration-300">
            <a href="{{ route('todos.create') }}">Go to create page</a>
        </button>
        <br>
        <br>
        <br>
        {{-- list all todos --}}
        <ul class="w-100 mx-auto">
            {{-- @foreach ($todos as $todo)
                <li class="mx-2 p-5">User id: {{ $todo->user_id }} - Title: {{ $todo->title }}</li>
            @endforeach --}}
            <table class="min-w-full leading-normal">
                <tr>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">User Id</th>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Title</th>
                </tr>
                @include('partials.todos.list')
            </table>
        </ul>
    </div>
</body>

</html>
