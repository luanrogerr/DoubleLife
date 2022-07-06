<!DOCTYPE html>
<html>
<head>
     <style>
        #main-indexc {
            transition: 0.5s;   
        }
    </style>
<link rel="shortcut icon" href="/imagens/Logo_Cubo_para_empresa_de_Arquitetura_Design_e_Engenharia_2.png" type="image/x-icon">
<link rel="stylesheet" href="estilos/terms.css">
<link rel="stylesheet" href="/estilos/style.css">
<link rel="stylesheet" href="/estilos/header-footer.css">
</head>

 <body>

       <?php
        include "menu.php";
   ?>

      <!--Principal-->
      <main id="main-indexc">

         <section>
         </section>
         </main>

        <section>
            <div class="container">
               <div class="terms">
                  <div id="terms-a">
                     <a href="terms.php" style ="text-decoration: none; color: black"><h3 style = "border-bottom: 1px solid black; padding-bottom: 5px;">Termos de Uso</h3></a>
                     <br>
                     <a href="privacidade.php" style="text-decoration: none; color: black"><h3 class="funcionar" id="fromLeft">Política de Privacidade</h3></a>
            
                  </div>

                            

                  <div id="terms-b">
                     <h2>Termos de Uso</h2>
                    <p>A Meta desenvolve tecnologias e serviços para que as pessoas se conectem umas com as outras, criem comunidades e expandam seus negócios. Estes Termos regem o uso do Facebook, do Messenger e de outros produtos, recursos, aplicativos, serviços, tecnologias e software que oferecemos (os Produtos da Meta ou Produtos), exceto quando declaramos expressamente que outros termos (e não estes) se aplicam. Quem fornece esses Produtos para você é a Meta Platforms, Inc. 

Não cobramos você pelo uso do Facebook ou de outros produtos e serviços cobertos por estes Termos. Em vez disso, empresas e organizações nos pagam para lhe mostrar anúncios de seus produtos e serviços. Quando você usa nossos Produtos, concorda que podemos mostrar anúncios que consideramos relevantes para você e seus interesses. Usamos seus dados pessoais para ajudar a determinar quais anúncios mostrar. 

Não vendemos seus dados pessoais para anunciantes e não compartilhamos informações de identificação pessoal (como nome, endereço de email ou outras informações de contato) com os anunciantes, a menos que tenhamos sua permissão específica. Em vez disso, os anunciantes nos informam os tipos de público que desejam que vejam os anúncios, e nós mostramos esses anúncios para pessoas que podem estar interessadas. Oferecemos aos anunciantes relatórios sobre o desempenho dos anúncios para ajudá-los a entender como as pessoas estão interagindo com o conteúdo. Veja a Seção 2 abaixo para saber mais. 

Nossa Política de Dados explica como coletamos e usamos seus dados pessoais para determinar alguns dos anúncios que serão exibidos e fornecer todos os outros serviços descritos abaixo. Você também pode ir para as suas Configurações a qualquer momento para analisar as escolhas de privacidade sobre como usamos seus dados.</p>
            
                  </div>
               </div>
            </div>
         </section>
   </body>
   <script>

window.onscroll = function() {
    scrollFunction();
}

function scrollFunction() {
      if (document.body.scrollTop > 250 || document.documentElement.scrollTop > 250) {
        document.getElementById("main-indexc").style.opacity = "0.0";
      } 
      else {
        document.getElementById("main-indexc").style.opacity = "1.0";
      }
}
</script>
</html>