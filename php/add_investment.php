<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $valor_atual = $_POST['valor_atual'];
    $retorno = $_POST['retorno'];
    $data = $_POST['data'];

    $sql = "INSERT INTO investimento (nome, valor_atual, retorno, data) VALUES ('$nome', '$valor_atual', '$retorno', '$data')";
    if ($conn->query($sql) === TRUE) {
        header("Location: ../investments.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>