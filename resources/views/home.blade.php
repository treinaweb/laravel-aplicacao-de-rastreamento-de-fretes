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

        <div class="container mx-auto px-4 pt-16">
            <div class="min-h-[calc(100vh-4rem)] flex flex-col md:grid md:grid-cols-2">
                <div class="flex flex-col justify-center p-6 md:p-12 order-1 md:order-none">
                    <div class="space-y-8">
                        <div class="space-y-4">
                            <h2 class="text-xl font-semibold text-gray-900">
                                Rastrear usando código de rastreamento
                            </h2>
                            <form action="#" method="GET" class="flex items-center space-x-2">
                                <div class="relative w-full max-w-md">
                                    <input type="text" name="codigo_rastreio" placeholder="Código de rastreamento" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                                    <button type="submit" class="absolute inset-y-0 right-0 px-4 py-2 text-white bg-indigo-500 rounded-r-md hover:bg-indigo-600 focus:outline-none focus:ring-2 focus:ring-indigo-500">Consultar</button>
                                </div>
                            </form>
                            </div>
    
                        <div class="space-y-4">
                            <h2 class="text-xl font-semibold text-gray-900">
                                Histórico de encomendas do Cliente
                            </h2>
                            <form action="#" method="GET">
                                <div class="relative w-full max-w-md">
                                    <input type="tel" name="telefone" placeholder="Número de telefone" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" oninput="aplicarMascaraTelefone(this)" maxlength="15">
                                    <button type="submit" class="absolute inset-y-0 right-0 px-4 py-2 text-white bg-indigo-500 rounded-r-md hover:bg-indigo-600 focus:outline-none focus:ring-2 focus:ring-indigo-500">Consultar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
    
                <div class="flex items-center justify-center bg-gray-100 order-2 md:order-none">
                    <img src="/entrega.webp" alt="Placeholder" class="object-cover w-full h-full">
                </div>
            </div>
        </div>
    </body>
</html> 
