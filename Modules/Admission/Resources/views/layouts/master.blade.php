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
        <header class="bg-blue-900 text-white fixed w-full z-[100]">
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
        <div class="bg-white shadow-lg fixed w-full top-[72px] z-[100]">
            <div class="container [&>*]:py-4 flex gap-8 mx-auto text-xs text-slate-600">
                <a href="#">AWARDS</a>
                <a href="#">ACCOMPLISHMENTS</a>
                <a href="#">INTRODUCE YOURSELF</a>
                <a href="#">ABOUT ÜNİVERSİTE</a>
                <a href="#">CONTACT US</a>
                <a href="#">STUDENT OFFICE</a>
            </div>
        </div>
        <div class="h-[120px]"></div>
        @yield('content')
    </body>
</html>
