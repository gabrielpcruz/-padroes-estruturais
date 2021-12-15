<?php


require 'vendor/autoload.php';

use Alura\DesignPattern\Orcamento;
use Alura\DesignPattern\Relatorio\OrcamentoExportado;
use Alura\DesignPattern\Relatorio\ArquivoExportadoXml;

$orcamentoXml = new ArquivoExportadoXml('orcamento');

$orcamento = new Orcamento();
$orcamento->valor = 500;
$orcamento->quantidadeItens = 5;

$orcamentoExportado = new OrcamentoExportado($orcamento);

echo $orcamentoXml->salvar($orcamentoExportado);