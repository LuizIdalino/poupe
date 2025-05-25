<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "gerenciamento_despesas";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}

$query = "SELECT * FROM expenses";
$consulta_expenses = mysqli_query($conn, "SELECT * FROM expenses");

?>