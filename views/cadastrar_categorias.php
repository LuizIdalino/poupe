<h2>Categorias</h2>
    <form method="POST" action="" class="cate">
        Nome da Categoria: <input type="text" name="categoryName"><br>
        <input type="submit" value="Adicionar Categoria" class="submit">
    </form class="cate">
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