<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Perfil - Feirinha Digital</title>
</head>

<?php

// Dados do usuário
$usuario = [
    "nome" => "João Silva",
    "email" => "joao.silva@email.com",
    "telefone" => "(71) 98765-4321",
    "cpf" => "123.456.789-00",
    "endereco" => "Rua das Flores, 123 - Barra",
    "cidade" => "Salvador - BA",
    "cep" => "40140-000",
    "data_cadastro" => "15/01/2024",
    "foto" => "https://i.pravatar.cc/150?img=2" // Placeholder para foto
];

// Histórico de compras
$compras = [
    [
        "numero_pedido" => "#2024001",
        "data" => "20/12/2024",
        "status" => "Entregue",
        "total" => 145.67,
        "itens" => 8,
        "produtos" => [
            "Arroz Tio João 5kg",
            "Feijão Carioca Kicaldo 1kg",
            "Leite Integral Italac 1L (x3)",
            "Pão Francês 1kg",
            "Outros..."
        ]
    ],
    [
        "numero_pedido" => "#2024002",
        "data" => "05/01/2025",
        "status" => "Entregue",
        "total" => 89.90,
        "itens" => 5,
        "produtos" => [
            "Coca-cola Zero 2L (x2)",
            "Biscoito Wafer Bauducco 90g",
            "Queijo Mussarela Fatiado 500g",
            "Detergente Ypê Neutro 500ml"
        ]
    ],
    [
        "numero_pedido" => "#2024003",
        "data" => "18/01/2025",
        "status" => "Em trânsito",
        "total" => 234.50,
        "itens" => 12,
        "produtos" => [
            "Arroz Tio João 5kg (x2)",
            "Feijão Carioca Kicaldo 1kg (x2)",
            "Leite Integral Italac 1L (x6)",
            "Outros..."
        ]
    ],
    [
        "numero_pedido" => "#2024004",
        "data" => "22/01/2025",
        "status" => "Processando",
        "total" => 56.78,
        "itens" => 4,
        "produtos" => [
            "Sabonete Dove 90g (x3)",
            "Pão Francês 1kg"
        ]
    ]
];

// Estatísticas
$total_gasto = 0;
$total_pedidos = count($compras);
foreach ($compras as $compra) {
    $total_gasto += $compra["total"];
}

?>

<body class="h-screen bg-gray-50">
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
                        <a href="#" class="block py-2 pr-4 pl-3 border-b border-gray-100 hover:bg-green-600 lg:hover:bg-green-600 lg:border-0 lg:hover:text-white lg:px-4 lg:py-2 lg:rounded-lg dark:text-green-800 lg:dark:hover:text-white dark:hover:bg-green-600 dark:hover:text-white lg:dark:hover:bg-green-600 dark:border-gray-700 dark:text-white">Usuário</a>
                    </li>
                    <li>
                        <a href="cart.php" class="block py-2 pr-4 pl-3 border-b border-gray-100 hover:bg-green-600 lg:hover:bg-green-600 lg:border-0 lg:hover:text-white lg:px-4 lg:py-2 lg:rounded-lg dark:text-green-800 lg:dark:hover:text-white dark:hover:bg-green-600 dark:hover:text-white lg:dark:hover:bg-green-600 dark:border-gray-700">Carrinho</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- Header -->
    <div class="mb-6">
        <h1 class="text-3xl font-bold mb-2">Meu Perfil</h1>
        <div class="border-b border-gray-300"></div>
    </div>

    <div class="grid grid-cols-3 gap-6">
        <!-- Coluna Esquerda - Informações do Perfil -->
        <div class="col-span-1">
            <!-- Card do Perfil -->
            <div class="bg-white p-6 border border-gray-300 rounded-lg shadow-sm">
                <!-- Foto de Perfil -->
                <div class="flex flex-col items-center mb-4">
                    <img src="<?= htmlspecialchars($usuario["foto"]) ?>"
                        alt="Foto de <?= htmlspecialchars($usuario["nome"]) ?>"
                        class="w-32 h-32 rounded-full border-4 border-gray-200 mb-3">
                    <h2 class="text-xl font-bold text-center"><?= htmlspecialchars($usuario["nome"]) ?></h2>
                    <p class="text-sm text-gray-500">Cliente desde <?= htmlspecialchars($usuario["data_cadastro"]) ?></p>
                </div>

                <div class="border-b border-gray-200 my-4"></div>

                <!-- Informações Pessoais -->
                <div class="space-y-3">
                    <div>
                        <p class="text-xs text-gray-500 uppercase">Email</p>
                        <p class="text-sm font-medium"><?= htmlspecialchars($usuario["email"]) ?></p>
                    </div>
                    <div>
                        <p class="text-xs text-gray-500 uppercase">Telefone</p>
                        <p class="text-sm font-medium"><?= htmlspecialchars($usuario["telefone"]) ?></p>
                    </div>
                    <div>
                        <p class="text-xs text-gray-500 uppercase">CPF</p>
                        <p class="text-sm font-medium"><?= htmlspecialchars($usuario["cpf"]) ?></p>
                    </div>
                    <div>
                        <p class="text-xs text-gray-500 uppercase">Endereço</p>
                        <p class="text-sm font-medium"><?= htmlspecialchars($usuario["endereco"]) ?></p>
                        <p class="text-sm"><?= htmlspecialchars($usuario["cidade"]) ?></p>
                        <p class="text-sm">CEP: <?= htmlspecialchars($usuario["cep"]) ?></p>
                    </div>
                </div>

                <div class="border-b border-gray-200 my-4"></div>

                <!-- Botões de Ação -->
                <div class="space-y-2">
                    <button class="cursor-pointer w-full bg-black text-white py-2 text-sm font-bold hover:bg-green-600">
                        EDITAR PERFIL
                    </button>
                    <button class="cursor-pointer w-full border border-black text-black py-2 text-sm font-bold hover:bg-green-50 hover:border-green-500 hover:text-green-600">
                        ALTERAR SENHA
                    </button>
                </div>
            </div>

            <!-- Card de Estatísticas -->
            <div class="bg-white p-4 border border-gray-300 rounded-lg shadow-sm mt-4">
                <h3 class="text-sm font-bold mb-3">ESTATÍSTICAS</h3>
                <div class="space-y-2">
                    <div class="flex justify-between">
                        <span class="text-sm text-gray-600">Total de Pedidos:</span>
                        <span class="text-sm font-bold"><?= $total_pedidos ?></span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-sm text-gray-600">Total Gasto:</span>
                        <span class="text-sm font-bold">R$ <?= number_format($total_gasto, 2, ',', '.') ?></span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-sm text-gray-600">Média por Pedido:</span>
                        <span class="text-sm font-bold">R$ <?= number_format($total_gasto / $total_pedidos, 2, ',', '.') ?></span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Coluna Direita - Histórico de Compras -->
        <div class="col-span-2">
            <div class="bg-white p-6 border border-gray-300 rounded-lg shadow-sm">
                <h3 class="text-lg font-bold mb-4">COMPRAS RECENTES</h3>

                <!-- Lista de Compras -->
                <div class="space-y-4">
                    <?php foreach ($compras as $compra): ?>
                        <div class="border border-gray-200 rounded-lg p-4 hover:shadow-md transition-shadow">
                            <div class="flex justify-between items-start mb-3">
                                <div>
                                    <div class="flex items-center gap-3">
                                        <span class="font-bold text-sm"><?= htmlspecialchars($compra["numero_pedido"]) ?></span>
                                        <?php
                                        $status_class = "";
                                        switch ($compra["status"]) {
                                            case "Entregue":
                                                $status_class = "bg-green-100 text-green-800";
                                                break;
                                            case "Em trânsito":
                                                $status_class = "bg-blue-100 text-blue-800";
                                                break;
                                            case "Processando":
                                                $status_class = "bg-yellow-100 text-yellow-800";
                                                break;
                                            default:
                                                $status_class = "bg-gray-100 text-gray-800";
                                        }
                                        ?>
                                        <span class="px-2 py-1 text-xs rounded-full <?= $status_class ?>">
                                            <?= htmlspecialchars($compra["status"]) ?>
                                        </span>
                                    </div>
                                    <p class="text-xs text-gray-500 mt-1">Data: <?= htmlspecialchars($compra["data"]) ?></p>
                                </div>
                                <div class="text-right">
                                    <p class="font-bold text-lg">R$ <?= number_format($compra["total"], 2, ',', '.') ?></p>
                                    <p class="text-xs text-gray-500"><?= $compra["itens"] ?> itens</p>
                                </div>
                            </div>

                            <!-- Produtos do Pedido -->
                            <div class="border-t pt-3">
                                <p class="text-xs text-gray-600 mb-2">Produtos:</p>
                                <div class="text-sm text-gray-700">
                                    <?php
                                    $produtos_display = array_slice($compra["produtos"], 0, 3);
                                    echo htmlspecialchars(implode(" • ", $produtos_display));
                                    if (count($compra["produtos"]) > 3) {
                                        echo " • ...";
                                    }
                                    ?>
                                </div>
                            </div>

                            <!-- Ações -->
                            <div class="flex gap-2 mt-3">
                                <button class="cursor-pointer text-xs bg-black text-white px-3 py-1 hover:bg-green-600">
                                    VER DETALHES
                                </button>
                                <?php if ($compra["status"] == "Entregue"): ?>
                                    <button class="cursor-pointer text-xs border border-black text-black px-3 py-1 hover:bg-green-50 hover:border-green-500 hover:text-green-600">
                                        COMPRAR NOVAMENTE
                                    </button>
                                <?php elseif ($compra["status"] == "Em trânsito"): ?>
                                    <button class="cursor-pointer text-xs border border-blue-500 text-blue-500 px-3 py-1 hover:bg-green-50 hover:border-green-500 hover:text-green-600">
                                        RASTREAR PEDIDO
                                    </button>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <!-- Link para Ver Mais -->
                <div class="text-center mt-6">
                    <a href="#" class="text-sm text-gray-600 hover:text-black underline">
                        Ver todo o histórico de compras →
                    </a>
                </div>
            </div>

            <!-- Links de Navegação -->
            <div class="mt-4 flex justify-center gap-4">
                <a href="cart.php" class="text-xs text-gray-500 hover:text-black">
                    Ir para o Carrinho
                </a>
                <span class="text-xs text-gray-300">|</span>
                <a href="main.php" class="text-xs text-gray-500 hover:text-black">
                    Voltar para página principal
                </a>
                <span class="text-xs text-gray-300">|</span>
                <a href="index.php" class="text-xs text-gray-500 hover:text-black">
                    Sair da conta
                </a>
            </div>
        </div>
    </div>
</body>

</html>