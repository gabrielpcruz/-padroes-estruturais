<?php

use Alura\DesignPattern\CalculadoraDeDescontos;
use Alura\DesignPattern\Impostos\Icms;
use Alura\DesignPattern\Impostos\Ikcv;
use Alura\DesignPattern\Impostos\Iss;
use Alura\DesignPattern\Orcamento;
use Alura\DesignPattern\CalculadoraDeImpostos;

require "vendor/autoload.php";

$calculadora = new CalculadoraDeImpostos();

$orcamento = new Orcamento();
$orcamento->valor = 100;

echo $calculadora->calcula($orcamento, new Icms(new Iss(new Ikcv())));

//$orcamento = new Orcamento();
//$orcamento->valor = 400;
//$orcamento->quantidadeItens = 4;
//
//$calculadora = new CalculadoraDeDescontos();
//echo $calculadora->calculaDescontos($orcamento);