<div class="container">
    <div class="btn-container">
        <a href="?pagina=inserir_despesa" class="btn btn-success" id="add-expense-btn">Despesa +</a>
    </div>

    <div class="table-container">
        <div class="conteudo_cliente">
            <table class="table table-hover table-striped" id="expense-table">
                <thead>
                    <tr>
                        <th>Descrição</th>
                        <th>Categoria</th>
                        <th>Forma de Pagamento</th>
                        <th>Valor (R$)</th>
                        <th>Data</th>
                        <th>Editar</th>
                        <th>Deletar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($linha = mysqli_fetch_array($consulta_expenses)) { 
                        echo '<tr>';
                        echo '<td>' . $linha['descricao'] . '</td>'; 

                        $categoria_id = $linha['categoria'];
                        $categoria_query = mysqli_query($conn, "SELECT name FROM categories WHERE id = $categoria_id");
                        $categoria_nome = mysqli_fetch_assoc($categoria_query);
                        
                        echo '<td>' . $categoria_nome['name'] . '</td>'; 
                        
                        echo '<td>' . $linha['pagamento'] . '</td>'; 

                        // Formate o valor para "R$ 00,00"
                        $valor_formatado = number_format($linha['amount'], 2, ',', '.');
                        echo '<td>R$ ' . $valor_formatado . '</td>'; 

                        // Formate a data para o formato desejado
                        $data_formatada = date("d/m/y", strtotime($linha['date']));
                        echo '<td>' . $data_formatada . '</td>'; 

                        echo '<td><a href="?pagina=inserir_despesa&editar=' . $linha['id'] . '">Editar</a></td>';
                        echo '<td><a href="deleta_despesa.php?id=' . $linha['id'] . '">Deletar</a></td>';
                        echo '</tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>