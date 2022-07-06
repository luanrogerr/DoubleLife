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
        margin-left: 550px;
        margin-top: -5px;
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
 <header class="header">
    <a href="/index.php"><img src="/imagens/Logo_Cubo_para_empresa_de_Arquitetura_Design_e_Engenharia_1.png" id="logo" alt="Logo da DoubleLife" title="Voltar para o Menu Principal"></a>
    <nav id="nav">
      <button aria-label="Abrir Menu" id="btn-mobile" aria-haspopup="true" aria-controls="menu" aria-expanded="false">
        <span id="hamburger"></span>
      </button>
      <ul id="menu" role="menu">
        <li><a href="/menu-cliente/agendamento.php" id = "itens"> Agendamento</a></li>
        <li><a href="#" id = "itens">Serviços</a></li>
        <li><a href="/menu-cliente/nossos-planos.php" id = "itens">Nossos Planos</a></li>
        <?php
                if(!isset($_SESSION['email']) && !isset($_SESSION['senha'])){
                    echo'<li><a id="login" href="/menu-cliente/cadastro-login.php">Login</a></li>';
                } else{
                    ?>
                   <div class="dropdown">
                <?php
                    echo"<button class='mainmenubtn'>" . $_SESSION['nome'] . "</button>";
                ?>
                <div class="dropdown-child">
                    <a href="/conta.php?id=<?php $_SESSION['id'] ?> ">Gerenciar Conta</a>
                    <a href="consulta.php">Historico de consultas</a>
                    <a href="laudo.php">Laudos</a>
                    <a href="/deslogar.php">Deslogar</a>
                </div>
            </div>
    <?php
                }
            ?>
      </ul>
    </nav>
  </header>