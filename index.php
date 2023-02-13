<?php
require 'vendor/autoload.php';

use Cousin\Composer\test;

$array = [
    1,
    new Test(),
    "HelloWorld",
];

dump($array);

echo "<pre>";
var_dump([
    1,
    new Test(),
    "HelloWorld",
]);
echo "</pre>";

echo "balek.com";