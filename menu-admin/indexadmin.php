<?php
session_start();

    if(!isset($_SESSION['email']) && !isset($_SESSION['senha'])){
        header('Location: /index.php');
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
   <head>
      <!--HTML 5-->
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">


      <!--Conteúdo-->
      <title>DoubleLife</title>
      <meta name="title" content="DoubleLife">
      <meta name="description" content="Somos uma clínica médica nova e com grande potencial. Conheça nossas opções de seguro DoubleLife. Planos de vida, saúde e empresariais.">
      <meta name="author" content="Luan Roger, Ana Eduarda, Isabel Marinho, Diego Tasso, Felipe Martins, Gabriel Tavares">


      <!--Icone-->
      <link rel="shortcut icon" href="/imagens/Logo_Cubo_para_empresa_de_Arquitetura_Design_e_Engenharia_2.png" type="image/x-icon">


      <!--Folhas de Estilo-->
      <link rel="stylesheet" href="/estilos/styleadmin.css">


      <!--Links Externos-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;700&display=swap" rel="stylesheet">
   </head>


   <!--Header-->
   <?php
        include "menu-admin.php";
   ?>

   <!--Corpo-->
   <body>

      <!--Principal-->
      <main id="main-indexa">
            <div id="container-title-admin">
                <h1 id="title-admin">Administração</h1>
            </div>
         <section>

            <!--Sessão Conteúdo-->
            <div class="section">
               <!--Primeira Sessão-->
               <a href="controlarusuarios.php?pag=1" class="section-single" id="agendamento-sc">
                  <i class="fa-solid fa-file-pen" id ="section_color"></i>
                  <h2 id="section_color">Controle de Usuários</h2>

               </a>

               <!--Segunda Sessão-->
               <a href="#" class="section-single" id="servicos-sc">
                  <i class="fa-solid fa-file-pen" id ="section_color"></i>
                  <h2 id="section_color">Controle de Agenda</h2>

               </a>

               <!--Terceira Sessão-->
               <a href="#" class="section-single" id="nossosPlanos-sc">
                  <i class="fa-solid fa-file-pen" id ="section_color"></i>
                  <h2 id="section_color">Controle de Serviços</h2>

               </a>
               
            </div>
         </section>
         </main>
      
   </body>

</html>