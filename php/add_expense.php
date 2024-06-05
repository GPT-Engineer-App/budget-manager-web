<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $descricao = $_POST['descricao'];
    $valor = $_POST['valor'];
    $data = $_POST['data'];
    $categoria_nome = $_POST['categoria_nome'];
    $conta_id = $_POST['conta_id'];

    $sql = "INSERT INTO transacao (descricao, valor, data, tipo, conta_id, categoria_nome) VALUES ('$descricao', '$valor', '$data', 'Débito', '$conta_id', '$categoria_nome')";
    if ($conn->query($sql) === TRUE) {
        header("Location: ../expenses.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>