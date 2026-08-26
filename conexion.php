<?php

    function conexion(){

    $host = "host=dpg-da7fkgpsrm7s738ch6o0-a.oregon-postgres.render.com";
    $port = "port=5432";
    $dbname = "dbname=test_db_8vvk";
    $user = "user=basedatos";
    $password = "password=KL6LEidFmfcqb59XQ4kDA4CXXEHOHH2p";

    $db = pg_connect("$host $port $dbname $user $password");

    return $db;
}
?>