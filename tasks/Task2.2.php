<?php
//Task 2.2

$url = 'https://www.chelzeo.ru';

/**
 * @param string $url
 * @return array
 */
function getUrl(string $url): array
{
    $file = file_get_contents($url);
    $pattern = '~<a href="(.*?)"~';
    preg_match_all($pattern, $file, $matches);
    unset($matches[0]);
    return $matches;
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
<div style="width: 80% ; margin: auto ; border: 1px solid #000000; height: 100%">
    <div style="margin: 10px 10px 10px 10px;">
        <h1>Task 2.2:</h1>
        <hr>
        <h2>Решение:</h2>
        <?php echo '<pre>';
        var_dump(getUrl($url)); ?>
    </div>
</div>
</body>
</html>
