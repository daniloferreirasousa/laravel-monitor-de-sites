<x-app-layout>
    <x-slot name="header">
        <div class="flex">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __("Logs do Endpoint {$endpoint->endpoint}") }}
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <x-alerts/>
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="p-4">Data</th>
                                <th scope="col" class="p-4">Status</th>
                                <th scope="col" class="p-4">Resposta</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($checks as $check)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <td class="w-4 p-4">{{ $check->created_at }}</td>
                                <td class="w-4 p-4">{{ $check->status_code }}</td>
                                <td class="w-4 p-4">
                                    <div x-data="{ open: false }">

                                        {{-- width="16" height="16" fill="currentColor" class="bi bi-bookmark-check" viewBox="0 0 16 16" --}}

                                        <button @click="open = !open" class="text-blue-600 dark:text-blue-400">
                                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" height="16" width="16" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 32 32">
                                                <title>Ver Resposta</title>
                                                <path stroke="currentColor" stroke-width="2" d="M21 12c0 1.2-4 6-9 6s-9-4.8-9-6c0-1.2 4-6 9-6s9 4.8 9 6Z"/>
                                                <path stroke="currentColor" stroke-width="2" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                                              </svg>
                                        </button>
                                        <div x-show="open" class="mt-2">
                                            {{ $check->response_body ?? '-' }}
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <td class="w-4 p-4" colspan="100">Sem Logs</td>
                            </tr>
                            @endforelse
                        </tbody>

                    </table>
                    <div class="py-2">
                        {{ $checks->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>




