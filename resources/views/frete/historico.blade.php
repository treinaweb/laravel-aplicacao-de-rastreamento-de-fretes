<x-layout>
    <div class="text-center p-6 bg-gradient-to-r from-blue-500 to-purple-600 text-white rounded-t-lg">
        <h1 class="text-3xl font-bold">
            Histórico de encomendas
        </h1>
        <p class="mt-4 text-lg">
            Cliente: {{ $cliente->nome }}
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
                @foreach ($cliente->enviados as $frete)
                    <tr class="hover:bg-gray-50 transition-colors border-b">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <a href="{{ route('frete.rastreamento', ['codigo_rastreio' => $frete->codigo_rastreio]) }}" class="underline">
                                {{ $frete->codigo_rastreio }}
                            </a>
                        </td>
                        <td class="px-6 py-4">
                            {{ $frete->origem }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $frete->destino }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 py-1 rounded-full {{ $frete->status->pegarCorEtiqueta() }}">
                                {{ $frete->status }}
                            </span>
                        </td>
                    </tr>
                @endforeach
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
                @foreach ($cliente->recebidos as $frete)
                    <tr class="hover:bg-gray-50 transition-colors border-b">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <a href="{{ route('frete.rastreamento', ['codigo_rastreio' => $frete->codigo_rastreio]) }}" class="underline">
                                {{ $frete->codigo_rastreio }}
                            </a>
                        </td>
                        <td class="px-6 py-4">
                            {{ $frete->origem }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $frete->destino }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 py-1 rounded-full {{ $frete->status->pegarCorEtiqueta() }}">
                                {{ $frete->status }}
                            </span>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>