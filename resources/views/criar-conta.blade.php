@vite(['resources/css/app.css','resources/js/app.js'])

<x-topo></x-topo>

<form action="{{ route('salva-conta') }}" method="POST" class="space-y-8 bg-white p-6 rounded-xl shadow-lg max-w-md mx-auto dark:bg-gray-900">
    @csrf

    <div class="mb-5">
        <label for="name" class="block mb-2 text-sm font-medium text-blue-800 dark:text-blue-200">Nome</label>
        <input name="name" type="text" id="name" class="bg-blue-50 border border-blue-300 text-blue-900 text-sm rounded-xl focus:ring-blue-500 focus:border-blue-500 block w-full p-3 dark:bg-gray-800 dark:border-blue-600 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Seu nome completo" />
    </div>

    <div class="mb-5">
        <label for="email" class="block mb-2 text-sm font-medium text-blue-800 dark:text-blue-200">E-mail</label>
        <input name="email" type="email" id="email" class="bg-blue-50 border border-blue-300 text-blue-900 text-sm rounded-xl focus:ring-blue-500 focus:border-blue-500 block w-full p-3 dark:bg-gray-800 dark:border-blue-600 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@email.com" required />
    </div>

    <div class="mb-5">
        <label for="password" class="block mb-2 text-sm font-medium text-blue-800 dark:text-blue-200">Senha</label>
        <input name="password" type="password" id="password" class="bg-blue-50 border border-blue-300 text-blue-900 text-sm rounded-xl focus:ring-blue-500 focus:border-blue-500 block w-full p-3 dark:bg-gray-800 dark:border-blue-600 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
    </div>

    <div class="mb-5">
        <label for="repeat-password" class="block mb-2 text-sm font-medium text-blue-800 dark:text-blue-200">Repita a Senha</label>
        <input name="password_confirmation" type="password" id="repeat-password" class="bg-blue-50 border border-blue-300 text-blue-900 text-sm rounded-xl focus:ring-blue-500 focus:border-blue-500 block w-full p-3 dark:bg-gray-800 dark:border-blue-600 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
    </div>

    <div class="flex items-start mb-5">
        <div class="flex items-center h-5">
            <input id="terms" type="checkbox" value="" class="w-4 h-4 border border-blue-300 rounded bg-blue-50 focus:ring-2 focus:ring-blue-400 dark:bg-gray-700 dark:border-blue-600 dark:focus:ring-blue-500" required />
        </div>
        <label for="terms" class="ms-2 text-sm font-medium text-blue-800 dark:text-blue-200">
            Concordo com os <a href="#" class="text-blue-600 hover:underline dark:text-blue-400">termos e condições</a>
        </label>
    </div>

    <button type="submit" class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-semibold rounded-xl text-sm w-full px-6 py-3 text-center dark:bg-blue-700 dark:hover:bg-blue-800 dark:focus:ring-blue-900">
        Salvar Nova Conta
    </button>
</form>

@error('email')
    <div class="bg-red-200 rounded-xl text-red-800 p-4 font-medium mt-4">{{ $message }}</div>
@enderror
