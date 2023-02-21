<?php
namespace Codecademy;

$giraffe_foods = ["dip" => "guacamole", "chips" => "corn", "entree" => "grilled chicken"];

$impala_foods = ["dessert" => "cookies", "vegetable" => "asparagus", "side" => "mashed potatoes"];

$rat_foods = ["dip" => "mashed earth worms", "entree" => "trash pizza", "dessert" => "sugar cubes", "drink" => "lemon water"];

// (+) operator takes two array operands and returns a new array with
//  any unique keys from the second array appended to the first array.
$potluck = $giraffe_foods + $impala_foods;
print_r($potluck);


$potluck = $giraffe_foods + $impala_foods+$rat_foods;
print_r($potluck);

?>