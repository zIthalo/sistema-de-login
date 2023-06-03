<?php
    //esse if serve para verificar se minhas infos foram submitadas para o meu DB
    if(isset($_POST['submit'])){ //is set* se existir a variável submit faça
        // print_r('Nome: ' . $_POST['nome']);
        // print_r('<br>');
        // print_r('Email: ' . $_POST['email']);
        // print_r('<br>');
        // print_r('Tel: ' . $_POST['telefone']);
        // print_r('<br>');
        // print_r('Sexo: ' . $_POST['genero']);
        // print_r('<br>');
        // print_r('Nascimento: ' . $_POST['dataNasc']);
        // print_r('<br>');
        // print_r('Cidade: ' . $_POST['cidade']);
        // print_r('<br>');
        // print_r('Estado: ' . $_POST['estado']);
        // print_r('<br>');
        // print_r('Endereço: ' . $_POST['endereco']);
        //Cada um destes prints r serve para mostrar os conteúdos que eu inseri em cada variável de acordo com meu formulário. Para ficar mais claro é assim: escreva(postando['o conteúdo inserido no campo name em html'])
        include_once ('config.php'); //aqui eu incluo minhas configs do php
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $sexo = $_POST['genero'];
        $dataNasc = $_POST['datanasc'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $endereco = $_POST['endereco'];
        $senha = $_POST['senha'];
        //  //A diferença do código acima para este aqui é que neste trecho eu tô pegando as informações de cada name em html através do $_POST['nome'], por exemplo e colocando-as dentro de uma variável ali acima tendeu?

        //Agora vou fazer minhas queries ↓↓
        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome, email,senha,telefone,sexo,datanasc,cidade,estado,endereco) VALUES ('{$nome}', '{$email}', '{$telefone}','{$sexo}','{$dataNasc}','{$cidade}','{$estado}','{$endereco}','{$senha}')");// antes, nesse código, eu tinha feito os nomes das variáveis sem as aspas e as chaves. Deu errado. Veja o config.php para saber outros erros

        header('Location: login.php');
    } 
    //nessa query eu chamo a minha conexão que faz contato com minha db (se quser saber mais vá no código conexao.php) agora eu insiro na minha tabela usuarios, nos campos nome, email,telefone,sexo,data_nasc,cidade,estado,endereco, os valores das minhas variáveis $nome, $email, $telefone,$sexo,$dataNasc,$cidade,$estado,$endereco
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/form.css">
    <title>Cadastre-se</title>

</head>

<body>

    <main class="box">

        <form action="login.php" method="POST">

            <fieldset>

                <legend><strong>Cadastre-se</strong></legend>
                <br>
                <section class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome Completo</label>
                </section>
                <section class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </section>
                <section class="inputBox">
                    <input type="pass" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput">Senha</label>
                </section>
                <section class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </section>
                <p>Sexo</p>
                <input type="radio" id="feminino" name="genero" value="feminino" required>
                <label for="feminino">Feminino</label>
                <br>

                <input type="radio" id="masculino" name="genero" value="masculino" required>
                <label for="masculino">Masculino</label>
                <br>
                <input type="radio" id="outro" name="genero" value="outro" required>
                <label for="outro">Outro</label>
                <br>
                <label for="dataNasc"><strong>Data de Nascimento:</strong></label>
                <input type="date" name="dataNasc" id="dataNasc" required>

                <section class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <label for="cidade" class="labelInput">Cidade</label>
                </section>
                <section class="inputBox">
                    <input type="text" name="estado" id="estado" class="inputUser" required>
                    <label for="estado" class="labelInput">Estado</label>
                </section>
                <section class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label for="endereco" class="labelInput">Endereço</label>
                </section>
                <input type="submit" name="submit" id="submit">
            </fieldset>

        </form>

    </main>


</body>

</html>