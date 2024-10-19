<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulário</title>
</head>
<body>
    <pre>
    <form action="formulario.php" method="post">
    <label> Digite seu nome:</label>
    <input type="text" name="nome" required minlenght="2"/>
    <input type="text" name="nome" required minlength="2" pattern="^[A-Za-zéÉáÁíÍóÓúÚçÇâÂêÊîÎôÔûÛãÃõÕüÜ]+\s?[A-Za-zéÉáÁíÍóÓúÚçÇâÂêÊîÎôÔûÛãÃõÕüÜ]*$"/>

    <label>Digite seu numero:</label>
    <input type="number" name="telefone">

    <label> Digite seu e-mail</label>
    <input type="text" name="email">


    <input type="submit" value="Enviar para o servidor">
    </form>

    <hr/>
    </pre>


<?php
        $nome = '';

        //Olá, <nome>! Seja bem-vindo(a).

        if(isset($_POST['nome'])){ //isset é uma função do PHP que verifica se há valor em uma variável
            
            //estamos atribuindo o valor do campo "nome" digitado no formulário
            //à nossa variável chamada $nome
            $nome = $_POST['nome']; 

            //Estamos imprimindo a mensagem de boas vindas. 
            //Concatenamos uma string constante com a variável "$nome"
            echo '<p>Olá, '. $nome .'! Seja bem-vindo(a)</p>';
        }
    ?>
    
</body>
</html>