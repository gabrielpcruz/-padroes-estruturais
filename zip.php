<?php

require 'vendor/autoload.php';

use Alura\DesignPattern\Orcamento;
use Alura\DesignPattern\Relatorio\ArquivoExportadoZip;
use Alura\DesignPattern\Relatorio\OrcamentoExportado;
use Alura\DesignPattern\Relatorio\OrcamentoZip;

$orcamentoZip = new ArquivoExportadoZip();

$orcamento = new Orcamento();
$orcamento->valor = 500;
$orcamento->quantidadeItens = 5;

$orcamentoExportado = new OrcamentoExportado($orcamento);

echo $orcamentoZip->salvar($orcamentoExportado);