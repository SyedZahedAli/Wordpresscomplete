<?php

$connection = new PDO('mysql:host=54.152.176.60;dbname=demo', 'demo', 'demo');
$statement  = $connection->query('SELECT message FROM demo');

echo $statement->fetchColumn();
?>
