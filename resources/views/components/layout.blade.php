<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Styles / Scripts -->
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="bg-gray-50 min-h-screen">
        <nav class="fixed top-0 left-0 right-0 bg-white border-b border-gray-200 z-50">
            <div class="container mx-auto px-4 h-16 flex justify-center items-center">
                <a href="#">
                    <img src="/treinaweb.png" alt="Treinaweb" class="h-12">
                </a>
            </div>
        </nav>

        @if (session('error'))
            <div class="container mx-auto px-4 pt-20">
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                    <strong class="font-bold">Erro!</strong>
                    <span class="block sm:inline">{{ session('error') }}</span>
                </div>
            </div> 
        @endif

        <div class="container mx-auto px-4 pt-16">
            {{ $slot }}
        </div>
    </body>
</html>
