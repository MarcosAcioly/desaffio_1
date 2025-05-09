<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validação simples
    if (!empty($_POST['nome_visitante'])) {
        $nome = filter_input(INPUT_POST, 'nome_visitante', FILTER_SANITIZE_STRING);

        // Define o cookie que expira em 30 dias
        setcookie('nome_visitante', $nome, time() + (86400 * 30), "/");

        echo "<h2>Dados recebidos:</h2>";
        foreach ($_POST as $key => $value) {
            echo "<strong>" . ucfirst($key) . ":</strong> " . htmlspecialchars($value) . "<br>";
        }
    } else {
        echo "Por favor, preencha seu nome.";
    }
} else {
    header("Location: index.php");
    exit();
}
?>