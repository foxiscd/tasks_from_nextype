<?php
//Tasl 2.1
echo 'Task 2.1:<br>';

include_once(__DIR__ . "/classes/autoload.php");

echo CBase::getParam('message') . '<br>';
echo CBase::getParam('author');