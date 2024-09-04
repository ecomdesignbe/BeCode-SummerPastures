<?php
/*
Exercises !
1.
In the following array, get rid of Bellatrix and add Draco instead. Print it out to the page.
*/
$leaderboard = ["Harry", "Lua", "Hermione", "Bellatrix"]; //DON'T TOUCH THIS LINE!

// YOUR CODE BELOW HERE:


print_r($leaderboard);
echo "<br>";
array_pop($leaderboard);
print_r($leaderboard);
echo "<br>";
array_push($leaderboard, "Draco");
print_r($leaderboard);
echo "<br><br>";


/*
2. Create an array that should look like suche : ["one","two","three"] and then print to the page :

This is the final array:
Array ( [0] => one [1] => two [2] => three )
In order to do that, only do manipulations from the folowing array :
*/
$initialArray = [
    null,
    true,
    ["Apple", "two", null],
    false,
    ["three", "BeCode"],
    4,
    "I'm a big bad wolf",
    ["one"],
];

print_r($initialArray);
echo "<br>";

$finalArray = [
    $initialArray[7][0], 
    $initialArray[2][1],
    $initialArray[4][0] 
];

foreach ($finalArray as $key => $value) {
    echo " [$key] => $value ";
};

echo "<br>";

print_r($finalArray);

echo "<br><br>";


/*
3. I've provided you with an array called $planets. Unfortunately, I'm an idiot who doesn't know much about our solar system and I made some mistakes. Please help me fix the planets array!

Remove the first element, The Moon, from the planets array. The moon is not a planet!

Add in Saturn at the very end of the planets array

Add Mercury as the first element in the planets array.

At the end of your hard work, planets should look like this: ["Mercury", "Venus", "Earth", "Mars", "Jupiter", "Saturn"]

$planets = array("The Moon", "Venus", "Earth", "Mars", "Jupiter") // Do not touch this !

// YOUR CODE GOES BELOW THIS LINE:
*/
$planets = array("The Moon", "Venus", "Earth", "Mars", "Jupiter"); // Do not touch this !

// YOUR CODE GOES BELOW THIS LINE:

print_r($planets);

array_shift($planets);
array_unshift($planets, "Mercury");
array_push($planets, "Saturn");

echo "<br>";

print_r($planets);

?>