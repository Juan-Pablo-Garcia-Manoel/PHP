<?php

    require_once 'autoload.php';
    use Cesta\Cesta;
    use Produtos\Hardware;
    use Produtos\Smartphone;
    use Produtos\Eletronico;

    // criando a cesta
    $cesta = new Cesta();

    // criando alguns produtos
    $produto1 = new Hardware();
    $produto1->setCodigo(1);
    $produto1->setDescricao("HD Externo 1TB");
    $produto1->setQuantidade(1);
    $produto1->setPrecoTotal(299.90);

    $produto2 = new Smartphone();
    $produto2->setCodigo(2);
    $produto2->setDescricao("iPhone 12");
    $produto2->setQuantidade(1);
    $produto2->setPrecoTotal(4999.00);

    $produto3 = new Eletronico();
    $produto3->setCodigo(3);
    $produto3->setDescricao("Smart TV 55''");
    $produto3->setQuantidade(1);
    $produto3->setPrecoTotal(3599.00);

    // adicionando os produtos na cesta
    $cesta->AdicionaItem($produto1);
    $cesta->AdicionaItem($produto2);
    $cesta->AdicionaItem($produto3);

    // exibindo a lista de produtos
    echo "Lista de produtos na cesta:<br>";
    $cesta->ExibeLista();

    // exibindo o total
    echo "Total: R$ " . number_format($cesta->CalculaTotal(), 2, ',', '.');

?>