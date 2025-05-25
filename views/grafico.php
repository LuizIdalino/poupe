<div class="container">
    <h2>Relatórios</h2>
    <div id="chart_div" style="width: 600px; height: 400px;"></div>
    <h3>Despesas por Categoria:</h3>
    <table>
        <tr>
            <th>Categoria</th>
            <th>Valor Total</th>
        </tr>
        <?php
        $query = "SELECT c.name as categoria, SUM(e.amount) as total 
                  FROM expenses e
                  INNER JOIN categories c ON e.categoria = c.id
                  GROUP BY e.categoria";
        
        $result = $conn->query($query);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["categoria"] . "</td><td>" . $row["total"] . "</td></tr>";
            }
        } else {
            echo "<tr><td colspan='2'>Nenhuma despesa encontrada.</td></tr>";
        }
        ?>
    </table>
</div>

<br><br><br><br><br><br>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load('current', {
        'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Categoria');
        data.addColumn('number', 'Valor');

        <?php
        $result = $conn->query("SELECT c.name as categoria, SUM(e.amount) as total 
                                FROM expenses e
                                INNER JOIN categories c ON e.categoria = c.id
                                GROUP BY e.categoria");
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "data.addRow(['" . $row["categoria"] . "', " . $row["total"] . "]);\n";
            }
        }
        ?>

        var options = {
            title: 'Despesas por Categoria',
            is3D: true, // Habilita o efeito 3D
        };

        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));

        chart.draw(data, options);
    }
</script>
