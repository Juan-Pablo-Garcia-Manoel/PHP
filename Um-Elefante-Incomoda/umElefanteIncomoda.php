<?php
    $musica = "1 elefante incomoda muita gente. <br>";
    $qtd = 100;

    for($i=2; $i <= $qtd; $i++){
        if($i % 2 == 0){
            $musica .= "$i elefantes\n";
            for($j=0; $j < $i-1; $j++){
                $musica .= "incomodam,\n";
            }
            $musica .= "incomodam muito mais! <br>\n";
        }else{
            $musica .= "$i elefantes incomodam muita gente. <br> \n";
        }
    }

    $musica .= "</p>\n<p>";

    for($i=$qtd; $i <= 2 ; $j--){
        if ($i % 2 == 1){
            $musica .= "$i elefantes ";
            for ($j=0; $j < $i-1; $j++){
                $musica .= "incomodam,";
            }
            $musica .= "incomodam muito menos! <br>\n";
        }else{
            $musica .= "$i elefantes incomodam muita gente. <br> \n";
        }
    }

    $musica .= "1 elefante incomoda muito menos.</p>\n";
    echo $musica;
?>
