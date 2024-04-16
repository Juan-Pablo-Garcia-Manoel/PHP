<?php
    require_once("DB.php");
    $banco = DB::getBanco();

    if (isset($_POST['acao']) &&  ($_POST['acao'] == 'confirmar')) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $profissao = $_POST['profissao'];
    $genero = $_POST['genero'];
    $area_de_interesse = $_POST['area_de_interesse'];
    $promocao = $_POST['promocao'];
    $senha = $_POST['senha'];
    $faleconosco= $_POST['faleconosco'];
    $sql = "INSERT INTO formulario.pessoa
    (nome, email, profissao, genero, area_de_interesse, promocao, senha, faleconosco)
    VALUES('$nome', '$email', '$profissao','$genero', '$area_de_interesse', '$promocao', '$senha', '$faleconosco');";

    $stmt = $banco->prepare($sql);

    if ($stmt->execute() == 1)
        echo "<p>Registro inserido!</p>";
    } elseif (isset($_GET['excluir'])) {
        $id = $_GET['excluir'];
        $sql = "DELETE FROM pessoa
            WHERE id=$id;";

        if ($banco->exec($sql) == 1)
            echo "<p>Registro deletado!</p>";
    }
?>

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
    <form action="index.php" method="post" name="formulario" onsubmit="return validarFormulario()">
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

            Banco de dados<input type="checkbox" name="area_de_interesse" value="Banco de dados" checked><br>

            Engenharia de software<input type="checkbox" name="area_de_interesse" value="Engenharia de software"><br>
            
            Redes de computadores<input type="checkbox" name="area_de_interesse" value="Redes de computadores"><br>

            Desenvolvimento de jogos<input type="checkbox" name="area_de_interesse" value="Desenvolvimento de jogos"><br>

            Programação back-end<input type="checkbox" name=" area_de_interesse" value="Programação back-end"><br>

            Programação front-end<input type="checkbox" name="area_de_interesse" value="Programação front-end"><br>

            Mineração de dados<input type="checkbox" name="area_de_interesse" value="Mineração de dados"><br>

            Fale Conosco: <input type="text" name="faleconosco"><br>

            <p>Deseja receber nossas promoções</p>

            Sim<input type="checkbox" name="promocao" value="Sim" checked  onclick="uncheck(this)"><br>
            Não<input type="checkbox" name="promocao" value="Não" onclick="uncheck(this)"><br>

            Senha<input type="password" name="senha"><br>

            Confirmação de senha<input type="password" name="senha_Conf"><br>

        Confirmar<input type="submit" value="confirmar" name="acao"><br>

    </form>

<?php

require_once("Formulario.php");

$sql = 'SELECT id, nome, email, profissao, genero, area_de_interesse, promocao, senha, faleconosco
FROM formulario.pessoa;';

$formularios = $banco->query($sql);
$formularioFetch = new Formulario;

//$alunos->setFetchMode(PDO::FETCH_INTO.$alunoFetch);
$formularios->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,'Formulario');

echo "<ul>";

?>

<table border="1">
            <tr>
                <th>id</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Profissao</th>
                <th>Area de interesse</th>
                <th>Fale conosco</th>
                <th>Promocao</th>
                <th>Senha</th>
                <th></th>
                <th></th>
            </tr>

<?php
while ($formulario = $formularios->fetch()):
?>
    <tr>
        <td><?=$formulario->id?></td>
        <td><?=$formulario->getNome() ?></td>
        <td><?=$formulario->getEmail()?></td>
        <td><?=$formulario->getProfissao()?></td>
        <td><?=$formulario->getArea_de_interesse()?></td>
        <td><?=$formulario->getFaleconosco()?></td>
        <td><?=$formulario->getPromocao()?></td>
        <td><?=$formulario->getSenha()?></td>
        <td><a href="index.php?alterar=<?= $formulario->id?>">Alterar</a></td>
        <td><a href="index.php?excluir=<?= $formulario->id?>">Excluir</a></td>
    </tr>
<?php
    endwhile;
?>
    </table>
</body>
</html>