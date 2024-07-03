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
            <a href="{{ route('todos.index') }}">Go to index page</a>
        </button>
        <br>
        <br>
        <br>
        {{-- create form to create new todo --}}
        <form action="{{ route('todos.store') }}" method="POST" class="bg-gray-100 p-5">
            @csrf
            <input type="hidden" value="1" name="user_id" id="user_id">
            <label for="title">Select title:</label>

            @include('partials.todos.dropdown', ['field' => 'title'])

            <button type="submit"
                class="rounded-lg px-4 py-2 bg-blue-500 text-blue-100 hover:bg-blue-600 duration-300">Create</button>
        </form>
    </div>
</body>

</html>
