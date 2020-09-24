<?php
//Task 1.4
$filename = __DIR__ . "/../data_files/json1_4.json";
$result = [];
if (file_exists($filename))
    $result = json_decode(file_get_contents($filename), true);

for ($i = 0; $i <= count($result); $i++) {
    if (!empty($_GET) && $result[$i]['id'] == $_GET['set_viewed']) {

        $result[$i]['viewed']++;
        $resultFile = json_encode($result);

        if ($file = fopen($filename, 'w')) {
            fwrite($file, $resultFile);
            fclose($file);
            header("Location: /");
        }
    }
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
        <h1>Task 1.4.</h1>
        <hr>
        <h2>Решение:</h2>
        <? foreach ($result as $item): ?>
            <div>
                <b><?= $item['name'] ?></b><br>
                <small>Viewed: <?= $item['viewed'] ?></small><br>
                <?= $item['text'] ?><br>
                <a href="?set_viewed=<?= $item['id'] ?>">I watched</a><br>
                <hr>
            </div>
        <? endforeach; ?>
    </div>
</div>
</body>
</html>