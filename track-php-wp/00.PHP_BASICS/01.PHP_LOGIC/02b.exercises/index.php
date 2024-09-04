<?php
/*
Let's exercise !

1. Let's write function that throws as many dice we want with as many faces we want.

Write a function that takes two parameters faces and times
The result should be : die 1 : result, die 2 : result, etc. as many time you determined with the param times.
For example, if you call the function through_dice(6, 8), you would have printed something like this :

die 1: 6
die 2: 3
die 3: 2
die 4: 6
die 5: 1
die 6: 1
die 7: 3
die 8: 4
*/

function through_dice($faces, $times) {
    for($i = 1; $i <= $times; $i++) {
        echo "die $i : ".random_int(1, $faces)."<br>";
    }
}

echo through_dice(6,8);
echo "<br>";

/*
2.

Let's write a function that takes as parameter a string and the amount of times we want to repeat it. Then, print the result.

Example:

repeat("$", 5);
// expected result : "$$$$$"
Remember to test if the number is actually a number
*/

function repeat($string, $amount) {

    if(is_numeric($amount)) {
        echo $amount." est un nombre > ";
        for($i = 1 ; $i <= $amount ; $i++) {
            echo $string;
        }
    } else {
        echo $amount." n'est pas un nombre";
    }    
}

repeat("$", '10');
echo "<br>";
repeat("$", 'a');
echo "<br><br>";

/*
3.

Let's write a function that takes a firstName and a lastName as parameters and presents gives the full name with the lastName being an inital.

Example :

greet("Marlon", "Brandon");

// Expected result "This is Marlon. B"
*/

function greet($firstname, $lastname) {
    echo "This is " . $firstname . ". " . $lastname[0];
}
greet("Marlon", "Brandon");
echo "<br><br>";

/*
4.

Let's write a function to know if, depending on the weather, I should use a short or not.

Call it is_short_weather and it should return true if the temperature is above or equal to 24 degrees and false if it's under.

Examples :

is_short_weather(13); // false
is_short_weather(27); // true
is_short_weather(-7); // false
*/

function is_short_weather($temperature) {
    if($temperature <= 24) {
        echo $temperature . " false <br>";
    } else {
        echo $temperature . " true <br>";
    }
}

is_short_weather(13); // false
is_short_weather(27); // true
is_short_weather(-7); // false
echo "<br>";

/*
5.

Please write a function called last_element which accepts a single array argument. The function should return the last element of the array (without removing the element). If the array is empty, the function should return null.

Example :

last_element([3, 5, 7]); //7
last_element([1]); //1
last_element([]); //null
*/

function last_element($array) {
    if($array === []) {
        echo "null";
    } else {
        print_r(end($array));
    }
    echo "<br>";
}

last_element([3, 5, 7]); //7
last_element([1]); //1
last_element([]); //null

echo "<br>";

/*
6.

Define a function called capitalize that accepts a string argument and returns a new string with the first letter capitalized (but the rest of the string unchanged). For example:

capitalize("eggplant"); // "Eggplant"
capitalize("pamplemousse"); // "Pamplemousse"
capitalize("squid"); //"Squid"
*/

function capitalize($string) {
    echo ucfirst($string)."<br>";
}


capitalize("eggplant"); // "Eggplant"
capitalize("pamplemousse"); // "Pamplemousse"
capitalize("squid"); //"Squid"

echo "<br>";


/*
7.

Write a function called sum_array which accepts a single argument: an array of numbers. It should return the sum of all the numbers in the array.

Example :

sum_array([1, 2, 3]); // 6
sum_array([2, 2, 2, 2]); // 8
sum_array([50, 50, 1]); // 101
*/

function sum_array($array) {
    echo array_sum($array)."<br>";
}

sum_array([1, 2, 3]); // 6
sum_array([2, 2, 2, 2]); // 8
sum_array([50, 50, 1]); // 101

echo "<br>";


/*
8.

Write a function called return_day.

This function takes in one parameter (a number from 1-7) and returns the day of the week (1 is Monday, 2 is Tuesday, etc.)

If the number is less than 1 or greater than 7, the function should return null.

We will use Monday as the first day.

Example :

return_day(1); // "Monday"
return_day(7); // "Sunday"
return_day(4); // "Thursday"
return_day(0); // null
*/

function return_day($day) {
    switch ($day) {
        case 1:
            echo "Monday <br>";
            break;
        case 2:
            echo "Tuesday <br>";
            break;
        case 3:
            echo "Wednesday <br>";
            break;
        case 4:
            echo "Thursday <br>";
            break;
        case 5:
            echo "Friday <br>";
            break;
        case 6:
            echo "Saturday <br>";
            break;
        case 7:
            echo "Sunday <br>";
            break;
    }

    if($day < 1 || $day > 7) {
        echo "null";
    }
}

return_day(1); // "Monday"
return_day(7); // "Sunday"
return_day(4); // "Thursday"
return_day(0); // null


?>