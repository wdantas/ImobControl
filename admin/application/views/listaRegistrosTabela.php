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
$totalColunas = count($headers) + 2;

echo '<table class="striped">';
echo '<thead>';
echo '<tr>';
foreach($headers as $v){
    echo '<th>'.$v.'</th>';
}
echo '<th colspan="2">Ação</th>';
echo '</tr>';
echo '</thead>';

if($totalRegistros > 0):
    for($i = 0; $i < $totalRegistros; $i++){
        echo '<tr>';
        foreach($registros[$i] as $k => $v){
            echo '<td>'.$v.'</td>';
        }
        echo '<td><a href="'.base_url($link.'editar/'.$registros[$i][$idRegistro]).'" title="Alterar Informações"><i class="material-icons">&#xE254;</i>Editar</a></td>';
        echo '<td><a href="'.base_url($link.'deletar/'.$registros[$i][$idRegistro]).'" title="Apagar Registro"><i class="material-icons">&#xE872;</i>Deletar</a></td>';
        echo '</tr>';
    }
else:
    echo '<tr><td colspan="'.$totalColunas.'">Nenhum registro encontrado no banco de dados!</td><tr>';
endif;

echo '</table>';