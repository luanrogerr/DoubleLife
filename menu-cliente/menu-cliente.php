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
                    echo'<li><a id="deslogar" href="/deslogar.php">Deslogar</a></li>';

                }
            ?>
      </ul>
    </nav>
  </header>