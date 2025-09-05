<?php 
// Pegar do tipo de  parametro do URL ou default para "login"
$form = $_GET['form'] ?? 'login';
if ($form === 'login'): ?>
    <!-- Login Form -->
    <div class="mt-12">
    <h2 class="text-2xl font-bold mb-4">Bem-vindo de volta!</h2>
    <form class="flex flex-col gap-2 mt-8" action="cadastro.php">
        <label for="email">Login:</label>
        <input class="border w-full rounded-sm p-2" name="email" type="text" placeholder="Digite seu email ou usuário">
        <label>Senha:</label>
        <input class="border w-full rounded-sm p-2" type="text" placeholder="Digite sua senha">
        <a>Esqueceu sua senha?</a>
        <input class="border p-2 rounded-md g-sky-500 hover:bg-lime-600 cursor-pointer" value="Entrar" type="submit">
    </form>
    </div>
<?php else: ?>
    <!-- Registro Form -->
    <div class="mt-12">
    <h2 class="text-2xl font-bold mb-4">Criar nova conta</h2>
    <form class="flex flex-col gap-2" action="cadastrar.php">
        <label for="email">Email</label>
        <input class="border w-full rounded-sm p-2" name="email" type="text" placeholder="Digite seu email ou usuário">
        <label>Senha:</label>
        <input class="border w-full rounded-sm p-2" type="text" placeholder="Digite sua senha">
        <label>Confirme sua senha:</label>
        <input class="border w-full rounded-sm p-2" type="text" placeholder="Digite sua senha novamente">
        <button class="border p-2 rounded-md g-sky-500 hover:bg-lime-500" type="submit">Cadastrar</button>
    </form>
    </div>
<?php endif; ?>