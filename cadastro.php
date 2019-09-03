<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastro Conta</title>
    </head>
    <body>
        <form method="POST" action="validacadastro.php" id="cadastro">
            Nome<input type="text" name="nome">
            Sobrenome<input type="text" name="sobrenome">
            <br>
            Idade<input type="text" name="idade">
            <br>
            Diga seu sexo:
            <br>
            Masculino<input type="radio" name="sexo" value="M">
            Feminino<input type="radio" name="sexo" value="F">
            Anônimo<input type="radio" name="sexo" value="O">
            <br>
            Login<input type="text" name="login">
            <br>
            Senha<input type="password" name="password">
            <br>
            <h3>Escolha seu time:</h3>
            <label>
            Botafogo<input type="radio" name="nome_time" value="Botafogo"></label>
            </label>
            <label>
            Flamengo<input type="radio" name="nome_time" value="Flamengo"></label>
            <label>
            Fluminense<input type="radio" name="nome_time" value="Fluminense">
            </label>
            <label>
            Vasco<input type="radio" name="nome_time" value="Vasco">
            </label>
            <button type="submit">Confirmar Cadastro</button>
        </form>

        <!--<script src="js/cadastro.js"></script>!-->
    </body>


</html>