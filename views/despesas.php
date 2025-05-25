<div class="container">
    <div class="btn-container">
        <a href="#" class="btn btn-primary" id="add-expense-btn">Despesa +</a>
    </div>

    <div class="table-container">
        <div class="conteudo_cliente">
            <table class="table table-success table-striped" id="expense-table">
                <thead>
                    <tr>
                        <th>Descrição</th>
                        <th>Categoria</th>
                        <th>Forma de Pagamento</th>
                        <th>Valor (R$)</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- As linhas da tabela de despesas serão adicionadas aqui -->
                </tbody>
            </table>
        </div>
    </div>
</div>
<script>
    document.getElementById('add-expense-btn').addEventListener('click', function() {
        // Cria uma nova linha na tabela com campos de entrada
        const newRow = document.createElement('tr');
        newRow.innerHTML = `
        <td><input type="text" class="form-control" placeholder="Descrição"></td>
        <td><input type="text" class="form-control" placeholder="Categoria"></td>
        <td><input type="text" class="form-control" placeholder="Forma de Pagamento"></td>
        <td><input type="number" class="form-control" placeholder="Valor (R$)"></td>
    `;

        // Adiciona a nova linha no topo da tabela
        const expenseTableBody = document.querySelector('#expense-table tbody');
        expenseTableBody.insertBefore(newRow, expenseTableBody.firstChild);
    });
</script>