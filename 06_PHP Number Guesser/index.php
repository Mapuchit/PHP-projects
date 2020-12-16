<?php

// variables to track the players guesses and stats 

// how many rounds of the game have been played
$play_count = 0;
// how many times they guess correctly
$correct_guesses = 0;
// how many of their guesses were higher than the actual number
$guess_high = 0;
// how many of their guessed were lower than the actual number.
$guess_low = 0;


// explain to the player how the game works
echo "I'm going to think of numbers between 1 and 10 (inclusive). Do you think you can guess correctly?\n";

// the actual gameplay will take place inside a function

function guessNumber() {

  // declare all variables as global so that we can access them inside the function
  global $guess_high, $guess_low, $correct_guesses, $play_count;

  // increment the $play_count variable
  $play_count++;

  // generate the random number for this round
  $rand_num = rand(1, 10);

  // prompt the player for their guess
  echo "\nMake your guess...\n";
  $guess = readline(">> ");
  // convert the input from string to number
  $guess = intval($guess);

  // check if guess is valid
  while ($guess < 1 || $guess > 10 || gettype($guess) !== "integer") {
    echo "\nWe need a whole number greater than 1 and less than 11. Please guess again:\n";
    $guess = intval(readline(">> "));
  }

  // print info to player

  // let them know what round number they’re on, what the random number was and what they guessed
  echo "Round: $play_count\nMy Number: $rand_num\nYour guess: $guess";

  // update the score

  // adjust the global variables by comparing their guess to the random number

  if ($guess === $rand_num) {
    $correct_guesses++;
  } 
  if ($guess > $rand_num) {
    $guess_high++;
  } 
  if ($guess < $rand_num) {
    $guess_low++;
  }

};


// invoke the function as many times as the number of rounds we want
for ($x = 0; $x <= 9; $x++) {
    guessNumber();
}


// calculate the percentage of guesses the player got right
$percent_correct = round(($correct_guesses / $play_count) * 100);

// let the player know what percent of the time they guessed correctly
echo "\nAfter $play_count rounds, here are some facts about your guessing:\nYou guessed the number correctly $percent_correct% of the time.\n";

// analyse the players guessing
if ($guess_high > $guess_low) {
  echo "When you guessed wrong, you tended to guess high.";
} elseif ($guess_high < $guess_low) {
  echo "When you guessed wrong, you tended to guess low.";
} else {
  echo "Your wrong guesses were spread evenly between high and low.";
}
