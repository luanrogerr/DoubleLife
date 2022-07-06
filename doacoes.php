<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
   <head>
       <link rel="shortcut icon" href="/imagens/Logo_Cubo_para_empresa_de_Arquitetura_Design_e_Engenharia_2.png" type="image/x-icon">
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
      <link rel="stylesheet" href="/estilos/style.css">


      <!--Links Externos-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;700&display=swap" rel="stylesheet">
   </head>


   <!--Header-->
   <?php
        include "menu.php";
   ?>

   <!--Corpo-->
   <body>

      <!--Principal-->
      <main id="main-indexc">

         <section>

            <!--Sessão Conteúdo-->
            <div class="doacoes-section">
               <!--Primeira Sessão-->
               <div id = "doacoes-container">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non purus nec libero mattis viverra sed ac quam. Quisque lacinia, erat at cursus ullamcorper, ipsum enim porta risus, eleifend fermentum mauris velit accumsan sapien. Ut vehicula quam nibh, non euismod metus tincidunt vel. Nulla eu pretium nisi. Donec dignissim massa vitae augue mollis, eu scelerisque purus tempor. Sed tristique gravida nibh finibus consectetur. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nunc eu nulla lobortis, tristique ipsum et, consequat arcu. Mauris vitae dignissim ipsum. Mauris leo odio, semper id ultricies eu, placerat eget ligula. Vivamus odio neque, pharetra in mi sollicitudin, feugiat lobortis arcu. Vivamus tincidunt vel lectus vestibulum imperdiet. Vestibulum maximus quam sed erat luctus pharetra. Nullam sollicitudin ipsum metus, quis pulvinar ante placerat eget..
                      <br> <br>
                      <div class ="doar">  
                      <a href="#" class="btn-menu"> Doe </a>
                      </div>
                  </p>
               </div>
            </div>
         </section>
         </main>
   </body>
   <br>
   <br>
   <?php
        include "footer.php";
   ?>
</html>