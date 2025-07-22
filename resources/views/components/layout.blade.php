<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document test</title>
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">

    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>


<body class="font-hanken-grotesk bg-black pb-20 text-white">
    <div class="px-10">
        <nav class="flex items-center justify-between border-b border-white/10 py-4 text-white">
            <div><a href="/">
                    <img src="{{ Vite::asset('resources/images/logo.png') }}" alt=""></a>
            </div>

            <div class="space-x-6 font-bold">
                <a href="#">Jobs</a>
                <a href="#">Careers</a>
                <a href="#">Salaries</a>
                <a href="#">Companies</a>
            </div>

            @auth
                <div class="flex space-x-6 font-bold">
                    <a href="/jobs/create">Post a job</a>

                    <form action="/logout" method="POST">
                        @csrf
                        @method('DELETE')
                        <button>Log Out</button>
                    </form>
                </div>
            @endauth

            @guest

                <div class="flex items-center space-x-6 font-bold">
                    <a href="/jobs/create">Post a job</a>
                    <a class="text-white/70 hover:text-white" href="/register">Register</a>
                    <a class="text-white/70 hover:text-white" href="/login">Login</a>
                @endguest

        </nav>

        <main class="mx-auto mt-10 max-w-[986px]">{{ $slot }}</main>
    </div>
</body>

</html>
