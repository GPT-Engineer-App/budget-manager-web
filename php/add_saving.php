<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $descricao = $_POST['descricao'];
    $valor = $_POST['valor'];
    $data = $_POST['data'];
    $conta_id = $_POST['conta_id'];

    $sql = "INSERT INTO transacao (descricao, valor, data, tipo, conta_id) VALUES ('$descricao', '$valor', '$data', 'Crédito', '$conta_id')";
    if ($conn->query($sql) === TRUE) {
        header("Location: ../savings.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>