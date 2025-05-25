<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>

<?php

if (!isset($_GET['editar'])) {
?>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h1 class="text-center">Inserir nova despesa</h1>
                <form method="post" action="processa_despesa.php">
                    <br>
                    <div class="form-group">
                        <label for="descricao">Descrição:</label><br>
                        <input type="text" class="form-control" id="descricao" name="descricao" placeholder="Descrição da despesa">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="categoria">Categoria:</label><br>
                        <select class="form-control" id="categoria" name="categoria">
                            <option value="">Selecione uma categoria</option>
                            <?php
                            $result = $conn->query("SELECT * FROM categories");
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    echo "<option value='" . $row["id"] . "'>" . $row["name"] . "</option>";
                                }
                            } else {
                                echo "<option value=''>Nenhuma categoria encontrada</option>";
                            }
                            ?>
                        </select>
                    </div>

                    <br>
                    <div class="form-group">
                        <label for="pagamento">Forma de Pagamento:</label><br>
                        <select class="form-control" id="pagamento" name="pagamento">
                            <option value="">Selecione a forma de pagamento</option>
                            <option value="Cartão de Crédito">Cartão de Crédito</option>
                            <option value="Cartão de Débito">Cartão de Débito</option>
                            <option value="Pix">Pix</option>
                            <option value="Dinheiro">Dinheiro</option>
                            <option value="Vale Alimentação">Vale Alimentação</option>
                        </select>
                    </div>

                    <br>
                    <<div class="form-group">
                        <label for="valor">Valor (R$):</label><br>
                        <input type="text" class="form-control" id="valor" name="amount" placeholder="Valor da despesa">

            </div>
            <br>
            <div class="form-group">
                <label for="data">Data:</label><br>
                <input type="date" class="form-control" id="data" name="date">
            </div>
            <br>
            <input type="submit" class="btn btn-primary" value="Inserir despesa">
            </form>
        </div>
    </div>
    </div>
    <br><br><br><br><br><br>

    <?php
} else {
    $id = $_GET['editar'];
    $query = "SELECT * FROM expenses WHERE id = $id";
    $consulta_expenses = mysqli_query($conn, $query);
    while ($linha_despesa = mysqli_fetch_array($consulta_expenses)) {
    ?>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <h1 class="text-center">Editar Despesa</h1>
                    <form method="post" action="edita_despesa.php">
                        <input type="hidden" name="id" value="<?php echo $linha_despesa['id']; ?>">
                        <br>

                        <div class="form-group">
                            <label for="descricao">Descrição:</label><br>
                            <input type="text" class="form-control" id="descricao" name="descricao" placeholder="Descrição da despesa" value="<?php echo $linha_despesa['descricao']; ?>">
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="categoria">Categoria:</label><br>
                            <select class="form-control" id="categoria" name="categoria">
                                <?php
                                $result = $conn->query("SELECT * FROM categories");
                                if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {
                                        $categoria_id = $row["id"];
                                        $categoria_nome = $row["name"];
                                        $selected = ($linha_despesa['categoria'] == $categoria_id) ? 'selected' : '';
                                        echo "<option value='$categoria_id' $selected>$categoria_nome</option>";
                                    }
                                } else {
                                    echo "<option value=''>Nenhuma categoria encontrada</option>";
                                }
                                ?>
                            </select>
                        </div>


                        <br>
                        <div class="form-group">
                            <label for="pagamento">Forma de Pagamento:</label><br>
                            <select class="form-control" id="pagamento" name="pagamento">
                                <option value="">Selecione a forma de pagamento</option>
                                <option value="Cartão de Crédito" <?php if ($linha_despesa['pagamento'] == 'Cartão de Crédito') echo 'selected'; ?>>Cartão de Crédito</option>
                                <option value="Cartão de Débito" <?php if ($linha_despesa['pagamento'] == 'Cartão de Débito') echo 'selected'; ?>>Cartão de Débito</option>
                                <option value="Pix" <?php if ($linha_despesa['pagamento'] == 'Pix') echo 'selected'; ?>>Pix</option>
                                <option value="Dinheiro" <?php if ($linha_despesa['pagamento'] == 'Dinheiro') echo 'selected'; ?>>Dinheiro</option>
                                <option value="Vale Alimentação" <?php if ($linha_despesa['pagamento'] == 'Vale Alimentação') echo 'selected'; ?>>Vale Alimentação</option>
                            </select>
                        </div>

                        <br>
                        <div class="form-group">
                            <label for="valor">Valor (R$):</label><br>
                            <?php
                            $valor_formatado = number_format($linha_despesa['amount'], 2, ',', '.');
                            ?>
                            <input type="text" class="form-control" id="valor" name="amount" placeholder="Valor da despesa" value="<?php echo $valor_formatado; ?>">
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="data">Data:</label><br>
                            <input type="date" class="form-control" id="data" name="date" value="<?php echo $linha_despesa['date']; ?>">
                        </div>
                        <br>

                        <input type="submit" class="btn btn-primary" value="Editar Despesa">
                    </form>
                </div>
            </div>
        </div>

<?php
    }
}
?>
<br><br><br><br><br><br>

<script>
$(document).ready(function() {
  
    $('input[type="text"]').on('input', function() {
        var texto = $(this).val();
        texto = texto.charAt(0).toUpperCase() + texto.slice(1).toLowerCase();
        $(this).val(texto);
    });
});
</script>