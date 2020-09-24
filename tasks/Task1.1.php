<?php
//Task 1.1
$string = 'петров петр петрович';

/**
 * @param string $string
 * @return string
 */
function convertFullName(string $string): string
{
    $string = mb_convert_case($string, MB_CASE_TITLE);
    $arr = explode(' ', $string);

    for ($i = 1; $i <= count($arr) - 1; $i++) {
        $first = substr($arr[$i], 0, 2);
        $arr[$i] = $first . '.';
    }

    $result = implode($arr, ' ');
    return $result;
}

?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div style="width: 80% ; margin: auto ; border: 1px solid #000000; height: 100vh">
    <div style="margin: 10px 10px 10px 10px;">
        <h1>Task 1.1.</h1>
        <hr>
        <h2>Входящие данные:</h2>
        </span>ФИО = <?= $string ?></span>
        <h2>Решение:</h2>
        <?php echo(convertFullName($string)); ?>
    </div>
</div>
</body>
</html>
