<?php
//Task 1.2
echo 'Task 1.2:<br>';

/**
 * @param string $date
 * @return array
 */
function getItemsFromDate(string $date): array
{
    $filename = __DIR__ . "/json1_2.json";
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

echo "<pre>";
print_r(getItemsFromDate("20.01.2020 12:00:00"));
echo "</pre><hr>";