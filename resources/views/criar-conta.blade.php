<div>
    <!-- Breathing in, I calm body and mind. Breathing out, I smile. - Thich Nhat Hanh -->
    @vite(['resources/css/app.css','resources/js/app.js]'])

    <x-topo></x-topo>
    
<section class="bg-white dark:bg-gray-900">
  <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
      <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900 dark:text-white">Crie sua conta</h2>
      <p class="mb-8 lg:mb-16 font-light text-center text-gray-500 dark:text-gray-400 sm:text-xl">
          Crie sua conta no melhor sistema já desenvolvido por alunos do curso de GTI. Acesse o conteúdo e faça parte dessa história
      </p>

      <form action="{{ route('salva-conta') }}" method="POST" class="space-y-8">
        @csrf
        <div>
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Seu email</label>
            <input name="email" type="email" id="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg w-full p-2.5" placeholder="name@exemplo.com" required>
        </div>
        <div>
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Seu Nome</label>
            <input name="name" type="text" id="name" class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300" placeholder="Seu nome completo" required>
        </div>
        <div>
            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Senha</label>
            <input name="password" type="password" id="password" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg w-full p-2.5" required>
        </div>

        <button type="submit" class="py-3 px-5 text-sm font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800">Criar Conta</button>

        <p class="text-center text-sm text-gray-500">Já tem uma conta? <a href="{{ route('login') }}" class="text-blue-600 hover:underline">Entrar</a></p>
      </form>
  </div>
</section>



</div>
