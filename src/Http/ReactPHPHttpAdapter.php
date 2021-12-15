<?php

namespace Alura\DesignPattern\Http;

class ReactPHPHttpAdapter implements HttpAdapter
{
    public function post(string $url, array $data = []): void
    {
        // fazer as configurações necessárias

        echo "Usando o React PHP Adapter..." . PHP_EOL;
    }
}