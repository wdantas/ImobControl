<?php
/**
 * Projeto Gerenciador de Imóveis
 * 
 * Model lista_registros_tabela
 *
 * @author Wellington Dantas
 * Facebook: http://fb.com/wdantas1
 * 
 * @author Rogério Santos
 */

$totalRegistros = count($registros);
$totalColunas = count($headers);

echo '<table class="striped">';
echo '<thead>';
echo '<tr>';
foreach($headers as $v){
    echo '<th>'.$v.'</th>';
}
echo '</tr>';
echo '</thead>';

if($totalRegistros > 0):
    for($i = 0; $i < $totalRegistros; $i++){
        echo '<tr>';
        foreach($registros[$i] as $k => $v){
            echo '<td>'.$v.'</td>';
        }
        echo '</tr>';
    }
else:
    echo '<tr><td collspan="'.$totalColunas.'">Nenhum registro encontrado no banco de dados!</td><tr>';
endif;

echo '</table>';