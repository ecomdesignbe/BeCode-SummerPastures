<?php
/*
1.

Given this associative array, output what is demanded :

$cities_by_country = [
    "Brussels" => "Belgium",
    "Liège" => "Belgium",
    "Paris" => "France",
    "Charleroi" => "Belgium",
    "Rome" => "Italy",
    "Nice" => "France",
    "Rio de Janeiro" => "Brazil",
    "Antwerp" => "Belgium",

]
Output a list (ul > li) of all the cities located in Belgium from this array.

Use a combination of loop and conditional.

For that, go learn first how to imbricate PHP with HTML
Then, go find what the directives endforeach and endif do.
*/

$cities_by_country = [
    "Brussels" => "Belgium",
    "Liège" => "Belgium",
    "Paris" => "France",
    "Charleroi" => "Belgium",
    "Rome" => "Italy",
    "Nice" => "France",
    "Rio de Janeiro" => "Brazil",
    "Antwerp" => "Belgium",

];

echo "<ul>";
foreach ($cities_by_country as $key => $value) {
    if($value === "Belgium") {
        echo "<li>$key";
    };
};

echo "</ul>";
?>