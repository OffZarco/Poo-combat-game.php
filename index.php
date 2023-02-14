<?php
require 'vendor/autoload.php';

use Cousin\Composer\test;

/*$array = [
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
echo "</pre>";*/

require "Personnage.php";

$kingArthur = new Personnage("kingArthur");
$kingArthur->regenerer(10);
$kingArthur->nom = "Roi Arthur";

$minion = new BadPerso("Minion");


$kingArthur->attaque($minion);
if($minion->mort()){
    echo ("Le Minion est KO!");
} else {
    echo ("Le Minion a survécu avec . $minion->vieBad");
}


$minion->attaque($kingArthur);
if($kingArthur->mort()){
    echo ("Le Roi Arthur est KO!");
} else {
    echo ("Le Roi Arthur a survécu avec . $kingArthur->vie");
}

var_dump($kingArthur->mort());
//var_dump($kingArthur);

//var_dump($minion);