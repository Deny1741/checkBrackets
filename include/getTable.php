<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/include/connect.php';

function getTable($pdo)
{
    return $pdo->query('SELECT * FROM brackets ORDER BY id DESC')->fetchAll(PDO::FETCH_ASSOC);
}
