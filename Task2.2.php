<?php
//Task 2.2
echo 'Task 2.2:<br>';

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

echo '<pre>';
var_dump(getUrl($url));