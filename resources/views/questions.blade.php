<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Common Questions') }}
        </h2>
    </x-slot>

    <section class="bg-white dark:bg-gray-900 py-12">
        <div class="py-8 px-4 mx-auto max-w-7xl sm:py-16 lg:px-6">

            <div class="grid pt-8 text-left  md:gap-16 dark:border-gray-700 md:grid-cols-2">
                <div>
                    <div class="mb-6">
                        <h3 class="flex items-center mb-4 text-lg font-medium text-gray-900 dark:text-white">
                            <svg class="flex-shrink-0 mr-2 w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path></svg>
                            O que é uma requisição HTTP?
                        </h3>
                        <p class="text-gray-500 dark:text-gray-400">Uma requisição HTTP é um pedido enviado por um cliente (como um navegador da web)
                            para um servidor da web. Ela é usada para solicitar dados ou recursos específicos, como uma
                            página da web, um arquivo ou executar alguma ação no servidor. A requisição inclui informações
                            como o tipo de ação desejada (GET para recuperar recursos, POST para enviar dados, etc.), o
                            caminho para o recurso desejado e informações adicionais, como cabeçalhos e dados do corpo,
                            quando aplicável. O servidor recebe a requisição, processa-a e retorna uma resposta
                            correspondente, que pode incluir os dados solicitados, mensagens de erro ou outros tipos de
                            feedback.</p>
                    </div>
                    <div class="mb-6">
                        <h3 class="flex items-center mb-4 text-lg font-medium text-gray-900 dark:text-white">
                            <svg class="flex-shrink-0 mr-2 w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path></svg>
                            O que é um Endpoint?
                        </h3>
                        <p class="text-gray-500 dark:text-gray-400">Um endpoint em uma URL é um ponto de extremidade específico em um servidor da web
                            que representa um recurso ou uma ação. É como uma porta de entrada para interagir com um
                            sistema ou serviço online. Por exemplo, em uma API, cada endpoint pode representar uma função ou operação diferente que você pode executar, como obter informações, enviar dados ou executar
                            uma ação específica. Cada endpoint é acessado através de uma URL única e pode responder a
                            diferentes tipos de solicitações, como GET, POST, PUT ou DELETE, dependendo da ação que você
                            deseja realizar.</p>
                    </div>
                    <div class="mb-6">
                        <h3 class="flex items-center mb-4 text-lg font-medium text-gray-900 dark:text-white">
                            <svg class="flex-shrink-0 mr-2 w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path></svg>
                            Como funciona o tempo de verificação dos Endpoints?
                        </h3>
                        <p class="text-gray-500 dark:text-gray-400">O sistema está projetado para realizar verificações a cada minuto, ou seja, ele verifica  a data e hora para a próxima verificação de cada Edpoint e realiza requisições HTTP para cada endpoint onde a data e hora para próxima verificação sejam menores que a data e hora atual.</p>
                    </div>
                    <div class="mb-6">
                        <h3 class="flex items-center mb-4 text-lg font-medium text-gray-900 dark:text-white">
                            <svg class="flex-shrink-0 mr-2 w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path></svg>
                            Há limite para cadastro de Sites e Enpoints?
                        </h3>
                        <p class="text-gray-500 dark:text-gray-400">Não existe um limite para cadastro de Sites e Endpoints. Existe uma recomendação de não cadastrar Endpoints que você sabe que são inválidos, pois isso ocupa espaço de armazenamento de dados desnecessário no sistema e adiciona requisições que terão sempre respostas negativas, adiconando tráfego desnecessário ao sistema.
                        </p>
                    </div>
                </div>
                <div class='ml-4'>
                    <div class="mb-6">
                        <h3 class="flex items-center mb-4 text-lg font-medium text-gray-900 dark:text-white">
                            <svg class="flex-shrink-0 mr-2 w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path></svg>
                            Se eu apagar um Enpoint todos os dados de Log dele serão perdidos?
                        </h3>
                        <p class="text-gray-500 dark:text-gray-400">Quando você exclui um Enpoint ou um Site que tenha cadastrado todos os dados relacionados a ele assim como o log das verificações realizadas pelo sistema serão apagadas definitivamente. É recomendado que você tenha totoal certeza antes de excluir alguma dados, pois não será possível reazlizar uma recuperação de dados excluídos. </p>
                    </div>
                    <div class="mb-6">
                        <h3 class="flex items-center mb-4 text-lg font-medium text-gray-900 dark:text-white">
                            <svg class="flex-shrink-0 mr-2 w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path></svg>
                            Se eu excluir minha conta todos os dados serão perdidos?
                        </h3>
                        <p class="text-gray-500 dark:text-gray-400">Sim. Todos os dados pertencentes a sua conta serão apagados de forma definitiva. É altamente recomendado que antes de excluir sua conta você verifique se não tem alguma informação importante que será perdida, pois após a exclusão da conta não será possível recuperar os dados.</p>
                    </div>
                    <div class="mb-6">
                        <h3 class="flex items-center mb-4 text-lg font-medium text-gray-900 dark:text-white">
                            <svg class="flex-shrink-0 mr-2 w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path></svg>
                            Como eu posso entrar em contato com o Suporte?
                        </h3>
                        <p class="text-gray-500 dark:text-gray-400">Caso esteja enfrentando alguma dificuldade em relação as funcionalidades do sistema ou deseja realizar uma sujestão de implementação ou melhoria, envie um e-mail para o nosso <a href="mailto:monitor.de.endpoints@gmail.com" class="font-medium underline text-primary-600 dark:text-primary-500 hover:no-underline">suporte</a> que iremos lhe retornar uma resposta.</p>
                    </div>
                </div>
            </div>
        </div>
      </section>
</x-app-layout>
