<?php
//Task 1.4
$filename = __DIR__ . "/json1_4.json";
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

<? foreach ($result as $item): ?>
    <div>
        <b><?= $item['name'] ?></b><br>
        <small>Viewed: <?= $item['viewed'] ?></small><br>
        <?= $item['text'] ?><br>
        <a href="?set_viewed=<?= $item['id'] ?>">I watched</a><br>
        <hr>
    </div>
<? endforeach;