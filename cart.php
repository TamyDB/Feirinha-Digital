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
    <div class="h-full grid grid-cols-3">
        <div class="flex flex-col col-span-2  p-4 gap-3">
            <h1 class="text-2xl font-bold">Carrinho</h1>
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
        <div class="flex flex-col col-span-1 mr-4 mt-15">
            <div class="bg-white p-4 border border-gray-300">
                <!-- Título -->
                <h3 class="text-sm font-bold">RESUMO</h3>
                <div class="border-b border-black my-2"></div>

                <!-- Cupom -->
                <p class="text-sm">Você tem um cupom promocional?</p>
                <div class="flex mt-2 mb-4">
                    <input type="text" placeholder="Digite seu cupom" class="flex-1 border border-gray-300 p-2 text-sm" />
                    <button class="bg-black text-white px-4 text-sm">APLICAR</button>
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
                <button class="w-full bg-black text-white py-2 font-bold mt-2">CHECKOUT</button>

                <!-- Ajuda -->
                <a href="main.php" class="text-xs text-gray-500 text-center mt-4">
                    Voltar para main page
                </a>
            </div>
        </div>
    </div>
</body>

</html>