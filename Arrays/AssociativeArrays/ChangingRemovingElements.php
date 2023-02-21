<?php
namespace Codecademy;

$my_car = [
    "oil" => "black and clumpy",
    "brakes" => "new",
    "tires" => "old with worn treads",
    "filth" => "bird droppings",
    "wiper fluid" => "full",
    "headlights" => "bright"
];
print_r($my_car);

// change value
$my_car["oil"] = "new and premium";
$my_car["tires"] = "new with deep treads";

unset($my_car["filth"]); // remove the value using key

print_r($my_car);





?>