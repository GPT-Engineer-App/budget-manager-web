<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: index.php");
    exit();
}
include 'php/db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Economias</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Economias</h1>
        </div>
        <div class="navbar">
            <a href="main.php">Página Principal</a>
            <a href="expenses.php">Gastos</a>
            <a href="investments.php">Investimentos</a>
        </div>
        <div class="card">
            <h2>Adicionar Nova Economia</h2>
            <form action="php/add_saving.php" method="POST">
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
                    <label for="conta_id">Conta ID:</label>
                    <input type="text" id="conta_id" name="conta_id" required>
                </div>
                <button type="submit" class="button">Adicionar Economia</button>
            </form>
        </div>
        <div class="card">
            <h2>Lista de Economias</h2>
            <table>
                <thead>
                    <tr>
                        <th>Descrição</th>
                        <th>Valor</th>
                        <th>Data</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM transacao WHERE tipo='Crédito'";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<tr><td>" . $row["descricao"]. "</td><td>" . $row["valor"]. "</td><td>" . $row["data"]. "</td></tr>";
                        }
                    } else {
                        echo "<tr><td colspan='3'>Nenhuma economia encontrada</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>