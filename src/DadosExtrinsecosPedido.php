<?php

namespace Alura\DesignPattern;

use DateTimeInterface;

class DadosExtrinsecosPedido
{
    private string $nomeCliente;
    private DateTimeInterface $dataFinalizacao;

    public function __construct($nomeCliente, $dataFinalizacao)
    {
        $this->nomeCliente = $nomeCliente;
        $this->dataFinalizacao = $dataFinalizacao;
    }

    /**
     * @return string
     */
    public function getNomeCliente(): string
    {
        return $this->nomeCliente;
    }

    /**
     * @return DateTimeInterface
     */
    public function getDataFinalizacao(): DateTimeInterface
    {
        return $this->dataFinalizacao;
    }
}