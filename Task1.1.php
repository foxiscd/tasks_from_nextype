<?php
//Task 1.1
echo 'Task 1.1:<br>';
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

echo(convertFullName($string) . '<hr>');