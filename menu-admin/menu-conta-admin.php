<html>
<head>
<style>
    .mainmenubtn {
    background-color: rgb(0, 110, 255);
    color: white;
    border: none;
    cursor: pointer;
    padding:20px;
    margin-top:-2px;
    padding: 7px 19px 7px 19px;
    background-color: rgb(0, 110, 255);
    border-radius: 10px;
    transition: 0.2s;
    }
    .mainmenubtn:hover {
        background-color: rgb(8, 37, 76);
        }
    .dropdown {
        position: absolute;
        display: inline-block;
        margin-left: 100px;
    }
    .dropdown-child {
        display: none;
        background-color: rgb(0, 110, 255);
        min-width: 200px;
    }
    .dropdown-child a {
        color: white;
        padding: 20px;
        text-decoration: none;
        display: block;
    }
    .dropdown:hover .dropdown-child {
        display: block;
    }
</style>
</head>
<body>
    <div class="dropdown">
    <?php
        echo"<button class='mainmenubtn'>" . $_SESSION['nome'] . "</button>";
    ?>
    <div class="dropdown-child">
        <a href="conta.php">Gerenciar Conta</a>
        <a href="consulta.php">Historico de consultas</a>
        <a href="laudo.php">Laudos</a>
        <a href="/deslogar.php">Deslogar</a>
    </div>
</div>
</body>
</html>