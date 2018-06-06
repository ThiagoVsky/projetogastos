<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/app.css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" crossorigin="anonymous">

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
</head>

<body>
    <div id="menuIcon">
        <div id="menuLine"></div>
    </div>

    <div class="mainMenu">
        <div class="logoMenu">

        </div>

        <nav class="menu">

            <ul class="navMenu">
                <li class="navItem">
                    <a href="info.php" class="navLink">INFO</a>
                </li>

                <li class="navItem dropdown">
                    <a href="#" class="navLink dropbtn">COMPARAÇÃO DE GASTOS</a>
                    <ul class="dropdown-content">
                        <li>
                            <a href="cg-orgao-superior.php">ORGÃO SUPERIOR</a>
                        </li>
                        <li>
                            <a href="cg-funcao.php">FUNÇÃO</a>
                        </li>
                        <li>
                            <a href="cg-estado.php">ESTADO</a>
                        </li>
                    </ul>
                </li>
                <li class="navItem dropdown">
                    <a href="hg-orgao-superior.php" class="navLink">HISTORICO </a>
                </li>
                <li class="navItem">
                    <a href="programas.php" class="navLink">REPASSE PARA PROGRAMAS</a>
                </li>
            </ul>
        </nav>

        <div id="close">
            <img src="images/error.png" height="30px" width="30px" alt="">
        </div>
    </div>

    <div id="mainPage">

    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="js/app.js"></script>
</body>

</html>