   <header>
      <!--Navigation-->
      <nav>
         <!--Logo-->    
         <div class="logo">
            <a href="indexadmin.php"><img src="/imagens/Logo_Cubo_para_empresa_de_Arquitetura_Design_e_Engenharia_1.png" id="logo"></a>
         </div>

         <!--Menu-->
         <div class="menu">
            <a href="indexadmin.php">Controle</a>
            <a href="graficos.php">Gráficos</a>
            <a href="controlarmsg.php?pag=1">Mensagens</a>
            <?php
                if(!isset($_SESSION['email']) && !isset($_SESSION['senha'])){
                    echo'<a class="btn-menu" id="login" href="/menu-cliente/cadastro-login.php">Login</a>';
                } else{
                    include"menu-conta-admin.php";

                }
            ?>
         </div>

         <!--Botão Menu-->
         <div class="menu-mobile">
            <i class="fas fa-bars"></i>
         </div>

      </nav>

   </header>