<?php


require 'vendor/autoload.php';

use Alura\DesignPattern\Orcamento;
use Alura\DesignPattern\Relatorio\ArquivoExportadoJson;
use Alura\DesignPattern\Relatorio\OrcamentoExportado;

$orcamentoJson = new ArquivoExportadoJson();

$orcamento = new Orcamento();
$orcamento->valor = 500;
$orcamento->quantidadeItens = 5;

$orcamentoExportado = new OrcamentoExportado($orcamento);

echo $orcamentoJson->salvar($orcamentoExportado);