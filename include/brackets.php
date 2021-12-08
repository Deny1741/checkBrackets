<?php

function brackets($string) {
    $brackets = preg_replace('/[^(){}\[\]<>]/','', $string);

    if ($brackets == '') {
        return json_encode(['success' => true]);
    }

    $bracketsDict = [
        '(' => ')',
        '[' => ']',
        '{' => '}',
        '<' => '>',
    ];

    $arr = str_split($brackets);
    $result[] = $arr[0];

    for ($i = 1; $i < count($arr); $i++) {
        $key = $result[count($result) - 1];

        if ($bracketsDict[$key] === $arr[$i]) {
            array_pop($result);
        } else {
            $result[] = $arr[$i];
        }
    }

    return json_encode(['success' => empty($result)]);
}

if (isset($_GET['func']) && $_GET['func'] === 'brackets') {
    echo brackets($_GET['value']);
}


