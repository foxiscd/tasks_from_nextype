<?php
//Task 1.3
echo 'Task 1.3:<br>';

$arrays = require __DIR__ . '/arr1_3.php';

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

echo "<pre>";
print_r($arraySortDesc);
echo "</pre>";
