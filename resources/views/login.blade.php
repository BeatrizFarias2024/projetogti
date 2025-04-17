@vite(['resources/css/app.css', 'resources/js/app.js'])

<section class="bg-white dark:bg-gray-900">
    <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
        <h2 class="mb-4 text-4xl font-extrabold text-center text-gray-900 dark:text-white">Entrar no Sistema</h2>

        @error('email')
            <div class="bg-red-300 rounded-2xl text-red-900 p-4 mb-4">{{ $message }}</div>
        @enderror

        <form action="{{ route('logar') }}" method="POST" class="space-y-6">
            @csrf
            <div>
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                <input name="email" type="email" id="email" required class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg w-full p-2.5">
            </div>
            <div>
                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Senha</label>
                <input name="password" type="password" id="password" required class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg w-full p-2.5">
            </div>
            <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Entrar</button>

            <p class="text-center text-sm text-gray-500">Ainda não tem conta? <a href="{{ route('criar-conta') }}" class="text-blue-600 hover:underline">Cadastrar</a></p>
        </form>
    </div>
</section>