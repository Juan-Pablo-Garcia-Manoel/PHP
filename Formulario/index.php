<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Atividade Avaliativa</title>
    <script src="scriptJS.js"></script>
</head>
<body>
    <form action="cadastro.php" method="post" name="cadastro" onsubmit="return validarFormulario()">
        Nome: <input type="text" name="nome" id=""><br>
        E-Mail: <input type="email" name="email" id=""><br>
        Endereço: <input type="text" name="endereco" id=""><br>
       
        <p>Qual a sua profissão:</p>

            <select name="profissao" id="selecionado">
                <option>Engenheiro de Software</option>

                <option>Analista de Segurança de Informação</option>

                <option>Analista de Sistemas</option>

                <option>Administrador de Sistemas</option>

                <option>Administrador do banco de dados (DBA)
                </option>

                <option>Gestor de tecnologias da informação</option>

                <option>Arquiteto de redes</option>

                <option>Desenvolvedor</option>
            </select><br>
        
            <p>Qual o seu genêro: </p>

            <select name="genero" id="genero">
                <option selected>Masculino</option>
                <option>Feminino</option>
                <option>Prefiro não informar</option>
                <option>Outro (Qual ?)</option> 
            </select><br>

            <p>Qual a sua areá de interesse: </p>

            Banco de dados<input type="checkbox" name="area[]" value="Banco de dados" checked><br>

            Engenharia de software<input type="checkbox" name="area[]" value="Engenharia de software"><br>
            
            Redes de computadores<input type="checkbox" name="area[]" value="Redes de computadores"><br>

            Desenvolvimento de jogos<input type="checkbox" name="area[]" value="Desenvolvimento de jogos"><br>

            Programação back-end<input type="checkbox" name=" area[]" value="Programação back-end"><br>

            Programação front-end<input type="checkbox" name="area[]" value="Programação front-end"><br>

            Mineração de dados<input type="checkbox" name="area[]" value="Mineração de dados"><br>

            Fale Conosco: <input type="text" name="faleconosco"><br>

            <p>Deseja receber nossas promoções</p>

            Sim<input type="checkbox" name="promocao[]" value="Sim" checked  onclick="uncheck(this)"><br>
            Não<input type="checkbox" name="promocao[]" value="Não"  onclick="uncheck(this)"><br>

            Senha<input type="password" name="senha"><br>

            Confirmação de senha<input type="password" name="senha_Conf"><br>

        Confirmar<input type="submit" value="confirmar"><br>

    </form>

</body>
</html>