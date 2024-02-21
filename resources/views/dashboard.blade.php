<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Home Page') }}
        </h2>
    </x-slot>

    <section class="bg-white dark:bg-gray-900 py-12">
        <div class="py-8 px-4 mx-auto max-w-7xl lg:py-16">
            <div class="bg-gray-50 dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg p-6 md:p-6 mb-6">

                <h1 class="text-gray-900 dark:text-white text-3xl text-xl md:text-xl font-extrabold mb-2 flex flex-row">
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M18 3h-5.7a2 2 0 0 0-1.4.6L3.6 11a2 2 0 0 0 0 2.8l6.6 6.6a2 2 0 0 0 2.8 0l7.4-7.5a2 2 0 0 0 .6-1.4V6a3 3 0 0 0-3-3Zm-2.4 6.4a1 1 0 1 1 0-2 1 1 0 0 1 0 2Z"/>
                    </svg>
                    <span class="ml-2">Monitor de Sites</span>
                </h1>
                <p class="text-lg font-normal text-gray-500 dark:text-gray-400 mb-6">Este é um sistema simplificado que realiza requisições HTTP nos seus Endpoits de Sites cadastrados, e salva a resposta para serem exibidas no Log de cada Endpoint.</p>
                <a href="#" class="inline-flex justify-center items-center py-2.5 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                    {{ __('Read More') }}
                    <svg class="w-5 h-5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
            </div>
        </div>
    </section>
</x-app-layout>
