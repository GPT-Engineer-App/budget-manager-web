<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Bem-vindo, <?php echo $_SESSION['email']; ?></h1>
        </div>
        <div class="navbar">
            <a href="expenses.php">Gastos</a>
            <a href="savings.php">Economias</a>
            <a href="investments.php">Investimentos</a>
        </div>
        <div class="card">
            <h2>Adicionar Novo Gasto</h2>
            <form action="php/add_expense.php" method="POST">
                <div class="form-group">
                    <label for="descricao">Descrição:</label>
                    <input type="text" id="descricao" name="descricao" required>
                </div>
                <div class="form-group">
                    <label for="valor">Valor:</label>
                    <input type="number" id="valor" name="valor" required>
                </div>
                <div class="form-group">
                    <label for="data">Data:</label>
                    <input type="date" id="data" name="data" required>
                </div>
                <div class="form-group">
                    <label for="categoria_nome">Categoria:</label>
                    <input type="text" id="categoria_nome" name="categoria_nome" required>
                </div>
                <div class="form-group">
                    <label for="conta_id">Conta ID:</label>
                    <input type="text" id="conta_id" name="conta_id" required>
                </div>
                <button type="submit" class="button">Adicionar Gasto</button>
            </form>
        </div>
    </div>
</body>
</html>