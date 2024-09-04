<?php 
/*
1.

Let's say a visitor entered his bank account on our website : N957324

We know (in this example) that a bank account should be 7 digits.

Print how many digits this account number contains.
Let's say the first letter means "N" for "national" and "I" for international.

Print the first letter of the bank account. In this format : The first letter of the bank account is N (using the variable)
Now let's say the first two letters means which country the bank account is from. BE97684531265

Print from which country this bank account is in this format : This bank account is from BE (using the variable)
Let's say all bank accounts from the website have an underscore _ after the BE and we need to get rid of it in order to properly process it in our program.

From this string :
"   BE_954364     "
(pay attention to the empty spaces before and after) print : The account number is BE954364
*/

$bank_account = "N957324";

echo 'Bank account is '. $bank_account . ' and this account contains ' . strlen($bank_account) . ' digits';
echo '<br>';
echo 'The first letter of the bank account is ' . substr($bank_account, 0,1) ;

echo '<br><br>';

$bank_account = "BE97684531265";
echo 'Bank account is '. $bank_account . ' and the first two letter of the bank account is ' . substr($bank_account, 0,2) ;

echo '<br><br>';

$bank_account = "   BE_954364     ";
echo 'Bank account is '. str_replace("_", "", $bank_account);
echo '<br><br>';


/*
2.

I've provided you with a word variable, set to skateboard. Your goal is to use string functions on $word, so that you end up with the string "beard".

Use a string method to extract the "board" part of "skateboard"

Replace the "o" in board with an "e"

Save the result in a variable called facial_hair and then print it.

// DON'T TOUCH THIS LINE! (please)
$word = "skateboard"; //Don't change this line!

// YOUR CODE BELOW THIS LINE:
*/

// DON'T TOUCH THIS LINE! (please)
$word = "skateboard"; //Don't change this line!

// YOUR CODE BELOW THIS LINE:
$word = str_replace("skate", "", $word);
$facial_hair = str_replace("o","e", $word);
echo $facial_hair
?>