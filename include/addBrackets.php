<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/include/connect.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/include/brackets.php';

$name = $_POST['name'];
$result = $_POST['result'];
//$result = json_decode(brackets($_GET['value']), true);

function addBrackerts($pdo, $name, $result)
{
    $pdo->prepare("INSERT INTO brackets (name, result) VALUES (?, ?);")->execute([$name, $result]);

}

addBrackerts($pdo, $name, $result);



