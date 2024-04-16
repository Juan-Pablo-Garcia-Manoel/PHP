<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>_Post</title>
    <script src="script.js"></script>
</head>
<body>
    <?php 
        $nome = $_POST["nome"];
        $nome = strtoupper($nome);
        $email = $_POST["email"];
        $email = strtoupper($email);
        $endereco = $_POST["endereco"];
        $endereco = strtoupper($endereco); 
        $profissao = $_POST["profissao"];
        $genero = $_POST["genero"];
        $faleconosco = $_POST["faleconosco"];
        $senha = $_POST["senha"];

        if ($genero === 'Outro (Qual ?)') {
            $genero_outro = $_POST["outro"];
        } else {
            $genero_outro = '';
        }
        ?>

    <?php
        echo "Nome: $nome <br>";
        echo "E-mail: $email<br>";
        echo "Endereço: $endereco<br>";
        echo "Profissão: $profissao<br>";
        
        echo "Genero: $genero";

        if ($genero_outro !== '') {
            echo " ($genero_outro)";
        }
        echo "<br>";

        $area = $_REQUEST['area'];
        echo "Areas de Interesse:\n"."<br>";
        foreach ($area as $areas)
            print ($areas."\n"."<br>");

        echo "Fale Conosco: $faleconosco<br>";

        $promocao = $_REQUEST['promocao'];
        echo "Deseja receber promoções:\n";
        foreach ($promocao as $promocoes)
            print ($promocoes."\n"."<br>");
    
        echo "Senha: $senha"."\n"."<br>";
    ?>

</body>
</html>



