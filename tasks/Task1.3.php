<?php
//Task 1.3

$arrays = require __DIR__ . '/../data_files/arr1_3.php';

/**
 * @param array $arrays
 * @param string $item
 * @param string $order
 * @return array
 */
function array_sort(array $arrays, string $item, string $sort = 'DESC'): array
{
    $sortableArray = [];
    $newArray = [];

    foreach ($arrays as $key => $value) {
        foreach ($value as $keyItem => $valueItem) {
            if ($keyItem == $item) {
                $sortableArray[$key] = $valueItem;
            }
        }
    }

    switch ($sort) {
        case 'DESC': asort($sortableArray); break;
        case 'ASC': arsort($sortableArray); break;
    }

    foreach ($sortableArray as $key => $value) {
        $newArray[$key] = $arrays[$key];
    }

    return $newArray;
}

$arraySortDesc = array_sort($arrays, 'sort', 'DESC');

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
        <h1>Task 1.3:</h1>
        <hr>
        <h2>Решение:</h2>
        <?php echo "<pre>";
        print_r($arraySortDesc);
        echo "</pre>"; ?>
    </div>
</div>
</body>
</html>