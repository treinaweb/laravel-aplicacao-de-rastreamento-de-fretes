<x-layout>
    <div class="text-center p-6 bg-gradient-to-r from-blue-500 to-purple-600 text-white rounded-t-lg">
        <h1 class="text-3xl font-bold">
            Histórico de encomendas
        </h1>
        <p class="mt-4 text-lg">
            Cliente: João da Silva
        </p>
    </div>

    <div class="max-w-full mt-8 mx-auto bg-white rounded-lg shadow-sm">
        <div class="text-center p-6">
            <h1 class="text-2xl font-semibold text-gray-800">
                Itens enviados
            </h1>
        </div>
        <table class="w-full text-sm text-left">
            <thead>
                <tr class="border-b">
                    <th class="px-6 py-4 font-semibold text-gray-900">
                        Código de rastreamento
                    </th>
                    <th class="px-6 py-4 font-semibold text-gray-900">
                        Origem
                    </th>
                    <th class="px-6 py-4 font-semibold text-gray-900">
                        Destino
                    </th>
                    <th class="px-6 py-4 font-semibold text-gray-900">
                        Status
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="hover:bg-gray-50 transition-colors border-b">
                    <td class="px-6 py-4 whitespace-nowrap">
                        <a href="#" class="underline">
                            ABC123456
                        </a>
                    </td>
                    <td class="px-6 py-4">
                        São Paulo
                    </td>
                    <td class="px-6 py-4">
                        Rio de Janeiro
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="px-2 py-1 rounded-full bg-green-500 text-white">
                            Entregue
                        </span>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="max-w-full mt-8 mx-auto bg-white rounded-lg shadow-sm">
        <div class="text-center p-6">
            <h1 class="text-2xl font-semibold text-gray-800">
                Itens Recebidos
            </h1>
        </div>
        <table class="w-full text-sm text-left">
            <thead>
                <tr class="border-b">
                    <th class="px-6 py-4 font-semibold text-gray-900">
                        Código de rastreamento
                    </th>
                    <th class="px-6 py-4 font-semibold text-gray-900">
                        Origem
                    </th>
                    <th class="px-6 py-4 font-semibold text-gray-900">
                        Destino
                    </th>
                    <th class="px-6 py-4 font-semibold text-gray-900">
                        Status
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="hover:bg-gray-50 transition-colors border-b">
                    <td class="px-6 py-4 whitespace-nowrap">
                        <a href="#" class="underline">
                            LMN456789
                        </a>
                    </td>
                    <td class="px-6 py-4">
                        Porto Alegre
                    </td>
                    <td class="px-6 py-4">
                        Curitiba
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="px-2 py-1 rounded-full bg-blue-500 text-white">
                            Enviado
                        </span>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</x-layout>