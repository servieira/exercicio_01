<?php
    require_once "Pessoa.class.php";
    //require_once "profissional.class.php";
    require_once "Proprietario.class.php";
    require_once "atendimento.class.php";
    require_once "cachorro.class.php";
    require_once "servico.class.php";

    $proprietario = new Proprietario("111111111", "Pedro da Silva", "(14)99999999");
    $cachorro = new cachorro("bob", "caramelo", "SRD", "01/01/2012", $proprietario);

    $servico1 = new Servico("Tosa", 60.00);
    $servico2 = new Servico("banho", 45.50);
    $atendimento = new Atendimento("01/04/2024", $cachorro, array($servico1, $servico2)); //criar variável atendimento

    echo "<h1> Atendimento </h1>";

    echo "Data: {$atendimento->getDataAtendimento()}<br>";

    echo "<h2>Servico(s)</h2>";

    foreach($atendimento->getServico() as $objeto_servico)
    {
        echo "Descritivo:{$objeto_servico->getDescritivo()}<br>";
        echo "Preco:" . number_format($objeto_servico->getPreco(),2, ",", ".") . "<br>";
    }

    echo "<h2> Cachorro</h2>";

    echo "Nome: {$atendimento->getCachorro()->getNome()}<br>";
    echo "Cor:{$atendimento->getCachorro()->getCor()}<br>";
    echo "Raça:{$atendimento->getCachorro()->getRaca()}<br>";
    echo "Data de nascimento:{$atendimento->getCachorro()->getDataNascimento()}<br>";
    echo "<h3>Proprietário</h3>";

    echo 
    "Nome:{$atendimento->getCachorro()->getProprietario()->getNome()}<br>";
    echo
    "CPF:{$atendimento->getCachorro()->getProprietario()->getCpf()}<br>";
    echo
    "Telefone:{$atendimento->getCachorro()->getProprietario()->getTelefone()}<br>";
    
//bla bla bla bla bla bla



?>