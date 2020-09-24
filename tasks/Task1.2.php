<?php
//Task 1.2

/**
 * @param string $date
 * @return array
 */
function getItemsFromDate(string $date): array
{
    $filename = __DIR__ . "/../data_files/json1_2.json";
    $result = [];
    if (file_exists($filename))
        $result = json_decode(file_get_contents($filename), true);

    $unixDate = strtotime($date);
    $items = [];

    foreach ($result as $item) {
        $unixItemDate = strtotime($item['created']);
        if ($unixItemDate >= $unixDate)
            $items[] = $item;
    }

    return $items;
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
        <h1>Task 1.2.</h1>
        <hr>
        <h2>Решение:</h2>
        <?php echo "<pre>";
        print_r(getItemsFromDate("20.01.2020 12:00:00"));
        echo "</pre>"; ?>
    </div>
</div>
</body>
</html>
