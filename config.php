<?php
require_once __DIR__. "/php/db.php";

function puxando(){
    global $client;
    $query_select  = "SELECT * FROM kaike_lira.cronograma;";
    $execute =$client->query($query_select);
    foreach($execute as $row){
        $horario = $row["horario"];
        $segunda = $row["segunda"];
        $terca = $row["terca"];
        $quarta = $row["quarta"];
        $quinta = $row["quinta"];
        $hsexta = $row["sexta"];
        $sabado = $row["sabado"];
        $domingo = $row["domingo"];

        echo " <tr>";
        echo     "<th scope='row'>$horario</th>";
        echo "<td colspan=''>$segunda</td>";
        echo"    <td>$terca</td>";
        echo"    <td>$quarta</td>";
        echo"    <td>$quinta</td>";
        echo"    <td>$hsexta</td>";
        echo"    <td>$sabado</td>";
        echo"    <td>$domingo</td>";
        echo    "</tr>";
    }
}

function push_afazeres(){
    global $client;

    $captura = "SELECT * FROM kaike_lira.afazeres;";
    $capturando = $client->query($captura);
    foreach($capturando  as $rrow){
        $horario = $rrow['hora'];
        $nome_evento = $rrow['nome'];
        $fim = $rrow['termino'];

        echo "<div class='afazeres'>";
        echo "<b id='horario'><p>$horario</p></b>";
        echo "<b id='nome'><p>$nome_evento</p></b>";
        echo "<b id='fim'><p>$fim</p></b>";
        echo "</div>";
    }
}