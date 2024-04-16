<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style type="text/css">
    h1{
        color: darkblue;
    }
</style>

<body>
    <h1>Mariana</h1>

    <img src="https://www.galinhapintadinha.com.br/wp-content/uploads/2014/09/SetWidth460-Mariana-01-01-01.jpg" alt="Imagem_infantil"><br><br>

    <?php
    
        $count = 1;
        $contagem = 1;
        $novoCount = 2;
        $atualizacaoCount = "é\n".$contagem.",\n";
        $frase =  "Mariana conta\n";
        $finalFrase = "é!";

        echo $frase.$count."<br>";
        echo $frase.$count."\n: ";
        for ($i=0; $i < $novoCount; $i++) { 
            echo $atualizacaoCount++;
        }
        echo $finalFrase."<br>";
        echo "Ana, viva a Mariana, viva a Mariana"."<br>"."<br>";
        
        for ($i=1; $i < 100; $i++) {
                
                // Mariana conta ?
                do {
                    $count++;
                    echo $frase.$count."<br>";
                    break;
                } while  ($i < $count);

                //Mariana conta ? : é ? ... é!
                echo $frase.$count."\n: ";

                for ($j=1; $j <= $count; $j++) {
                    echo "é\n".$j.",\n";
                }

                echo $finalFrase."<br>";        
                
                //Ana, viva a Mariana, viva a Mariana
                echo "Ana, viva a Mariana, viva a Mariana"."<br>"."<br>";

        }
        
    ?>

</body>
</html>
