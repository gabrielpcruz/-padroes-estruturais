<?php
namespace Alura\DesignPattern\Relatorio;

class ArquivoExportadoJson implements ArquivoExportado
{
    public function salvar(ConteudoExportado $conteudoExportado): string
    {
        $caminhoArquivo = tempnam(sys_get_temp_dir(), 'json');

        file_put_contents($caminhoArquivo, json_encode($conteudoExportado->conteudo()));

        return $caminhoArquivo;
    }
}