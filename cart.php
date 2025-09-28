<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- gambiarra boa! -->
    <!-- <meta http-equiv="refresh" content="2"> -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Feirinha Digital</title>
</head>

<?php

$produtos = [
    [
        "nome" => "Coca-cola Zero 2L",
        "categoria" => "Bebidas",
        "preco" => 4.99
    ],
    [
        "nome" => "Biscoito Wafer Bauducco 90g",
        "categoria" => "Mercearia",
        "preco" => 19.99
    ],
    [
        "nome" => "Panetonne Santa Dulce",
        "categoria" => "Padaria",
        "preco" => 0.99
    ],
    [
        "nome" => "Arroz Tio João 5kg",
        "categoria" => "Mercearia",
        "preco" => 21.50
    ],
    [
        "nome" => "Feijão Carioca Kicaldo 1kg",
        "categoria" => "Mercearia",
        "preco" => 7.20
    ],
    [
        "nome" => "Leite Integral Italac 1L",
        "categoria" => "Laticínios",
        "preco" => 4.39
    ],
    [
        "nome" => "Queijo Mussarela Fatiado 500g",
        "categoria" => "Laticínios",
        "preco" => 18.90
    ],
    [
        "nome" => "Pão Francês 1kg",
        "categoria" => "Padaria",
        "preco" => 12.00
    ],
    [
        "nome" => "Sabonete Dove 90g",
        "categoria" => "Higiene",
        "preco" => 3.79
    ],
    [
        "nome" => "Detergente Ypê Neutro 500ml",
        "categoria" => "Limpeza",
        "preco" => 2.49
    ]
];

$total = 0;
$delivery = 0;
foreach ($produtos as $produto) {
    $total += $produto["preco"];
}

?>

<body class="h-screen">
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
                        <a href="main.php" class="block py-2 pr-4 pl-3 border-b border-gray-100 hover:bg-green-600 lg:hover:bg-green-600 lg:border-0 lg:hover:text-white lg:px-4 lg:py-2 lg:rounded-lg dark:text-green-800 lg:dark:hover:text-white dark:hover:bg-green-600 dark:hover:text-white lg:dark:hover:bg-green-600 dark:border-gray-700" aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="user.php" class="block py-2 pr-4 pl-3 border-b border-gray-100 hover:bg-green-600 lg:hover:bg-green-600 lg:border-0 lg:hover:text-white lg:px-4 lg:py-2 lg:rounded-lg dark:text-green-800 lg:dark:hover:text-white dark:hover:bg-green-600 dark:hover:text-white lg:dark:hover:bg-green-600 dark:border-gray-700">Usuário</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 pr-4 pl-3 border-b border-gray-100 hover:bg-green-600 lg:hover:bg-green-600 lg:border-0 lg:hover:text-white lg:px-4 lg:py-2 lg:rounded-lg dark:text-white lg:dark:hover:text-white dark:hover:bg-green-600 dark:hover:text-white lg:dark:hover:bg-green-600 dark:border-gray-700">Carrinho</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="grid grid-cols-3 gap-4">
        <div class="flex flex-col col-span-2 gap-3">
            <table class="w-full text-sm text-left rtl:text-right border-1 border-gray-300">
                <thead class="text-xs uppercase">
                    <tr class="border-b border-gray-300">
                        <th scope="col" class="px-6 py-3">
                            Nome do Produto
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Categoria
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Preço
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($produtos as $produto): ?>
                        <tr>
                            <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap">
                                <?= htmlspecialchars($produto["nome"]) ?>
                            </th>
                            <td class="px-6 py-4">
                                <?= htmlspecialchars($produto["categoria"]) ?>
                            </td>
                            <td class="px-6 py-4">
                                R$ <?= number_format($produto["preco"], 2, ',', '.') ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <div class="flex flex-col col-span-1 mr-4">
            <div class="bg-white p-4 border border-gray-300">
                <!-- Título -->
                <h3 class="text-sm font-bold">RESUMO</h3>
                <div class="border-b border-black my-2"></div>

                <!-- Cupom -->
                <p class="text-sm">Você tem um cupom promocional?</p>
                <div class="flex mt-2 mb-4">
                    <input type="text" placeholder="Digite seu cupom" class="flex-1 border border-gray-300 p-2 text-sm" />
                    <button class="cursor-pointer bg-black text-white px-4 text-sm hover:bg-green-600">APLICAR</button>
                </div>

                <div class="border-b border-black my-2"></div>

                <!-- Valores -->
                <div class="flex justify-between text-sm my-1">
                    <span class="font-bold">SUBTOTAL</span>
                    <span> R$ <?php echo number_format($total, 2, ',', '.')  ?></span>
                </div>
                <div class="flex justify-between text-sm my-1">
                    <span>Entrega</span>
                    <span>R$ <?php echo number_format($delivery, 2, ',', '.') ?></span>
                </div>

                <div class="border-b border-black my-2"></div>

                <div class="flex justify-between text-sm my-2">
                    <span class="font-bold">TOTAL</span>
                    <span class="font-bold">R$ <?php echo number_format($total + $delivery, 2, ',', '.')  ?></span>
                </div>

                <div class="border-b border-black my-2"></div>

                <!-- Botão Checkout -->
                <button class="cursor-pointer w-full bg-black text-white py-2 font-bold mt-2 hover:bg-green-600">CHECKOUT</button>

                <!-- Ajuda -->
                <a href="main.php" class="text-xs text-gray-500 text-center mt-4">
                    Voltar para página principal
                </a>
            </div>
        </div>
    </div>
</body>

</html>