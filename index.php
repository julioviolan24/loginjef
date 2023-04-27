<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
</head>
    <body>
        <div>
        <form method = "POST" action="">
        <b>Faça seu Login, entre com seus dados!</b><br><br>
                Nome: <input type=text name=nome>
        <br><br>
                Senha: <input type=password name=senha>
        <br><br>
                <input type=submit name="Entrar" value="Entrar">
        <br><br>
        <?php
                $nome = "Jeferson Almeida";
                $senha = "etec211";
           
        if(($_POST["nome"]) == $nome && ($_POST["senha"])==$senha){
                header("Location: corretor.php");
            }
        else{
                echo " <h1>Acesso Negado</h1> 
                <h2>Nome e/ou Senha estão incorretos, tente novamente.</h2>";
            }
        ?>
        </form>
        </div>
    </body>
</html>