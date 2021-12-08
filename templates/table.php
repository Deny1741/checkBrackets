<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/include/getTable.php';

$table = getTable($pdo);

?>

<table class="table">
    <thead>
        <tr>
            <th scope="col">Выражение</th>
            <th scope="col">Результат</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($table as $row) {?>
            <tr>
                <td><?=$row['name']?></td>
                <td><?=$row['result'] ? 'true' : 'false'?></td>
            </tr>
        <?php }?>
    </tbody>
</table>
