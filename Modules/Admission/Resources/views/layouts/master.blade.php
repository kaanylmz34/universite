<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')
        <title>Module Admission</title>
    </head>
    <body>
        <header class="bg-[#11367f] text-white">
            <div class="container mx-auto flex gap-4">
                <a href="/" class="logo text-4xl py-4 px-8 bg-red-700 text-white inline-block">
                    Universite
                </a>
                <div class="py-4 flex items-center">
                    Admission Office
                </div>
                <div class="flex gap-12 ml-auto [&>*]:py-4 items-center">
                    <a href="">Policies & Conditions</a>
                    <a href="">Campus Life</a>
                    <a href="">FAQ</a>
                    <a href="" class="bg-slate-300 text-slate-600 px-3 rounded-lg">Apply Request</a>
                </div>
            </div>
        </header>
        @yield('content')
    </body>
</html>
