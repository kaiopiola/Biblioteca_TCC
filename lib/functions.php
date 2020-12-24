<?php

function Busca($tabela, $campo, $termo)
{
    global $db;
    $busca = explode(" ", $termo);
    $sql = "SELECT * FROM $tabela WHERE $campo LIKE '%$busca[0]%'";

     for ($i = 1; $i < count($busca); $i++) {
         $sql .= " AND $campo LIKE '%$busca[$i]%'";
     }
    $sql .= ";";

    $result = $db->query($sql);
    $result = $result->fetchAll();

    return $result;
}
