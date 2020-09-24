<?php

//Task 2.1
include_once(__DIR__ . "/../classes/autoload.php");

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
        <h1>Task 2.1.</h1>
        <hr>
        <h2>Решение:</h2>
        <?php echo CBase::getParam('message') . '<br>';
        echo CBase::getParam('author'); ?>
    </div>
</div>
</body>
</html>