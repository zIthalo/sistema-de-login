
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilos/form.css">
    <title>Cadastre-se</title>

</head>
<body>
     
    <main class="box">
       
        <form action="">
        
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
                <input type="date" name="dataNasc" id="dataNasc"  required>
              
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