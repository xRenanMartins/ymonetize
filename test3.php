<?php
function filtrarMensagensPorData($caminhoArquivo, $dataInicio, $dataFim) {
    $mensagensFiltradas = array();

    $timestampInicio = strtotime($dataInicio);
    $timestampFim = strtotime($dataFim);

    $linhas = file($caminhoArquivo, FILE_IGNORE_NEW_LINES);

    foreach ($linhas as $linha) {
        list($data, $mensagem) = explode(': ', $linha, 2);

        $timestampData = strtotime($data);

        // verifica se a data esta no intervalo especificado
        if ($timestampData >= $timestampInicio && $timestampData <= $timestampFim) {
            // Adiciona a mensagem ao array de mensagens filtradas
            $mensagensFiltradas[] = $linha;
        }
    }

    // Imprime as mensagens
    foreach ($mensagensFiltradas as $mensagem) {
        echo $mensagem . PHP_EOL;
    }
}

// Exemplo de uso
filtrarMensagensPorData("log.txt", "01/02/2024 12:00:00", "28/02/2024 23:59:59");
