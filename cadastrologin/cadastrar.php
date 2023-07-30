<?php 
    if(isset($_POST['cadastrar']))
    {
        // print_r($_POST['ncadastroemail']);
        // print_r('<br>');
        // print_r($_POST['ncadastrosenha']);
        // print_r('<br>');
        // print_r($_POST['nconfirmarsenha']);
        include_once('cadastro.php');
        $email = $_POST['ncadastroemail'];
        $senha = $_POST['ncadastrosenha'];
        $checksenha = $_POST['nconfirmarsenha'];

        if($senha != $checksenha){
            die("suas senhas não correspondem.");
        };
        
        // $result = mysqli_query($conexao, "INSERT INTO usuarios()")
        $result = mysqli_query($conexao, "INSERT INTO users(email,senha) VALUES ('$email','$senha')");
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/exercitoemfocologo.png" type="image/x-icon">
    <link rel="stylesheet" href="styles/cadastro.css">
    <title>Exercito Brasileiro</title>
</head>
<body>
    <header>
        <h1>Exercito Brasileiro</h1>
        <nav>
        <li><a href="./login.html" class="cabecalho">Entrar</a></li>
        <li><a href="./cadastrologin/cadastro.html" class="cabecalho">Cadastrar</a></li>
        <li><a href="../suporte.html" class="cabecalho">Suporte</a></li>
        </nav>
    </header>

<div class="fcadastro">
    <form action="cadastrar.php" method="post" autocomplete="on">
        <h1>Cadastre-se</h1>
        <p><label for="ilcadastroemail">Email: </label> <input type="email" name="ncadastroemail" id="ilcadastroemail" required placeholder="exercitobr@educacaosp.gov" autocomplete="email"></p>
        <p><label for="icadastrosenha">Senha: </label> <input type="password" name="ncadastrosenha" id="icadastrosenha" required minlength="8" placeholder="Exercit0F@co" autocomplete="current-password"></p>
        <p><label for="iconfirmarsenha">Confirmar Senha</label> <input type="password" name="nconfirmarsenha" id="iconfirmarsenha" required minlength="8" placeholder="Confirmar senha"></p>
        <p><input type="submit" value="Cadastrar" name="cadastrar" id="cadastrar"></p>
    </form>
</div>
</body>
</html>