<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <script src="https://kit.fontawesome.com/507e3631af.js" crossorigin="anonymous"></script>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100 h-screen antialiased leading-none">
<div id="app">
    <nav class="flex items-center justify-between flex-wrap bg-teal-500 p-6 mb-8">
        <div class="flex items-center flex-shrink-0 text-white mr-6">
            <a href="/">
                <img class="fill-current h-8 w-8 mr-2" src="https://img.icons8.com/officel/54/000000/vegan-symbol.png">
            </a>
            <a href="/">
                <span class="font-semibold text-xl tracking-tight">{{ config('app.name', 'Laravel') }}</span>
            </a>
        </div>
        <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto lg:mt-0 mt-8">
            <div class="text-sm lg:flex-grow">
            </div>
            <div>
                <form class="w-full max-w" action="/search">
                    <div class="flex flex-wrap -mx-3">
                        <div class="w-5/6 px-2">
                            <input
                                class="appearance-none block w-full bg-white-200 text-gray-700 border border-gray-500
                                rounded py-3 px-4 focus:outline-none focus:bg-white"
                                id="grid-search" type="text" placeholder="Search..." name="q">
                        </div>
                        <div class="w-1/6">
                            <button
                                class="appearance-none inline-block align-bottom align-text-bottom bg-teal-600
                                hover:bg-teal-700 text-white font-bold py-2 px-4 rounded h-full w-full">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </nav>

    <div class="container mx-auto">
        @yield('content')
    </div>
</div>
<footer class='w-full text-center bg-white border-t border-grey mt-32 py-8'>
    <p>
        Website create by
        <a target="_blank" rel="noopener" class="text-blue-400" href="https://michaelbrooks.dev">
            Michael Brooks Developments
        </a>
    </p>
</footer>
<!-- Scripts -->
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
