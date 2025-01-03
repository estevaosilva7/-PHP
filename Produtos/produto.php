<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'] ?? '';
    $descricao = $_POST['descricao'] ?? '';
    $valor = $_POST['valor'] ?? '';
    $disponivel = $_POST['disponivel'] ?? '';

    $produto = [
        'nome' => $nome,
        'descricao' => $descricao,
        'valor' => $valor,
        'disponivel' => $disponivel
    ];

    $file = 'produtos.json';

    if (file_exists($file)) {
        $produtos = json_decode(file_get_contents($file), true);
    } else {
        $produtos = [];
    }

    $produtos[] = $produto;

    file_put_contents($file, json_encode($produtos, JSON_PRETTY_PRINT));

    header('Location: listagem.php');
    exit();
}
?>
