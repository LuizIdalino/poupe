<?php
include 'conexao.php';

$id = $_POST['id'];
$descricao = $_POST['descricao'];
$categoria = $_POST['categoria'];
$pagamento = $_POST['pagamento'];
$amount = $_POST['amount'];
$date = $_POST['date'];

$query = "UPDATE expenses SET descricao='$descricao', categoria='$categoria', pagamento='$pagamento', amount='$amount', date='$date' WHERE id = $id";


mysqli_query($conn , $query);

header('location:index.php?pagina=despesas');
