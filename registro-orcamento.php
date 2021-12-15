<?php


use Alura\DesignPattern\Http\CurlHttpAdapter;
use Alura\DesignPattern\Http\ReactPHPHttpAdapter;
use Alura\DesignPattern\Orcamento;
use Alura\DesignPattern\RegistroDeOrcamento;

require "vendor/autoload.php";

$orcamento = new Orcamento();
$orcamento->valor = 500;
$orcamento->quantidadeItens = 5;
$orcamento->aprova();
$orcamento->finaliza();

$registroOrcamento = new RegistroDeOrcamento(new CurlHttpAdapter());
$registroOrcamento->registrar($orcamento);