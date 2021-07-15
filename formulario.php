<?php
if(isset($_POST['submit'])){
    
    include_once('config.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];


    $result = mysqli_query($conexao, "INSERT INTO usuarios(nome, email, senha) VALUES ('$nome', '$email', '$senha')");

   

    

    header('Location: formulario.php');
    

}

?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Tela de Registro&Login</title>
</head>
<body>
    <section>
    <div class="container">
        <div class="user signinBx">
            <div class="imgBx"><img src="img/img01.jpg"></div>
            <div class="formBx">
                <form action="teste_login.php" method="POST">
                <h2>Login</h2>
                <input type="text" name="nome" id="nome" placeholder="Nome" required>
                <input type="password" name="senha" id="senha" placeholder="Senha" required>
                <input type="submit" name="submit" value="login">
                <p class="signup">Não tem uma conta? <a href="#" onclick="toggleForm();">Cadastre-se</a></p>
                </form>
            </div>
        </div>

       <div class="user signupBx">
            <div class="formBx">
                <form action="formulario.php" method="POST">
                <h2>Criar uma conta</h2>
                <input type="text" name="nome" id="nome" placeholder="Nome de Usuário" required>
                <input type="text" name="email" id="email" placeholder="Email" required>
                <input type="password" name="senha" id="senha" placeholder="Criar uma senha" required>
                <input type="submit" name="submit" value="Inscrever">
                <p class="signup">Você ja tem uma conta? <a href="#" onclick="toggleForm();">Entrar</a></p>
                </form>
            </div>
            <div class="imgBx"><img src="img/img02.jpg"></div>
        </div>
    </div>
    </section>  
    <script src="script.js"></script>
</body>
</html>