<?php

namespace Alura\DesignPattern\Relatorio;

use ZipArchive;

class ArquivoExportadoZip implements ArquivoExportado
{
    public function salvar(ConteudoExportado $conteudoExportado): string
    {
        $zip = new ZipArchive();

        $caminhoArquivo = tempnam(sys_get_temp_dir(), 'zip');;

        $zip->open($caminhoArquivo, ZipArchive::CREATE);

        foreach ($conteudoExportado->conteudo() as $item => $valor) {
            $zip->addFromString($item, serialize($valor));
        }

        $zip->close();

        return $caminhoArquivo;
    }
}