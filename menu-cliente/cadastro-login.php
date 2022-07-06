<html lang="pt-br">
<head>
    <link rel="shortcut icon" href="/imagens/Logo_Cubo_para_empresa_de_Arquitetura_Design_e_Engenharia_2.png" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="/estilos/header-footer.css">
    <link rel="stylesheet" href="/estilos/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>
<body>
    
<?php
    include('../menu.php')
?>
    <div class="container">
        <a id="btn-voltar" href="/index.php"><i class="fa-solid fa-circle-left" id="icon-voltar"></i></a>
        <div class="content first-content">
            <div class="first-column">
                <h2 class="title title-primary">Bem Vindo a DoubleLife!</h2>
                <p class="description description-primary">Novo por aqui? Comece sua jornada conosco! ❤</p>
                <p class="description description-primary">Se cadastre para acessar nossas funcionalidades.</p>
                <button id="signin" class="btn btn-primary" onclick="trocaCorBranco()">Cadastrar</button>
            </div>    
            <div class="second-column">
                <h2 class="title title-second">Login</h2>
                <p class="description description-second">Faça login para acessar nossas funcionalidades. ❤</p>
                <form class="form" method="post" action="login.php">
                    <label class="label-input" for="">
                        <i class="far fa-envelope icon-modify"></i>
                        <input type="email" name="email" placeholder="Email">
                    </label>
                
                    <label class="label-input" for="">
                        <i class="fas fa-lock icon-modify"></i>
                        <input type="password" name="senha" placeholder="Senha">
                    </label>
                    
                    <a id="cadastrar" href="/menu-cliente/php/login.php">Cadastre-se aqui</a>
                    <a class="password" href="/menu-cliente/php/login.php">Esqueceu sua Senha?</a>
                    
                    <button type="submit" value="Enviar" id="btn-logar" class="btn btn-second">Entrar</button>

                </form>
            </div><!-- second column -->
        </div><!-- first content -->
        <div class="content second-content">
            <div class="first-column">
                <h2 class="title title-primary">Bem Vindo a DoubleLife!</h2>
                <p class="description description-primary">Já possui uma conta? faça seu login abaixo. ❤</p>
                <p class="description description-primary">Faça login para acessar nossas funcionalidades. </p>
                <button id="signup" class="btn btn-primary" onclick="trocaCorAzul()">Entrar</button>
            </div>
            <div class="second-column">
                <h2 class="title title-second">Cadastre-se</h2>

                <form class="form" method="post" action="cadastro.php">
                
                    <label class="label-input" for="">
                        <i class="far fa-solid fa-clipboard icon-modify"></i>
                        <input type="text" name="nome" placeholder="Nome Completo">
                    </label>
                
                    <label class="label-input" for="">
                        <i class="far fa-envelope icon-modify"></i>
                        <input type="email" name="email" placeholder="Email">
                    </label>
                    
                    <label class="label-input" for="">
                        <i class="fas fa-lock icon-modify"></i>
                        <input type="password" name="senha" placeholder="Senha">
                    </label>

                    <label class="label-input" for="">
                        <i class="far fa-solid fa-chalkboard-user icon-modify"></i>
                        <input type="tel" name="cpf" placeholder="CPF">
                    </label>
                    
                    <label class="label-input" for="">
                        <i class="far fa-solid fa-house icon-modify"></i>
                        <input type="text" name="cep" placeholder="CEP">
                    </label>

                    <label class="label-input" for="">
                        <i class="far fa-solid fa-phone icon-modify"></i>
                        <input type="text" name="telefone" placeholder="Número de Telefone">
                    </label>

                    <label class="label-input" for="">
                        <i class="far fa-solid fa-calendar icon-modify"></i>
                        <input type="date" name="dt_nasci" placeholder="Data de Nascimento">
                    </label>

                
                    <button type="submit" class="btn btn-second" id="btn-cadastrar">Cadastrar</button>
                </form>
            </div><!-- second column -->
        </div><!-- second-content -->
    </div>
    <script src="../js/app.js"></script>
    <script type="text/javascript" src="../js/btn-voltar.js"></script>
    <script type="text/javascript" src="../js/btn-mobile.js"></script>

</html>