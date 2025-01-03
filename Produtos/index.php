<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Cadastro de Produtos</h1>
        <form action="produto.php" method="POST" class="form">
            <label for="nome">Nome do produto:</label>
            <input type="text" id="nome" name="nome" required>

            <label for="descricao">Descrição do produto:</label>
            <input type="text" id="descricao" name="descricao" required>

            <label for="valor">Valor do produto:</label>
            <input type="number" step="0.01" id="valor" name="valor" required>

            <label for="disponivel">Disponível para venda:</label>
            <select id="disponivel" name="disponivel">
                <option value="sim">Sim</option>
                <option value="nao">Não</option>
            </select>

            <button type="submit">Cadastrar Produto</button>
        </form>
    </div>
</body>
</html>
