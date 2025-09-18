<?php
// Checar se o form foi requisitado
$form = $_GET['form'] ?? 'login'; // default do 'login'
?>
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

<body class="h-screen font-sans bg-emerald-900 flex items-center justify-center">
    <div class="w-7/8 h-7/8 max-w-5xl grid grid-cols-2 overflow-hidden rounded-lg shadow-2xl mb-12 mt-12">
        <div class="relative flex justify-end h-full flex-col text-gray-100 bg-cover bg-[url(./images/background.jpg)] p-8">
            <h1 class="relative z-10 text-6xl font-bold">Feirinha Digital</h1>
            <p class="relative z-10">Descomplique seu mercado</p>
            <div class="absolute inset-0 bg-black/25 backdrop-blur-[1px]"></div>
        </div>
        <main class="bg-white flex items-center justify-center flex-col">
            <div class="flex flex-col justify-center p-18 w-full">
                <!-- Toggle Switch -->
                <?php include "components/form.php"; ?>
                <div class="flex justify-center mb-6 mt-5">
                    <div class="flex bg-gray-200 rounded-lg p-1">
                        <button onclick="window.location.href='index.php?form=login'"
                            class="cursor-pointer px-4 py-2 rounded-md transition-all duration-200 <?php echo $form === 'login' ? 'bg-blue-500 text-white' : 'text-gray-600 hover:text-gray-800'; ?>">
                            Login
                        </button>
                        <button onclick="window.location.href='index.php?form=cadastro'"
                            class="cursor-pointer px-4 py-2 rounded-md transition-all duration-200 <?php echo $form === 'cadastro' ? 'bg-blue-500 text-white' : 'text-gray-600 hover:text-gray-800'; ?>">
                            Cadastrar
                        </button>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>

</html>