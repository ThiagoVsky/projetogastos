<div class="container">
    <div class="row">
        <h1>COMPARAÇÃO DE GASTOS - FUNÇÃO</h1>
        
        <div class="col-md-4 offset-md-2">
            <form>

                <div class="form-group">
                    <label for="exampleFormControlSelect1">FUNÇÃO</label>

                    <select class="form-control" id="orgaoSuperior">
                    <?php
                        //require_once('app/conexao.php');
                        $mysqli = new mysqli('localhost', 'root', '', 'projectgastos');
                        $sql = "SELECT * FROM Funcao  ";

                        $query = $mysqli->query($sql);

                        while($dados = mysqli_fetch_array($query)):
                    ?>
                        <option value="<?= $dados['idFuncao']; ?>"><?= $dados['nomeFuncao'];?></option>

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
                        <option value="<?= $dados['idFuncao']; ?>"><?= $dados['nomeFuncao'];?></option>
                        <?php
                        endwhile;
                        ?>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">ENVIAR</button>
            </form>
            
        </div>
        
        <div class="col-md-4 offset-md-2"></div>
    </div>
</div>