<?php

use Alura\DesignPattern\DadosExtrinsecosPedido;
use Alura\DesignPattern\Orcamento;
use Alura\DesignPattern\Pedido;

require 'vendor/autoload.php';

$pedidos = [];

$hoje = new DateTimeImmutable();
$dados = new DadosExtrinsecosPedido(md5('a'), $hoje);

for ($i = 0; $i < 10000; $i++) {
    $pedido = new Pedido();
    $pedido->orcamento = new Orcamento();
    $pedido->dados = $dados;

    $pedidos[] = $pedido;
}

echo memory_get_peak_usage();