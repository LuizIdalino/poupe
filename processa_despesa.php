<?php
include 'conexao.php';

    $descricao = $_POST['descricao'];
    $categoria = $_POST['categoria'];
    $pagamento = $_POST['pagamento'];
    $amount = str_replace(',', '.', $_POST['amount']);

    $date = $_POST['date'];

    $query = "INSERT INTO expenses (descricao, categoria, pagamento, amount, date) VALUES ('$descricao', '$categoria', '$pagamento', '$amount', '$date')";

    
mysqli_query($conn, $query);

header('location:index.php?pagina=despesas');
