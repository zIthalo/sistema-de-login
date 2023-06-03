<?php
//Neste código aqui vamos fazer os testes se a pessoa está cadastrada ou não

    session_start();

    // print_r($_REQUEST);
    
    //Se o meu submit existir e meu campo email não estiver vazio e minha senha não estiver vazia então acesse
    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))
    {
        // Acessa
        include_once('config.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        // print_r('Email: ' . $email);
        // print_r('<br>');
        // print_r('Senha: ' . $senha);

        $sql = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'";

        $result = $conexao->query($sql);

        // print_r($sql);
        // print_r($result);

        if(mysqli_num_rows($result) < 1){ //Se o resultado que o usuario digitou de email e senha for menor que uma linha lá no meu banco de dados, destrua o email que ele digitou e a senha que ele digitou.
            
            unset($_SESSION['email']);//destroi o email
            unset($_SESSION['senha']);//destroi a senha
            header('Location: login.php');//volta para a tela de login
        }
        else{//se não
            $_SESSION['email'] = $email; //cria uma nova sessão com o emal
            $_SESSION['senha'] = $senha; //cria uma nova sessão com a senha
            header('Location: sistema.php'); //manda para a tela do sistema.php
        }
    }
    else
    {
        // isso aqui faz eu retornar para a tela de login caso eu não esteja logado ou cadastrado no DB
        header('Location: login.php');// é essa a sintaxe que usamos para direcionar alguém para alguma tela.
    }
?>