<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- gambiarra boa! -->
    <!-- <meta http-equiv="refresh" content="2"> -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.2.0/dist/flowbite.min.js"></script>
    <title>Feirinha Digital</title>
</head>

<body class="bg-emerald-900">
    <div>
    <header>
    <nav class="bg-lime-500 border-gray-200 px-4 lg:px-6 py-2.5">
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
            <a href="#" class="flex items-center">
                <img src="./images/carrot-icon-vector-on-white-600nw-2545949249-removebg-preview.png" class="mr-3 h-6 sm:h-9" alt="Flowbite Logo" />
                <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Feirinha Digital</span>
            </a>
            <div class="flex items-center lg:order-2">
                <a href="index.php" class="dark:text-green-800 hover:bg-gray-50 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2 dark:hover:bg-green-600 lg:dark:hover:text-white focus:outline-none dark:focus:ring-gray-800">Log out</a>
                <button data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mobile-menu-2" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                    <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
            </div>
            <div class="hidden relative items-center w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
                <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0 lg:absolute lg:left-1/2 lg:transform lg:-translate-x-1/2">
                    <li>
                        <a href="main.php" class="block py-2 pr-4 pl-3 border-b border-gray-100 hover:bg-green-600 lg:hover:bg-green-600 lg:border-0 lg:hover:text-white lg:px-4 lg:py-2 lg:rounded-lg dark:text-white lg:dark:hover:text-white dark:hover:bg-green-600 dark:hover:text-white lg:dark:hover:bg-green-600 dark:border-gray-700" aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="user.php" class="block py-2 pr-4 pl-3 border-b border-gray-100 hover:bg-green-600 lg:hover:bg-green-600 lg:border-0 lg:hover:text-white lg:px-4 lg:py-2 lg:rounded-lg dark:text-green-800 lg:dark:hover:text-white dark:hover:bg-green-600 dark:hover:text-white lg:dark:hover:bg-green-600 dark:border-gray-700">Usuário</a>
                    </li>
                    <li>
                        <a href="cart.php" class="block py-2 pr-4 pl-3 border-b border-gray-100 hover:bg-green-600 lg:hover:bg-green-600 lg:border-0 lg:hover:text-white lg:px-4 lg:py-2 lg:rounded-lg dark:text-green-800 lg:dark:hover:text-white dark:hover:bg-green-600 dark:hover:text-white lg:dark:hover:bg-green-600 dark:border-gray-700">Carrinho</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
        

<div id="default-carousel" class="relative w-full h-140" data-carousel="slide">
    <!-- Carousel wrapper (Em inglês msm) -->
    <div class="relative h-56 overflow-hidden rounded-lg md:h-140">
         <!-- Item 1 -->
        <div class="duration-700 ease-in-out" data-carousel-item>
            <img src="./images/tomates.jpg" class="absolute block w-full h-full object-cover" alt="...">
        </div>
        <!-- Item 2 -->
        <div class="duration-700 ease-in-out" data-carousel-item>
            <img src="./images/batatas.jpg" class="absolute block w-full h-full object-cover" alt="...">
        </div>
        <!-- Item 3 -->
        <div class="duration-700 ease-in-out" data-carousel-item>
            <img src="./images/beterrabas.jpeg" class="absolute block w-full h-full object-cover" alt="...">
        </div>
        <!-- Item 4 -->
        <div class="duration-700 ease-in-out" data-carousel-item>
            <img src="./images/pimentoes.jpg" class="absolute block w-full h-full object-cover" alt="...">
        </div>
        <!-- Item 5 -->
        <div class="duration-700 ease-in-out" data-carousel-item>
            <img src="./images/laranjas.jpg" class="absolute block w-full h-full object-cover" alt="...">
        </div>
    </div>
    <!-- Indicadores de slider -->
    <div class="absolute z-30 flex bottom-5 left-1/2 space-x-3 rtl:space-x-reverse" style="transform: translateX(calc(-50% + 32px));">
        <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
    </div>
    <!-- Controles de sliders -->
    <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
            </svg>
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
            </svg>
            <span class="sr-only">Next</span>
        </span>
    </button>
</div>

<!-- Seção de produtos (grid) -->
<section class="py-8 px-4 lg:px-6">
    <div class="mx-auto max-w-screen-xl">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 dark:text-white mb-4">Nossos Produtos</h2>
            <p class="text-lg text-gray-600 dark:text-white">Frescos e selecionados especialmente para você</p>
        </div>
        
        <!-- Grid de produtoos -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            <!-- Card de produto 1 - Tomates -->
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 overflow-hidden">
                <div class="aspect-w-16 aspect-h-12">
                    <img src="./images/tomates.jpg" alt="Tomates" class="w-full h-48 object-cover">
                </div>
                <div class="p-4">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Tomates</h3>
                    <p class="text-sm text-gray-600 dark:text-gray-400 mb-3">Frescos e suculentos, perfeitos para saladas e molhos</p>
                    <div class="flex justify-between items-center">
                        <span class="text-xl font-bold text-green-600">R$ 4,99/kg</span>
                        <button class="cursor-pointer bg-green-500 lg:dark:hover:bg-green-600 text-white px-4 py-2 rounded-lg transition-colors duration-200">
                            Adicionar
                        </button>
                    </div>
                </div>
            </div>

            <!-- Card de produto 2 - Batatas -->
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 overflow-hidden">
                <div class="aspect-w-16 aspect-h-12">
                    <img src="./images/batatas.jpg" alt="Batatas" class="w-full h-48 object-cover">
                </div>
                <div class="p-4">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Batatas</h3>
                    <p class="text-sm text-gray-600 dark:text-gray-400 mb-3">Batatas frescas, ideais para fritas e purês</p>
                    <div class="flex justify-between items-center">
                        <span class="text-xl font-bold text-green-600">R$ 3,50/kg</span>
                        <button class="cursor-pointer bg-green-500 lg:dark:hover:bg-green-600 text-white px-4 py-2 rounded-lg transition-colors duration-200">
                            Adicionar
                        </button>
                    </div>
                </div>
            </div>

            <!-- Card de produto 3 - Beterrabas -->
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 overflow-hidden">
                <div class="aspect-w-16 aspect-h-12">
                    <img src="./images/beterrabas.jpeg" alt="Beterrabas" class="w-full h-48 object-cover">
                </div>
                <div class="p-4">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Beterrabas</h3>
                    <p class="text-sm text-gray-600 dark:text-gray-400 mb-3">Beterrabas orgânicas, ricas em nutrientes</p>
                    <div class="flex justify-between items-center">
                        <span class="text-xl font-bold text-green-600">R$ 6,99/kg</span>
                        <button class="cursor-pointer bg-green-500 lg:dark:hover:bg-green-600 text-white px-4 py-2 rounded-lg transition-colors duration-200">
                            Adicionar
                        </button>
                    </div>
                </div>
            </div>

            <!-- Card de produto 4 - Pimentões -->
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 overflow-hidden">
                <div class="aspect-w-16 aspect-h-12">
                    <img src="./images/pimentoes.jpg" alt="Pimentões" class="w-full h-48 object-cover">
                </div>
                <div class="p-4">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Pimentões</h3>
                    <p class="text-sm text-gray-600 dark:text-gray-400 mb-3">Pimentões coloridos, perfeitos para refogados</p>
                    <div class="flex justify-between items-center">
                        <span class="text-xl font-bold text-green-600">R$ 7,50/kg</span>
                        <button class="cursor-pointer bg-green-500 lg:dark:hover:bg-green-600 text-white px-4 py-2 rounded-lg transition-colors duration-200">
                            Adicionar
                        </button>
                    </div>
                </div>
            </div>

            <!-- Card de produto 5 - Cenouras -->
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 overflow-hidden">
                <div class="aspect-w-16 aspect-h-12">
                    <img src="./images/laranjas.jpg" alt="Cenouras" class="w-full h-48 object-cover">
                </div>
                <div class="p-4">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Cenouras</h3>
                    <p class="text-sm text-gray-600 dark:text-gray-400 mb-3">Cenouras crocantes, ricas em vitamina A</p>
                    <div class="flex justify-between items-center">
                        <span class="text-xl font-bold text-green-600">R$ 2,99/kg</span>
                        <button class="cursor-pointer bg-green-500 lg:dark:hover:bg-green-600 text-white px-4 py-2 rounded-lg transition-colors duration-200">
                            Adicionar
                        </button>
                    </div>
                </div>
            </div>

            <!-- Card de produto 6 - Alface -->
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 overflow-hidden">
                <div class="aspect-w-16 aspect-h-12">
                    <img src="./images/Alface.jpeg" alt="Alface" class="w-full h-48 object-cover">
                </div>
                <div class="p-4">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Alface</h3>
                    <p class="text-sm text-gray-600 dark:text-gray-400 mb-3">Alface fresca, perfeita para saladas</p>
                    <div class="flex justify-between items-center">
                        <span class="text-xl font-bold text-green-600">R$ 1,99/un</span>
                        <button class="cursor-pointer bg-green-500 lg:dark:hover:bg-green-600 text-white px-4 py-2 rounded-lg transition-colors duration-200">
                            Adicionar
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<section class="grid grid-cols-2 h-180 bg-lime-200 text-black">
    <img class="w-full h-180 object-cover object-center" src="./images/logo.jpg" alt="">
    <div class="flex flex-col text-center p-8">
        <h1 class="text-4xl font-bold mt-2">Sobre nós</h1>
        <h2 class="text-2xl font-bold mt-8 text-left">Frescor e qualidade direto do produtor para sua casa</h2>
        <p class="mt-4 text-left">Somos uma empresa apaixonada por alimentação saudável e qualidade de vida. Nascemos da vontade de conectar pequenos e médios produtores rurais diretamente aos consumidores que buscam produtos frescos, orgânicos e cheios de sabor.
Trabalhamos incansavelmente para selecionar os melhores tomates, batatas, beterrabas, pimentões, cenouras e alfaces, garantindo que cada item chegue à sua mesa com o máximo de frescor e nutrientes. Nossa logística ágil permite que você receba produtos colhidos há poucas horas, preservando toda a crocância, aroma e sabor que só alimentos verdadeiramente frescos podem oferecer.</p>
        <h2 class="text-2xl font-bold mt-6 text-left">Nosso compromisso:</h2>
        <ul class="mt-4 text-left">
            <li class="list-disc mt-1 ml-3">Produtos selecionados com rigor e carinho</li>
            <li class="list-disc mt-1 ml-3">Preços justos para você e para os produtores</li>
            <li class="list-disc mt-1 ml-3">Entrega rápida e sustentável</li>
            <li class="list-disc mt-1 ml-3">Apoio à agricultura familiar e local</li>
        </ul>
        <p class="mt-4 text-left">Acreditamos que comer bem é um direito de todos. Por isso, tornamos a compra de hortifruti online simples, prática e acessível. Basta alguns cliques e seus vegetais favoritos estão a caminho de sua cozinha.</p>
        <h2 class="text-2xl font-bold mt-6">Venha fazer parte dessa revolução verde! 🌱</h2>
    </div>
</section>
<section>
    
</section>
<!-- Sessão de contato -->
<section class="py-16 px-4 lg:px-6 bg-lime-500">
    <div class="mx-auto max-w-screen-xl">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Contate-nos</h2>
            <p class="text-lg text-gray-800">Alguma pergunta ou dúvida? Apenas mande para nós uma mensagem!</p>
        </div>
        
        <div class="max-w-md mx-auto">
            <form class="space-y-6" method="POST" action="">
                <div class="flex flex-col sm:flex-row gap-4">
                    <div class="flex-1">
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                        <input type="email" id="email" name="email" placeholder="Preencha com um email" 
                               class="w-full px-4 py-3 rounded-xl bg-gray-100 border-0 focus:ring-2 focus:ring-teal-500 focus:bg-white transition-colors duration-200" 
                               required>
                    </div>
                    <div class="flex-1">
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Nome</label>
                        <input type="text" id="name" name="name" placeholder="Preencha com seu nome" 
                               class="w-full px-4 py-3 rounded-xl bg-gray-100 border-0 focus:ring-2 focus:ring-teal-500 focus:bg-white transition-colors duration-200" 
                               required>
                    </div>
                </div>
                
                <div class="text-center">
                    <button type="submit" name="submit_contact" 
                            class="w-full bg-green-500 lg:dark:hover:bg-green-600 text-white font-bold py-3 px-6 rounded-xl transition-colors duration-200 uppercase">
                        Enviar
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>

<?php
// Envio
if (isset($_POST['submit_contact'])) {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $name = htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8');
    
    // Validação básica 
    if (filter_var($email, FILTER_VALIDATE_EMAIL) && !empty($name)) {
        // Por agora tem um mensagem de sucesso
        echo '<div class="fixed top-4 right-4 bg-green-500 text-white px-6 py-3 rounded-lg shadow-lg z-50">
                <p>Obrigado pela sua mensagem, ' . $name . '! Retornaremos em breve.</p>
              </div>';
    } else {
        echo '<div class="fixed top-4 right-4 bg-red-500 text-white px-6 py-3 rounded-lg shadow-lg z-50">
                <p>Por favor bote um email e nome válido.</p>
              </div>';
    }
}
?>

</body>

</html>