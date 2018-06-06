<div class="container">
    <div class="row">
        <h1>COMPARAÇÃO DE GASTOS - ESTADO</h1>
        
        <div class="col-md-4 offset-md-2">
            <form>

                <div class="form-group">
                    <label for="exampleFormControlSelect1">ESTADO</label>

                    <select class="form-control" id="orgaoSuperior">
                    <?php
                        //require_once('app/conexao.php');
                        $mysqli = new mysqli('localhost', 'root', '', 'projectgastos');
                        $sql = "SELECT * FROM Estado ";

                        $query = $mysqli->query($sql);

                        while($dados = mysqli_fetch_array($query)):
                    ?>
                        <option value="<?= $dados['idEstado']; ?>"><?= $dados['nomeEstado'];?> - <?=$dados['SUFEstado'] ?></option>

                    <?php
                        endwhile;
                    ?>
                    </select>
                </div>

                <div class="form-group">
                <label for="exampleFormControlSelect1">ORGÃO SUPERIOR 2</label>
                    <select class="form-control" id="orgaoSuperior2">
                    <?php
                        $query = $mysqli->query($sql);
                        while($dados = mysqli_fetch_array($query)):
                    ?>
                        <option value="<?= $dados['idEstado']; ?>"><?= $dados['nomeEstado'];?> - <?=$dados['SUFEstado'] ?></option>
                    <?php
                       endwhile;
                    ?>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            
        </div>
        
        <div class="col-md-4 offset-md-2"></div>
    </div>
</div>