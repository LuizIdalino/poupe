<?php
include("conexao.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $categoryName = $_POST["categoryName"];
    
    // Converte a primeira letra de cada palavra para maiúscula
    $categoryName = ucwords($categoryName);
    
    $sql = "INSERT INTO categories (name) VALUES ('$categoryName')";
    if ($conn->query($sql) === TRUE) {
        header("location:index.php?pagina=categorias");
    } else {
        echo "Erro ao adicionar categoria: " . $conn->error;
    }
}
?>
<div class="container">
<h2>Categorias</h2>
    <form method="POST" action="" class="cate">
    Nome da Categoria: <input type="text" name="categoryName"><br>
        <input type="submit"  class="btn btn-primary" value="Adicionar Categoria" class="btn-btn-primar">
    </form>
    <h3>Categorias Existentes:</h3>
    <ul>
        <?php
        $result = $conn->query("SELECT * FROM categories");
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<li>" . $row["name"] . "</li>";
            }
        } else {
            echo "Nenhuma categoria encontrada.";
        }
        ?>
    </ul>
</div>
<br><br><br><br>