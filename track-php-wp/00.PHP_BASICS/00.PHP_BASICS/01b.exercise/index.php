<?php

/*

Let's do a little exercise :

1

Given the existing code at the end, can you write some code so that their values are switched around?

$a = "3"; $b = "8";

At the end :

The variable $a should hold the value "8".

And the variable $b should hold the value "3".

When the code is run, it should output on the browser:

a is 8
b is 3
Copy the bellow code into your php file and refresh it in the browser.

Do NOT change any of the existing code.

You are NOT allowed to type any numbers.

Copy this code :

This is the occasion to understand two concepts on PHP :

Concatenation is done with a .
If you want to break a line on what is shown, you will have to echo an html tag <br/>. Do you get why ? You will be "printing" to the HTML the br tag, that will be interpreted by your browser.

*/


$a = "3";
$b = "8";

/***********Do not change the code above 👆*******/
//Write your code here :

echo "a is ".' '.$b.'<br>';
echo "b is ".' '.$a.'<br>';

/***********Do not change the code below 👇*******/

echo "a is " . $a;
echo "<br/>";
echo "b is " . $b;

?>