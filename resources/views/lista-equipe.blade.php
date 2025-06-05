@vite(['resources/css/app.css','resources/js/app.js]'])

<x-topo></x-topo>
<section class="bg-white dark:bg-gray-900">
  <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6 ">
      <div class="mx-auto max-w-screen-sm text-center mb-8 lg:mb-16">
          <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Nossa Equipe</h2>
          <p class="font-light text-gray-500 lg:mb-16 sm:text-xl dark:text-gray-400">Conheça nossa equipe que fará parte de sua história,cada profissional com suas habilidades para melhor te ensinar.</p>
      </div> 
      <div class="grid gap-8 mb-6 lg:mb-16 md:grid-cols-2">
        @foreach($equipe as $pessoa)
          <div class="items-center bg-gray-50 rounded-lg shadow sm:flex dark:bg-gray-800 dark:border-gray-700">

              
              <div class="p-5">
                  <h3 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                      <a href="#">{{$pessoa->nome}}</a>
                  </h3>
                  <span class="text-gray-500 dark:text-gray-400">{{$pessoa->email}}</span>
                  <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400">{{$pessoa->formacao}}</p>
                  <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400">{{$pessoa->experiencia}}</p>
                 
              </div>
          </div> 
     @endforeach
      </div>  
  </div>
</section>