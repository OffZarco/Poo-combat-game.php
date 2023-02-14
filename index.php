<?php
require 'vendor/autoload.php';

use Cousin\Composer\Personnage;

$kingArthur = new Personnage("kingArthur", 200, 15, 20, true);
$kingArthur->regenerer();
dump($kingArthur);

$minion = new Personnage("Minion", 10, 10, 0);
dump($minion);

$lieutenant = new Personnage("Lieutenant", 30, 30, 0);
dump($lieutenant);

$chef = new Personnage("chef", 100, 100, 0);
dump($chef);

$kingArthur->attaque($minion);
$minion->attaque($kingArthur);
dump($kingArthur->mort(), $minion->mort());

$kingArthur->attaque($lieutenant);
$lieutenant->attaque($kingArthur);
dump($kingArthur->mort(), $lieutenant->mort());

$kingArthur->attaque($chef);
$chef->attaque($kingArthur);
dump($kingArthur->mort(), $chef->mort());

$kingArthur->attaque($minion);
$minion->attaque($kingArthur);
dump($kingArthur->mort(), $minion->mort());

$kingArthur->attaque($lieutenant);
$lieutenant->attaque($kingArthur);
dump($kingArthur->mort(), $lieutenant->mort());


$kingArthur->attaque($chef);
$chef->attaque($kingArthur);
dump($kingArthur->mort(), $chef->mort());


// if($minion->mort()){
//     echo ("Le Minion est KO!");
// } else {
//     echo ("Le Minion a survécu avec . $minion->vieBad");
// }



// if($kingArthur->mort()){
//     echo ("Le Roi Arthur est KO!");
// } else {
//     echo ("Le Roi Arthur a survécu avec . $kingArthur->vie");
// }

//dump($kingArthur->mort());
//var_dump($kingArthur);

//var_dump($minion);