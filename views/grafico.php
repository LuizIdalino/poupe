<h2>Relatórios</h2>
    <div id="chart_div" style="width: 600px; height: 400px;"></div>
    <h3>Despesas por Categoria:</h3>
    <table>
        <tr>
            <th>Categoria</th>
            <th>Valor Total</th>
        </tr>
        <?php
        $result = $conn->query("SELECT category, SUM(amount) as total FROM expenses GROUP BY category");
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["category"] . "</td><td>" . $row["total"] . "</td></tr>";
            }
        } else {
            echo "<tr><td colspan='2'>Nenhuma despesa encontrada.</td></tr>";
        }
        ?>
    </table>

    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Categoria');
            data.addColumn('number', 'Valor');

            <?php
            $result = $conn->query("SELECT category, SUM(amount) as total FROM expenses GROUP BY category");
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "data.addRow(['" . $row["category"] . "', " . $row["total"] . "]);\n";
                }
            }
            ?>

            var options = {
                title: 'Despesas por Categoria'
            };

            var chart = new google.visualization.BarChart(document.getElementById('chart_div'));

            chart.draw(data, options);
        }
    </script>