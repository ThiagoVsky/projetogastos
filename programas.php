<div class="container">
    <div class="row">
        <h1>COMPARAÇÃO DE GASTOS - ORGÃO SUPERIOR</h1>
        <div class="col-md-4 offset-md-2">
            <form>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">NOME DO PROGRAMA</label>

                    <select class="form-control" id="orgaoSuperior">
                        <?php
                        //require_once('app/conexao.php');
                        $mysqli = new mysqli('localhost', 'root', '', 'projectgastos');
                        $sql = "SELECT * FROM orgaosuperior ";

                        $query = $mysqli->query($sql);

                        while($dados = mysqli_fetch_array($query)):
                    ?>
                            <option value="<?= $dados['idOrgaoSuperior']; ?>">
                                <?= $dados['nomeOrgaoSuperior'];?>
                            </option>

                            <?php
                        endwhile;
                    ?>
                    </select> 
                </div>

                <button type="submit" class="btn btn-primary">ENVIAR</button>
            </form>

        </div>

        <div class="col-md-4 offset-md-2">

            <?php
             $sql =   "SELECT COUNT(*) FROM orgaosuperior WHERE nomeOrgaoSuperior LIKE('m%')"
            ?>

            <script type="text/javascript">
        // Load the Visualization API and the corechart package.
        google.charts.load('current', {
            'packages': ['corechart']
        });

        // Set a callback to run when the Google Visualization API is loaded.
        google.charts.setOnLoadCallback(drawChart);

        // Callback that creates and populates a data table,
        // instantiates the pie chart, passes in the data and
        // draws it.
        function drawChart() {

            // Create the data table.
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Topping');
            data.addColumn('number', 'Slices');
            data.addRows([
                ['INICIA COM A LETRA M ', ]
            ]);

            // Set chart options
            var options = {
                'title': 'How Much Pizza I Ate Last Night',
                'width': 400,
                'height': 300
            };

            // Instantiate and draw our chart, passing in some options.
            var chart = new google.visualization.PieChart(document.getElementById('graficos'));
            chart.draw(data, options);
        }
    </script>
            <div id="graficos">
            
            
            </div>   
        </div>
    </div>

</div>