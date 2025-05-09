<?php
// Verifica se o cookie 'nome_visitante' existe
$nomeVisitante = isset($_COOKIE['nome_visitante']) ? htmlspecialchars($_COOKIE['nome_visitante']) : null;
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Agente de Memória WEB - Desafio 1</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>

    <?php if ($nomeVisitante): ?>
        <div class="boas-vindas">
            Olá, <?= $nomeVisitante ?>! Bem-vindo de volta.
        </div>
    <?php endif; ?>

    <h1>Formulário de Cadastro</h1>

    <form id="formularioCadastro" action="processa.php" method="POST">
        <label for="nome">Nome:</label>

        <button type="submit">Enviar</button>
    </form>

    <script src="js/script.js"></script>
</body>
</html>