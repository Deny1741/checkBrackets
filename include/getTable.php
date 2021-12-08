<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/include/connect.php';

function getTable($pdo)
{
    return $pdo->query('SELECT * FROM brackets')->fetchAll(PDO::FETCH_ASSOC);
}

//
//echo json_encode(['table' => '<table class="table">
//            <thead>
//                <tr>
//                    <th scope="col">Выражение</th>
//                    <th scope="col">Результат</th>
//                </tr>
//            </thead>
//            <tbody>
//                <tr>
//                    <td>Mark</td>
//                    <td>Otto</td>
//                </tr>
//                <tr>
//                    <td>1</td>
//                    <td>Введите выражение</td>
//                </tr>
//            </tbody>
//        </table>']);