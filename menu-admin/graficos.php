<?php
session_start();

    if(!isset($_SESSION['email']) && !isset($_SESSION['senha'])){
        header('Location:/index.php');
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

    <body>
        <main id="main-graf">
            <div class="graf-1">
            <a href="grafico_serv.html" id="graf-servico">
                <img class="icon-graf1" src="/imagens/doughnut-chart-icon.png">
               <h2 id="title-graf1"> Gráfico de Serviços Requisitados</h2>
            </a>    
            </div>

            <div class="graf-2">
                <h2>

                </h2>
            </div>
        </main>
    </body>
    
</html>